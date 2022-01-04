<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Type;

class TypeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request->all());
        $this->validate($request, [
            'minerals' => 'required',
        ]);

        Type::create([
            'minerals' => $request->minerals,
        ]);
        return redirect('/admin/type')->with(array(
            'status' => 'success',
            'message' => 'Mineral Added Successfully',
        ));
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
        $typeData = Type::find($id);
        return view('admin.type.editType')->with([
            'typeData' => $typeData
        ]);
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
        $typeData = Type::where('id', $id)->update([
            'minerals' => $request->minerals,

        ]);
        return redirect('/admin/type')->with(array(
            'status' => 'success',
            'message' => 'Mineral updated successfully',
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Type::find($id)->delete();
        return redirect('/admin/type')->with(array(
            'status' => 'success',
            'message' => 'Mineral Deleted successfully',
        ));
    }
}
