<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

use App\Contact;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        
        $addContact = new Contact($request->all());
        $addContact->save();

        alert()->success('Se registro '.$request->email.' correcamente','REGISTRADO')->autoclose(5000);
        return redirect('/');
    }
}
