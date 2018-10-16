@extends("admin.masteradmin")
@section("body")
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Category</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row text-center">
            {{Session::get('message')}}
            <form method="post" action="{{ route("/new-category") }}">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td>Category Name</td>
                        <td>
                            <input class="form-control" type="text" value="{{$category->categoryname}}" name="categoryname">
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <td>Category Description</td>
                        <td>
                            <textarea class="form-control" name="categorydescription" id="" cols="60" rows="10">{{$category->categorydescription}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Publication Status</td>
                        <td>

                            <input type="radio" name="publicationstatus"{{$category->publicationstatus==1?'checked':''}} class="form-control" value="1">Published
                            <input type="radio" name="publicationstatus" class="form-control" {{$category->publicationstatus==0?'checked':''}} value="0">Unpublished

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control"  type="submit" value="submit">
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