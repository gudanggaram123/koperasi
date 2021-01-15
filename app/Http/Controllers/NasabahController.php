<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\nasabah;

class NasabahController extends Controller
{
    public function index()
    {
        $data = nasabah::paginate(3);
        return view('admin.nasabah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahdatanb()
    {
     
        
        return view('admin.nasabah.create');
    }

    public function simpannb(Request $request)
    {
        nasabah::create($request->all());
        return redirect('/nasabah')->with('toast_success', 'Berhasil Menambahkan Data');
    }



    public function editnb()
    {
        return view('admin.admin.edit');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = nasabah::find($id);
        return view('admin.nasabah.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = nasabah::find($id);
        $model = $request->all();
        $data->update($model);
        return redirect('/nasabah')->with('toast_success', 'Data Berhasil Diupdate');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = nasabah::find($id);
        $data->delete();
        return redirect('/nasabah')->with('toast_success', 'Data Berhasil di hapus');

    }
}

