<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
    public function index(ContactFormRequest $request)
    {
        $contact = $request->all();
        return view('contacts.confirm',compact('contact'));    }

    public function index2()
    {
        return view('contacts.complete');
    }
}