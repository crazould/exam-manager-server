<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class ScheduleHeader extends Model
{
    public function scheduleDetails(){

        return $this->hasMany('App\ScheduleDetail');

    }
}
