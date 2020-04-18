<?php

namespace App\Http\Controllers;

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

    public function privacy()
    {
        return view('privacy');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);
        $email = request('email');
        $body = request('body');


        Mail::raw($body, function ($message) {
            $message->to('matthew@cyberrival.com')
                ->subject('Hello Subject')->sender('contact@cyberrival.com');
        });

        return redirect('/contact')
            ->with('message', 'Email Sent!');
    }
}
