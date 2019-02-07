<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function showTeams(User $user)
     {

        $teams = $user->teams->paginate(10);
        return view('player.teams', compact('teams'));
     }

    public function show(User $user)
    {
        $player = $user;
        return view('player.show', compact('player'));
    }

    public function edit(User $user)
    {
        $player = Auth::user();
        $locations = app('LocationsService')->allLocations();
        $feet = app('StrongFootService')->feet();
        $positions = app('PositionService')->allPositions();
        return view('player.edit', compact('player', 'locations', 'feet', 'positions'));
    }

    public function update(Request $request, User $player)
    {

        $this->validate($request, [
            'height' => 'nullable|numeric|max:220|min:120',
            'phone' => ['nullable', 'regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/'],
            'first_name' => 'max:20',
            'last_name' => 'max:30',
            'profileImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        // dd($player);

        foreach ($request->except(['_token', '_method', 'profileImg']) as $key => $value) {
            if ($value != null) {
                $player->$key = $value;
            }
        }

        app('ImageService')->storeUserImage($player, $request->file('profileImg'));

        $player->save();

        return redirect(route('player.show', $player->id));
    }

}
