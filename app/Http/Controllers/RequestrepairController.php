<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requestrepair;
use App\Http\Requests\StorerequestrepairRequest;
use App\Http\Requests\UpdaterequestrepairRequest;

class RequestrepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $requestrepair = requestrepair::latest()->get();
        $requestrepair = requestrepair::all()->sortByDesc('id');
        return view('sparepartrepair.waiting', [
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
        return view('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerequestrepairRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerequestrepairRequest $request)
    {
        //
        {
            // $this->validate($request, [
                // 'title' => 'required|string|max:155',
                $validatedData = $request->validate([
                'nama' => 'required',
                'reg' => 'required',
                'machine_name' => 'required',
                'line_name' => 'required',
                'part_name' => 'required',
                'part_type' => 'required',
                'serial_no' => 'required',
                'maker' => 'required',
                'problem' => 'required',
                'detail_standard' => [
                    "foo => bar"
                ],
                'status' => 'required'
            ]);

            $requestrepair = new requestrepair;
            $requestrepair->nama = $validatedData['nama'];
            $requestrepair->reg = $validatedData['reg'];
            $requestrepair->machine_name = $validatedData['machine_name'];
            $requestrepair->line_name = $validatedData['line_name'];
            $requestrepair->part_name = $validatedData['part_name'];
            $requestrepair->part_type = $validatedData['part_type'];
            $requestrepair->serial_no = $validatedData['serial_no'];
            $requestrepair->maker = $validatedData['maker'];
            $requestrepair->problem = $validatedData['problem'];
            $requestrepair->status = $validatedData['status'];    

            $requestrepair->save();
            // return dd($request);
            // $request = requestrepair::create([
            //     // 'tanggal_waktu' => $request->tanggal,
            //     'nama' => $request->nama,
            //     'reg' => $request->reg,
            //     'machine_name' => $request->machine_name,
            //     'line_name' => $request->line_name,
            //     'part_name' => $request->part_name,
            //     'part_type' => $request->part_type,
            //     'serial_no' => $request->serial_no,
            //     'maker' => $request->maker,
            //     'problem' => $request->problem,
            //     'status' => $request->status
            // ]);
    
            if ($requestrepair) {
                return redirect()
                    ->route('waiting.index')
                    ->with([
                        'success' => 'New post has been created successfully'
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Some problem occurred, please try again'
                    ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $requestrepair = requestrepair::find($request->get('id'));
        return view('sparepartrepair.progress', [
            'requestrepair'    => $requestrepair,
        ]);
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
     * @param  \App\Http\Requests\UpdaterequestrepairRequest  $request
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterequestrepairRequest $request, requestrepair $requestrepair)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'reg' => 'required',
            'machine_name' => 'required',
            'line_name' => 'required',
            'part_name' => 'required',
            'part_type' => 'required',
            'serial_no' => 'required',
            'maker' => 'required',
            'problem' => 'required',
            'detail_standard' => [
                "foo => bar"
            ],
            'status' => 'required'
        ]);

        $requestrepair = requestrepair::find($request->get('id'));
        $requestrepair->nama = $validatedData['nama'];
        $requestrepair->reg = $validatedData['reg'];
        $requestrepair->machine_name = $validatedData['machine_name'];
        $requestrepair->line_name = $validatedData['line_name'];
        $requestrepair->part_name = $validatedData['part_name'];
        $requestrepair->part_type = $validatedData['part_type'];
        $requestrepair->serial_no = $validatedData['serial_no'];
        $requestrepair->maker = $validatedData['maker'];
        $requestrepair->problem = $validatedData['problem'];
        $requestrepair->status = $validatedData['status'];    

        $requestrepair->save();

        return redirect(route('sparepartrepair.progress'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requestrepair  $requestrepair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $request = requestrepair::find($request->get('id'));
        $request->delete();
        return redirect()->back();
    }
}
