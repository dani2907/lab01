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
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.5/dist/css/skins/_all-skins.min.cs')}}s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
              <a href="{{('/data-berita')}}" class="btn btn-primary">Kembali</a>
              <br>
              <br>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                @if($data != null)
                <form action="{{url('/data-berita')}}/{{$data->id}}" method="POST" role="form" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PUT">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="judul_berita">Judul Berita</label>
                      <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judl Berita" value="{{$data->judul_berita}}">
                    </div>
                    <div class="form-group">
                      <label>
                        <input class="flat-red" type="checkbox" id="kategori_populer" name="kategori_populer" value="1"> Kategori Populer
                      </label>
                      <label>
                        <input class="flat-red" type="checkbox" id="kategori_top" name="kategori_top" value="1">  Kategori Top
                      </label>
                    </div>
                    <div class="form-group">
                      <label for="edit">Isi Berita</label>
                      <textarea id='edit' style="margin-top: 30px;" name="isi_berita" placeholder="Type some text">
                      {{$data->isi_berita}}
                      </textarea>
                   </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                @else
                <form action="{{url('/data-berita')}}" method="POST" role="form" enctype="multipart/form-data">
                  
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="judul_berita">Judul Berita</label>
                      <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judl Berita">
                    </div>
                    <div class="form-group">
                      <label for="gambar">File input</label>
                      <input type="file" id="gambar" name="gambar">

                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="form-group">
                      <label>
                        <input class="flat-red" type="checkbox" id="kategori_populer" name="kategori_populer" value="1"> Kategori Populer
                      </label>
                      <label>
                        <input class="flat-red" type="checkbox" id="kategori_top" name="kategori_top" value="1">  Kategori Top
                      </label>
                    </div>
                    <div class="form-group">
                      <label for="edit">Isi Berita</label>
                      <textarea id='edit' style="margin-top: 30px;" name="isi_berita" placeholder="Type some text">
                      </textarea>
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
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    })

    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  })
</script>
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
@endsection