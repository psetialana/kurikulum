<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individu;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahIndividu = Individu::count();

        $dataIndividu = Individu::get();
        
        $balita = 0;

        foreach ($dataIndividu as $individu) {
            $umur = Carbon::parse($individu->tanggal_lahir)->age;
            if ($umur <= 5) {
                $balita = $balita + 1;
            }
        }

        return view('home', ['jumlah_individu' => $jumlahIndividu, 'balita' => $balita ]);
    }
}
