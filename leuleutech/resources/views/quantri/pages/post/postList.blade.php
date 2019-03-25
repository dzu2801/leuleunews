@extends('quantri.layout.quantri')

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh Sách Bài Viết</strong>
                        <button type="button" style=" top:0.5%; right: 3% ; position: absolute;" class="btn btn-success"><a href="{{asset('quantri/taobaiviet')}}"> Tạo Bài Viết</a></button>
                    </div>
                    <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align: center; width: 150px">Tên Bài Viết</th>
                    {{-- <th>Mô tả</th> --}}
                    <th style="text-align: center; width: 250px">Nội Dung</th>
                    <th style="text-align: center; width: 120px">Ngày Tạo</th>
                    {{-- <th>Người Viết</th> --}}
                    <th style="text-align: center; width: 80px">Views</th>
                    <th style="width: 100px"></th>
                  
                  </tr>
                  @foreach ($listPost as $item => $data)
                    <tr>
                        <td>{{substr($data->PostName, 0, 50)}} ...</td>
                        {{-- <td>{{$data->PostDescription}}</td> --}}
                        <td>{{substr($data->PostContent, 0, 100)}} ...</td>
                        <td style="text-align: center">{{$data->PostDate}}</td>
                        {{-- <td>{{$data->}}</td> --}}
                        <td style="text-align: center">{{$data->PostView}}</td>
                        <td>
                            <a href="{{url('/quantri/editnews/'.$data->id)}}"><button>Xem</button></a>
                            <a href="{{url('/quantri/deletenews/'.$data->id)}}"><button>Xoá</button></a>
                        </td>
                    </tr>
                      
                  @endforeach
                </thead>
                
                </tbody>
              </table>
                    </div>
                </div>
            </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <!-- form thêm  -->
    <div id="addPost" class="modal">
        <form class="modal-content animate">
            <div class="imgcontainer1">
                <span onclick="document.getElementById('addPost').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h2>Tạo Bài Viết</h2>
            </div>
            <div class="container1">
                <label for="uname"><b>Tiêu Đề Bài Viết</b></label><br />
                <input class="title_text" type="text" required name="txttitle" x-moz-errormessage="Fill this out."><br />
                <div class="form-group">
                <label for="uname"><b>Nội Dung</b></label>                
                <textarea for="uname"class="form-control" id="content" name="txtcontent"></textarea>
                </div>
                <label for="uname"><b>Mô tả</b></label><br />
                <input class="desc_text" type="text" required name="txtdesc" x-moz-errormessage="Fill this out."><br />
                <label for="uname"><b>Hình ảnh</b></label><br />                    
                <input class="picture_text" type="text" required name="txtpicture" x-moz-errormessage="Fill this out."><br />
                
                <input id="btn_them" value="THEM" type="button">
                <div class="result" style="color:red"></div>
            </div>
            <div class="container1" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('addPost').style.display='none'" class="cancelbtn">Huỷ</button>
            </div>
        </form>
    </div>

    <script>
        // open popup
        var modal = document.getElementById('addPost');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    
        $(document).ready(function () {
            $("#btn_them").click(function () {
                var title_text1 = $('.title_text').val();
                var content_text1 = $('.content_text').val();
                var desc_text1 =$('.desc_text').val();
                var picture_text1 = $('.picture_text').val();
                $sql = "INSERT INTO posts (PostName, PostContent, PostDescription, PostPhoto)
                    VALUES ('title_text1', 'content_text1', 'desc_text1', 'picture_text1')";
                    
                });
            });
    </script>

    <script src="{{asset('admin_assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin_assets/js/main.js')}}"></script>


    <script src="{{asset('admin_assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/datatables-init.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('content').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
        CKEDITOR.replace('editor1', { customConfig: '/ckeditor/custom_config.js'});

    </script> --}}
@endsection

@section('js')
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>

            CKEDITOR.replace('content');
    </script>

@append

