@extends("admin.layout.main")

@section("content")
    <section class="content">
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2 class="m-t">客户资料管理</h2>
                        </div>
                        <div class="col-sm-12 buttongroup">
                            <button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i>&nbsp;添加
                            </button>
                            <button class="btn btn-warning" type="button"><i class="fa fa-pencil"></i>&nbsp;修改
                            </button>
                            <button class="btn btn-default" type="button"><i class="fa fa-refresh"></i>&nbsp;刷新
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
                </div>
            </div>
        </div>

        <form role="form" action="/admin/users/store" method="POST"  >
            {{ csrf_field() }}
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">客户信息添加</h4>
                        </div>

                        <div class="ibox-content" >
                            <form class="form-horizontal m-t" id="signupForm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">客户姓名：</label>
                                    <div class="col-sm-8">
                                        <input id="Contactname" name="Contactname" class="form-control" type="text">

                                    </div>
                                </div>
                                <br>  <br>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">移动电话：</label>
                                    <div class="col-sm-8">
                                        <input id="Mobile_Phone" name="Mobile_Phone" class="form-control" type="text"
                                               aria-required="true" aria-invalid="false" class="valid">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">家庭电话：</label>
                                    <div class="col-sm-8">
                                        <input id="Home_Phone" name="Home_Phone" class="form-control" type="text"
                                               aria-required="true" aria-invalid="true" class="error">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">工作电话：</label>
                                    <div class="col-sm-8">
                                        <input id="Office_Phone" name="Office_Phone" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">家庭地址：</label>
                                    <div class="col-sm-8">
                                        <input id="Office_Phone" name="Office_Phone" class="form-control" type="text">

                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">工作地址：</label>
                                    <div class="col-sm-8">
                                        <input id="Work_Address" name="Work_Address" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">助理电话：</label>
                                    <div class="col-sm-8">
                                        <input id="Asst_Phone" name="Asst_Phone" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">助理名字：</label>
                                    <div class="col-sm-8">
                                        <input id="Asst_Name" name="Asst_Name" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">性别：</label>
                                    <div class="col-sm-8">
                                        <input id="Sex" name="Sex" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">工作部门：</label>
                                    <div class="col-sm-8">
                                        <input id="Department" name="Department" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">职位：</label>
                                    <div class="col-sm-8">
                                        <input id="Designation" name="Designation" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">电子邮箱：</label>
                                    <div class="col-sm-8">
                                        <input id="Email" name="Email" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">工作单位：</label>
                                    <div class="col-sm-8">
                                        <input id="Company" name="Company" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>  <br>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">负责人：</label>
                                    <div class="col-sm-8">
                                        <input id="Manager" name="Manager" class="form-control" type="text">
                                    </div>
                                </div>

                                <br>  <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">生日日期：</label>
                                    <div class="col-sm-8">
                                        <input id="Birth" name="Birth" class="form-control" type="date">
                                    </div>
                                </div>

                                <br>  <br>


                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button class="btn btn-primary" type="submit">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection