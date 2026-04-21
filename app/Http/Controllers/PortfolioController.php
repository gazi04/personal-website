<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Experience;
use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'person' => SiteSetting::all()->pluck('value', 'key'),
            'projects' => Project::where('is_visible', true)->orderBy('order')->get(),
            'experience' => Experience::orderBy('order')->get(),
            'skills' => Skill::orderBy('order')->get(),
            'posts' => BlogPost::where('is_visible', true)->latest()->take(3)->get(),
        ]);
    }
}
