<?php

namespace App\Http\Controllers;

use App\Mail\CallForPresent;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

use Storage;
    
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

    	return redirect()->route('contact', ['locale' => 'en'])->with('status', trans('contact.thanks.message'));
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
            'presentation' => 'required'        
        ]);

        $path = $request->file('presentation')->storePublicly('presentations');

        $req = $request->all();

        Mail::to($req['email'], $req['fullname'])->send(new CallForPresent($req, $path));

        return redirect()->route( 'call-for-presentation', ['locale' => 'en'] )->with('status', trans('contact.cfp.thanks.message'));
    }
}