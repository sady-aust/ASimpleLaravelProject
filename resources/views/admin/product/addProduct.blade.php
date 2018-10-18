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
        <div>
            {{Session::get('message')}}
            <form method="post" action="{{route("/addaproduct")}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <table>
                    <tr>
                        <td>Category Name</td>
                        <td>
                            <select class="form-control" name="categoryid">
                                <option>-----Select a Category-----</option>
                                @foreach($categories as $category)

                                    <option value="{{$category->id}}">{{$category->categoryname}}</option>

                                 @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Brand Name</td>
                        <td>
                            <select class="form-control" name="brandid">
                                <option>-----Select a Brand-----</option>
                                @foreach($brands as $brand)

                                    <option value="{{$brand->id}}">{{$brand->brandname}}</option>

                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td>
                            <input class="form-control" type="text" name="productname">
                        </td>
                    </tr>

                    <tr>
                        <td>Product Price</td>
                        <td>
                            <input class="form-control" type="number" name="productprice">
                        </td>
                    </tr>

                    <tr>
                        <td>Product Quantity</td>
                        <td>
                            <input class="form-control" type="number" name="productquantity">
                        </td>
                    </tr>

                    <tr>

                    </tr>
                    <tr>
                        <td>Short Description</td>
                        <td>
                            <textarea class="form-control" name="shortdescription" id="" cols="60" rows="10"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Long Description</td>
                        <td>
                            <textarea class="form-control" name="longdescription" id="" cols="60" rows="10"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Product Image</td>
                        <td>
                            <input type="file" name="productimage" accept="image/*">
                        </td>
                    </tr>
                    <tr>
                        <td>Publication Status</td>
                        <td>

                            <input type="radio" name="publicationstatus" class="form-control" value="1">Published
                            <input type="radio" name="publicationstatus" class="form-control" value="0">Unpublished

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