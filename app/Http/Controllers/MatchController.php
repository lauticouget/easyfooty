<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Match;
use App\Field;
use App\Team;
use App\Score;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;


class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::paginate(10);

        return view('match.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::All();
        $userTeams = Auth::user()->teams;
        $teams = Team::all();

        // DATES
        $today = Carbon::now();

        $lastDate = Carbon::now()->addMonth();
        $numberOfDays = $today->diffInDays($lastDate);
        $dates = [];


        for($i = 0; $i < $numberOfDays; $i++ ) {
            $dates[] = $today->addDay()->format('Y-m-d');
        };

        // HOURS
        $hourCero = $today->startOfDay();
        $hours = [];

        for($i = 0 ; $i<24 ; $i++ ){
            $hours[] = Carbon::now()->startOfDay()->addHours($i);
        }

        return view('match.create', compact('fields', 'dates', 'hours', 'teams', 'userTeams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'field' => 'required',
            'date' => 'required',
            'time' => ' required',
            'team1' => 'required',


        ]);

                 // DATETIME REFORMAT
        $date = $request->input('date')." ".$request->input('time');

                 // SCORES CREATION
        $score1 = Score::create([
            'team_id' => $request->input('team1'),
            ]);
        $score2 = Score::create([
            'team_id' => $request->input('team2'),
        ]);

                 // MATCH CREATION
        $match =  Match::create([
            'field_id' => $request->input('field'),
            'date' => $date,
            'team1_id' => $request->input('team1'),
            'team2_id' => $request->input('team2'),
            'score1_id' => $score1->id,
            'score2_id' => $score2->id,

        ]);

        return redirect(route('match.show', $match->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = Match::find($id);
        return view('match.show', compact('match'));
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
    }
}
