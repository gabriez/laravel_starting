<?php

namespace App\Http\Controllers;

use App\Mail\SendingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request) {
        $message = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "lastname" => "required",
            "description" => "required|min:3"
        ]);

        Mail::to($request->get("email"))->queue(new SendingEmail($message));

        return back()->with('status', 'Recibimos tu mensaje');
    }
}
