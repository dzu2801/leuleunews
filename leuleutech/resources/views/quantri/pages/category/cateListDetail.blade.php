@extends('quantri.layout.quantri')

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh Mục</strong>
                    </div>
                    <div class="card-body">
                    @foreach ($cate as $item => $data)
                    @endforeach

                    <form method="post" enctype="multipart/form-data" action="{{url('quantri/updatecate')}}">
                    {{csrf_field()}}
                    <div class="container">
                        <input name="id" type="text" value="{{$data->id}}" hidden="true">
                        <label for="uname"><b>Loại Danh Mục</b></label><br />
                        <input for="uname" type="text" name="txtcatename" placeholder="Nhập tên loại" value="{{$data->CateName}}" class="form-control">
                        <label for="uname"><b>Mô Tả</b></label><br />
                        <textarea for="uname" name="txtcontent" id="textarea-input" rows="3" placeholder="Nhập nội dung,..." class="form-control">{{$data->CateDescription}}</textarea>
                        <label for="uname"><b>Trạng Thái</b></label><br />
                        <input type="checkbox" id="status" name="status" value="$data->CateStatus"
                                @if ($data->CateStatus) == 1)
                                    checked
                                @else
                                    unchecked
                                @endif
                            >

                         </br>
                    </div>
                         <div class="card-footer">
                            <button for="uname" type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Cập nhật
                            </button>
                            <a href="{{url('/quantri/dsdanhmuc')}}">
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Hủy
                            </button>
                            </a>
                         </div>        
    
                        
                        <!--<td style="text-align: center"><button>Xem</button><button>Xoá</button></td>-->
              </form>
                    </div>
                </div>
            </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <script src="admin_assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="admin_assets/js/popper.min.js"></script>
    <script src="admin_assets/js/plugins.js"></script>
    <script src="admin_assets/js/main.js"></script>


    <script src="admin_assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin_assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="admin_assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin_assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="admin_assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin_assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin_assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin_assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin_assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin_assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="admin_assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

@endsection