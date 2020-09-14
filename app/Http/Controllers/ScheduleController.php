<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ScheduleDetail;
use App\ScheduleHeader;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = DB::table('schedule_headers')
                    ->join('test_headers', 'schedule_headers.test_id', '=', 'test_headers.id')
                    ->select('*')
                    ->get();

        return $schedule;
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
        $scheduleHeader = new ScheduleHeader();
        
        $scheduleHeader->start_time = $request->startTime;
        $scheduleHeader->end_time = $request->endTime;
        $scheduleHeader->test_id = $request->test['id'];
        $scheduleHeader->save();

        $totalParticipants = $request->totalParticipants;

        for ($i = 0; $i < $totalParticipants; $i++){
            
            $scheduleDetail = new ScheduleDetail();
            $scheduleDetail->schedule_id = $scheduleHeader->id;
            $scheduleDetail->user_id = $request->participants[$i]['id'];
            $scheduleDetail->answer_status = 'not done';
            $scheduleDetail->save();

        }

        return $scheduleHeader->id;

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
