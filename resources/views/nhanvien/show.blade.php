@extends('home.index')
@section('chitietnhanvien')

<table class="table table-hover">
    <thead>
        <tr>
            <th><h1 style="color: red;">{{$nhanvien->hoten}}</h1></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><b>Năm sinh</b></th>
            <th>{{$nhanvien->namsinh}}</th>
        </tr>
        <tr>
            <th><b>Giới tính</b></th>
            <th>{{$nhanvien->gioitinh}}</th>
        </tr>
        <tr>
            <th><b>Địa chỉ</b></th>
            <th>{{$nhanvien->diachi}}</th>
        </tr>
        <tr>
            <th><b>Phòng ban</b></th>
            @foreach($phongban as $phongban)
            <th>{{$phongban->tenphong}}</th>
            @endforeach
        </tr>
        <tr>
            <th><b>Ngày tạo</b></th>
            <th>{{$nhanvien->created_at}}</th>
        </tr>
    </tbody>
    </tbody>
</table>
@stop();