<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('portfolios_api');
    }

    public function portfolios_api()
    {
        return Portfolio::all();
    }

    public function index()
    {
        $portfolios = Portfolio::all();
        $page_title = "Portfolio list";
        return view('pages.portfolios.index', compact('portfolios', 'page_title'));
    }

    public function create()
    {
        $page_title = "Create Portfolio";
        return view('pages.portfolios.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $portfolio = Portfolio::create($request->except('image'));

        if ($request->hasFile('image')) {
            try {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('images'), $imageName);

                $portfolio->image = $imageName;
                $portfolio->save();
            } catch (\Exception $e) {
                dd($e);
            }
        }
        return redirect()->route('portfolios.index');
    }

    public function show(Portfolio $portfolio)
    {
        //
    }

    public function edit(Portfolio $portfolio)
    {
        $page_title = "Edit Portfolio";
        return view('pages.portfolios.edit', compact('page_title', 'portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->fill($request->all())->save();

        if ($request->hasFile('image')) {
            try {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('images'), $imageName);

                $portfolio->image = $imageName;
                $portfolio->save();
            } catch (\Exception $e) {
                dd($e);
            }
        }

        return redirect()->route('portfolios.index');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}
