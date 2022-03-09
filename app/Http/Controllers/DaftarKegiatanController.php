<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DaftarKegiatanController extends Controller
{
    public function index()
    {
        $myActivitys = Register::where(['status' => 'peserta'], ['user_id' => Auth::user()->id])->get();
        
        return view('kegiatan.siswa.index', compact('myActivitys'));
    }
}
