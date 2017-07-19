@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>campaign</B></h1>
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
                                            <span class="col-sm-4 control-label">营销活动名</span>
                                            <div class="col-sm-6">
                                                <input id="Campaign_Name" name="Campaign_Name" class="form-control" type="text" placeholder="营销活动名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">状态</span>
                                            <div class="col-sm-6">
                                                <input id="Status" name="Status" class="form-control" type="text" placeholder="状态">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">类型</span>
                                            <div class="col-sm-6">
                                                <input id="Type" name="Type" class="form-control" type="text" placeholder="类型">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期结束日期</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_Close_Date" name="Expected_Close_Date" class="form-control" type="text" placeholder="预期结束日期">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">主办方</span>
                                            <div class="col-sm-6">
                                                <input id="Sponsor" name="Sponsor" class="form-control" type="text" placeholder="主办方">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">目标受众</span>
                                            <div class="col-sm-6">
                                                <input id="Target_Audience" name="Target_Audience" class="form-control" type="text" placeholder="目标受众">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">规模</span>
                                            <div class="col-sm-6">
                                                <input id="Target_Size" name="Target_Size" class="form-control" type="text" placeholder="规模">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">寄送数量</span>
                                            <div class="col-sm-6">
                                                <input id="Num_Sent" name="Num_Sent" class="form-control" type="text" placeholder="寄送数量">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预算成本</span>
                                            <div class="col-sm-6">
                                                <input id="Budget_Cost" name="Budget_Cost" class="form-control" type="text" placeholder="预算成本">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">实际成本</span>
                                            <div class="col-sm-6">
                                                <input id="Actual_Cost" name="Actual_Cost" class="form-control" type="text" placeholder="实际成本">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期响应</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_Response" name="Expected_Response" class="form-control" type="text" placeholder="预期响应">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期收益</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_Revenue" name="Expected_Revenue" class="form-control" type="text" placeholder="预期收益">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期销售数量</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_Sales_Count" name="Expected_Sales_Count" class="form-control" type="text" placeholder="预期销售数量">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">实际销售数量</span>
                                            <div class="col-sm-6">
                                                <input id="Actual_Sales_Count" name="Actual_Sales_Count" class="form-control" type="text" placeholder="实际销售数量">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期响应数量</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_Response_Count" name="Expected_Response_Count" class="form-control" type="text" placeholder="预期响应数量">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">实际响应数量</span>
                                            <div class="col-sm-6">
                                                <input id="Actual_Response_Count" name="Actual_Response_Count" class="form-control" type="text" placeholder="实际响应数量">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期投资回报率</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_ROI" name="Expected_ROI" class="form-control" type="text" placeholder="预期投资回报率">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">实际投资回报率</span>
                                            <div class="col-sm-6">
                                                <input id="Actual_ROI" name="Actual_ROI" class="form-control" type="text" placeholder="实际投资回报率">
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