<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
	protected $portfolio;

	public function __construct()
	{
	}

    public function index()
    {
    	return view('portfolio',[]);
    }
}
