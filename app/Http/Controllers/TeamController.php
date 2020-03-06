<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TeamController extends Controller
{
    //
    public function index()
    {
    	$teamAndUsers = array();

    	$teams = Team::all();

	    foreach( $teams as $team )
	    {
	    	$newSet = new \stdClass();
	    	$newSet->team = $team;
	    	$newSet->users = $team->users()->get();
	    	$teamAndUsers[] = $newSet;
	    }
	    return view('teams.index', compact('teamAndUsers'));
    }
}