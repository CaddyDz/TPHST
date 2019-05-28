<?php

namespace TPHST\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(SendContactEmailRequest $request)
    {
        try {
            Mail::to('contact@aradick.com')->send(new Contact($request));
        } catch (\Exception $ex) {
            logger()->error($ex->getMessage());
            return back()->withErrors(['status' => 'failed', 'message' => 'Could not send email, verify your internet connection'], 'Contact Error');
        }
        return back()->with(['status' => 'success', 'message' => 'We\'ll get back to you shortly'], 'Contact Send');
    }
}
