@extends('layouts.layouts-admin')
@section('title')
Admin - Newsletter
@endsection
@section('content')

  <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1><span class="table-project-n">Contact</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">NO</th>
                                                    <th data-field="nama" data-editable="true">Nama</th>
                                                    <th data-field="email" data-editable="true">Email</th>
                                                    <th data-field="subject" data-editable="true">Subject</th>
                                                    <th data-field="pesan" data-editable="true">Pesan</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contact as $n)
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{$n->nama}}</td>
                                                    <td>{{$n->email}}</td>
                                                    <td>{{$n->subject}}</td>
                                                    <td>{{$n->pesan}}</td>
                                                    <td class="datatable-ct"><a href="{{url('admin/contact/delete', $n->id)}}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection