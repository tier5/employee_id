<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Nerd;
class NerdController extends Controller
{
    //
    public function index()
    {
        //
         $nerds = new Nerd;
         return $nerds->all();
    }
    public function show($id){
    	$nerds = new Nerd;
    	return $nerds->find($id);
    }
}
