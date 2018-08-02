@extends('layouts.adminapp1')

@section('head')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/bower_components/select2/dist/css/select2.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/froala_editor.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/froala_style.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/plugins/code_view.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/plugins/image_manager.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/plugins/image.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/plugins/table.css')}}">
    <link rel="stylesheet" href="{{asset('froala_editor_2.8.4/css/plugins/video.css')}}">
@endsection

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home Admin</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Daftar Berita</a></li>
        <li class="active">Input Data</li>
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
              <a href="{{('/data-kkp')}}" class="btn btn-primary">Kembali</a>
              <br>
              <br>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                @if($data != null)
                <form action="{{url('/data-kkp')}}/{{$data->id}}" method="POST" role="form" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PUT">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nama_instansi">Nama Instansi</label>
                      <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Judl Agenda" value="{{$data->nama_instansi}}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Konfirmasi</label>
                      <select id="status" name="status" class="form-control" value="{{$data->status}}">
                        <option value="0">Proses</option>
                        <option value="1">Tidak</option>
                        <option value="2">Ya</option>
                      </select>
                    </div>
                    <div id="test"></div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                @else
                <form action="{{url('/data-kkp')}}" method="POST" role="form" enctype="multipart/form-data">      
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="judul_agenda">Judul Agenda</label>
                      <input type="text" class="form-control" id="judul_agenda" name="judul_agenda" placeholder="Judl Berita">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Agenda</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="tanggal_agenda" id="datepicker">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                @endif
              </div>
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
<!-- Select2 -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('AdminLTE-2.4.5/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.5/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.5/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.5/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset('AdminLTE-2.4.5/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('AdminLTE-2.4.5/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.4.5/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-2.4.5/dist/js/demo.js')}}"></script>
<!-- Page script -->
<!-- page script -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/froala_editor.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/align.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/code_beautifier.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/code_view.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/draggable.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/image.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/image_manager.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/link.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/lists.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/paragraph_format.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/paragraph_style.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/table.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/video.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/url.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala_editor_2.8.4/js/plugins/entities.min.js')}}"></script>

  <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            // $('#edit').parents('form').on('submit', function () {
            //   console.log($('#edit').val());
            //   return false;
            // })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      });
  </script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    })

    $('#status').change(function(){

     var str = '<div class="form-group">';
         str = str + '<label for="penguji">Nama Penguji</label>';
         str = str + '<input type="text" class="form-control" id="penguji" name="penguji" placeholder="Nama Penguji" value="{{$data->penguji}}">';
         str = str + '</div>';
         str = str + '<div class="form-group">';
         str = str + '<label for="pembimbing">Nama Pembimbing</label>';
         str = str + '<input type="text" class="form-control" id="pembimbing" name="pembimbing" placeholder="Nama Pembimbing" value="{{$data->pembimbing}}">';
         str = str + '</div>';

      var str1 =  '<div class="form-group">';
          str1 = str1 + '<label for="edit">Isi Berita</label>';
          str1 = str1 + '<textarea id="edit" style="margin-top: 30px;" name="pesan" placeholder="Type some text">';
          str1 = str1 + '</textarea></div>';


      if ($('#status').val()==2) {

          $('#test').empty();     
          $('#test').append(str);

      } else if ($('#status').val()==1) {

          $('#test').empty();     
          $('#test').append(str1);
                    

        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            // $('#edit').parents('form').on('submit', function () {
            //   console.log($('#edit').val());
            //   return false;
            // })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      } else {

          $('#test').empty();     

      }

      
    });
  })


</script>
<@endsection