<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PointsModel;
use App\Http\Controllers\Controller;

class PointsController extends Controller
{
    protected $points;

    public function __construct()
    {
        $this->points = new PointsModel();
    }
    /**
     * Display a listing of the resource.
     */
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

        // validate data
        $request->validate([
            'name' => 'required|unique:points,name',
            'description' => 'required',
            'geom_point' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ],
        [
            'name.required' => 'Name is required',
            'name.unique' => 'Name already exists',
            'description.required' => 'Description is required',
            'geom_point.required' => 'Geometry is required',
        ]);

        // make folder
        if (!is_dir('storage/images')) {
            mkdir('./storage/images', 0777);
        }

        // upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_image = time() . "_point." . strtolower($image->getClientOriginalExtension());
            $image->move('storage/images', $name_image);
        } else {
            $name_image = null;
        }

        $data = [
            'geom' => $request->geom_point,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $name_image,
            'user_id' => auth()->user()->id,
        ];

        // create data
        if (!$this->points->create($data)) {
            return redirect()->route('map')->with('error', 'Point failed to add!');
        }

        return redirect()->route('map')->with('success', 'Point has been added!');
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
        $data = [
            'title' => 'Edit Point',
            'id' => $id,
        ];

        return view('edit_point', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id, $request->all());
         // validate data
        $request->validate([
            'name' => 'required|unique:points,name,' . $id,
            'description' => 'required',
            'geom_point' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ],
        [
            'name.required' => 'Name is required',
            'name.unique' => 'Name already exists',
            'description.required' => 'Description is required',
            'geom_point.required' => 'Geometry is required',
        ]);

        // make folder
        if (!is_dir('storage/images')) {
            mkdir('./storage/images', 0777);
        }

        // get old image
        $old_image = $this->points->find($id)->image;

        // upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_image = time() . "_point." . strtolower($image->getClientOriginalExtension());
            $image->move('storage/images', $name_image);

            // delete old image
            if ($old_image != null) {
                if (file_exists('./storage/images/' . $old_image)) {
                    unlink('./storage/images/' . $old_image);
                }
            }
        } else {
            $name_image = $old_image;
        }

        $data = [
            'geom' => $request->geom_point,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $name_image
        ];

        // update data
        if (!$this->points->find($id)->update($data)) {
            return redirect()->route('map')->with('error', 'Point failed to update!');
        }

        return redirect()->route('map')->with('success', 'Point has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = $this->points->find($id)->image;
        if (!$this->points->destroy($id)) {
            return redirect()->route('map')->with('error', 'Point failed to deleted!');
        }
        if ($image != null) {
            if (file_exists('./storage/images/' . $image)) {
                unlink('./storage/images/' . $image);
            }
            return redirect()->route('map')->with('success', 'Point has been delete!');
        }
        else {
            return redirect()->route('map')->with('success', 'Point has been delete!');
        }
    }
}
