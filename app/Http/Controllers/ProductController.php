<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// test alex

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $this->getData();
        return response($data);
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
        $data = $this->getData();
        $newData = $request->all();
        $data->push(collect($newData));
        return response($data);
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

    public function getData()
    {
        return collect([
            collect([
                'title' => 'product 01',
                'content' => 'descript 01',
                'price' => 50
            ]),
            collect([
                'title' => 'product 02',
                'content' => 'descript 02',
                'price' => 50
            ])
        ]);
    }
}
