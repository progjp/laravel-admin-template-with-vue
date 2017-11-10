<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Admin home page
     */
    public function index()
    {
    	return view('admin.index');
    }

    /**
     * Table page
     * Posts page
     */
    public function table()
    {
    	return view('admin.table');
    }

    /**
     * Form Page
     */
    public function form()
    {
        return view('admin.form');
    }

}
