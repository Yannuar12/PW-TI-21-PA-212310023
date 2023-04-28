<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310019;
        $students[] = array("npm"=>212310030, "name"=>"Daphne Holy", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310034, "name"=>"Raden Rayyan Pratama Rakhmadie", "gender"=>"M", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310019, "name"=>"Muhammad Rafi Zuhair Artadinata", "gender"=>"M", "alamat"=>"Bogor");
        $data['students'] = $students;
        return view('LaporPak.main')->with("data", $data);
    }

    public function page()
    {
        return view('LaporPak.lapor');
    }

    public function done()
    {
        return view('LaporPak.success');
    }
}