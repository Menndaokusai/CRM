@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title"><B>account</B></h1>
                        <a><span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         style="height: 700px;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><b>新增</b></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" id="editForm" action="%=path%/com/update" method="post">
                                        <div class="form-group">


                                            <span class="col-sm-4 control-label">客户名</span>
                                            <div class="col-sm-6">
                                                <input id="Account_Name" name="Account_Name" class="form-control" type="text" placeholder="客户名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">客户类型</span>
                                            <div class="col-sm-6">
                                                <input id="Account_Type" name="Account_Type" class="form-control" type="text" placeholder="客户类型">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">常用电话</span>
                                            <div class="col-sm-6">
                                                <input id="Primary_Phone" name="Primary_Phone" class="form-control" type="text" placeholder="常用电话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">备用电话</span>
                                            <div class="col-sm-6">
                                                <input id="Alternate_Phone" name="Alternate_Phone" class="form-control" type="text" placeholder="备用电话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">地址</span>
                                            <div class="col-sm-6">
                                                <input id="Address" name="Address" class="form-control" type="text" placeholder="地址">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">所有人</span>
                                            <div class="col-sm-6">
                                                <input id="Ownership" name="Ownership" class="form-control" type="text" placeholder="所有人">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">邮箱</span>
                                            <div class="col-sm-6">
                                                <input id="Email" name="Email" class="form-control" type="text" placeholder="邮箱">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">负责人</span>
                                            <div class="col-sm-6">
                                                <input id="Manager" name="Manager" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-4">
                                                <button class="btn btn-primary btn-lg" type="submit">提交</button>

                                                <button class="btn btn-default btn-lg" data-dismiss="modal" style="margin-left:30px">取消</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Contact_Name</th>
                                <th>Mobile_Phone</th>
                                <th>Home_Phone</th>
                                <th>Office_Phone</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                            <tr data-toggle="modal" data-target="#myModal1">
                            <td>{{$contact->id}}.</td>
                            <td>{{$contact->Contact_Name}}</td>
                            <td>{{$contact->Mobile_Phone}}</td>
                            <td>{{$contact->Home_Phone}}</td>
                            <td>{{$contact->Office_Phone}}</td>
                                <td>
                                    <a style="color: black;"><span class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    <a style="color: black;"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection