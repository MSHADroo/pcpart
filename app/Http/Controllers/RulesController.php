<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function makeRules($device,$selected){

        $selectedDevice = [];
        foreach ($selected as $key => $value){
            if((int)$value > 0){
                $selectedDevice[] = $key;
            }
        }
        dd($selectedDevice);
        $rulesArray=[];
        switch ($device){

            case 'cpu':
                switch ($selected){
                    case 'mainboard':
                        $rulesArray = array_merge($rulesArray ,['cpu_socket']);
                    case 'memory':
                        $rulesArray = array_merge($rulesArray ,['bus_speed']);
                }

            case 'mainboard':
                switch ($selected){
                    case 'cpu':
                        $rulesArray = array_merge($rulesArray ,['cpu_socket']);
                    case 'memory':
                        $rulesArray = array_merge($rulesArray ,['bus_speed']);
                }
        }

        return $rulesArray;

    }
}
