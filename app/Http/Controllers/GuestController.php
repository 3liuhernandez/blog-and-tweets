<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        //dd('GuestController');
        $entries = Entry::with('user')
            ->orderByDesc('created_at')
            ->orderByDesc('user_id')
            ->paginate(10);
        return view('welcome', compact('entries'));
    }

    public function show(Entry $entryBySlug)
    {
    	//dd($entry->id);
    	return view('entries.show', [
    	    'entry'=> $entryBySlug
        ]);
    }
}
