<?php

namespace App\Http\Controllers;

use App\ScheduleHeader;
use Illuminate\Http\Request;

class ScheduleHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ScheduleHeader::all();
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
        $scheduleHeader = new ScheduleHeader();

        $scheduleHeader->test_id = $request->test_id;
        $scheduleHeader->start_time = $request->start_time;
        $scheduleHeader->end_time = $request->end_time;
        $scheduleHeader->save();

        return $scheduleHeader;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScheduleHeader  $scheduleHeader
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleHeader $scheduleHeader)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScheduleHeader  $scheduleHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleHeader $scheduleHeader)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScheduleHeader  $scheduleHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduleHeader $scheduleHeader)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScheduleHeader  $scheduleHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduleHeader $scheduleHeader)
    {
        //
    }
}
