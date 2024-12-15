<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class userController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $user = DB::table('admin')
            ->where('username', $credentials['username'])
            ->where('password', $credentials['password'])
            ->first();
        if ($user) {
            Auth::loginUsingId($user->IDAdmin);
            session(['user' => $user]);
            Auth::id($user->IDAdmin);
            return redirect('/profile');
        } else {
            Log::info('User not found');
            return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
        }
    }
    public function showProfile(){
        $user = session('user');
        $userString = strval($user->IDAdmin);

        if (!$user) {
            return redirect()->route('login');
        }else{
            $userId = Auth::id(); 
            $transactions = DB::table('transaksi as t')
            ->join('katalog as p', DB::raw('t.produk COLLATE utf8mb4_unicode_ci'), '=', DB::raw('p.IDCar COLLATE utf8mb4_unicode_ci'))
            ->join('user as u', DB::raw('t.userID COLLATE utf8mb4_unicode_ci'), '=', DB::raw('u.IDusr COLLATE utf8mb4_unicode_ci'))
            ->select('p.name', 'p.prdpht', 't.total_harga', 'p.address', 'u.name as nama_user')
            //->where(DB::raw('u.idusr_kbt COLLATE utf8mb4_unicode_ci'), '=', $userString)
            ->paginate(2);

            $pdc = DB::table('katalog')->paginate(3);

            return view('Page.profile', compact('user', 'userString', 'userId', 'transactions','pdc'));
        }
    }

    //add car
    public function store(Request $request){
		$file = $request->file('prdpht');
		$fileName = uniqid().'.'. $file->getClientOriginalExtension();
		$data['prdpht'] = $file->storeAs('public/photo', $fileName);

		DB::table('product')->insert([
    		'idproduct'		=> $request->prdid,
    		'prdname'		=> $request->prdname,
    		'prdprice'		=> $request->prdprice,
    		'prddescript'	=> $request->prddescript,
    		'prdqty'     	=> $request->prdqty,
    		'prdpht'       	=> $fileName,
			'idusr_kbt'		=> $request->prdus,
    	]);
		return redirect('/profile')->with('msg', 'Data Stored Successfully');
	}
}
