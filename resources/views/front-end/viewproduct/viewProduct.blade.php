@extends("front-end.master")
@section("body")
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Single</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="single-grids">
                    <div class="col-md-9 single-grid">
                        <div clas="single-top">
                            <div class="single-left">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="{{asset($product->imagedirectory)}}">
                                            <div class="thumb-image"> <img src="{{asset($product->imagedirectory)}}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{asset($product->imagedirectory)}}">
                                            <div class="thumb-image"> <img src="{{asset($product->imagedirectory)}}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{asset($product->imagedirectory)}}">
                                            <div class="thumb-image"> <img src="{{asset($product->imagedirectory)}}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-right simpleCart_shelfItem">
                                <h4>{{$product->productname}}</h4>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <p class="price item_price">TK: {{$product->productprice}}</p>
                                <div class="description">
                                    <p><span>Quick Overview : </span> {{$product->longdescription}}</p>
                                </div>
                                <form action="{{route("/add-to-cart")}}" method="post">
                                    {{csrf_field()}}
                                    <div class="color-quality">
                                        <h6>Quantity :</h6>
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <input type="number" min="1" name="quantity" id="quantity">
                                                <input type="hidden" value="{{$product->id}}" name="productid" id="productid">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="women">
                                        <span class="size">XL / XXL / S </span>
                                       <input type="submit" name="submit" value="Add To cart">
                                    </div>
                                </form>

                                <div class="social-icon">
                                    <a href="#"><i class="icon"></i></a>
                                    <a href="#"><i class="icon1"></i></a>
                                    <a href="#"><i class="icon2"></i></a>
                                    <a href="#"><i class="icon3"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 single-grid1">
                        <h3>Recent Products</h3>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset($product->imagedirectory)}}" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"> $ 29.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r1.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"> $ 19.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r2.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"> $ 19.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r3.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1">$ 45.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--Product Description-->
                <div class="product-w3agile">
                    <h3 class="tittle1">Product Description</h3>
                    <div class="product-grids">
                        <div class="col-md-4 product-grid">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 29.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r1.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r2.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r3.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1">$ 45.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r4.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 29.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r5.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r2.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset("/")}}front-end/images/r3.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1">$ 45.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <img class="img-responsive " src="{{asset("/")}}front-end/images/woo2.jpg" alt="">
                        </div>
                        <div class="col-md-8 product-grid1">
                            <div class="tab-wl3">
                                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                        <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div class="descr">
                                                <h4>Suspendisse laoreet, augue vel mattis </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                <div class="video">
                                                    <iframe src="https://player.vimeo.com/video/22158502" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                                <ul>
                                                    <li> Twin button front fastening</li>
                                                    <li> Length:65cm</li>
                                                    <li> Regular fit</li>
                                                    <li> Notched lapels</li>
                                                    <li> Internal pockets</li>
                                                    <li> Centre-back vent </li>
                                                    <li> Material : Outer: 40% Linen &amp; 40% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate</li>
                                                </ul>
                                                <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                            <div class="descr">
                                                <div class="reviews-top">
                                                    <div class="reviews-left">
                                                        <img src="{{asset("/")}}front-end/images/men3.jpg" alt=" " class="img-responsive">
                                                    </div>
                                                    <div class="reviews-right">
                                                        <ul>
                                                            <li><a href="#">Admin</a></li>
                                                            <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                        </ul>
                                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="reviews-bottom">
                                                    <h4>Add Reviews</h4>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                    <p>Your Rating</p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
                                                    </div>
                                                    <form action="#" method="post">
                                                        <label>Your Review </label>
                                                        <textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                                        <div class="row">
                                                            <div class="col-md-6 row-grid">
                                                                <label>Name</label>
                                                                <input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                                            </div>
                                                            <div class="col-md-6 row-grid">
                                                                <label>Email</label>
                                                                <input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <input type="submit" value="SEND">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--Product Description-->
            </div>
        </div>

    </div>
    <!--//End-rate-->
    <link href="{{asset("/")}}/front-end/css/owl.carousel.css" rel="stylesheet">
    <script src="{{asset("/")}}/front-end/js/owl.carousel.js"></script>
    <script defer src="{{asset("/")}}/front-end/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="{{asset("/")}}/front-end/css/flexslider.css" type="text/css" media="screen" />
    <script src="{{asset("/")}}/front-end/js/imagezoom.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
            });
        });
    </script>
    <!--content-->
    @endsection