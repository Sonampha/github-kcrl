<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\sendMail;

class ContactController extends Controller
{

    public function index()
    {
        return View('pages.contact');
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::send(new sendMail());
        return redirect()->back()->with('flash_message','Thank you, Your message has been sent successfully.');
    }

}
