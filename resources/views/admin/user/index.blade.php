@extends("admin.layout.main")

@section("content")
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">用户列表</h3>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        添加管理員
                    </button>
                    <form role="form" action="/admin/users/store" method="POST">
                        {{ csrf_field() }}
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">New Admin</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label" >用户名:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label" >密码:</label>
                                            <input type="password" class="form-control" id="message-text" name="password">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                    <button type="submit" class="btn btn-primary">添加</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        </form>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">id</th>
                                <th>用户名称</th>
                                <th>操作选项</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}.</td>
                                    <td>{{$user->name}}</td>
                                    @if($user->count()==1)
                                    <td>
                                        无法删除
                                    </td>
                                    @elseif($user->count()!=1)
                                    <td>
                                        <a type="button" class="btn" href="/admin/users/del/{{ $user->id }}" >删除</a>
                                    </td>
                                        @endif
                                </tr>
                            @endforeach
                            {{$users->links()}}
                            </tbody></table>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection