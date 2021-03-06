<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\WaterType;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminAccountSettingController extends Controller
{

    public function myAccountUpdate(Request $request)
    {
        // dd($request->all());
        $rules = [
            'current_password'=> ['required'],
            'password' => ['required', 'string', 'confirmed'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {
                $db_password = Auth::user()->password;
                if (Hash::check($request->current_password, $db_password)) {
                    $editData = app('App\User')->where('id', Auth::user()->id)->update([
                        'password' => Hash::make($request->password),
                    ]);
                    return redirect('/admin/my-account')->with(array(
                        'status' => 'success',
                        'message' => 'Password Updated successfully',
                    ));
                    
                }else{
                    return back()->with(array('status' => 'danger', 'message' =>  "Current Password Not matched!"));
                }
                
            } catch (\Exception $e) {
                return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
                // return response()->json(['message' => $e], 500);
            }
            // dd($brandData);

        }

        // return redirect('/admin/my-account')->with(array(
        //     'status' => 'success',
        //     // 'message' => 'Image Upload successfully',
        // ));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.water.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.water.create');
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

        WaterType::create([
            'minerals' => $request->quantity,
        ]);
        return redirect('/admin/water')->with(array(
            'status' => 'success',
            'message' => 'New Water Added Successfully',
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
