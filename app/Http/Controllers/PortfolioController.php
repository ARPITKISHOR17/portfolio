<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($validated);
        
        return redirect()->back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
