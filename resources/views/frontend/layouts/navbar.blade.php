    <!--============================ MAIN MENU START ==============================-->
    <nav class="wsus__main_menu d-none d-lg-block">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="relative_contect d-flex">
                        <div class="wsus_menu_category_bar">
                            <i class="far fa-bars"></i>
                        </div>


                        <ul class="wsus_menu_cat_item show_home toggle_menu">
                            <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li>

                            @foreach ($categories as $category)
                                <li>
                                    <a class="wsus__droap_arrow"
                                        href="{{ route('products.index', $category->slug) }}"><i
                                            class="fal fa-tshirt"></i>
                                        {{ $category->name }}</a>

                                    @if ($category->children->isNotEmpty())
                                        <ul class="wsus_menu_cat_droapdown">
                                            @foreach ($category->children as $subCategory)
                                                <li>
                                                    <a href="{{ route('products.index', $subCategory->slug) }}">{{ $subCategory->name }}
                                                        @if ($subCategory->children->isNotEmpty())
                                                            <i class="fas fa-angle-right"></i>
                                                        @endif
                                                    </a>
                                                    @if ($subCategory->children->isNotEmpty())
                                                        <ul class="wsus__sub_category">
                                                            @foreach ($subCategory->children as $subSubCategory)
                                                                <li>
                                                                    <a
                                                                        href="{{ route('products.index', $subSubCategory->slug) }}">{{ $subSubCategory->name }}

                                                                        @if ($subSubCategory->children->isNotEmpty())
                                                                            <i class="fas fa-angle-right"></i>
                                                                        @endif

                                                                    </a>
                                                                    @if ($subSubCategory->children->isNotEmpty())
                                                                        <ul class="wsus__sub_category">
                                                                            @foreach ($subSubCategory->children as $subsubsubcategory)
                                                                                <li>
                                                                                    <a
                                                                                        href="{{ route('products.index', $subsubsubcategory->slug) }}">{{ $subsubsubcategory->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                        <ul class="wsus__menu_item">
                            <li><a class="active" href="index.html">home</a></li>
                            <li><a href="product_grid_view.html">shop <i class="fas fa-caret-down"></i></a>
                                <div class="wsus__mega_menu">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>women</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#">New Arrivals</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>men</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#">New Arrivals</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>category</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#"> Healthy & Beauty</a></li>
                                                    <li><a href="#">Gift Ideas</a></li>
                                                    <li><a href="#">Toy & Games</a></li>
                                                    <li><a href="#">Cooking</a></li>
                                                    <li><a href="#">Smart Phones</a></li>
                                                    <li><a href="#">Cameras & Photo</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">View All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>women</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    <li><a href="#">New Arrivals</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="vendor.html">vendor</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="daily_deals.html">campain</a></li>

                            <li><a href="track_order.html">track order</a></li>
                            <li><a href="daily_deals.html">daily deals</a></li>
                        </ul>
                        <ul class="wsus__menu_item wsus__menu_item_right">
                            <li><a href="contact.html">contact</a></li>
                            <li><a href="dsahboard.html">my account</a></li>
                            <li><a href="login.html">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--============================ MAIN MENU END  ==============================-->
