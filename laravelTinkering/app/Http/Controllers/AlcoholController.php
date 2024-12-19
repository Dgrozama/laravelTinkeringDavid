<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;

class AlcoholController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alcohols = Alcohol::all();
        return view('alcohols.index', compact('alcohols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alcohols.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'percentage' => 'required|numeric',
        ]);

        Alcohol::create($request->all());

        return redirect()->route('alcohols.index')->with('success', 'Alcohol created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alcohol $alcohol)
    {
        return view('alcohols.show', compact('alcohol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alcohol $alcohol)
    {
        return view('alcohols.edit', compact('alcohol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alcohol $alcohol)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'percentage' => 'required|numeric',
        ]);

        $alcohol->update($request->all());

        return redirect()->route('alcohols.index')->with('success', 'Alcohol updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alcohol $alcohol)
    {
        $alcohol->delete();

        return redirect()->route('alcohols.index')->with('success', 'Alcohol deleted successfully.');
    }
}
