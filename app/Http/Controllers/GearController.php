<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gear;
use Illuminate\Support\Facades\Storage;

class GearController extends Controller
{
    public function index()
    {
        $gears = Gear::all()->sortBy(function($gear) {
            $order = ['kamera' => 1, 'lensa' => 2, 'lighting' => 3, 'microphone' => 4, 'laptop' => 5, 'keyboard' => 6, 'monitor' => 7, 'mouse' => 8];
            return $order[$gear->type] ?? 9; // default to 9 if type is not found
        });

        return view('gear', compact('gears'));
    }
}
