<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

if (!function_exists('gnrid')) {
    function generateid(){
        $hari = date('l');
        $tanggal = date('d');
        $bulan = date('M');
        $blnangka = date('m');
        $tahun = date('y');
        $jam = date('h');
        $minute = date('i');
        $detik = date('s');
        $haricut = substr($hari,0,1);
        $bulancut = substr($bulan,0,1);
        $hourcut = substr($jam,0,1);
        $minutecut = substr($minute,0,1);
        $detikcut = substr($detik,0,1);
        $kodejoin = "-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
        return $kodejoin;
    }
}
if (!function_exists('tanggal')) { 
    function tanggal(){ 
        return date('Y-m-d'); // Returns the date in YYYY-MM-DD format 
    } 
}

class userController extends Controller
{
    //admin
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $user = DB::table('admin')
            ->where('username', $credentials['username'])
            ->where('password', $credentials['password'])
            ->first();
        if ($user) {
            Auth::loginUsingId($user->IDAdmin);
            session(['user' => $user]);///////
            Auth::id($user->IDAdmin);
            return redirect('/profile');
        } else {
            return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
        }
    }
    public function showProfile(){
        $user = session('user');
        $userus = session('userus');
        $userString = strval($user->IDAdmin);

        if (!$user || $userus) {
            return redirect()->route('login');
        }else{
            $userId = Auth::id(); 
            $pdc = DB::table('katalog')
                //->where('idusr_kbt', $userString)
                ->paginate(3);
            $cus = DB::table('user')
                ->paginate(10);

            $transactions = DB::table('transaksi as t')
            ->join('katalog as p', DB::raw('t.produk COLLATE utf8mb4_unicode_ci'), '=', DB::raw('p.IDCar COLLATE utf8mb4_unicode_ci'))
            ->join('user as u', DB::raw('t.userID COLLATE utf8mb4_unicode_ci'), '=', DB::raw('u.IDusr COLLATE utf8mb4_unicode_ci'))
            ->select('p.name', 'p.prdpht', 't.total_harga', 'p.address', 'u.name as nama_user')
            //->where(DB::raw('u.idusr_kbt COLLATE utf8mb4_unicode_ci'), '=', $userString)
            ->paginate(2);

            $pdc = DB::table('katalog')->paginate(3);

            return view('Page.adm.profile', compact('user', 'userString', 'userId', 'transactions','pdc', 'cus'));
        }
    }
    //manage
    public function store(Request $request){
		$file = $request->file('prdpht');
		$fileName = uniqid().'.'. $file->getClientOriginalExtension();
		$data['prdpht'] = $file->storeAs('public/photo', $fileName);

		DB::table('katalog')->insert([
    		'IDCar'		=> $request->prdid,
    		'name'		=> $request->prdname,
    		'price'		=> $request->prdprice,
    		'descr'	    => $request->prddescript,
    		'prdpht'    => $fileName,
            'prdqty'    => 1,
			'IDAdmin'	=> $request->prdus,
    	]);
		return redirect('/profile')->with('msg', 'Data Stored Successfully');
	}
    public function up(Request $request,$IDCar){
    	DB::table('katalog')->where('IDCar', $IDCar)->update([
    		'name'      => $request->prdname,
    		'price'  => $request->prdprice,
    		'descr'     => $request->prddescript,
    	]);
    	return redirect('/profile')->with('succesMsg', 'Data Telah Diperbarui!');
    }
    public function del($id){
    	DB::table('katalog')->where('IDCar',$id)->delete();
    	return redirect('/profile')->with('succesMsg', 'Data berhasil dihapus!');
    }

    //user
    public function loginus(Request $request){
        $credentials = $request->only('username', 'password');
        $userus = DB::table('user')
            ->where('username', $credentials['username'])
            ->where('password', $credentials['password'])
            ->first();
        if ($userus) {
            Auth::loginUsingId($userus->IDusr);
            session(['userus' => $userus]);///////
            Auth::id($userus->IDusr);
            return redirect('/profileus');
        } else {
            return redirect('/loginus')->with('msg', 'Kesalahan username &/ Password!');
        }
    }
    public function storeus(Request $request){//regis
		DB::table('user')->insert([
    		'IDusr'	    	=> $request->usid,
    		'name'  		=> $request->name,
            'username'      => $request->usname,
    		'password'     	=> $request->uspass,
            'address'       => $request->address,
            'email'         => $request->usemail,
    	]);
		return redirect('/profileus')->with('successMsg', 'Regis Successfully');
	}
    public function showProfileus(){
        $userus = session('userus');
        $user = session('user');

        if (!$userus || $user || is_null($userus)) {
            return redirect()->route('loginus');
        }else{
            $userString = strval($userus->IDusr);
            $userId = Auth::id(); 

            $transactions = DB::table('transaksi as t')
            ->join('katalog as p', DB::raw('t.produk COLLATE utf8mb4_unicode_ci'), '=', DB::raw('p.IDCar COLLATE utf8mb4_unicode_ci'))
            ->join('user as u', DB::raw('t.userID COLLATE utf8mb4_unicode_ci'), '=', DB::raw('u.IDusr COLLATE utf8mb4_unicode_ci'))
            ->where('t.userID', $userString)
            ->select('t.IDTrans','p.name', 'p.prdpht', 't.total_harga',  'u.name as nama_user', 't.produk', 'p.descr', 't.address', 't.tanggal')
            ->get();

            $pdc = DB::table('katalog')->get();

            return view('Page.us.profile', compact('user', 'userString', 'userId', 'transactions','pdc'));
        }
    }
    public function indexhm(){
		$pdc = DB::table('katalog')->paginate(12);
		$user = session('userusr');
		$userString = 'false';
        if (!$user == false) {
            $userString = strval($user->IDusr);
        }
		return view('Page.index', [
			'pdc' => $pdc,
			'us' => $userString,
		]); 
    }
    public function show($id, $ide) {
        $userus = session('userus');
        $user = session('user');

        if (!$userus || $user || is_null($userus)) {
            return redirect()->route('loginus');
        }else{
            $content = DB::table('katalog')->where('IDCar', $id)->get();
            $pdcvarB = DB::table('katalog')->paginate(3);
            $user = session('userus');
            $userString = strval($userus->IDusr);
            return view('Page.us.buycart', compact('content', 'id', 'pdcvarB', 'userString'));
        }
	}
    public function storepay(Request $request){
		DB::table('transaksi')->insert([
    		'IDTrans'	    => 'Tr' . generateid(),
    		'tanggal'	    => tanggal(),
    		'total_harga'	=> $request->send,
    		'produk'        => $request->pdcid,
    		'address'       => $request->address,
			'userID'	    => $request->usid,
    	]);
		return redirect('/profileus')->with('msg', 'Data Stored Successfully');
	}
}
