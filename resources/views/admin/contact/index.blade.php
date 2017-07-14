@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Contacts</h3>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2 class="m-t">联系人资料管理</h2>
                        </div>



                        <div class="col-sm-12 buttongroup">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" type="button"><i class="fa fa-check"></i>&nbsp;添加
                            </button>
                            <button class="btn btn-warning" type="button"><i class="fa fa-pencil"></i>&nbsp;修改
                            </button>
                            <button class="btn btn-default" id="constact_refresh" type="button"><i class="fa fa-refresh"></i>&nbsp;刷新
                            </button>
                            <button class="btn btn-danger" type="button"><i class="fa fa-times"></i>&nbsp;删除
                            </button>
                        </div>
                        <div class="ibox-content">

                            <div class="jqGrid_wrapper">
                                <table id="table_list_1"></table>
                                <div id="pager_list_1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Contact_Name</th>
                                <th>Mobile_Phone</th>
                                <th>Home_Phone</th>
                                <th>Office_Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}.</td>
                                    <td>{{$contact->Contact_Name}}</td>
                                    <td>{{$contact->Mobile_Phone}}</td>
                                    <td>{{$contact->Home_Phone}}</td>
                                    <td>{{$contact->Office_Phone}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <form role="form" action="/admin/users/store" method="POST">
            {{ csrf_field() }}
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">New Admin</h4>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection