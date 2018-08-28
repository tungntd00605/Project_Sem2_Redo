
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>E-Commerce - MDBootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">

</head>

<body class="product-v1 hidden-sn white-skin animated">

<!--Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">
                <strong>SHOP</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link dark-grey-text font-weight-bold" href="#" data-toggle="modal" data-target="#cart-modal-ex">
                            <span class="badge danger-color">4</span>
                            <i class="fa fa-shopping-cart blue-text" aria-hidden="true"></i>
                            <span class="clearfix d-none d-sm-inline-block">Cart</span>
                        </a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">
                            <i class="far fa-envelope blue-text"></i> Contact</a>
                    </li>
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user blue-text"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.Navbar -->

</header>
<!-- /.Navigation -->

<!-- Main Container -->
<div class="container mt-5 pt-3">

    <!--Section: Product detail -->
    <section id="productDetails" class="pb-5">

        <!--News card-->
        <div class="card mt-5 hoverable">
            <div class="row mt-5">
                <div class="col-lg-6">

                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

                        <!--Slides-->
                        <div class="carousel-inner text-center text-md-left" role="listbox">
                            <div class="carousel-item active">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/17.jpg" alt="First slide" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/18.jpg" alt="Second slide" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/19.jpg" alt="Third slide" class="img-fluid">
                            </div>
                        </div>
                        <!--/.Slides-->

                        <!--Thumbnails-->
                        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Thumbnails-->

                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <div class="col-lg-5 mr-3 text-center text-md-left">
                    <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                        <strong>Sony headphones</strong>
                    </h2>
                    <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                <strong>$49</strong>
                            </span>
                        <span class="grey-text">
                                <small>
                                    <s>$89</s>
                                </small>
                            </span>
                    </h3>

                    <!--Accordion wrapper-->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card card-ecommerce">
                            <div class="card-header pl-0" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="mb-0">
                                        Description
                                        <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="dark-grey-text pl-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque
                                        nemo neque ut officiis nostrum incidunt maiores, magni optio et sunt suscipit
                                        iusto nisi totam quis, nobis mollitia necessitatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-ecommerce">
                            <div class="card-header pl-0" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="mb-0">
                                        Details
                                        <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="dark-grey-text pl-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque
                                        nemo neque ut officiis nostrum incidunt maiores, magni optio et sunt suscipit
                                        iusto nisi totam quis, nobis mollitia necessitatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-ecommerce">
                            <div class="card-header pl-0" role="tab" id="headingThree">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0">
                                        Shipping
                                        <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="dark-grey-text pl-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque
                                        nemo neque ut officiis nostrum incidunt maiores, magni optio et sunt suscipit
                                        iusto nisi totam quis, nobis mollitia necessitatibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Accordion wrapper-->

                    <!-- Add to Cart -->
                    <section class="color">
                        <div class="mt-5">
                            <p class="grey-text">Choose your color</p>
                            <div class="row text-center text-md-left">

                                <div class="col-md-4 col-12 ">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label" for="materialInline1">Blue</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label" for="materialInline2">Orange</label>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input type="radio" class="form-check-input" id="materialInline3" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label" for="materialInline3">Red</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 mb-4">
                                <div class="col-md-12 text-center text-md-left text-md-right">
                                    <button class="btn btn-primary btn-rounded">
                                        <i class="fa fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.Add to Cart -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.Section: Product detail -->

    <div class="divider-new">
        <h3 class="h3-responsive font-weight-bold blue-text mx-3">Product Reviews</h3>
    </div>

    <!-- Product Reviews -->
    <section id="reviews" class="pb-5">

        <!--Main wrapper-->
        <div class="comments-list text-center text-md-left">

            <!--First row-->
            <div class="row mb-5">
                <!--Image column-->
                <div class="col-sm-2 col-12 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                </div>
                <!--/.Image column-->

                <!--Content column-->
                <div class="col-sm-10 col-12">
                    <a>
                        <h5 class="user-name font-weight-bold">John Doe</h5>
                    </a>
                    <!-- Rating -->
                    <ul class="rating">
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                    </ul>
                    <div class="card-data">
                        <ul class="list-unstyled mb-1">
                            <li class="comment-date font-small grey-text">
                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                        </ul>
                    </div>
                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
                <!--/.Content column-->
            </div>
            <!--/.First row-->

            <!--Second row-->
            <div class="row mb-5">
                <!--Image column-->
                <div class="col-sm-2 col-12 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                </div>
                <!--/.Image column-->

                <!--Content column-->
                <div class="col-sm-10 col-12">
                    <a>
                        <h5 class="user-name font-weight-bold">Lily Brown</h5>
                    </a>
                    <!-- Rating -->
                    <ul class="rating">
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                    </ul>
                    <div class="card-data">
                        <ul class="list-unstyled mb-1">
                            <li class="comment-date font-small grey-text">
                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                        </ul>
                    </div>
                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
                <!--/.Content column-->
            </div>
            <!--/.Second row-->

            <!--Third row-->
            <div class="row mb-5">
                <!--Image column-->
                <div class="col-sm-2 col-12 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (28).jpg" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                </div>
                <!--/.Image column-->
                <!--Content column-->
                <div class="col-sm-10 col-12">
                    <a>
                        <h5 class="user-name font-weight-bold">Martha Smith</h5>
                    </a>
                    <!-- Rating -->
                    <ul class="rating">
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                        <li>
                            <i class="fa fa-star blue-text"></i>
                        </li>
                    </ul>
                    <div class="card-data">
                        <ul class="list-unstyled mb-1">
                            <li class="comment-date font-small grey-text">
                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                        </ul>
                    </div>
                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
                <!--/.Content column-->
            </div>
            <!--/.Third row-->
        </div>
        <!--/.Main wrapper-->

    </section>
    <!-- /.Product Reviews -->

    <div class="divider-new">
        <h3 class="h3-responsive font-weight-bold blue-text mx-3">Related Products</h3>
    </div>

    <!--Section: Products v.5-->
    <section id="products" class="pb-5">

        <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
            esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
                <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
            <!--Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">

                    <div class="col-md-4 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Sony TV-675i</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                    <div class="col-md-4 clearfix d-none d-md-block mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Samsung 786i</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-info mb-2">new</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                    <div class="col-md-4 clearfix d-none d-md-block mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Canon 675-D</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                </div>
                <!--First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                    <div class="col-md-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Samsung V54</a>
                                    </strong>
                                </h5>
                                <span class="badge grey mb-2">best rated</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                    <div class="col-md-4 clearfix d-none d-md-block mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Dell V-964i</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-info mb-2">new</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                    <div class="col-md-4 clearfix d-none d-md-block mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">iPad PRO</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                </div>
                <!--Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <div class="col-md-4 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Asus CT-567</a>
                                    </strong>
                                </h5>
                                <span class="badge grey mb-2">best rated</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                    <div class="col-md-4 clearfix d-none d-md-block mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Dell 786i</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-info mb-2">new</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->


                    </div>

                    <div class="col-md-4 clearfix d-none d-md-block mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Headphones</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-info mb-2">new</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>

                </div>
                <!--Third slide-->

            </div>
            <!--Slides-->

        </div>
        <!--Carousel Wrapper-->

    </section>
    <!--Section: Products v.5-->

</div>
<!-- /.Main Container -->



<!--Footer-->
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

    <div style="background-color: #4285f4;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0 px-2">
                        <i class="fa fa-facebook white-text"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic px-2">
                        <i class="fa fa-twitter white-text"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic px-2">
                        <i class="fa fa-google-plus white-text"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic px-2">
                        <i class="fa fa-linkedin white-text"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic px-2">
                        <i class="fa fa-instagram white-text"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Company name</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->


<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">

                <h4 class="modal-title font-weight-bold dark-grey-text" id="myModalLabel">Your cart</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Product 1</td>
                        <td>100$</td>
                        <td>
                            <a>
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Product 2</td>
                        <td>100$</td>
                        <td>
                            <a>
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Product 3</td>
                        <td>100$</td>
                        <td>
                            <a>
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Product 4</td>
                        <td>100$</td>
                        <td>
                            <a>
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <button class="btn btn-primary btn-rounded btn-sm">Checkout</button>

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-grey btn-rounded btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

<!-- /.Cart Modal -->


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>

<script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
</body>

</html>