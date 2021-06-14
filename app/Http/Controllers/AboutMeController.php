<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $page_title = 'About me details';
        $about = AboutMe::where('id', 1)->get();

        return view('pages.about.show', compact('about', 'page_title'));
    }

    public function edit()
    {
        $page_title = 'Update details';
        return view('pages.about.edit', compact('page_title'));
    }

    public function update(Request $request)
    {
        $about = AboutMe::where('id', 1)->get();

        if ($about) {
            $about->fill($request->all())->save();
        } else {
            AboutMe::create($request->all());
        }

        return redirect(route('about-me'));
    }

    public function destroy(AboutMe $aboutMe)
    {
        //
    }
}
