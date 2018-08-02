@extends('layouts.adminapp')

@section('style')
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
            <ul class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Registrasi Member</a>
                </li>
            </ul>
            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-content">
                            <h3>Daftar Penguman</h3>
                            <hr>
                            <div>
                                
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Emal</th>
                                            <th>Status</th>
                                            <th>Admin</th>
                                            <th><center>Actions</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            <td class="center">{{$data->name}}</td>
                                            <td class="center">{{$data->email}}</td>
                                            <td class="center">{{$data->status}}</td>
                                            <td class="center">
                                              <div id="lbl-status">
                                                @if($data->admin == 1)
                                                  <span class="label-success label label-default">YA</span>
                                                @else
                                                  <span class="label-danger label label-default">TIDAK</span>
                                                @endif                                                
                                              </div>
                                            </td>
                                            <td class="center">
                                                <center>
                                                  <div class="btn-group">
                                                      <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                          <span class="hidden-sm hidden-xs">Pilih</span>
                                                          <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li>
                                                            <a href="#" onclick="update('1','#form1{{$data->id}}')">
                                                                {{ __('Ya') }}
                                                            </a>
                                                            <form id="form1{{$data->id}}" action="{{ url('registrasimember') }}/{{$data->id}}" method="POST" style="display: none;">
                                                                <input type="hidden" name="_method" value="PUT">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="admin" value="1">
                                                            </form>
                                                          </li>
                                                          <li>
                                                            <a href="#" onclick="update('2','#form2{{$data->id}}')">
                                                                {{ __('Tidak') }}
                                                            </a>
                                                            <form id="form2{{$data->id}}" action="{{ url('registrasimember') }}/{{$data->id}}" method="POST" style="display: none;">
                                                                <input type="hidden" name="_method" value="PUT">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="admin" value="0">
                                                            </form>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                </center>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/span-->

            </div><!--/row-->


@endsection

@section('script')
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
            $('#edit').parents('form').on('submit', function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      });

      function update(data1,dtTable){
        var dataStatus = "";
        var forAdmin = "";
        var url = "";
        if (data1==1) {
          dataStatus = $(dtTable).serialize();
          url = $(dtTable).attr('action');
          forAdmin = '<span class="label-success label label-default">YA</span>';
        } else {
          dataStatus = $(dtTable).serialize();
          url = $(dtTable).attr('action');
          forAdmin = '<span class="label-danger label label-default">TIDAK</span>';
        }

        $.ajax({
          type:"POST",
          url: url,
          data: dataStatus,    // multiple data sent using ajax
          success: function (data) {

            $('#lbl-status').empty();
            $('#lbl-status').append(forAdmin);

          }
        });

      }
  </script>
@endsection