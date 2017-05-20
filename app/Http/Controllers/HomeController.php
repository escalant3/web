<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactConfirmation;
use Illuminate\Http\Request;
use Mail;
use Validator;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('web.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function faq()
    {
        return view('web.faq');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function terms()
    {
        return view('web.terms');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function policy()
    {
        return view('web.policy');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function devs()
    {
        return view('web.devs');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        return view('web.blog');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function blog_post()
    {
        return view('web.post');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name'    => 'required|max:20000',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required|max:20000',
        ]);

        if ($v->fails()) {
            flash('Error al enviar el formulario. <br><br>'.$v->messages()->first(), 'error');

            return redirect()->back()->withErrors($v);
        }

        Mail::to(config('mail.from.address'))->send(new Contact($request));
        Mail::to($request->get('email'))->send(new ContactConfirmation($request));
        flash('Mensaje enviado correctamente.<br><br>Has tenido que recibir un correo de confirmación.');

        return redirect()->back();
    }
}
