@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Contacts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Contact_Name</th>
                                <th>Mobile_Phone</th>
                                <th>Home_Phone</th>
                                <th>Office_Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}.</td>
                                    <td>{{$contact->Contact_Name}}</td>
                                    <td>{{$contact->Mobile_Phone}}</td>
                                    <td>{{$contact->Home_Phone}}</td>
                                    <td>{{$contact->Office_Phone}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection