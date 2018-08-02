@extends('layouts.adminapp')

@section('style')
@endsection

@section('content')
            <ul class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Konfirmasi Judul Skripsi</a>
                </li>
            </ul>
            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-content">
                            <h3>Daftar Skripsi</h3>
                            <hr>
                            <div>
                                
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th><center>Actions</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>David R</td>
                                            <td class="center">2012/01/01</td>
                                            <td class="center">Member</td>
                                            <td class="center">
                                                <span class="label-success label label-default">Active</span>
                                            </td>
                                            <td class="center">
                                                <center>
                                                    <a class="btn btn-info" href="#">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>                                                
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chris Jack</td>
                                            <td class="center">2012/01/01</td>
                                            <td class="center">Member</td>
                                            <td class="center">
                                                <span class="label-success label label-default">Active</span>
                                            </td>
                                            <td class="center">
                                                <center>
                                                    <a class="btn btn-info" href="#">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>                                                
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jack Chris</td>
                                            <td class="center">2012/01/01</td>
                                            <td class="center">Member</td>
                                            <td class="center">
                                                <span class="label-success label label-default">Active</span>
                                            </td>
                                            <td class="center">
                                                <center>
                                                    <a class="btn btn-info" href="#">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>                                                
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Muhammad Usman</td>
                                            <td class="center">2012/01/01</td>
                                            <td class="center">Member</td>
                                            <td class="center">
                                                <span class="label-success label label-default">Active</span>
                                            </td>
                                            <td class="center">
                                                <center>
                                                    <a class="btn btn-info" href="#">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>                                                
                                                </center>
                                            </td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/span-->

            </div><!--/row-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <div id="editor">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection