<?php

namespace App\Http\Controllers;

use App\Models\requestrepair;
use Illuminate\Http\Request;
use App\Http\Requests\StorerequestrepairRequest;
use App\Http\Requests\UpdaterequestrepairRequest;

class ProgressTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $requestrepair = requestrepair::latest()->get();
        $requestrepair = requestrepair::all()->sortByDesc('id');
        return view('sparepartrepair.waitingtable', [
            'reqtzy' => $requestrepair,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function show(requestrepair $requestrepair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function edit(requestrepair $requestrepair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, requestrepair $requestrepair)
    {
         //
         dd($request);
         $validatedData = $request->validate([


            'type_of_part' => 'required',
            // 'sparepart_ETA' => 'required',
            'part_price' => 'required',
            'stock_sparepart' => 'required',
        ]);

        $requestrepair = requestrepair::find($request->get('id'));
        $requestrepair->status = $validatedData['type_of_part'];
        // $requestrepair->status = $validatedData['sparepart_ETA'];
        $requestrepair->status = $validatedData['part_price'];
        $requestrepair->status = $validatedData['stock_sparepart'];

        $requestrepair->save();

        return redirect(route('progresstable.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function destroy(requestrepair $requestrepair)
    {
        //
    }
}
