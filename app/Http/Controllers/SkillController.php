<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('skills_api');
    }

    public function skills_api()
    {
        return Skill::all();
    }

    public function index()
    {
        $skills = Skill::all();
        $page_title = "Skills list";
        return view('pages.skills.index', compact('skills', 'page_title'));
    }

    public function create()
    {
        $page_title = "Create new skill";
        return view('pages.skills.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        Skill::create($request->all());
        return redirect()->route('skills.index');
    }

    public function show(Skill $skill)
    {
        //
    }

    public function edit(Skill $skill)
    {
        $page_title = "Update skill";
        return view('pages.skills.edit', compact('skill', 'page_title'));
    }

    public function update(Request $request, Skill $skill)
    {
        $skill->fill($request->all())->save();
        return redirect()->route('skills.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index');
    }
}
