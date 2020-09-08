<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    // protected $table = 'my_users';

    #business logic

    function set_absent(){
        $this->is_absent=true;
        $this->save();
    }

    function setBio($bio){
        $this->bio=$bio;
        $this->save();
    }

}
