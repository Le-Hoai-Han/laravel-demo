@extends('home.index')

@section('themnhanvien')
<legend>Thêm nhân viên</legend>
<form id="" method="post" action="{{route('nhanvien.store')}}">
    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên</label>
                    <input type="text" name="hoten" class="form-control" value="{{old('hoten')}}" id="dateField" placeholder="Nhập họ và tên">
                    @error('hoten')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Năm sinh</label>
                    <input type="date" name="namsinh" value="{{old('namsinh')}}" class="form-control" id="" placeholder="Nhập ngày sinh">
                    @error('namsinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Giới tính</label>
                     <select name='gioitinh' class="form-control">
                      <option value="">Chọn giới tính</option>
                      <option value="Nam">Nam</option>
                      <option value="Nữ">Nữ</option>
                    </select>
                    @error('gioitinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" name="diachi" value="{{old('diachi')}}" class="form-control" id="" placeholder="Nhập địa chỉ">
                    @error('diachi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phòng ban</label>
                    <select  name='phongban' class="form-control">
                      <option value="" >Chọn phòng</option>
                      @foreach($phongban as $phong)
                      <option value="{{$phong->id}}">{{$phong->tenphong}}</option>
                      @endforeach
                    </select>
                    @error('phongban')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                 
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary"><a class="a_edit" href="{{route('nhanvien.index')}}">Cancel</a></button>
                </div>
              </form>
              ////

@stop();