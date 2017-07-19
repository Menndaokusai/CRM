@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>Tickets</B></h1>
                        <a><span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><b>新增</b></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal"  id="editForm" action="<%=path%>/com/update" method="post">
                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">标题</span>
                                            <div class="col-sm-6">
                                                <input id="Title" name="Title" class="form-control" type="text" placeholder="标题">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">客户名</span>
                                            <div class="col-sm-6">
                                                <input id="Account_Name" name="Account_Name" class="form-control" type="text" placeholder="客户名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">联系人编号</span>
                                            <div class="col-sm-6">
                                                <input id="Contact_ID" name="Contact_ID" class="form-control" type="text" placeholder="联系人ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">状态</span>
                                            <div class="col-sm-6">
                                                <input id="Status" name="Status" class="form-control" type="text" placeholder="状态">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">严重程度</span>
                                            <div class="col-sm-6">
                                                <input id="Severity" name="Severity" class="form-control" type="text" placeholder="严重程度">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">小时</span>
                                            <div class="col-sm-6">
                                                <input id="Hours" name="Hours" class="form-control" type="text" placeholder="小时">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">天</span>
                                            <div class="col-sm-6">
                                                <input id="Days" name="Days" class="form-control" type="text" placeholder="天">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">类型</span>
                                            <div class="col-sm-6">
                                                <input id="Category" name="Category" class="form-control" type="text" placeholder="类型">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">优先级</span>
                                            <div class="col-sm-6">
                                                <input id="Priority" name="Priority" class="form-control" type="text" placeholder="优先级">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">描述</span>
                                            <div class="col-sm-6">
                                                <input id="Description" name="Description" class="form-control" type="text" placeholder="描述">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">解决方案</span>
                                            <div class="col-sm-6">
                                                <input id="Solution" name="Solution" class="form-control" type="text" placeholder="解决方案">
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
                                <th>标题</th>
                                <th>客户名</th>
                                <th>状态</th>
                                <th>优先级</th>
                                <th>负责人</th>
                                <th>联系人编号</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $tickets)
                                <tr>
                                    <td>{{$tickets->Title}}</td>
                                    <td>{{$tickets->Account_Name}}</td>
                                    <td>{{$tickets->Status}}</td>
                                    <td>{{$tickets->Priority}}</td>
                                    <td>{{$tickets->Maneger}}</td>
                                    <td>{{$tickets->Contact_ID}}</td>
                                    <td>
                                        <a style="color: black;"><span class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a style="color: black;"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$tickets->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection