<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama = "Rafli Pasya";
        $bio = "Saya mahasiswa UNSIKA Informatika";
        $hobby = ["Gaming","Gym","Nonton"];
        return view('biodata',['nama'=>$nama,'deskripsi'=>$bio,'hobby'=>$hobby]);
    }
}
