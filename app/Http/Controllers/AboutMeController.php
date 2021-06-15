<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $page_title = 'About me details';
        $about = AboutMe::where('id', 1)->first();

        return view('pages.about.show', compact('about', 'page_title'));
    }

    public function edit()
    {
        $page_title = 'Update details';
        $about = AboutMe::where('id', 1)->first();
        return view('pages.about.edit', compact('page_title', 'about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5288',
        ]);

        $about = AboutMe::where('id', 1)->first();

        if ($about) {
            $about = $about->fill($request->all())->save();
        } else {
            $about = AboutMe::create($request->all());
        }

        if ($request->hasFile('image')) {
            $about = AboutMe::where('id', 1)->first();

            try {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('images'), $imageName);

                $about->image = $imageName;
                $about->save();
            } catch (\Exception $e) {
                dd($e);
            }
        }

        return redirect(route('about-me'));
    }

    public function destroy(AboutMe $aboutMe)
    {
        //
    }
}
