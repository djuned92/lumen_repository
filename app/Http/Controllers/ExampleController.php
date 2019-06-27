<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function andrie()
    {
        for ($j=0; $j < 32; $j++) { 
            $data[$j] = [
                'team'  => 'team '. $j,
                'bracket_id' => 1
            ];
        }
        
        $index = 0;
        for($i = 0; $i < count($data); $i++) {
            $data[$i]['bracket_id'] = $index;
            $index++;
            if ($index > 8) {
                $index = 0;
            }
        }

        dd($data);
    }
}
