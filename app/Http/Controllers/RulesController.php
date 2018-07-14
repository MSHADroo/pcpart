<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function makeRules($device, $selected)
    {

        $selectedDevice = [];
        foreach ($selected as $key => $value) {
            if ((int)$value > 0) {
                $selectedDevice[] = $key;
            }
        }

        $rulesArray = [];
        switch ($device) {
            case 'cpu':
                foreach ($selectedDevice as $item) {
                    switch ($item) {
                        case 'mainboard':
                            $rulesArray = array_merge($rulesArray, ['cpu_socket' => 'mainboard']);
                            break;
                        case 'memory':
                            $rulesArray = array_merge($rulesArray, ['bus_speed' => 'memory']);
                            break;
                    }
                }
                break;


            case 'mainboard':
                foreach ($selectedDevice as $item) {
                    switch ($item) {
                        case 'cpu':
                            $rulesArray = array_merge($rulesArray, ['cpu_socket' => 'cpu']);
                            break;

                        case 'memory':
                            $rulesArray = array_merge($rulesArray, ['bus_speed' => 'memory']);
                            break;
                    }
                }
                break;
        }

        return $this->findParamsValue($rulesArray, $selected);

    }


    public function findParamsValue($rulesArray, $selected)
    {
//        dd($rulesArray, $selected);

        foreach ($rulesArray as $rules){
            dd($selected[$rules[1]]);
        }
    }
}
