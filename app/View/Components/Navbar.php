<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // mengirimkan data array untuk navbar blade components
        $navbar = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact',
            'Profile' => '/profile',
            'Tasks' => '/tasks',
        ];
        // mengubah mindset untuk menggunakan komponen, bukan include
        return view('layouts.navbar', compact('navbar'));
    }
}
