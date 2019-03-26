@extends('quantri.layout.quantri')
@section('content')

<form method="post" enctype="multipart/form-data" action="{{url('quantri/createcategory')}}">

    {{csrf_field()}}
    <div class="container1">
        <label for="uname"><b>Loại Danh Mục</b></label><br />
        <input for="uname" type="text" id="text-input" name="txtcatename" placeholder="Nhập tiêu đề,..."  class="form-control">
        <label for="uname"><b>Mô tả</b></label><br />
        <input for="uname" type="text" id="text-input" name="txtcatedes" placeholder="Nhập mô tả,..."  class="form-control">

    <div class="card-footer">
            <button for="uname" type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Thêm Mới
            </button>   
    </div>        
    </form>
    
@endsection

@section('js')
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>

            CKEDITOR.replace('content');
    </script>

@append