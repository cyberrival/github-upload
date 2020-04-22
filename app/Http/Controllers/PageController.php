<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::all()->take(3);
        return view('welcome', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function admin()
    {
        return view('admin');
    }

    public function terms()
    {
        return view('terms');
    }



    public function send()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to('snelgarm@outlook.com')
            ->send(new Contact(request('subject'), request('email'), request('body'), request('name')));


        return redirect('/contact')
            ->with('message', 'Email Sent!');
    }
}
