<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videoInfo($id)
    {
        $video = Video::find($id);
        return response()->json($video);
    }
}
