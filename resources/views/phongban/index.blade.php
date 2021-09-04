@extends('home.index'); 

@section('phongban')

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>TÊN PHÒNG</th>
            <th class="text-right">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->tenphong}}</td>
            <td class="text-right">
                <a href="{{route('phongban.edit',$cat->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('phongban.destroy',$cat->id)}}" class="btn btn-sm btn-danger btndelete ">
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
        if(confirm('Bạn muốn xóa phong này không???')){
            $('form#form-delete').submit();
        }

       
    })
</script>
@stop();