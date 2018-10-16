@extends("admin.masteradmin")
@section("body")
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Brand</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row text-center">
            {{Session::get('message')}}
            <form method="post" action="{{route("/editabrand")}}">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td>
                            <input type="hidden" name="id" value="{{$brand->id}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Category Name</td>
                        <td>
                            <input class="form-control" type="text" value="{{$brand->brandname}}" name="brandname">
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <td>Category Description</td>
                        <td>
                            <textarea class="form-control" name="branddescription" id="" cols="60" rows="10">{{$brand->branddescription}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Publication Status</td>
                        <td>

                            <input type="radio" name="brandstatus"{{$brand->brandstatus==1?'checked':''}} class="form-control" value="1">Published
                            <input type="radio" name="brandstatus" class="form-control" {{$brand->brandstatus==0?'checked':''}} value="0">Unpublished

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control"  type="submit" value="Edit">
                        </td>
                    </tr>


                </table>
            </form>
        </div>
        <!-- /.row -->
        <div class="row">

        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    </div>
@endsection