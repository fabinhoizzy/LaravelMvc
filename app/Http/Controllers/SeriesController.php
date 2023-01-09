<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function ListarSeries()
    {
        $series = [
            'Punisher',
            'Mr Robot',
            '2 homens e meio'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }


}
