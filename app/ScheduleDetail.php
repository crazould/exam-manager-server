<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class ScheduleDetail extends Model
{
    
    public function scheduleHeader(){

        return $this->belongsTo('App\ScheduleHeader');

    }

}
