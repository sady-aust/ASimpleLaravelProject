@extends("admin.masteradmin")
@section("body")
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>{{Session::get('message')}}</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="bg-primary">
                                    <th>Sl No</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Name</th>
                                    <th>Product price</th>
                                    <th>Product Quantity</th>
                                    <th>Short Description</th>
                                    <th>Long Descriiption</th>
                                    <th>Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>

                                </tr>
                               @php($i=1)
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->categoryname}}</td>
                                        <td>{{$product->brandname}}</td>
                                        <td>{{$product->productname}}</td>
                                        <td>{{$product->productprice}}</td>
                                        <td>{{$product->productquantity}}</td>
                                        <td>{{$product->shortdescription}}</td>
                                        <td>{{$product->longdescription}}</td>
                                        <td>
                                            <img src="{{asset("/").$product->imagedirectory}}" alt="aImage" height="50" width="50">
                                        </td>
                                        <td>{{$product->publicationstatus==1? "Published":"Unpublished"}}</td>
                                        <td>

                                            <a href="" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                            <a href="" class="btn btn-success btn-xs">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a href="" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach


                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


    </div>
@endsection