@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Nexcom - Internet Services
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- put styling here -->
@stop

@section('content')

<!-- Start Bradcaump area -->
<div class="pr__bradcaump__area pr__bradcaump__home bg-image--home_2">
    <div class="container">
        <div class="row">
                @foreach($posts as $post)
                    @if($post['id']==71)
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                    {!!$post['title']!!}
                    <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                    <p style="line-height: 40px;"><span style="font-size: 16px;">{!!$post['description']!!}</span></p>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
    <br>
<div class="tec_page">
    <div class="top_main_container">
        <div class="container">
            <div class="signIn_bar ">
            @foreach($posts as $post)
                    @if($post['id']==72)
                <ul id="top_nav_ul " class="row ">
                    <li class="nav-item">
                        <div class="tec_history">
                                {!!$post['title']!!}
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="wishlist">
                        {!!$post['description']!!}
                        </div>
                    </li>
                    <li class="nav-item user_nav_item ">
                        {!!$post['description2']!!}
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/user_signIn">Sign In</a>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/tecshop_register">Sign Up</a>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item"  href="/user_signOut">Log Out</a>
                        </div>
                    </li>
                </ul>
                @endif
            @endforeach
            </div>
            <div class="header_block row">
                <div id="browse_category" class="col-md-8 col-xs-12 subcats_imgs">
                @foreach($posts as $post)
                    @if($post['id']==73)
                    <div class="cat_item">
                        {!!$post['title']!!}
                    </div>
                    <div class="cat_item">
                    {!!$post['description']!!}
                    </div>
                    <div class="cat_item">
                    {!!$post['description2']!!}
                    </div>
                    <div class="cat_item">
                    {!!$post['description3']!!}
                    </div>
                    @endif
                @endforeach
                </div>
                <div class="col-md-4 col-xs-12 header_action">
                    <div class="search_site">
                        <form id="frm" name="quick_find" action="/tec_search" method="get" class="form_search_site">
                            <input type="search" id="search" class="search_site_input ac_input" placeholder="Quick find" name="search"  autocomplete="on">
                            <button type="submit" class="search_site_submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                        <!-- SHOPPING CART -->
                    <div class="basket" id="divShoppingCard">
                        <div id="shopping_cart_box">
                            <a href="" id="cart" onclick=fetchRecord() class="img_basket popup_cart" data-toggle="modal" data-target="#shoppingCartModal"><i class="fas fa fa-shopping-cart fa-lg"></i>
                                <span class="cart-basket d-flex align-items-center justify-content-center" id="counter"></span>
                            </a>
                        </div>
                    </div>
                        <!-- END SHOPPING CART -->
                </div>
            </div>
        </div>
    </div>

    <hr class="card_hr">

    <!-- First Section -->
    <div   div id="card_slide" class="container-fluid">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">
            <!--Controls-->
            <div class=" controls_top">
                <a id="btn_prev" class="left carousel-control-prev float-left" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left prev_fa"></i></a>
                <a id="btn_next" class="right carousel-control-next float-right" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right next_fa"></i></a>
            </div>
            <!--/.Controls-->
            <br>
            <!--Indicators-->
            <ol class="carousel-indicators carousel_indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
            </ol>
            <!--/.Indicators-->
            <br>
                @foreach($posts as $post)
                    @if($post['id']==74)
                        {!!$post['title']!!}
                        {!!$post['description']!!}
                    @endif
                @endforeach

            <br>   <!--Slides-->
            <div id="carousel_inner" class="carousel-inner row" role="listbox">
                <!--First slide-->
                <div class="carousel-item carousel_item active">
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2 border-0 card_active">
                            @foreach($posts as $post)
                            @if($post['id']==79)
                            {!! $post['title'] !!}
                                <div class="card-body"id="card_body_1">
                                    <h2 class="card-title"  style="color:white;">{!! $post['description'] !!}</h2>
                                    <!-- <p class="card-text" style="color:white;">Additional Text</p> -->
                                    <!-- <a class="btn btn-success" style="color:white;">Order Now</a> -->
                                </div>
                            @endif
                            @endforeach

                        </div>
                    </div>

                    <!-- @foreach($products as $product)

                    @foreach($items as $item)

                    <div class="col-md-3" style="float:left">
                        <div class="card tec_card mb-2 border-0">
                            <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $product->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            <img class="card-img-top card_img" src="{{ $item['title'] }}" style="width:200px; height:250px">
                            <div class="card-body card_body">
                                <input type="hidden" id="dataId" name="dataId" value="{{ $product->id }}">
                                <h4 class="card-title">{{ $item['description'] }}</h4>
                                <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                                <div class="card-footer">
                                    <button type="button" id="send_data"   onclick="postRecord('{{ $product->id }}')" class="btn btn-primary add_data" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endforeach -->
                @foreach($items as $item)
                @if($item['id']==80)         
                    <div class="col-md-3" style="float:left">
                        <div class="card tec_card mb-2 border-0">
                            <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            {!! $item['title'] !!}
                            <div class="card-body card_body">
                                <h4 class="card-title">{{ $item['description'] }}</h4>
                                <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                                <div class="card-footer">
                                    <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{ $item->id }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach


            @foreach($items as $item)
            @if($item['id']==81)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach



            @foreach($items as $item)
            @if($item['id']==82)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">
            @foreach($items as $item)
            @if($item['id']==83)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==84)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==85)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
                </div>
                <!--/.Second slide-->
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

    <!--/. End of First Section -->

    <br><br><br>
    <hr class="card_hr">


<!--Second Section -->
<div id="card_slide" class="container-fluid">
    <!--Carousel Wrapper-->
    <!-- <div class="col-12 text-center">
                <h3 class="mb-3">Accessories  </h3>
    </div> -->
    <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">


    <!--Controls-->
    <div class=" controls_top">
        <a id="btn_prev" class="left carousel-control-prev float-left" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left prev_fa"></i></a>
        <a id="btn_next" class="right carousel-control-next float-right" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-right next_fa"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators carousel_indicators">
        <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example2" data-slide-to="1"></li>
        <li data-target="#multi-item-example2" data-slide-to="2"></li>
        <li data-target="#multi-item-example2" data-slide-to="3"></li>
        <li data-target="#multi-item-example2" data-slide-to="4"></li>
    </ol>
    <!--/.Indicators-->
    <br>

                @foreach($posts as $post)
                    @if($post['id']==75)
                        {!!$post['title']!!}
                        {!!$post['description']!!}
                    @endif
                @endforeach

        <ul id="featured-10" class="nav nav-tabs nav_tabs ">
        @foreach($posts as $post)
                    @if($post['id']==78)
            <li class="nav-item  active">
                <a class="nav-link nav_link " data-toggle="tab" data-target="#Example2a" href="#category-tab-1">{!!$post['title']!!}</a>
            </li>
            @endif
                @endforeach

                @foreach($posts as $post)
                    @if($post['id']==78)
            <li class="nav-item nav_link">
                <a class="nav-link "  data-toggle="tab" data-target="#Example2b" href="#category-tab-2">{!!$post['description']!!}</a>
            </li>
            @endif
                @endforeach

                @foreach($posts as $post)
                    @if($post['id']==78)
            <li class="nav-item">
                <a class="nav-link nav_link "  data-toggle="tab" data-target="#Example2c" href="#category-tab-3">{!!$post['description2']!!}</a>
            </li>
            @endif
                @endforeach

                @foreach($posts as $post)
                    @if($post['id']==78)
            <li class="nav-item">
                <a class="nav-link nav_link"  data-toggle="tab" data-target="#Example2d" href="#category-tab-4">{!!$post['description3']!!}</a>
            </li>
            @endif
                @endforeach
            <li class="nav-item ">
                <a class="nav-link nav_link "  data-toggle="tab" data-target="#Example2e" href="#category-tab-5"><p class="nav-pills">Smart Speakers</p></a>
            </li>
        </ul>
    <br>
    <!--Slides-->
    <div id="carousel_inner" class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active" id="Example2a">

        <div class="col-md-3" style="float:left">
            <div class="card mb-2 border-0 card_active">
            @foreach($posts as $post)
            @if($post['id']==124)
            {!! $post['title'] !!}

                <div class="card-body"id="card_body_1">
                    <h2 class="card-title"  style="color:white;">{!! $post['description'] !!}</h2>
                    <!-- <p class="card-text" style="color:white;">Additional Text</p> -->
                    <!-- <a class="btn btn-success" style="color:white;">Order Now</a> -->
                </div>
            @endif
            @endforeach
            </div>
        </div>

        @foreach($items as $item)
            @if($item['id']==86)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==87)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==88)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item" id="Example2b">

            @foreach($items as $item)
            @if($item['id']==89)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==90)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==91)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


        @foreach($items as $item)
            @if($item['id']==92)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

        </div>
        <!--/.Second slide-->

             <!--Third slide-->
             <div class="carousel-item" id="Example2c">

            @foreach($items as $item)
            @if($item['id']==93)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach



           @foreach($items as $item)
            @if($item['id']==94)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach



               @foreach($items as $item)
            @if($item['id']==95)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==96)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
                </div>
            <!--/.third slide-->

            <!--Fourth slide-->
            <div class="carousel-item" id="Example2d">

           @foreach($items as $item)
            @if($item['id']==97)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==98)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==99)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==100)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            </div>
            <!--/.Fourth slide-->

            <!--Fifth slide-->
            <div class="carousel-item" id="Example2e">

            @foreach($items as $item)
            @if($item['id']==101)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==102)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


           @foreach($items as $item)
            @if($item['id']==103)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==104)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
        </div>
            <!--/.Fifth slide-->

    </div>
    <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

</div>

<!--/. End of Second Section -->

<hr class="card_hr">


<!-- Third Section -->
<div id="card_slide" class="container-fluid">
    <!--Carousel Wrapper-->
    <!-- <div class="col-12 text-center">
                <h3 class="mb-3">Accessories  </h3>
    </div> -->
    <div id="multi-item-example3" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">


    <!--Controls-->
    <div class=" controls_top">
        <a id="btn_prev" class="left carousel-control-prev float-left" href="#multi-item-example3" data-slide="prev"><i class="fa fa-chevron-left prev_fa"></i></a>
        <a id="btn_next" class="right carousel-control-next float-right" href="#multi-item-example3" data-slide="next"><i class="fa fa-chevron-right next_fa"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators carousel_indicators">
        <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example3" data-slide-to="1"></li>

    </ol>
    <!--/.Indicators-->
    <br>

    <br>
        @foreach($posts as $post)
            @if($post['id']==76)
                {!!$post['title']!!}
                {!!$post['description']!!}
            @endif
        @endforeach
    <!--Slides-->
    <div id="carousel_inner" class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

        <div class="col-md-3" style="float:left">
            <div class="card mb-2 border-0 card_active">
            @foreach($posts as $post)
            @if($post['id']==123)
            {!! $post['title'] !!}

                <div class="card-body"id="card_body_1">
                    <h2 class="card-title"  style="color:white;">{!! $post['description'] !!}</h2>
                    <!-- <p class="card-text" style="color:white;">Additional Text</p> -->
                    <!-- <a class="btn btn-success" style="color:white;">Order Now</a> -->
                </div>
                @endif
            @endforeach
            </div>
        </div>

            @foreach($items as $item)
            @if($item['id']==105)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach



            @foreach($items as $item)
            @if($item['id']==106)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==107)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

       @foreach($items as $item)
        @if($item['id']==108)
            <div class="col-md-3" style="float:left">
                <div class="card tec_card mb-2 border-0">
                    <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    {!! $item['title'] !!}
                    <div class="card-body card_body">
                        <h4 class="card-title">{{ $item['description'] }}</h4>
                        <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                        <div class="card-footer">
                            <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @endforeach

            @foreach($items as $item)
            @if($item['id']==109)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==110)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==111)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

        </div>
        <!--/.Second slide-->

    </div>
    <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

</div>

<!--/. End of Third Section -->

<hr class="card_hr">


<!-- Fourth Section -->
<div id="card_slide" class="container-fluid">
    <!--Carousel Wrapper-->
    <!-- <div class="col-12 text-center">
                <h3 class="mb-3">Accessories  </h3>
    </div> -->
    <div id="multi-item-example4" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">


    <!--Controls-->
    <div class=" controls_top">
        <a id="btn_prev" class="left carousel-control-prev float-left" href="#multi-item-example4" data-slide="prev"><i class="fa fa-chevron-left prev_fa"></i></a>
        <a id="btn_next" class="right carousel-control-next float-right" href="#multi-item-example4" data-slide="next"><i class="fa fa-chevron-right next_fa"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators carousel_indicators">
        <li data-target="#multi-item-example4" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example4" data-slide-to="1"></li>

    </ol>
    <!--/.Indicators-->
    <br>

    <br>
        @foreach($posts as $post)
            @if($post['id']==77)
                {!!$post['title']!!}
                {!!$post['description']!!}
            @endif
        @endforeach
    <!--Slides-->
    <div id="carousel_inner" class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

        <div class="col-md-3" style="float:left">
            <div class="card mb-2 border-0 card_active">
            @foreach($posts as $post)
            @if($post['id']==122)
            {!! $post['title'] !!}
                <div class="card-body"id="card_body_1">
                    <h2 class="card-title"  style="color:white;">{!! $post['description'] !!}</h2>
                    <!-- <p class="card-text" style="color:white;">Additional Text</p> -->
                    <!-- <a class="btn btn-success" style="color:white;">Order Now</a> -->
                </div>
                @endif
            @endforeach
            </div>
        </div>

            @foreach($items as $item)
            @if($item['id']==112)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==113)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==114)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

            @foreach($items as $item)
            @if($item['id']==115)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


            @foreach($items as $item)
            @if($item['id']==116)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==117)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

            @foreach($items as $item)
            @if($item['id']==118)
                <div class="col-md-3" style="float:left">
                    <div class="card tec_card mb-2 border-0">
                        <a href="javascript:void(0)" type="button" class="card_wishlist" onclick="addToWishlist('{{ $item->id }}')" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        {!! $item['title'] !!}
                        <div class="card-body card_body">
                            <h4 class="card-title">{{ $item['description'] }}</h4>
                            <p class="card-text" style="color:black;">Ksh {{ $item['description2'] }}</p>
                            <div class="card-footer">
                                <button type="button"  class="btn btn-primary add_data" onclick="postRecord('{{$item->id  }}')" style="color:white;" ><i class="fa fa-shopping-cart"></i> {{ $item['description3'] }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

        </div>
        <!--/.Second slide-->

    </div>
    <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

</div>

<!--/. End of Fourth Section -->


<hr class="card_hr">



<!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS -->
<!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS -->
<!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS -->
<!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS --><!-- MODALS -->

<!-- First Slider -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/b.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/c.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/d.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/e.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="myModal5">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/f.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal6">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/g.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal7">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/. End of First Slider -->


<!-- Second Slider -->
<div class="modal" id="myModal8">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/b.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal9">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/c.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal10">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/d.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal11">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/e.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal12">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/f.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal13">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/g.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal14">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal15">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/b.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal16">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/c.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal17">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/d.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal18">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/e.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal19">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/f.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal20">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/g.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal21">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal22">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/b.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal23">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/c.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal24">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/d.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal25">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/e.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal26">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/f.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal27">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/g.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--/. End of Second Slider -->



<!-- Third Slider -->

<div class="modal" id="myModal28">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal29">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal30">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal31">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal32">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal33">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/h.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--/. End of Third Slider -->



<!-- Fourth Slider -->

<div class="modal" id="myModal34">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/s3.png" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal35">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/s1.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal36">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/s2.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal37">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/s3.png" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal38">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/s4.jpg" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal39">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/sm1.png" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal40">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Device</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body row">
            <img class="card-img-top card_img" src="/images/sm1.png" style="width:130px; height:170px">
            <div id="modal_paragraph">
                <p class="card-text" style="color:black;"><h3>Title</h3>The Kasa Cam Outdoor is a full-featured weatherproof security camera that you can access from anywhere. Day or night, rain or shine, Kasa Cam protects what you love most.</p>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer row">
            <button type="button" class="btn btn-success" data-dismiss="">Add to Cart</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--/. End of Fourth Slider -->


<!-- Shopping cart modal -->

<div class="modal fade in" id="shoppingCartModal" tabindex="-1" role="dialog"
        aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <div class="row text-center cart_modal_header">
                    <h5 class="modal-title" id="shoppingCartModalTitle">Your Shopping Cart</h5>&nbsp;&nbsp;
                        <a  id="cart"  class="img_basket popup_cart" >
                            <i class="fas fa fa-shopping-cart fa-lg"></i>
                        </a>
                </div>
                &nbsp;&nbsp;
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class=cart_items>
                    <table class="table" id="modal_table">
                        <thead>
                            <tr>
                                <td class="t_head"></td>
                                <td class="t_head">Product</td>
                                <td class="t_head">Quantity</td>
                                <td class="t_head">Price</td>
                                <td class="t_head">Sub-Total</td>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <hr class=cart_divider>

                <div id = "product_total" class="col-sm-6 col-md-6 col-md-offset3 col-sn-offset-3 product_total">
                   <strong id="total_price"> </strong>
                 </div>
              </div>

              <div class="modal-footer row">
                <button id=continue_shopping type="button" class="btn btn-danger" data-dismiss="modal">Continue Shopping</button>
                <a href="{{route('checkout')}}" onclick=fetchRecord()  type="button" class="btn btn-primary">Proceed To Checkout</a>
              </div>

                    <!-- <div class="col-sm-6 col-md-6 col-md-offset3 col-sn-offset-3">
                        <h2>No items in the cart!</h2>
                    </div> -->

                </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
$(document).ready(function(){
    fetchRecord();
    wishlistCount();
    postRecord();
    // fetchTotalQty();
    cartCount();
    // cartCountNeg();
    pesatel();
    // getWishlist();
    fetchWishlist();
    tec_search();
    orderHistory();
});
</script>


<!-- Start About Area -->
@include('pages.callback')
<!-- End About Area -->
@include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop

