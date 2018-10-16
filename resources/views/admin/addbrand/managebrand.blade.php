@extends("admin.masteradmin")
@section("body")
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>{{Session::get('message')}}</h3>
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Sl No</th>
                                <th>Brand Name</th>
                                <th>Brand Descriiption</th>
                                <th>Brand status</th>
                                <th>Action</th>

                            </tr>
                            @php($i=1)
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $brand->brandname }}</td>
                                    <td>{{ $brand->branddescription }}</td>
                                    <td>{{ $brand->brandstatus==1 ? "Published":'Unpublished' }}</td>

                                    <td>
                                        @if($brand->brandstatus==1)
                                            <a href="{{route("/updatestatus",["id"=>$brand->id])}}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{route("/updatestatus",["id"=>$brand->id])}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="{{route("/editbarnd",["id"=>$brand->id])}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{route("/deletebrand",["id"=>$brand->id])}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


    </div>
@endsection