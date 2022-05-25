<?php

namespace App\Http\Controllers;
use App\Models\TestModel;
use Illuminate\Http\Request;
class SiteController extends Controller
{
    public function info_page(){
        return view('info_page');
    }
    public function send_info(){
        $name_user = request('name');
        $email = request('email');
        $text = request('text');
        return view('get_form',['name'=>$name_user, 'email'=> $email, 'message'=>$text]);
    }
    public function test_file($name){
        $name_project = new TestModel($name);
        return view('lab5_test',['obj'=>$name_project]);
    }
}
