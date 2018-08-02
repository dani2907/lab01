@extends('layouts.adminapp1')

@section('head')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/dist/css/skins/_all-skins.min.cs')}}s">
@endsection

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home Admin</a></li>
        <li class="active">Daftar Berita</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{('/data-berita/create')}}" class="btn btn-primary">Tambah Berita</a>
              <br>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul Berita</th>
                  <th>Top</th>
                  <th>Populer</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->judul_berita}}</td>
                  <td>{{$data->kategori_top}}</td>
                  <td>{{$data->kategori_populer}}</td>
                  <td>{{$data->gambar}}</td>
                  <td>
                    <a class="btn btn-warning" href="{{url('/data-berita')}}/{{$data->id}}/edit"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="{{ url('/data-berita') }}/{{$data->id}}" onclick="event.preventDefault();document.getElementById('form{{$data->id}}').submit();"><i class="fa fa-trash">
                    <form id="form{{$data->id}}" action="{{ url('/data-berita') }}/{{$data->id}}" method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    </i></a>
                  </td>
                </tr>
                @endforeach 
                </tbody>
                <tfoot>
                <tr>
                  <th>Judul Berita</th>
                  <th>Top</th>
                  <th>Populer</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                 </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('foot')
<!-- jQuery 3 -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.5/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.4.5/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-2.4.5/dist/js/demo.j')}}s"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
  <script>

       function hapusData(dataId){
        var deleteTr = "#tr"+dataId;
        var formId = "#form"+dataId;
        var url = $(formId).attr('action');
        var deleteDt = $(formId).serialize();

        $.ajax({
          type:"POST",
          url: url,
          data: deleteDt,    // multiple data sent using ajax
          success: function (data) {

            $(deleteTr).remove();

          }
        });

      }

      function lihatData(dataId){
        var formId = "#form"+dataId;
        var url = $(formId).attr('action');

        $.ajax({
          type:"GET",
          url: url,
          success: function (data) {

            dataConv = JSON.parse(data);
            // console.log(url);

            $('#formUpdate').attr('action', url);
            $('#formUpdate').attr('data-id', dataId);
            $('#judul_agenda').val(dataConv['judul_agenda']);
            $('#tanggal_agenda').val(dataConv['tanggal_agenda']);


          }
        });

      }

      function ubahData(){
        var url = $('#formUpdate').attr('action');
        var dataUpdate = $('#formUpdate').serialize();

        $.ajax({
          type:"POST",
          url: url,
          data: dataUpdate,    // multiple data sent using ajax
          success: function (data) {
            var dataConv = JSON.parse(data);

            console.log(dataConv);

            var tdJA = '#tdJudulAgenda'+ $('#formUpdate').attr('data-id');
            var tdTA = '#tdTanggalAgenda'+ $('#formUpdate').attr('data-id');

            $(tdJA).text(dataConv['judul_agenda']);
            $(tdTA).text(dataConv['tanggal_agenda']);

          }
        });        

      }
  </script>
@endsection