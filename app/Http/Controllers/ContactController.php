<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    //
    public function add(Request $request)
    {

        $contact=contact();
        $contact->name=$request->get('name');
        $contact->phone=$request->get('phone');

        $contact->save();

        return '添加成功！';
    }
    public function del()
    {

    }
    public function updt()
    {

    }
    public function read()
    {

    }
}
