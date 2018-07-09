<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
	{ 
		return "Customer List -Controller " ;
	}
	
    public function view($id)
	{ 
		return "Customer $id -Controller " ;
	}
	
}
