@extends("admin.layout.main")
@section("content")
<section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/contacts/updt/{{$read->id}}}" method="post">
                    <div class="form-group">
                        <span class="col-sm-4 control-label">联系人姓名</span>
                        <div class="col-sm-6">
                            <input id="Contact_Name" name="Contact_Name" class="form-control" type="text" placeholder="联系人姓名" value="{{$read->Contact_Name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">移动电话</span>
                        <div class="col-sm-6">
                            <input id="Mobile_Phone" name="Mobile_Phone" class="form-control" type="text" placeholder="移动电话" value="{{$read->Mobile_Phone}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">家庭电话</span>
                        <div class="col-sm-6">
                            <input id="Home_Phone" name="Home_Phone" class="form-control" type="text" placeholder="家庭电话" value="{{$read->Home_Phone}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">工作电话</span>
                        <div class="col-sm-6">
                            <input id="Office_Phone" name="Office_Phone" class="form-control" type="text" placeholder="工作的话" value="{{$read->Office_Phone}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">家庭地址</span>
                        <div class="col-sm-6">
                            <input id="city" name="city" class="form-control" type="text" placeholder="家庭地址" value="{{$read->city}}">

                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">助理电话</span>
                        <div class="col-sm-6">
                            <input id="Asst_Phone" name="Asst_Phone" class="form-control" type="text" placeholder="助理电话" value="{{$read->Asst_Phone}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">助理名字</span>
                        <div class="col-sm-6">
                            <input id="Asst_Name" name="Asst_Name" class="form-control" type="text" placeholder="助理姓名" value="{{$read->Asst_Name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">性别</span>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Sex" id="Sex"
                                           value="男" checked> 男
                                </label>
                                <label>
                                    <input type="radio" name="Sex" id="Sex"
                                           value="女">
                                    女
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">工作部门</span>
                        <div class="col-sm-6">
                            <input id="Department" name="Department" class="form-control" type="text" placeholder="工作部门" value="{{$read->Department}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">职位</span>
                        <div class="col-sm-6">
                            <input id="Designation" name="Designation" class="form-control" type="text" placeholder="职位" value="{{$read->Designation}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">电子邮箱</span>
                        <div class="col-sm-6">
                            <input id="Email" name="Email" class="form-control" type="text" placeholder="电子邮箱" value="{{$read->Email}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-4 control-label">工作单位</span>
                        <div class="col-sm-6">
                            <input id="Company" name="Company" class="form-control" type="text" placeholder="工作单位" value="{{$read->Company}}">
                        </div>
                    </div>



                    <div class="form-group">
                        <span class="col-sm-4 control-label">负责人</span>
                        <div class="col-sm-6">
                            <input id="Manager" name="Manager" class="form-control" type="text" placeholder="负责人" value="{{$read->Manager}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="col-sm-4 control-label">生日日期</span>
                        <div class="col-sm-6">
                            <input id="Birth" name="Birth" class="form-control" type="date" placeholder="生日日期" value="{{$read->Birth}}">

                        </div>
                    </div>

                    {{ method_field("PUT")}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button class="btn btn-primary btn-lg" type="submit">提交</button>

                            <button class="btn btn-default btn-lg" data-dismiss="modal" style="margin-left:30px">取消</button>
                        </div>
                    </div>
                </form>
</section>
@endsection