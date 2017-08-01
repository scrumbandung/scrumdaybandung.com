<?php

namespace App\Http\Controllers;

use App\Mail\CallForPresent;

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

    	return redirect('/en/contact')->with('status', trans('contact.thanks.message'));
    }

    public function submit_presentation(Request $request){
        
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'linkedin' => 'required',
            'twitter' => 'required',
            'about' => 'required|max:140',
            'talk' => 'required',
            'track' => 'required',
            'what' => 'required',
            'why' => 'required',
            'change' => 'required',
        ]);

        $req = $request->all();
        
        Mail::to($req['email'], $req['fullname'])->send(new CallForPresent($req));

        return redirect('/en/call-for-presentation')->with('status', trans('contact.cfp.thanks.message'));
    }
}
