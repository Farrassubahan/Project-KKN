<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class PublicActivityController extends Controller
{
    /**
     * Display a listing of activities for the public page.
     */
    public function index()
    {
        $activities = Activity::latest()->get();
        return view('public.kegiatan.index', compact('activities'));
    }

    /**
     * Display the specified activity detail.
     */
    public function show(Activity $kegiatan)
    {
        // Get other recent activities to show at the bottom
        $recentActivities = Activity::where('id', '!=', $kegiatan->id)
                                    ->latest()
                                    ->take(3)
                                    ->get();
                                    
        return view('public.kegiatan.show', compact('kegiatan', 'recentActivities'));
    }
}
