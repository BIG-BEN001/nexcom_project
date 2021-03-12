<?php

namespace App\Http\Controllers;

use App\Mail\CallBackEmail;
use App\Mail\ContactEmail;
use App\Mail\GetInTouchMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function callBack(Request $request)
    {
        $this->validate($request, [
            'g-recaptcha-response' => 'required|captcha',
        ]);
//        dd($request);
        $data = [
            'fname' => $request->fname,
            'sname' => $request->sname,
            'tel' => $request->tel,
            'internet' => $request->internet,
        ];
//        dd($data);

        //Mail::to("sales@directcore.com")->send(new CallBackEmail($data));

        return back()->with('success', 'Thanks for contacting us');

    }
    public function sendCont(Request $request)
    {
//        dd($request);
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
        ];

        //Mail::to("sales@directcore.com")->send(new ContactEmail($data));

        return back()->with('success', 'Thanks for contacting us');
    }
    public function getInTouch(Request $request)
    {
//        dd($request);
        $data = [
            'email' => $request->email,
            'name' => $request->first_name .' '. $request->last_name,
            'tel' => $request->tel,
            'region' => $request->region,
            'apartment' => $request->apartment,
            'road' => $request->road,
        ];

        //Mail::to("sales@directcore.com")->send(new GetInTouchMail($data));

        return back()->with('success', 'Thanks for contacting us');
    }
}
