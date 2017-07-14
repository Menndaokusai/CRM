@extends("admin.layout.main")

@section("content")
    <section class="content">
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2 class="m-t">联系人资料管理</h2>
                        </div>



                        <div class="col-sm-12 buttongroup">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" type="button"><i class="fa fa-check"></i>&nbsp;添加
                            </button>
                            <button class="btn btn-warning" type="button"><i class="fa fa-pencil"></i>&nbsp;修改
                            </button>
                            <button class="btn btn-default" id="constact_refresh" type="button"><i class="fa fa-refresh"></i>&nbsp;刷新
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
        <form role="form" action="/admin/users/store" method="POST">
            {{ csrf_field() }}
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">New Admin</h4>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection