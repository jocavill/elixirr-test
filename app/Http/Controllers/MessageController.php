<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('messages.index', [
            'messages' => Message::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.index', [
            'messages' => Message::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreMessage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessage $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }
}
