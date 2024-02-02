<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class HalamanController extends Controller
{
   

    public function pelanggan()
    {
        return view('pelanggan');
    }


    public function dashboard()
    {
       // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('administrator.dashboard', ['formattedDate' => $formattedDate]);
    }

    public function meja()
    {
        // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('administrator.meja', ['formattedDate' => $formattedDate]);
    }

    public function makanan()
    {
        // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('administrator.makanan', ['formattedDate' => $formattedDate]);
    }

    public function minuman()
    {
        // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('administrator.minuman', ['formattedDate' => $formattedDate]);
    }

    public function pesanan1()
    {
        // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('kasir.pesanan_kasir', ['formattedDate' => $formattedDate]);
    }

    public function laporan()
    {
       // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('laporan', ['formattedDate' => $formattedDate]);
    }

    public function pesanan2()
    {
        // return view('kasir.pesanan_kasir'.$row);

         // Set zona waktu ke "Asia/Jakarta"
         date_default_timezone_set('Asia/Jakarta');

         // Mendapatkan tanggal dan waktu saat ini sesuai dengan zona waktu Jakarta
         $now = Carbon::now();
 
         // Format tanggal sesuai dengan kebutuhan (contoh: Senin, 17 Januari 2024)
        $formattedDate = $now->format('l, d F Y');

        // Kirim variabel dengan tanggal yang diformat ke tampilan
        return View::make('waiter.pesanan_waiter', ['formattedDate' => $formattedDate]);
    }


    public function struk()
    {
        return view('struk_belanja');
    }

    // login
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication success
            return redirect('/pesanan2');
        } else {
            // Authentication failed
            return redirect('/login')->with('error', 'Email or password is incorrect.');
        }
    }

    public function createSample()
    {
        // Check if the user already exists
        if (!User::where('email', 'kasir@gmail.com')->exists()) {
            // Create the sample user
            User::create([
                'name' => 'Kasir',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('kasir'),
            ]);

            return "Sample user 'Kasir' created successfully!";
        } else {
            return "Sample user 'Kasir' already exists.";
        }
    }

    public function logout()
    {
        // Logout the authenticated user
        Auth::logout();

        return redirect('/login')->with('success', 'Logout successful.');
    }
}
