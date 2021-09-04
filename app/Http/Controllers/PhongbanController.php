<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phongban;
class PhongbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Phongban::paginate(5);
        return view('phongban.index',compact('data'));  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('phongban.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phongban=new Phongban;
        $phongban->tenphong=$request->tenphong;
        $phongban->save();
        return redirect()->route('phongban.index')->with('success','Thêm phòng ban thành công');
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
    public function edit(Request $request,Phongban $phongban)
    {
        return view('phongban.edit',compact('phongban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phongban $phongban)
    {
        $phongban->update($request ->only('tenphong'));
        return redirect()->route('phongban.index')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phongban $phongban)
    {
        $phongban->delete();
        return redirect()->route('phongban.index')->with('success','Xóa thành công');
        
    }
}
