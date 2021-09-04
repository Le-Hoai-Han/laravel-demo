@extends('home.index')

@section('themphongban')
<legend>Thêm phòng ban</legend>
<form id="" method="post" action="{{route('phongban.store')}}">
    @csrf
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên phòng ban</label>
                    <input type="text" name="tenphong" class="form-control" id="" placeholder="Nhập phòng ban">
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

@stop();