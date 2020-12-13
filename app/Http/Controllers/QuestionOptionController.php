<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionOption;
use Illuminate\Http\Request;

class QuestionOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return QuestionOption::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $questionOptions = collect([]);

        $totalOptions = $request->totalOptions;

        for ($i = 0; $i < $totalOptions; $i++){

            $questionOption = new QuestionOption();
            $questionOption->questionID = $request->questionID;
            $questionOption->optionName = $request->questionOptions[$i];
            $questionOption->save();
            $questionOptions->push($questionOption);
        }

        return $questionOptions->all();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionOption $questionOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionOption $questionOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionOption $questionOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionOption $questionOption)
    {
        //
    }
}
