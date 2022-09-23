<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
	protected $portfolio;

	public function __construct()
	{
		$this->portfolio = new Portfolio;
	}

    public function index()
    {
    	return view('portfolio',[]);
    }
}
