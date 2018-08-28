
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Arcana-Category</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
    <style type="text/css">
        .multiple-select-dropdown li [type=checkbox]+label {
            height: 1rem;
        }
    </style>

</head>

<body class="category-v1 hidden-sn white-skin animated">

<!--Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#"><strong>SHOP</strong></a>
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
    <!-- /.Navbar -->

</header>
<!-- /.Navigation -->

<!-- Main Container -->
<div class="container mt-5 pt-3">


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
    <div class="row pt-4">

        <!-- Sidebar -->
        <div class="col-lg-3">

            <div class="">
                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 mb-5">
                        <!-- Panel -->
                        <h5 class="font-weight-bold dark-grey-text"><strong>Order By</strong></h5>
                            <div class="divider"></div>

                            <p class="blue-text"><a>Default</a></p>
                            <p class="dark-grey-text"><a>Popularity</a></p>
                            <p class="dark-grey-text"><a>Average rating</a></p>
                            <p class="dark-grey-text"><a>Price: low to high</a></p>
                            <p class="dark-grey-text"><a>Price: high to low</a></p>
                    </div>

                    <!-- Filter by category-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Category</strong></h5>
                            <div class="divider"></div>

                            <!--Radio group-->
                            <div class="form-group ">
                                <input name="group100" type="radio" id="radio100">
                                <label for="radio100" class="dark-grey-text">All</label>
                            </div>

                            <div class="form-group">
                                <input name="group100" type="radio" id="radio101" checked>
                                <label for="radio101" class="dark-grey-text">Laptop</label>
                            </div>

                            <div class="form-group">
                                <input name="group100" type="radio" id="radio102">
                                <label for="radio102" class="dark-grey-text">Smartphone</label>
                            </div>

                            <div class="form-group">
                                <input name="group100" type="radio" id="radio103">
                                <label for="radio103" class="dark-grey-text">Tablet</label>
                            </div>

                            <div class="form-group">
                                <input name="group100" type="radio" id="radio104">
                                <label for="radio104" class="dark-grey-text">Headphones</label>
                            </div>
                            <!--Radio group-->
                    </div>
                    <!-- /Filter by category-->
                </div>
                <!-- /Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Filter by price  -->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Price</strong></h5>
                            <div class="divider"></div>

                            <form class="range-field mt-3">
                                <input id="calculatorSlider" class="no-border" type="range" value="0" min="0" max="30" />
                            </form>

                            <!-- Grid row -->
                            <div class="row justify-content-center">

                                <!-- Grid column -->
                                <div class="col-md-6 text-left">
                                    <p class="dark-grey-text"><strong id="resellerEarnings">0$</strong></p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 text-right">
                                    <p class="dark-grey-text"><strong id="clientPrice">319$</strong></p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->

                    </div>
                    <!-- /Filter by price -->

                    <!-- Filter by rating -->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Rating</strong></h5>
                            <div class="divider"></div>
                            <div class="row ml-1">
                                <!-- Rating -->
                                <ul class="rating mb-0">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li>
                                        <p class="ml-3 dark-grey-text"><a>4 and more</a></p>
                                    </li>
                                </ul>

                            </div>

                            <div class="row ml-1">
                                <!-- Rating -->
                                <ul class="rating mb-0">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                    <li>
                                        <p class="ml-3 dark-grey-text"><a>3 - 3,99</a></p>
                                    </li>
                                </ul>

                            </div>

                            <div class="row ml-1">
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                    <li>
                                        <p class="ml-3 dark-grey-text"><a>3.00 and less</a></p>
                                    </li>
                                </ul>

                            </div>
                    </div>
                    <!-- Filter by rating -->
                </div>
                <!-- /Grid row -->
            </div>

        </div>
        <!-- /.Sidebar -->

        <!-- Content -->
        <div class="col-lg-9">

            <!-- Filter Area -->
            <div class="row">

                <div class="col-md-4 mt-3">

                    <!-- Sort by -->
                    <select class="mdb-select grey-text" multiple>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Example label</label>
                    <button class="btn-save btn btn-primary btn-sm">Save</button>
                    <!-- /.Sort by -->

                </div>
                <div class="col-md-8 text-right">

                    <!-- View Switcher -->
                    <a class="btn btn-blue-grey btn-sm"><i class="fa fa-th mr-2" aria-hidden="true"></i><strong> Grid</strong></a>
                    <a class="btn btn-blue-grey btn-sm"><i class="fa fa-th-list mr-2" aria-hidden="true"></i><strong> List</strong></a>
                    <!-- /.View Switcher -->

                </div>

            </div>
            <!-- /.Filter Area -->

            <!-- Products Grid -->
            <section class="section pt-4">

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPad</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
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
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/15.jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Sony T56-v</a></strong></h5><span class="badge badge-info mb-2">new</span>
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
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid" alt="">
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

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Samsung CT-567</a></strong></h5><span class="badge grey mb-2">best rated</span>
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
                    <div class="col-lg-4 col-md-6 mb-4">
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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Sony TV-675</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
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

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Dell V-964i</a></strong></h5><span class="badge badge-info mb-2">new</span>
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

                </div>
                <!--Grid row-->

                <!-- Grid row -->
                <div class="row mb-3">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Samsung V54</a></strong></h5><span class="badge grey mb-2">best rated</span>
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
                    <div class="col-lg-4 col-md-6 mb-4">
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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Dell 786i</a></strong></h5><span class="badge badge-info mb-2">new</span>
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

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

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

                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Canon 675-D</a></strong></h5><span class="badge badge-info mb-2">new</span>
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

</main>


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

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">MDBootstrap</a></p>
                <p><a href="#!">MDWordPress</a></p>
                <p><a href="#!">BrandFlow</a></p>
                <p><a href="#!">Bootstrap Angular</a></p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Your Account</a></p>
                <p><a href="#!">Become an Affiliate</a></p>
                <p><a href="#!">Shipping Rates</a></p>
                <p><a href="#!">Help</a></p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
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
    var slider = $("#calculatorSlider");
    var developerBtn = $("#developerBtn");
    var corporateBtn = $("#corporateBtn");
    var privateBtn = $("#privateBtn");
    var reseller = $("#resellerEarnings");
    var client = $("#clientPrice");
    // var percentageBonus = 30; // = 30%
    var license = {
        corpo: {
            active: true,
            price: 319,
        },
        dev: {
            active: false,
            price: 149,
        },
        priv: {
            active: false,
            price: 79,
        }
    }

    function calculate(price, value) {
        client.text((Math.round((price - (value / 100 * price)))) + '$');
        reseller.text((Math.round(((percentageBonus - value) / 100 * price))) + '$')
    }

    function reset(price) {
        slider.val(0);
        client.text(price + '$');
        reseller.text((Math.round((percentageBonus / 100 * price))) + '$');
    }
    developerBtn.on('click', function (e) {
        license.dev.active = true;
        license.corpo.active = false;
        license.priv.active = false;
        reset(license.dev.price)
    });
    privateBtn.on('click', function (e) {
        license.dev.active = false;
        license.corpo.active = false;
        license.priv.active = true;
        reset(license.priv.price);
    });
    corporateBtn.on('click', function (e) {
        license.dev.active = false;
        license.corpo.active = true;
        license.priv.active = false;
        reset(license.corpo.price);
    });
    slider.on("input change", function (e) {
        if (license.priv.active) {
            calculate(license.priv.price, $(this).val());
        } else if (license.corpo.active) {
            calculate(license.corpo.price, $(this).val());
        } else if (license.dev.active) {
            calculate(license.dev.price, $(this).val());
        }
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