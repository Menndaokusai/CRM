@extends
("admin.layout.main")

@section("content")
    <!-- Main content -->
    <section class="content">
        {{--用户信息添加 todo--}}
        {{--<body class="gray-bg">--}}
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-sm-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>客户信息修改</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="form_basic.html#">选项1</a>
                                    </li>
                                    <li><a href="">选项2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal m-t" id="signupForm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">姓氏：</label>
                                    <div class="col-sm-8">
                                        <input id="firstname" name="firstname" class="form-control" type="text">
                                        <span class="help-block m-b-none"><i
                                                    class="fa fa-info-circle"></i> 这里写点提示的内容</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">名字：</label>
                                    <div class="col-sm-8">
                                        <input id="lastname" name="lastname" class="form-control" type="text"
                                               aria-required="true" aria-invalid="false" class="valid">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">用户名：</label>
                                    <div class="col-sm-8">
                                        <input id="username" name="username" class="form-control" type="text"
                                               aria-required="true" aria-invalid="true" class="error">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">密码：</label>
                                    <div class="col-sm-8">
                                        <input id="password" name="password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">确认密码：</label>
                                    <div class="col-sm-8">
                                        <input id="confirm_password" name="confirm_password" class="form-control"
                                               type="password">
                                        <span class="help-block m-b-none"><i
                                                    class="fa fa-info-circle"></i> 请再次输入您的密码</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-mail：</label>
                                    <div class="col-sm-8">
                                        <input id="email" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-3">
                                        <button class="btn btn-primary" type="submit">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--</body>--}}
    </section>
@endsection