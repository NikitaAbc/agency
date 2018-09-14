<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.contact.index",[
            "contact" => Contact::first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view("admin.contact.edit",[
            "contact" => Contact::first(),
        ]);
    }

    public function update(Request $request)
    {
        Contact::first()->update($request->all());

        return redirect()->route("admin.contacts.index")->withSuccess("Успешно редактировали!");
    }



}
