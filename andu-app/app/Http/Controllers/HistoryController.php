<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\History2;
use App\Models\History3;
use App\Models\BufferTimeline;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $bufferTimelines = BufferTimeline::orderBy('year')->get();
        $histories = History::with('bufferTimeline')->get();
        $histories2 = History2::with('bufferTimeline')->get();
        $histories3 = History3::with('bufferTimeline')->get();

        return view('history', compact('bufferTimelines', 'histories'));
    }
}
