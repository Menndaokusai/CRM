@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>Campaigns</B></h1>
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
                                    <form class="form-horizontal"  id="editForm" action="">
                                       <div class="form-group">
                                            <span class="col-sm-4 control-label">营销活动名</span>
                                            <div class="col-sm-6">
                                                <input id="Campaign_Name" name="Campaign_Name" class="form-control" type="text" placeholder="营销活动名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">状态</span>
                                            <div class="col-sm-6">
                                                <select id="select"   style="width: 260px; height: 30px; overflow-y:auto" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="营销中">营销中</option>
                                                    <option value="待定中">待定中</option>
                                                    <option value="已结束">已结束</option>
                                                    <option value="其他">其他</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">类型</span>
                                            <div class="col-sm-6">

                                                   <select id="select"   style="width: 260px; height: 30px; overflow-y:auto" >
                                                       <option value="请选择">请选择</option>
                                                       <option value="互动型活动">互动型活动</option>
                                                       <option value="猎奇型活动">猎奇型活动</option>
                                                       <option value="体验型活动">体验型活动</option>
                                                       <option value="认同型活动">认同型活动</option>
                                                       <option value="隐私型活动">隐私型活动</option>
                                                   </select>
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
                                <th>营销活动名</th>
                                <th>类型</th>
                                <th>状态</th>
                                <th>预期收益</th>
                                <th>预期结束日期</th>
                                <th>负责人</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($campaigns as $campaigns)
                                <tr>
                                    <td>{{$campaigns->Campaign_Name}}</td>
                                    <td>{{$campaigns->Type}}</td>
                                    <td>{{$campaigns->Status}}</td>
                                    <td>{{$campaigns->Expected_Revenue}}</td>
                                    <td>{{$campaigns->Expected_Close_Date}}</td>
                                    <td>{{$campaigns->Manager}}</td>
                                    <td>
                                        <a style="color: black;"><span class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a style="color: black;"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$campaigns->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




