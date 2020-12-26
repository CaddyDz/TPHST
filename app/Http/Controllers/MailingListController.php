<?php

declare(strict_types=1);

namespace TPHST\Http\Controllers;

use Newsletter;
use Illuminate\Http\Request;

class MailingListController extends Controller
{
	public function subscribe(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email'
		]);
		if (!Newsletter::isSubscribed($request->email)) {
			Newsletter::subscribe($request->email);
		}
		return back();
	}
}
