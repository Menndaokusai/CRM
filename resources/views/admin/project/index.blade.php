@extends("admin.layout.main")

@section("content")

    <section class="content">
        <div class="wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2 class="m-t">项目任务</h2>
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
                                <table id="table_list_project"></table>
                                <div id="pager_list_project"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection