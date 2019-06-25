<?php

namespace TPHST\Http\Controllers;

use TPHST\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use TPHST\Exceptions\ContactException;
use TPHST\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  TPHST\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function send(ContactRequest $request)
    {
        try {
            Mail::to('contact@sarltphst.com')->send(new ContactMail($request->validated()));
        } catch (ContactException $exception) {
            logger()->error($exception->getMessage());
            return response()->json([
                'status' => 'error',
                'Message' => 'Could not send email',
            ], 500);
        }
        return response('success');
    }
}
