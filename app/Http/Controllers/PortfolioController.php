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
            'projects' => Project::where('is_visible', true)->orderBy('id')->get(),
            'experience' => Experience::orderBy('id')->get(),
            'skills' => Skill::orderBy('id')->get(),
            'posts' => BlogPost::where('is_published', true)->latest()->get(),
        ]);
    }
}
