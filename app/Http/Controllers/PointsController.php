<?php

namespace App\Http\Controllers;

use App\Models\PointsModel;

use Illuminate\Http\Request;
use function PHPSTORM_META\map;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->points = new PointsModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Map',
        ];

        return view('map', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate request
        $request->validate(
            [
                'name' => 'required|unique:points,name',
                'description' => 'required',
                'geom_point' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Name already exists',
                'description.required' => 'Description is required',
                'geom_point.required' => 'coordinates is required',
            ]
        );
        $data = [
            'geom' => $request->geom_point,
            'name' => $request->name,
            'description' => $request->description,
        ];
        //create data
        if (!$this->points->create($data)) {
            return redirect()->route('map')->with('error', 'Failed to add point');
        }

        return redirect()->route('map')->with('success', 'Point added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
