<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function showTeams($id)
     {

        $teams = User::find($id)->teams->paginate(10);
        return view('player.teams', compact('teams'));
     }

    public function show($id)
    {
        $player = User::find($id);
        return view('player.show', compact('player'));
    }

    public function edit($id)
    {
        $player = Auth::user();
        return view('player.edit', compact('player'));
    }
}
