<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Store a newly created file share.
     */
    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'file' => 'required|file|max:102400', // max 100MB
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'password' => 'nullable|string|min:4',
            'expiration' => 'required|string|in:1h,24h,7d,30d,custom',
        ]);

        // In a real application, the uploaded file would be processed here,
        // and stored in the database.
        
        return back()->with('success', 'File registered and uploaded successfully.');
    }
}
