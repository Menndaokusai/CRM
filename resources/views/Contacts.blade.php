<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- jqgrid-->
    <link href="css/jqgrid/ui.jqgrid.css" rel="stylesheet" type="text/css">

    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href="css/contacts/contacts.css" rel="stylesheet" type="text/css">


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.js"></script>

    <script src="js/plugins/jqgrid/i18n/grid.locale-cn.js?0820"></script>
    <script src="js/jqgrid/jquery.jqGrid.min.js"></script>

    <script src="js/content.js"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>
    <script src="js/plugins/validate/messages_zh.min.js"></script>

    <script src="js/demo/form-validate-demo.js"></script>


</head>
<body class="gray-bg">
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h2 class="m-t">客户资料管理</h2>
                </div>
                <div class="col-sm-12 buttongroup">
                    <button class="btn btn-primary" type="button"><i class="fa fa-check"></i>&nbsp;添加
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


{{--用户信息添加 todo--}}
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>客户信息添加</h5>
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
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 这里写点提示的内容</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">名字：</label>
                            <div class="col-sm-8">
                                <input id="lastname" name="lastname" class="form-control" type="text" aria-required="true" aria-invalid="false" class="valid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户名：</label>
                            <div class="col-sm-8">
                                <input id="username" name="username" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
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
                                <input id="confirm_password" name="confirm_password" class="form-control" type="password">
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的密码</span>
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

{{--用户信息修改 todo --}}
<body class="gray-bg">
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
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 这里写点提示的内容</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">名字：</label>
                            <div class="col-sm-8">
                                <input id="lastname" name="lastname" class="form-control" type="text" aria-required="true" aria-invalid="false" class="valid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户名：</label>
                            <div class="col-sm-8">
                                <input id="username" name="username" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
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
                                <input id="confirm_password" name="confirm_password" class="form-control" type="password">
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的密码</span>
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





</body>


{{--用户显示列表js--}}
<script>
    $(document).ready(function () {

        $.jgrid.defaults.styleUI = 'Bootstrap';
        // Examle data for jqGrid
        var mydata = [
            {
                id: "1",
                invdate: "2010-05-24",
                name: "test",
                note: "note",
                tax: "10.00",
                total: "2111.00"
            },
            {
                id: "2",
                invdate: "2010-05-25",
                name: "test2",
                note: "note2",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "3",
                invdate: "2007-09-01",
                name: "test3",
                note: "note3",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "4",
                invdate: "2007-10-04",
                name: "test",
                note: "note",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "5",
                invdate: "2007-10-05",
                name: "test2",
                note: "note2",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "6",
                invdate: "2007-09-06",
                name: "test3",
                note: "note3",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "7",
                invdate: "2007-10-04",
                name: "test",
                note: "note",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "8",
                invdate: "2007-10-03",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "21.00",
                total: "320.00"
            },
            {
                id: "9",
                invdate: "2007-09-01",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "11",
                invdate: "2007-10-01",
                name: "test",
                note: "note",
                amount: "200.00",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "12",
                invdate: "2007-10-02",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "13",
                invdate: "2007-09-01",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "14",
                invdate: "2007-10-04",
                name: "test",
                note: "note",
                amount: "200.00",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "15",
                invdate: "2007-10-05",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "16",
                invdate: "2007-09-06",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "17",
                invdate: "2007-10-04",
                name: "test",
                note: "note",
                amount: "200.00",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "18",
                invdate: "2007-10-03",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "19",
                invdate: "2007-09-01",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "21",
                invdate: "2007-10-01",
                name: "test",
                note: "note",
                amount: "200.00",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "22",
                invdate: "2007-10-02",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "23",
                invdate: "2007-09-01",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "24",
                invdate: "2007-10-04",
                name: "test",
                note: "note",
                amount: "200.00",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "25",
                invdate: "2007-10-05",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "26",
                invdate: "2007-09-06",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            },
            {
                id: "27",
                invdate: "2007-10-04",
                name: "test",
                note: "note",
                amount: "200.00",
                tax: "10.00",
                total: "210.00"
            },
            {
                id: "28",
                invdate: "2007-10-03",
                name: "test2",
                note: "note2",
                amount: "300.00",
                tax: "20.00",
                total: "320.00"
            },
            {
                id: "29",
                invdate: "2007-09-01",
                name: "test3",
                note: "note3",
                amount: "400.00",
                tax: "30.00",
                total: "430.00"
            }
        ];

        // Configuration for jqGrid Example 2
        $("#table_list_1").jqGrid({
            url:"",
            data: mydata,
            datatype: "local",
            height: 460,
            autowidth: true,
            shrinkToFit: true,
            rowNum: 13,
            rowList: [10, 20, 30],
            colNames: ['序号', '日期', '客户', '金额', '运费', '总额', '备注'],
            colModel: [
                {
                    name: 'id',
                    index: 'id',
                    editable: true,
                    width: 60,
                    sorttype: "int",
                    search: true
                },
                {
                    name: 'invdate',
                    index: 'invdate',
                    editable: true,
                    width: 90,
                    sorttype: "date",
                    formatter: "date"
                },
                {
                    name: 'name',
                    index: 'name',
                    editable: true,
                    width: 100
                },
                {
                    name: 'amount',
                    index: 'amount',
                    editable: true,
                    width: 80,
                    align: "right",
                    sorttype: "float",
                    formatter: "number"
                },
                {
                    name: 'tax',
                    index: 'tax',
                    editable: true,
                    width: 80,
                    align: "right",
                    sorttype: "float"
                },
                {
                    name: 'total',
                    index: 'total',
                    editable: true,
                    width: 80,
                    align: "right",
                    sorttype: "float"
                },
                {
                    name: 'note',
                    index: 'note',
                    editable: true,
                    width: 100,
                    sortable: false
                }
            ],
            pager: "#pager_list_1",
            viewrecords: true,
            add: true,
            edit: true,
            addtext: 'Add',
            edittext: 'Edit',
            hidegrid: false
        });


        // Add responsive to jqGrid
        $(window).bind('resize', function () {
            var width = $('.jqGrid_wrapper').width();
            $('#table_list_1').setGridWidth(width);
            $('#table_list_1').setGridWidth(width);
        });
    });
</script>

</html>