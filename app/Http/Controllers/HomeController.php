<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function photo()
    {
        $photos = Photo::all(); // Assuming your model is App\Models\Photo
        return view('component.photo', compact('photos'));
    }
    public function photobd()
    {
        $photos = Photo::all(); // Assuming your model is App\Models\Photo
        return view('component.photobd', compact('photos'));
    }
    public function video()
    {
        $videos = Video::all();  // Fetch all videos (with their YouTube URLs)
        return view('component.video', compact('videos'));
    }
    public function videobd()
    {
        $videos = Video::all();  // Fetch all videos (with their YouTube URLs)
        return view('component.videobd', compact('videos'));
    }
    public function team()
    {
        return view('component.team');
    }
    public function teambd()
    {
        return view('component.teambd');
    }
    public function notice()
    {
        $notices = \App\Models\Notice::latest()->get();
        return view('component.notice', compact('notices'));
    }
    public function noticebd()
    {
        $notices = \App\Models\Notice::latest()->get();
        return view('component.noticebd', compact('notices'));
    }

    public function salesteam()
    {
        return view('component.salesteam');
    }
    public function salesteambd()
    {
        return view('component.salesteambd');
    }
    public function product()
    {
        return view('component.product');
    }
    public function productbd()
    {
        return view('component.productbd');
    }
}
