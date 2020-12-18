<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAnswer;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserAnswer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userAnswers = collect([]);

        $totalAnswers = $request->totalAnswers;

        for ($i = 0; $i < $totalAnswers; $i++){
            $userAnswer = new UserAnswer();
            $userAnswer->questionID = $request->questionID[$i];
            $userAnswer->userID = $request->userID[$i];
            $userAnswer->answer = $request->answer[$i];
            $userAnswer->save();
            $userAnswers->push($userAnswer);
        }

        return $userAnswers->all();
    }

    public function storeFile(Request $request, $userID, $questionID)
    {
        $userAnswer = new UserAnswer();

        $userAnswer->questionID = $questionID;
        $userAnswer->userID = $userID;

        $answer_path = $request->file('file0')->store('fileAnswer', 'public');

        $userAnswer->answer = $answer_path;
        $userAnswer->save();

        return $userAnswer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserAnswer  $userAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(UserAnswer $userAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserAnswer  $userAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAnswer $userAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserAnswer  $userAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAnswer $userAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserAnswer  $userAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAnswer $userAnswer)
    {
        //
    }
}
