<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function getContestant() {

        $contestants = DB::select('select * from astroPhysicist ');

        return view('welcome', ['contestants' => $contestants]);

    }

    public function voted(Request $request) {

        $contestantName = $request->input('contestantName');

        DB::update("update astroPhysicist set contestantVotes = contestantVotes + 1  where contestantName = '$contestantName' ");
        $contestants = DB::select('select * from astroPhysicist ');

        return view('voted', ['contestants' => $contestants]);

    }
}
