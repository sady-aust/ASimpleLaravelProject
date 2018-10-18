@extends("admin.masteradmin")
@section("body")
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Brand</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row text-center">
            {{--{{Form::open()}}
                {{Form::label('Brand Name', 'Brand Name', ['class' => ''])}}
                {{Form::text('Brand Name','',['class' => 'form-control'])}}
            {{Form::close()}}--}}
            {{Session::get('message')}}
            <form method="post" action="{{route("/addabrand")}}">
                {{ csrf_field() }}

                <table>
                    <tr>
                        <td>Brand Name</td>
                        <td>
                            <input class="form-control" type="text" name="brandname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>
                                {{$errors->has('brandname')?$errors->first('brandname'):' '}}
                            </span>
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <td>Brand Description</td>
                        <td>
                            <textarea class="form-control" name="branddescription" id="" cols="60" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Brand Status</td>
                        <td>

                            <input type="radio" name="brandstatus" class="form-control" value="1">Published
                            <input type="radio" name="brandstatus" class="form-control" value="0">Unpublished

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