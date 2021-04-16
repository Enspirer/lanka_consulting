<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Collection;
class GalleryController extends Controller
{
       /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $gallaeyrDetails = Gallery::all();
        $finalOutArray = [];
        foreach ($gallaeyrDetails as $gallaeyrDetail)
        {
            $stap = [
                'image_id' => $gallaeyrDetail->id,
                'image_name' => $gallaeyrDetail->image_name,
                'effect' => $gallaeyrDetail->image_effect,
            ];
            array_push($finalOutArray,$stap);
        }
        $finalOutput = self::sectionArray($finalOutArray,9);


        return view('frontend.gallery',[
            'galleryItems' => $finalOutput
        ]);
    }

   static function sectionArray($array, $step)
    {
        $sectioned = array();

        $k = 0;
        for ( $i=0;$i < count($array); $i++ ) {
            if ( !($i % $step) ) {
                $k++;
            }
            $sectioned[$k][] = $array[$i];
        }
        return $sectioned;
    }
}
