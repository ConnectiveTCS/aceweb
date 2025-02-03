<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    // Store a new contact form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'service'      => 'required|string|max:255',
            'message'      => 'required|string',
        ]);

        $contactSubmission = ContactSubmission::create($validated);

        return response()->json($contactSubmission, 201);
    }
}
