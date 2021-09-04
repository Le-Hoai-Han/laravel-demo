@extends('home.index'); 

@section('nhanvien')

<hr><br>
<form action=""  class="form-inline">

    <div class="form-group">
        <input name="key" placeholder="Nhập vào...">
    </div>

    

    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
</form>


<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Năm sinh</th>
            <th>Giới tính</th></th>
            <th>Địa chỉ</th>
            <th>Phòng ban</th>
            <th class="text-right">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $nv)
        <tr>
            <td>{{$nv->id}}</td>
            <td>{{$nv->hoten}}</td>
            <td>{{$nv->namsinh}}</td>
            <td>{{$nv->gioitinh}}</td>
            <td>{{$nv->diachi}}</td>
            <td>{{$nv->phongban}}</td>
            <td class="text-right">
                 <a href="{{route('nhanvien.show',$nv->id,$nv->phongban)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-eye"></i>
                </a>

                <a href="{{route('nhanvien.edit',$nv->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>

                <a href="{{route('nhanvien.destroy',$nv->id)}}" class="btn btn-sm btn-danger btndelete ">
                    <i class="fas fa-trash"></i>
                </a>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<form method="POST" action="" id="form-delete">
    @csrf @method('DELETE')
</form>
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>

@stop();

@section('js')
<script>
    $('.btndelete').click(function(ev){
        ev.preventDefault();
        var _href=$(this).attr('href');
        $('form#form-delete').attr('action',_href);
        if(confirm('Bạn muốn xóa nhân viên này???')){
            $('form#form-delete').submit();
        }

       
    })
</script>
@stop();