<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFormController extends Controller
{

    /*
        * GET /books
        */
    public function index()
    {
        return view('myform.index');
    }


    /**
     * GET /books/create
     * Display the form to add a new book
     */
    public function create(Request $request)
    {
        return view('myform.create')->
        with(['email' =>$request->session()->get('email', ''),
            'url'=>$request->session()->get('url', ''),
            'count'=>$request->session()->get('count', ''),
            'comment'=>$request->session()->get('comment', ''),
            'duplicate'=>$request->session()->get('duplicate', '')
        ]);
    }


    /**
     * POST /
     * Process the form for adding a new book
     */
    public function store(Request $request)
    {
        # Validate the request data
        $request->validate(
            [
                'email' => 'required|email',
                'url' => 'required|url',
                'comment'=>'required',

            ]
        );

        $count=substr_count($request->get('comment', ''), $request->get('email', false));

        if ($request->has('duplicate'))
            $count=$count+2;


        return redirect('/myform/create')->
        with(['email' => $request->get('email', false),
            'url'=>$request->get('url', false),
            'comment'=>$request->get('comment', ''),
            'duplicate'=>$request->get('duplicate', ''),
            'count' => $count,
        ]);
    }
}