<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect ('/','/dosen');
Route::get('/dosen', function(){
    $dosens = ["Tesa Nur Padilah, M.Sc.","Asep Jamaludin, S.Si.,M.Kom.","Purwantoro, M.Kom.","Dadang Yusup, M.Kom.",
    "Intan Purnamasari, M.Kom.","M. Jajuli, M.Si.","Adhi Rizal, S.Pd., M.T.","Iqbal Maulana, M.Sc.","Aji Primajaya, S.Si., M.Kom.","Rini Mayasari, M.Kom."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Nur Fadhilah Az-haari","Putri Aulia Kusnadi","Nur Safitri","Mirza Muhamad","Muhamad Nurfathullah","Arfan Ryo","Muhamad Rizky",
    "Salwa Octa","Afivah Yuazijah","Muhamad Sidqih"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Pemrograman Berbasis Web","Algoritma dan Pemrograman","Interaksi Manusia dan Komputer",
    "Stuktur Data","Teori Bahasa dan Automata","Basis Data","Jaringan Komputer","Metode Numerik","Kecerdasan Buatan","Pengantar Teknologi dan Informasi"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');