<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    		'descr'	=> $request->prddescript,
    		'prdpht'       	=> $fileName,
			'IDAdmin'		=> $request->prdus,
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
        $userString = strval($userus->IDusr);

        if (!$userus || $user) {
            return redirect()->route('loginus');
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

            return view('Page.us.profile', compact('user', 'userString', 'userId', 'transactions','pdc', 'cus'));
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
}
