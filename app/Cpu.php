<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    //
    protected $table = 'cpu';


    public function manufacture()
    {
        return $this->belongsTo('App\Manufacture');
    }
}
