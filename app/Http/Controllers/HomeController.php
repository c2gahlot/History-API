<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    /**
     * @var Phone
     */
    private $phone;

    /**
     * Create a new controller instance.
     * @param Phone $phone
     */
    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function review(Request $request)
    {
        if($request->query() != []){
            if(array_key_exists('name', $request->query())){
                $name  = $request->query('name');
                $phone = $this->phone->where('name', $name)->first();
                if($phone != null){
                    return view('review', compact('phone'));
                    // return View::make('review')->with('phone', $phone);
                }
            }
        }
        return abort(404);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new_method()
    {
        return view('new');
    }
}
