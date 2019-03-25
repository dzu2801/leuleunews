@extends('quantri.layout.quantri')

@section('content')
@if(count($errors)>0)
<div>
    <ul>

        @foreach($errors -> all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if(\Session::has('success'))
<div>
    <p>{{\Session::get('success')}}</p>
</div>
@endif
<form method="post" enctype="multipart/form-data" action="{{url('quantri/createnew')}}">
    {{csrf_field()}}
    <div class="container1">
        <label for="uname"><b>Tiêu Đề Bài Viết</b></label><br />
        <input for="uname" type="text" id="text-input" name="txttitle" placeholder="Nhập tiêu đề,..." class="form-control">
        <div class="form-group">
            <label for="content"><b>Nội Dung</b></label>
            <textarea name="txtcontent" id="textarea-input" rows="9" placeholder="Nhập nội dung,..." class="form-control"></textarea>
        </div>
        <label for="uname"><b>Mô tả</b></label><br />
        <input for="uname" type="text" id="text-input" name="txtdesc" placeholder="Nhập mô tả,..." class="form-control">
        <label for="uname"><b>Chọn loại sản phẩm</b></label><br />
        <select for="uname" name="txtCateID">';
            <?php
                foreach ($cates as $item=> $cate) {
                    echo "<option value="."{$cate->id}".">"."{$cate->CateName}" ."</option>";
                }
            ?>
        </select><br>
        <label for="uname"><b>Hình ảnh</b></label><br />
        <input for="uname" type="file" id="hinhanh" name="hinhanh" class="form-control-file">


        {{-- <input id="btn_them" value="THEM" type="button"> --}}
        <div class="result" style="color:red"></div>
    </div>

    <div class="card-footer">
            <button for="uname" type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
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
