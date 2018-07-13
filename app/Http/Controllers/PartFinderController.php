<?php

namespace App\Http\Controllers;

use App\Cpu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartFinderController extends Controller
{
    //
    public function search(Request $request)
    {
        $search = $request->input('searchfor');
        $selected = $request->input('selected');


        switch ($search['device']) {
            case 'cpu':
                $controller = new CpuController();
                return $controller->search($search['params'], $selected);
                break;
            case 'mainboard':
                $controller = new MainboardController();
                return $controller->search($search['params'], $selected);
                break;
            default:
                dd('default');
        }
    }


}
