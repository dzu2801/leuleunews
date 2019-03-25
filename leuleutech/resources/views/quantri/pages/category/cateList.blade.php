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
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align: center; width: 150px">Loại Danh Mục</th>
                    <th style="text-align: center; width: 250px">Mô tả</th>
                    <th style="text-align: center; width: 100px">Trạng Thái</th>
                    <th style="width: 100px"></th>

                  </tr>
                  @foreach ($listCate as $item => $data)
                    <tr>
                        <td>{{substr($data->CateName, 0, 50)}}</td>
                        {{-- <td>{{$data->PostDescription}}</td> --}}
                        <td>{{substr($data->CateDescription, 0, 100)}} ...</td>
                        <td style="text-align: center">
                            <input type="checkbox" name="status[]" value="$data->CateStatus"
                                @if (($data->CateStatus) == 1)
                                    checked
                                @else
                                    unchecked
                                @endif
                            >
                        </td>
                        {{-- <td>{{$data->}}</td> --}}
                        <td style="text-align: center"><a href="{{url ('/quantri/editcategories/'.$data->id)}}"><button>Sửa</button><a/><button>Xoá</button></td>
                        <!--<td style="text-align: center"><button>Xem</button><button>Xoá</button></td>-->
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