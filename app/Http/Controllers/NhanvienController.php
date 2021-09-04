<?php

namespace App\Http\Controllers;

use App\Models\Nhanvien;
use App\Models\Phongban;
use Illuminate\Http\Request;
use App\Http\Requests\Kiemloinhanvien;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Nhanvien::paginate(10);
        if($key =request()->key){
            $data=Nhanvien::orderBy('hoten') ->where('hoten','like','%'.$key.'%')->paginate(2);
        }
        return view('nhanvien.index',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phongban=Phongban::orderBy('tenphong','ASC')->select('id','tenphong')->get();
       return view('nhanvien.create',compact('phongban'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Kiemloinhanvien $request)
    {
            $nhanvien=new Nhanvien;
            $nhanvien -> hoten =$request->hoten;
            $nhanvien -> namsinh =$request->namsinh;
            $nhanvien -> gioitinh =$request->gioitinh;
            $nhanvien -> diachi =$request->diachi;
            $nhanvien -> phongban =$request->phongban;
            $nhanvien->save();
           
            return redirect()->route('nhanvien.index')->with('success','Thêm nhân viên thành công');

       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $nhanvien=Nhanvien::find($id);
        // $phongban=Phongban::find($nhanvien);
        //  return view('nhanvien.show',compact('nhanvien','phongban'));

        $nhanvien=Nhanvien::find($id);
        $phongban=Phongban::find($nhanvien);
         return view('nhanvien.show',compact('nhanvien','phongban'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nhanvien $nhanvien)
    {
        $phongban=Phongban::orderBy('tenphong','ASC')->select('id','tenphong')->get($nhanvien);
        $chonphong=Phongban::find($nhanvien);
        return view('nhanvien.edit',compact('nhanvien','phongban','chonphong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Nhanvien $nhanvien)
    {
        $nhanvien ->update($request ->only('hoten','namsinh','gioitinh','diachi','phongban'));
        return redirect()->route('nhanvien.index')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nhanvien $nhanvien)
    {
        $nhanvien->delete();
        return redirect()->route('nhanvien.index')->with('success','Xóa thành công');
    }
}
