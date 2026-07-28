<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FireStatus;
use Illuminate\Http\Request;

class FireDetectionController extends Controller
{
    public function indexWeb()
    {
        return view('welcome');
    }

public function store(Request $request)
{
    $fire = FireStatus::create([
        'status' => $request->status,
        'confidence' => $request->confidence,
        'person' => $request->person,
        'system' => $request->system,
    ]);

    return response()->json([
        'success' => true,
        'saved' => $fire
    ]);
}

    public function getLatestStatus()
    {
        return response()->json(
            FireStatus::latest()->first()
        );
    }

    public function history()
    {
        return response()->json(
            FireStatus::latest()
                ->take(10)
                ->get()
        );
    }
}