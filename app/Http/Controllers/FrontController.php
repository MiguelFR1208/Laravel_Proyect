<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;

use Prueba\Http\Requests;

class FrontController extends Controller
{
  public function index(){
      return view('index');
 }
 public function contacto(){
      return view('contact');
 }
 public function reviews(){
      return view('reviews');
 }
 public function admin(){
        return view('admin.index');
   }
}
