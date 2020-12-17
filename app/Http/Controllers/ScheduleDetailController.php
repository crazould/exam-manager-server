<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\ScheduleDetail;
use Illuminate\Support\Facades\DB;

class ScheduleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ScheduleDetail::all();
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

        $scheduleDetails = collect([]);

        $totalParticipants = $request->totalParticipants;

        for ($i = 0; $i < $totalParticipants; $i++){
            $scheduleDetail = new ScheduleDetail();
            $scheduleDetail->scheduleID = $request->scheduleID;
            $scheduleDetail->userID = $request->participants[$i]['id'];
            $scheduleDetail->answerStatus = 'not file';
            $scheduleDetail->save();
            $scheduleDetails->push($scheduleDetail);
        }

        return $scheduleDetails->all();
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
        $detail = DB::table('schedule_details')
            ->where('scheduleID', $request->scheduleID)
            ->where('userID', $id);

        if($request->answerStatus == 'no file'){
            $detail->update([
                'score' => $request->score,
                'answerStatus' => 'submitted'
            ]);
        }
        elseif ($request->answerStatus == 'not yet graded'){
            $detail->update([
                'answerStatus' => 'not yet graded',
                'score' => 0
            ]);
        }
        else{
            $detail->update([
                'score' => $request->score
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
