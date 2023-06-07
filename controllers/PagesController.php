<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->select_all('users');
        return view('pages/home', [
            'users'=> $users
        ]);
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}