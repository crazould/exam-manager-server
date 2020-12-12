<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScheduleHeader;

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

        $scheduleHeader->startTime = $request->startTime;
        $scheduleHeader->endTime = $request->endTime;
        $scheduleHeader->testName = $request->testName;
        $scheduleHeader->save();

        return $scheduleHeader;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $scheduleHeader = ScheduleHeader::find($id);

        $scheduleHeader->testName = $request->testName;
        $scheduleHeader->startTime = $request->startTime;
        $scheduleHeader->endTime = $request->endTime;

        $scheduleHeader->save();

        return  $scheduleHeader;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = ScheduleHeader::find($id);
        $schedule->delete();
    }
}
