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
@foreach ($posts as $item => $data)
@endforeach

<form >
    {{csrf_field()}}
    <div class="container1">
        <label for="uname"><b>Tiêu Đề Bài Viết</b></label><br />
        <input for="uname" type="text" id="text-input" name="txttitle" placeholder="Nhập tiêu đề,..." value="{{$data->PostName}}" class="form-control">
        <div class="form-group">
            <label for="uname"><b>Nội Dung</b></label>
            <textarea for="uname" name="txtcontent" id="textarea-input" rows="9" placeholder="Nhập nội dung,..." class="form-control">{{$data->PostContent}}</textarea>
        </div>
        <label for="uname"><b>Mô tả</b></label><br />
        <input for="uname" type="text" id="text-input" name="txtdesc" placeholder="Nhập mô tả,..."  value="{{$data->PostDescription}}"class="form-control">

        <label for="uname"><b>Chọn loại sản phẩm</b></label><br />
          <select for="uname" name="txtCateID">';
            <?php
                foreach ($cate as $item=> $ct) {
                    if($data->CateID==$ct->id)
                    echo "<option value="."{$ct->id}"." selected="."selected".">"."{$ct->CateName}" ."</option>";
                    else echo "<option value="."{$ct->id}".">"."{$ct->CateName}" ."</option>";

                }
            ?>
        </select><br>
        <input name="id" type="text" value="{{$data->id}}">
        <label for="uname"><b>Hình ảnh</b></label><br />
        <input for="uname" type="file" id="file-input" name="file-input" class="form-control-file">


        {{-- <input id="btn_them" value="THEM" type="button"> --}}
        <div class="result" style="color:red"></div>
    </div>

    <div class="card-footer">
            <a href="{{url('/quantri/createnew/')}}"><button for="uname" type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Cập nhật
            </button></a>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Hủy
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
