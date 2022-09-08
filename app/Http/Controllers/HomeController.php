<?php

namespace App\Http\Controllers;
use App\Models\Admin\DescriptionModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $description = DescriptionModel::all();
        return view('userview.index', compact('description'));

    }
}
