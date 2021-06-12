<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $page_title = 'Services';
        $page_description = 'Some description for the page';

        $services = Services::all();
        return view('pages.services.index', compact('services', 'page_title', 'page_description'));
    }

    public function create()
    {
        $page_title = 'Create service';
        $page_description = 'Some description for the page';

        return view('pages.services.create', compact('page_title', 'page_description'));
    }

    public function store(Request $request)
    {
        Services::create($request->all());

        return redirect()->route('services.index');
    }

    public function show(Services $services)
    {
        //
    }

    public function edit($id)
    {
        $page_title = 'Edit service';
        $page_description = 'Some description for the page';

        $services = Services::findOrFail($id);

        return view('pages.services.edit', ['service' => $services], compact('page_title'));
    }

    public function update(Request $request, $id)
    {
        $services = Services::findOrFail($id);

        $services->fill($request->all())->save();

        return redirect()->route('services.index');
    }

    public function destroy($id)
    {
        $services = Services::findOrFail($id);

        $services->delete();

        return back();
    }
}
