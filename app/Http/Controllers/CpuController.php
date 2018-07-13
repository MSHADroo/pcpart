<?php

namespace App\Http\Controllers;

use App\Cpu;

class CpuController extends Controller
{
    public function getList(){
//        return DB::table('manufacture')->get();

//        return Cpu::get();

        $cpus = Cpu::get();

        foreach ($cpus as &$cpu){
            $cpu['manufacture'] = $cpu->manufacture->title;
        }

        return $cpus;

    }

    public function search(Array $params ,Array $selected ){
        //initiate params
//        $manufacture = $params['manufacture'];
//        $series = $params['series'];
//        $family = $params['family'];
//        $socket = $params['socket'];
//        $integrated_graphic = $params['integrated_graphic'];
//        $cores = $params['cores'];
//        $speed = $params['speed'];
//        $tdp = $params['tdp'];
//        $multithread = $params['multithread'];
//        $ecc = $params['ecc'];

        $rulesObject = new RulesController();
        $rules = $rulesObject->makeRules('cpu' , $selected);


        return Cpu::get();

    }
}
