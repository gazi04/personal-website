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
            'projects' => Project::visible()->get(),
            'experience' => Experience::visible()->get(),
            'skills' => Skill::ordered()->get(),
            'posts' => BlogPost::published()->take(3)->get(),
        ]);
    }
}
