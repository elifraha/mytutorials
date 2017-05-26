<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    public function listTutorials() 
    {
        $name  = 'nurat';
    $tutorials = [
        ['title' => 'How to kill rats', 'content' => 'Here is where you can register web routes for your application. These
 routes are loaded by the RouteServiceProvider within a group which
contains the "web" middleware group. Now create something great!', 'author' => 'Shio'],
        ['title' => 'How to kill Big Snakes', 'content' => 'Here is where you can register web routes for your application. These
 routes are loaded by the RouteServiceProvider within a group which
contains the "web" middleware group. Now create something great!', 'author' => 'Nurat']
    ];
    // $data = ['name' => $name, 'tutorials' => $tutorials];
    return view('tutorials.tutorials_list', compact('tutorials', 'name'));
    }
}
