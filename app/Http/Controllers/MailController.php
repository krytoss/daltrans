<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\QueryMail;

class MailController extends Controller
{
    
	public function contact(Request $request) {

		$messages = [
			'required' => 'Pole :attribute je povinné.',
			'email' => 'E-mail musí byť správne vyplnený.',
		    'name.required' => 'Meno musí byť vyplnené.',
		    'tel.required' => 'Telefón musí byť vyplnený.',
		    'mail.required' => 'E-mail musí byť vyplnený.',
		    'msg.required' => 'Správa musí byť vyplnená.',
		];

		$this->validate($request, [
	        'name' => 'required',
	        'tel' => 'required',
	        'mail' => 'required|email',
	        'msg' => 'required'
	    ], $messages);

		$name = $request->name;
		$tel = $request->tel;
		$mail = $request->mail;
		$msg = $request->msg;

		Mail::to("kopcsanyiludovit@gmail.com")->send(new ContactMail($name, $tel, $mail, $msg));
		return redirect("/");
	}

	public function query(Request $request) {

		$messages = [
			'required' => 'Pole :attribute je povinné.',
			'email' => 'E-mail musí byť správne vyplnený.',
		    'from.required' => 'Lokalita z musí byť vyplnená.',
		    'to.required' => 'Lokalita do musí byť vyplnená.',
		    'tel.required' => 'Telefón musí byť vyplnený.',
		    'mail.required' => 'E-mail musí byť vyplnený.',
		    'cargo.required' => 'Náklad musí byť vyplnený.',
		    'type.required' => 'Musíte si vybrať typ prepravy.'
		];

		$this->validate($request, [
	        'from' => 'required',
	        'to' => 'required',
	        'tel' => 'required',
	        'mail' => 'required|email',
	        'cargo' => 'required',
	        'type' => 'required',
	    ], $messages);

		$from = $request->from;
		$to = $request->to;
		$tel = $request->tel;
		$mail = $request->mail;
		$cargo = $request->cargo;
		$type = $request->type;

		Mail::to("kopcsanyiludovit@gmail.com")->send(new QueryMail($cargo, $tel, $mail, $from, $to));
		return redirect("/");
	}

}
