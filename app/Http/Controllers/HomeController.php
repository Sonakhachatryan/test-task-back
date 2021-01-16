<?php
namespace App\Http\Controllers;


class HomeController extends Controller
{

    /**
     * Show home page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Show second page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSecondPage()
    {
        return view('pages.second');
    }
}
