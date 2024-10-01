<x-front-layout title="Product">
    <!--==========================  PRODUCT MODAL VIEW START ===========================-->
    <section class="product_popup_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="far fa-times"></i></button>
                        <div class="row">
                            <div class="col-xl-6 col-12 col-sm-10 col-md-8 col-lg-6 m-auto display">
                                <div class="wsus__quick_view_img">
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="https://youtu.be/7m16dFI1AF8">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <div class="row modal_slider">
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="{{ asset('frontend/images/zoom1.jpg') }}" alt="product"
                                                    class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="{{ asset('frontend/images/zoom2.jpg') }}" alt="product"
                                                    class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="{{ asset('frontend/images/zoom3.jpg') }}" alt="product"
                                                    class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="{{ asset('frontend/images/zoom4.jpg') }}" alt="product"
                                                    class="img-fluid w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="wsus__pro_details_text">
                                    <a class="title" href="#">Electronics Black Wrist Watch</a>
                                    <p class="wsus__stock_area"><span class="in_stock">in stock</span> (167 item)</p>
                                    <h4>$50.00 <del>$60.00</del></h4>
                                    <p class="review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>20 review</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="wsus_pro_hot_deals">
                                        <h5>offer ending time : </h5>
                                        <div class="simply-countdown simply-countdown-one"></div>
                                    </div>
                                    <div class="wsus_pro_det_color">
                                        <h5>color :</h5>
                                        <ul>
                                            <li><a class="blue" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="orange" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="yellow" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="black" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="red" href="#"><i class="far fa-check"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="wsus_pro__det_size">
                                        <h5>size :</h5>
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                    <div class="wsus__quentity">
                                        <h5>quentity :</h5>
                                        <form class="select_number">
                                            <input class="number_area" type="text" min="1" max="100"
                                                value="1" />
                                        </form>
                                        <h3>$50.00</h3>
                                    </div>
                                    <div class="wsus__selectbox">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="wsus__button_area">
                                        <li><a class="add_cart" href="#">add to cart</a></li>
                                        <li><a class="buy_now" href="#">buy now</a></li>
                                        <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#"><i class="far fa-random"></i></a></li>
                                    </ul>
                                    <p class="brand_model"><span>model :</span> 12345670</p>
                                    <p class="brand_model"><span>brand :</span> The Northland</p>
                                    <div class="wsus__pro_det_share">
                                        <h5>share :</h5>
                                        <ul class="d-flex">
                                            <li><a class="facebook" href="#"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a class="whatsapp" href="#"><i
                                                        class="fab fa-whatsapp"></i></a></li>
                                            <li><a class="instagram" href="#"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
      PRODUCT MODAL VIEW END
    ===========================-->


    <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>products</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">peoduct</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        PRODUCT PAGE START
    ==============================-->
    <section id="wsus__product_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__pro_page_bammer">
                        <img src="{{ asset('frontend/images/pro_banner_1.jpg') }}" alt="banner"
                            class="img-fluid w-100">
                        <div class="wsus__pro_page_bammer_text">
                            <div class="wsus__pro_page_bammer_text_center">
                                <p>up to <span>70% off</span></p>
                                <h5>wemen's jeans Collection</h5>
                                <h3>fashion for wemen's</h3>
                                <a href="#" class="add_cart">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="wsus__sidebar_filter ">
                        <p>filter</p>
                        <span class="wsus__filter_icon">
                            <i class="far fa-minus" id="minus"></i>
                            <i class="far fa-plus" id="plus"></i>
                        </span>
                    </div>
                    <div class="wsus__product_sidebar" id="sticky_sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        All Categories
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Babies</a></li>
                                            <li><a href="#">Babies</a></li>
                                            <li><a href="#">Beauty</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Electronics</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Food</a></li>
                                            <li><a href="#">Furniture</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="price_ranger">
                                            <input type="hidden" id="slider_range" class="flat-slider" />
                                            <button type="submit" class="common_btn">filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree2" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        size
                                    </button>
                                </h2>
                                <div id="collapseThree2" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                small
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                medium
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked2">
                                            <label class="form-check-label" for="flexCheckChecked2">
                                                large
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree3" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        brand
                                    </button>
                                </h2>
                                <div id="collapseThree3" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault11">
                                            <label class="form-check-label" for="flexCheckDefault11">
                                                gentle park
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked22">
                                            <label class="form-check-label" for="flexCheckChecked22">
                                                colors
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked222">
                                            <label class="form-check-label" for="flexCheckChecked222">
                                                yellow
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked33">
                                            <label class="form-check-label" for="flexCheckChecked33">
                                                enice man
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked333">
                                            <label class="form-check-label" for="flexCheckChecked333">
                                                plus point
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        color
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefaultc1">
                                            <label class="form-check-label" for="flexCheckDefaultc1">
                                                black
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckCheckedc2">
                                            <label class="form-check-label" for="flexCheckCheckedc2">
                                                white
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckCheckedc3">
                                            <label class="form-check-label" for="flexCheckCheckedc3">
                                                green
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckCheckedc4">
                                            <label class="form-check-label" for="flexCheckCheckedc4">
                                                pink
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckCheckedc5">
                                            <label class="form-check-label" for="flexCheckCheckedc5">
                                                red
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 d-none d-md-block mt-md-4 mt-lg-0">
                            <div class="wsus__product_topbar">
                                <div class="wsus__product_topbar_left">
                                    <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="true">
                                            <i class="fas fa-th"></i>
                                        </button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false">
                                            <i class="fas fa-list-ul"></i>
                                        </button>
                                    </div>
                                    <div class="wsus__topbar_select">
                                        <select class="select_2" name="state">
                                            <option>default shorting</option>
                                            <option>short by rating</option>
                                            <option>short by latest</option>
                                            <option>low to high </option>
                                            <option>high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wsus__topbar_select">
                                    <select class="select_2" name="state">
                                        <option>show 12</option>
                                        <option>show 15</option>
                                        <option>show 18</option>
                                        <option>show 21</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-xl-4  col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__new">New</span>
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro4.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro4_4.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's casual fashion
                                                    watch</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__new">New</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro9.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro9_9.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(120 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's fashion sholder bag</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__new">New</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro2_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(72 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's casual shoes</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/headphone_1.jpg') }}"
                                                    alt="product" class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/headphone_2.jpg') }}"
                                                    alt="product" class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">Electronics </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(120 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                                <p class="wsus__price">$115</p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/tab_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/tab_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">Electronics </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(120 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                                <p class="wsus__price">$159</p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/mobile_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/mobile_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">Electronics </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(120 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                                <p class="wsus__price">$189 <del>$199</del></p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__new">New</span>
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro8.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro8_8.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(10 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                                                <p class="wsus__price">$99</p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/kids_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/kids_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(41 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">kid's fashion party dress</a>
                                                <p class="wsus__price">$110</p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/blazer_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/blazer_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(40 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">man's fashion blazer</a>
                                                <p class="wsus__price">$180 <del>$200</del></p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__new">New</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/wemans_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/wemans_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(99 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                                                <p class="wsus__price">$59</p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro2_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(72 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's casual shoes</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="wsus__product_item">
                                            <span class="wsus__new">New</span>
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/headphone_1.jpg') }}"
                                                    alt="product" class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/headphone_2.jpg') }}"
                                                    alt="product" class="img-fluid w-100 img_2" />
                                            </a>
                                            <ul class="wsus__single_pro_icon">
                                                <li><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                <li><a href="#"><i class="far fa-random"></i></a>
                                            </ul>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">Electronics </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(120 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                                <p class="wsus__price">$115</p>
                                                <a class="add_cart" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item wsus__list_view">
                                            <span class="wsus__new">New</span>
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro4.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro4_4.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's casual fashion
                                                    watch</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item wsus__list_view">
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro9.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro9_9.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(5 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's casual sholder bag</a>
                                                <p class="wsus__price">$60</p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item  wsus__list_view">
                                            <span class="wsus__new">New</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/headphone_1.jpg') }}"
                                                    alt="product" class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/headphone_2.jpg') }}"
                                                    alt="product" class="img-fluid w-100 img_2" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">electronic </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">bluetooth headphone</a>
                                                <p class="wsus__price">$40 <del>$50</del></p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item wsus__list_view">
                                            <span class="wsus__new">New</span>
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/tab_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/tab_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">electronic </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">apple 10 serise tab </a>
                                                <p class="wsus__price">$490 <del>$500</del></p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item wsus__list_view">
                                            <span class="wsus__new">New</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/kids_1.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/kids_2.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">kid's dress </a>
                                                <p class="wsus__price">$30 <del>$40</del></p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item wsus__list_view">
                                            <span class="wsus__minus">-20%</span>
                                            <a class="wsus__pro_link" href="{{ route('products.show', 5) }}">
                                                <img src="{{ asset('frontend/images/pro4.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                                <img src="{{ asset('frontend/images/pro4_4.jpg') }}" alt="product"
                                                    class="img-fluid w-100 img_2" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">men's casual fashion
                                                    watch</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <section id="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page_active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        PRODUCT PAGE END
    ==============================-->

</x-front-layout>
