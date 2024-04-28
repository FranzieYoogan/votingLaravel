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

        $contestants =  DB::select('select * from astroPhysicist ');

        return view('welcome', ['contestants' => $contestants]);

    }

    public function getChemist() {

        $contestants =  DB::select('select * from chemist ');

        return view('chemist', ['contestants' => $contestants]);

    }

    public function getBiologist() {

        $contestants =  DB::select('select * from biologist ');

        return view('biologist', ['contestants' => $contestants]);

    }
    public function votedAstrophysicist(Request $request) {

        $contestantName = $request->input('contestantName') ;
        $astroPhysicist =  DB::select("select * from astroPhysicist where contestantId = '$contestantName' ");



            
        DB::update("update astroPhysicist set contestantVotes = contestantVotes + 1  where contestantId = '$contestantName' ");
        return view('voted', ['astroPhysicist' => $astroPhysicist]);
    

    }


    public function votedChemist(Request $request) {

        $contestantName = $request->input('contestantName') ;
        $chemist =  DB::select("select * from chemist where contestantId = '$contestantName' ");



            
        DB::update("update chemist set contestantVotes = contestantVotes + 1  where contestantId = '$contestantName' ");
        return view('voted', ['chemist' => $chemist]);
    

    }

    public function votedBiologist(Request $request) {

        $contestantName = $request->input('contestantName') ;
        $biologist =  DB::select("select * from biologist where contestantId = '$contestantName' ");



            
        DB::update("update biologist set contestantVotes = contestantVotes + 1  where contestantId = '$contestantName' ");
        return view('voted', ['biologist' => $biologist]);
    

    }

}
