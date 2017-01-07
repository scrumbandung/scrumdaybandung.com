<?php

namespace App\Http\Controllers;

use App\Mail\Contact;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contact(Request $request){
    	
    	$this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $req = $request->all();
      	
        Mail::to($req['email'], $req['fullname'])->send(new Contact($req));

    	return redirect('/contact/en')->with('status', trans('contact.thanks.message'));
    }
}
