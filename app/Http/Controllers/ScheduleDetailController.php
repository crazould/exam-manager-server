<?php

namespace App\Http\Controllers;

use App\ScheduleDetail;
use Illuminate\Http\Request;

class ScheduleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return ScheduleDetail::where('schedule_id', $id)->get();

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
        // $totalParticipant = count($request->participant);
        $request = session()->get('request');
        $scheduleDetail = new ScheduleDetail();

        $scheduleDetail->schedule_id = $request->schedule_id;
        $scheduleDetail->user_id = $request->participant[1]['id'];
        $scheduleDetail->save();

        return $scheduleDetail;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScheduleDetail  $scheduleDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleDetail $scheduleDetail)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScheduleDetail  $scheduleDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleDetail $scheduleDetail)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScheduleDetail  $scheduleDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduleDetail $scheduleDetail)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScheduleDetail  $scheduleDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduleDetail $scheduleDetail)
    {
        
    }
}
