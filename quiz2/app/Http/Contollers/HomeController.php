<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
   $data = array();
   $data ['title'] = "Blade";
   $students[] = array ("no"=> 1,"npm"=>212310023 , "name"=>"Muhamad MYM", "gender"=>"Laki-Laki", "alamat"=> "Kp Kerakal",);
   $students[] = array ("no"=> 2,"npm"=>212310019 , "name"=>"M", "gender"=>"Laki-laki", "alamat"=> "JL Melati",);
   $students[] = array ("no"=> 3,"npm"=>212310011 , "name"=>"U", "gender"=>"Perempuan", "alamat"=> "JL Kamboja",);
   $students[] = array ("no"=> 4,"npm"=>212310022 , "name"=>"Z", "gender"=>"Perempuan", "alamat"=> "JL Bonsai",);
   $students[] = array ("no"=> 5,"npm"=>212310023 , "name"=>"X", "gender"=>"Laki-laki", "alamat"=> "JL Beringin",);
   $students[] = array ("no"=> 6,"npm"=>212310033 , "name"=>"I", "gender"=>"Laki-laki", "alamat"=> "JL Delima",);
  
   $data['students']= $students;
   return view('modules.home.home')->with("data",$data);
 }   
}