@extends("front-end.master")
@section("body")
    <div class="text-center">
        My Shopping Cart
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @php($i=1)
        @foreach($cartItems as $cartItem)

            <tr>
                <td scope="row">{{$i++}}</td>
                <td>{{$cartItem["productName"]}}</td>
               <td> <img src="{{$cartItem["image"]}}" width="50" height="50"></td>
                <td>{{($cartItem["price"])}}</td>
                <td>{{$cartItem["quantity"]}}</td>

                <td>
                    <a>Delete</a>
                </td>

            </tr>

            @endforeach

        </tbody>


    </table>

<a class="btn btn-success" href="{{route("/sendconfirmationmail")}}">Confirmation</a>
@endsection