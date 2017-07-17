@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>ticket</B></h1>
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
                                            <span class="col-sm-4 control-label">联系人ID</span>
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
                                <th>id</th>
                                <th>Contact_Name</th>
                                <th>Mobile_Phone</th>
                                <th>Home_Phone</th>
                                <th>Office_Phone</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($contacts as $contact)--}}
                            {{--<tr data-toggle="modal" data-target="#myModal1">--}}
                            {{--<td>{{$contact->id}}.</td>--}}
                            {{--<td>{{$contact->Contact_Name}}</td>--}}
                            {{--<td>{{$contact->Mobile_Phone}}</td>--}}
                            {{--<td>{{$contact->Home_Phone}}</td>--}}
                            {{--<td>{{$contact->Office_Phone}}</td>--}}
                            {{--<td><button type="button" class="btn btn-default" aria-label="Left Align">--}}
                            {{--<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-default" aria-label="Left Align">--}}
                            {{--<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>--}}
                            {{--</button></td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                        {{--{{$contacts->links()}}--}}
                    </div>
                    {{--<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
                    {{--<div class="modal-dialog" role="document">--}}
                    {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                    {{--<h4 class="modal-title" id="myModalLabel"><b>詳情</b></h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                    {{--<form class="form-horizontal"  id="editForm" action="<%=path%>/com/update" method="post">--}}
                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">客户姓名</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Contactname" name="Contactname" class="form-control" type="text" placeholder="客户姓名">--}}

                    {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">移动电话</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Mobile_Phone" name="Mobile_Phone" class="form-control" type="text" placeholder="移动电话">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">家庭电话</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Home_Phone" name="Home_Phone" class="form-control" type="text" placeholder="家庭电话">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">工作电话</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Office_Phone" name="Office_Phone" class="form-control" type="text" placeholder="工作的话">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">家庭地址</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Office_Phone" name="Office_Phone" class="form-control" type="text" placeholder="家庭地址">--}}

                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">工作地址</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Work_Address" name="Work_Address" class="form-control" type="text" placeholder="工作地址">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">助理电话</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Asst_Phone" name="Asst_Phone" class="form-control" type="text" placeholder="助理电话">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">助理名字</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Asst_Name" name="Asst_Name" class="form-control" type="text" placeholder="助理姓名">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">性别</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<div class="radio">--}}
                    {{--<label>--}}
                    {{--<input type="radio" name="optionsRadios" id="optionsRadios1"--}}
                    {{--value="option1" checked> 男--}}
                    {{--</label>--}}
                    {{--<label>--}}
                    {{--<input type="radio" name="optionsRadios" id="optionsRadios2"--}}
                    {{--value="option2">--}}
                    {{--女--}}
                    {{--</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">工作部门</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Department" name="Department" class="form-control" type="text">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">职位</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Designation" name="Designation" class="form-control" type="text">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">电子邮箱</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Email" name="Email" class="form-control" type="text">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">工作单位</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Company" name="Company" class="form-control" type="text">--}}
                    {{--</div>--}}
                    {{--</div>--}}



                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">负责人</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Manager" name="Manager" class="form-control" type="text">--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="form-group">--}}
                    {{--<span class="col-sm-4 control-label">生日日期</span>--}}
                    {{--<div class="col-sm-6">--}}
                    {{--<input id="Birth" name="Birth" class="form-control" type="date">--}}

                    {{--</div>--}}
                    {{--</div>--}}




                    {{--<div class="form-group">--}}
                    {{--<div class="col-sm-8 col-sm-offset-4">--}}
                    {{--<button class="btn btn-primary btn-lg" type="submit">提交</button>--}}

                    {{--<button class="btn btn-default btn-lg" data-dismiss="modal" style="margin-left:30px">取消</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection