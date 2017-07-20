<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index()
     {
         return view("/admin/faq/index");
     }
}