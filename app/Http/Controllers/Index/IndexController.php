<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	protected $index;

	public function __construct()
	{
	}

    public function index()
    {
    	return view('index',[]);
    }
}
