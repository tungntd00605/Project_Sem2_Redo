
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Arcana-Home-page</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">

</head>

<body class="homepage-v3 hidden-sn white-skin animated">

<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#"><strong>Arcana</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#"><i class="fa fa-envelope blue-text"></i> Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fa fa-user blue-text"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<!-- Mega menu -->
<div class="container mt-5 pt-2">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liên Minh Huyền Thoại</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/1-1.png')}}" alt="" height="30px"> &nbsp;Rank Đồng</a>
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/2-1.png')}}" alt="" height="30px"> &nbsp;Rank Bạc</a>
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/3-1.png')}}" alt="" height="30px"> &nbsp;Rank Vàng</a>
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/4-1.png')}}" alt="" height="30px"> &nbsp;Bạch Kim</a>
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/5-1.png')}}" alt="" height="30px"> &nbsp;Kim Cương</a>
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/6-1.png')}}" alt="" height="30px"> &nbsp;Cao Thủ</a>
                        <a class="dropdown-item" href="#"><img src="{{asset('mdb/img/rank-lmht/7-1.png')}}" alt="" height="30px"> &nbsp;Thách Đấu</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PUBG</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSGO</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
</div>
<!-- /.Main Container -->
<div class="container">
    <div class="row pt-5">
        <!-- Content -->
        <div class="col-lg-12">
            <!-- Products Grid -->
            <section class="section pt-4">

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-8 col-md-12 mb-3 pb-lg-2">
                        <!--Image -->
                        <div class="view zoom z-depth-1">
                            <img src="https://mdbootstrap.com/img/Photos/Others/product1.jpg" class="img-fluid" alt="sample image">
                            <div class="mask rgba-white-light">
                                <div class="dark-grey-text d-flex align-items-center pt-4 ml-3 pl-3">
                                    <div>
                                        <a><span class="badge badge-danger">bestseller</span></a>
                                        <h2 class="card-title font-weight-bold pt-2"><strong>This is news title</strong></h2>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                        <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">Read more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Image -->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!-- Section: Categories -->
                        <section class="section">


                            <ul class="list-group z-depth-1">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small"><i class="fa fa-laptop dark-grey-text mr-2" aria-hidden="true"></i> Liên Minh Huyền Thoại</a>
                                    <a href=""></a><span class="badge badge-danger badge-pill">43</span></a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small"><i class="fa fa-mobile-phone dark-grey-text mr-3" aria-hidden="true"></i> PUBG</a>
                                    <span class="badge badge-danger badge-pill">32</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a class="dark-grey-text font-small"><i class="fa fa-tablet dark-grey-text mr-3" aria-hidden="true"></i>CSGO</a>
                                    <span class="badge badge-danger badge-pill">18</span>
                                </li>
                            </ul>
                        </section>
                    </div>

                </div>
                <section>
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">

                            <!-- Grid row -->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <div class="col-lg-3 col-md-3 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!-- Grid row -->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-5 d-flex align-items-center">
                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->
                                            </div>

                                            <!--Grid column-->
                                            <div class="col-7 pl-0">
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h6 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone 7</a></strong></h6>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                        <li><i class="fa fa-star blue-text"></i></li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left"><strong>1439$</strong></span>
                                                            <span class="float-right">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                        </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card-->

                                </div>

                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <section class="mb-5">
                    <div class="row">
                        <!-- New Products-->
                        <div class="col-lg-4 col-md-12 col-12 pt-4">
                            <hr>
                            <h5 class="text-center font-weight-bold dark-grey-text"><strong>New Products</strong></h5>
                            <hr>
                            <!-- First row -->
                            <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a class="pt-5"><strong>iPad</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$849</strong></h6>

                                </div>

                            </div>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Headphones</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$49</strong> <span class="grey-text"><small><s>$89</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>iMac 27"</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$1449</strong> <span class="grey-text"><small><s>$2189</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.New Products-->

                        <!-- Top Sellers-->
                        <div class="col-lg-4 col-md-12 pt-4">

                            <hr>
                            <h5 class="text-center font-weight-bold dark-grey-text"><strong>Top Sellers</strong></h5>
                            <hr>


                            <!-- First row -->
                            <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Dell V-964i</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$649</strong> <span class="grey-text"><small><s>$889</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Asus GT67i</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$1249</strong> <span class="grey-text"><small><s>$1489</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Headphones</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$49</strong> <span class="grey-text"><small><s>$89</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.Top Sellers -->

                        <!-- Random Products-->
                        <div class="col-lg-4 col-md-12 pt-4">

                            <hr>
                            <h5 class="text-center font-weight-bold dark-grey-text"><strong>Random products</strong></h5>
                            <hr>

                            <!-- First row -->
                            <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Dell 786i</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$749</strong> <span class="grey-text"><small><s>$889</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Samsung V54</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$249</strong> <span class="grey-text"><small><s>$489</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a><strong>Canon 675-D</strong></a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                        <li><i class="fa fa-star grey-text"></i></li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$2149</strong> <span class="grey-text"><small><s>$2489</s></small></span></h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.Random Products -->
                    </div>

                </section>
                <!--Section product list-->

                <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>LAST ITEMS</strong></h4>
                <hr class="mb-5">

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong>1439$</strong></span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong>1439$</strong></span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone</a></strong></h5><span class="badge badge-info mb-2">new</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong>1439$</strong></span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iMac</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong>1439$</strong></span>
                                        <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                                </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row justify-content-center mb-4">

                    <!--Pagination -->
                    <nav class="mb-4">
                        <ul class="pagination pagination-circle pg-blue mb-0">

                            <!--First-->
                            <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">First</a></li>

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>

                            <!--First-->
                            <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a></li>

                        </ul>
                    </nav>
                    <!--/Pagination -->

                </div>
                <!--Grid row-->
            </section>
            <!-- /.Products Grid -->

        </div>
        <!-- /.Content -->

    </div>

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
                    <a class="fb-ic ml-0 px-2"><i class="fa fa-facebook white-text"> </i></a>
                    <!--Twitter-->
                    <a class="tw-ic px-2"><i class="fa fa-twitter white-text"> </i></a>
                    <!--Google +-->
                    <a class="gplus-ic px-2"><i class="fa fa-google-plus white-text"> </i></a>
                    <!--Linkedin-->
                    <a class="li-ic px-2"><i class="fa fa-linkedin white-text"> </i></a>
                    <!--Instagram-->
                    <a class="ins-ic px-2"><i class="fa fa-instagram white-text"> </i></a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->


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
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();
</script>
</body>

</html>