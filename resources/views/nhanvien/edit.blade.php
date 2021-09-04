@extends('home.index')

@section('suanhanvien')
<form id="" method="post" action="{{route('nhanvien.update',$nhanvien->id)}}">
    @csrf @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên</label>
                    <input type="text" value="{{$nhanvien->hoten}}" name="hoten" class="form-control" id="" placeholder="Nhập họ và tên">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Năm sinh</label>
                    <input type="date" value="{{$nhanvien->namsinh}}" name="namsinh" class="form-control" id="" placeholder="Nhập ngày sinh">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Giới tính</label>
                    <input type="text" value="{{$nhanvien->gioitinh}}" name="gioitinh" class="form-control" id="" placeholder="Nhập giới tính">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" value="{{$nhanvien->diachi}}" name="diachi" class="form-control" id="" placeholder="Nhập địa chỉ">
                  </div>

                  <div class="form-group">
                    <select name='phongban' class="form-control">
                    @foreach($chonphong as $chon)
                      <option value="">{{$chon->tenphong}}</option>
                    @endforeach
                      @foreach($phongban as $phong)
                      <option value="{{$phong->id}}">{{$phong->tenphong}}</option>
                      @endforeach
                    </select>
                  </div>
                 
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-primary"><a class="a_edit" href="{{route('nhanvien.index')}}">Cancel</a></button>
                </div>
              </form>

@stop();