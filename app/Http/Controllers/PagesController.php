<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function register() {
        return view('pages.register');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'mail' => 'required|email',
            'straße' => 'required|regex:/[a-zA-Z \-]+ [0-9]+[a-zA-Z]*/',
            'plz' => 'required|regex:/[0-9]+/',
            'stadt' => 'required|regex:/[a-zA-Z0-9\' \-]+/',
            'land' => 'required|regex:/[a-zA-Z \.]+/',
            'geburtsdatum' => 'required|date'
         ]);

        // form input is valid
        return back()->with('success', 'Registrierung erfolgreich');
    }
}
