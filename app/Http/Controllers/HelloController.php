<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller {

  public function index()
  {
    $data = [['name'=>'山田一号','mail'=>'yamada@1'],['name'=>'山田二号','mail'=>'yamada@2'],['name'=>'山田三号','mail'=>'yamada@3']];
    return view('hello.index', ['data'=>$data]);
  }

  public function post(Request $request)
  {
    return view('hello.index', ['msg'=>$request->msg]);
  }
}
