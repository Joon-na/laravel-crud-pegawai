<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

 
 
class PegawaiController extends Controller
{
    public function index()
    {
     // mengambil data dari table pegawai
     $pegawai = DB::table('pegawai')->get();
 
     // mengirim data pegawai ke view index
     return view('index',['pegawai' => $pegawai]);
 
    }
}