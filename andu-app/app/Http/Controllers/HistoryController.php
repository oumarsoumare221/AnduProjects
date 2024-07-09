<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\BufferTimeline;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $bufferTimelines = BufferTimeline::orderBy('year')->get();
        $histories = History::with('bufferTimeline')->get();

        return view('history', compact('bufferTimelines', 'histories'));
    }
}
