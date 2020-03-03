<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tweet; //Need to pull in our model to use it.
use Auth; //Need to pull in Auth in order to use it.

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tweets = tweet::all();
        return view('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        if ($user) //Yay! you are logged in.
            return view('tweets.create');
        else //Uh oh, logged out! Redirect
            return redirect('/tweets');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
        //Assign and check user all at once.
    if ($user = Auth::user()) //proceed and store data if the user is logged in.
        {
        $validatedData = $request->validate(array(
            'message' => 'required|max:255',
            'author' => 'required|max:64'
        ));
        $tweet = tweet::create( $validatedData);

        return redirect('/tweets')->with('success', 'Tweet saved');
        }
    return redirect('/tweets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if($user = Auth::user()){
       $tweet = tweet::findOrFail($id);
       $tweet->delete();
       return view('/tweets.edit')compact('tweet');
        }
        return reditect('/tweets');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate(array(
            'message' => 'required|max:255',
            'author' => 'required|max:64'
        ));

        tweet::whereId($id)->update($validatedData);
        return redirect('/tweets')->with('success', 'Tweet Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
        //
        if($user = Auth::user()){
       $tweet = tweet::findOrFail($id);
       $tweet->delete();
       return redirect('/tweets')->with('success', 'Tweet deleted');
        }
        return reditect('/tweets')

    }
}