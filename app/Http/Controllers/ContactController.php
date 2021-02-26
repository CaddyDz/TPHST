<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Exceptions\ContactException;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param  App\Http\Requests\ContactRequest  $request
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
