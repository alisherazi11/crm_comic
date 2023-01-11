<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $contacts=Contact::all();
        return view('staff.search',compact('contacts'));
    }
}
