
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

<body class="cart-v1 hidden-sn white-skin animated">

<!--Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
        <div class="container">
            <!-- SideNav slide-out button -->
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


<!--Main Layout-->
<main>

    <!-- Main Container -->
    <div class="container">

        <section class="section my-5 pb-5">

            <!-- Shopping Cart table -->
            <div class="table-responsive">

                <table class="table product-table">

                    <!-- Table head -->
                    <thead>
                    <tr>
                        <th></th>
                        <th class="font-weight-bold">
                            <strong>Product</strong>
                        </th>
                        <th class="font-weight-bold">
                            <strong>Color</strong>
                        </th>
                        <th></th>
                        <th class="font-weight-bold">
                            <strong>Price</strong>
                        </th>
                        <th class="font-weight-bold">
                            <strong>QTY</strong>
                        </th>
                        <th class="font-weight-bold">
                            <strong>Amount</strong>
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <!-- /.Table head -->

                    <!-- Table body -->
                    <tbody>

                    <!-- First row -->
                    <tr>
                        <th scope="row">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="" class="img-fluid z-depth-0">
                        </th>
                        <td>
                            <h5 class="mt-3">
                                <strong>iPhone</strong>
                            </h5>
                            <p class="text-muted">Apple</p>
                        </td>
                        <td>White</td>
                        <td></td>
                        <td>$800</td>
                        <td class="text-center text-md-left">
                            <span class="qty">1 </span>
                            <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary btn-rounded">
                                    <input type="radio" name="options" id="option1">&mdash;
                                </label>
                                <label class="btn btn-sm btn-primary btn-rounded">
                                    <input type="radio" name="options" id="option2">+
                                </label>
                            </div>
                        </td>
                        <td class="font-weight-bold">
                            <strong>$800</strong>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                            </button>
                        </td>
                    </tr>
                    <!-- /.First row -->

                    <!-- Second row -->
                    <tr>
                        <th scope="row">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="" class="img-fluid z-depth-0">
                        </th>
                        <td>
                            <h5 class="mt-3">
                                <strong>Headphones</strong>
                            </h5>
                            <p class="text-muted">Sony</p>
                        </td>
                        <td>Red</td>
                        <td></td>
                        <td>$200</td>
                        <td class="text-center text-md-left">
                            <span class="qty">3 </span>
                            <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary btn-rounded">
                                    <input type="radio" name="options" id="option1">&mdash;
                                </label>
                                <label class="btn btn-sm btn-primary btn-rounded">
                                    <input type="radio" name="options" id="option2">+
                                </label>
                            </div>
                        </td>
                        <td class="font-weight-bold">
                            <strong>$600</strong>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                            </button>
                        </td>
                    </tr>
                    <!-- /.Second row -->

                    <!-- Third row -->
                    <tr>
                        <th scope="row">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="" class="img-fluid z-depth-0">
                        </th>
                        <td>
                            <h5 class="mt-3">
                                <strong>iPad Pro</strong>
                            </h5>
                            <p class="text-muted">by FifeSteps</p>
                        </td>
                        <td>Gold</td>
                        <td></td>
                        <td>$600</td>
                        <td class="text-center text-md-left">
                            <span class="qty">2 </span>
                            <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary btn-rounded">
                                    <input type="radio" name="options" id="option1">&mdash;
                                </label>
                                <label class="btn btn-sm btn-primary btn-rounded">
                                    <input type="radio" name="options" id="option2">+
                                </label>
                            </div>
                        </td>
                        <td class="font-weight-bold">
                            <strong>$1200</strong>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                            </button>
                        </td>
                    </tr>
                    <!-- /.Third row -->

                    <!-- Fourth row -->
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <h4 class="mt-2">
                                <strong>Total</strong>
                            </h4>
                        </td>
                        <td class="text-right">
                            <h4 class="mt-2">
                                <strong>$2600</strong>
                            </h4>
                        </td>
                        <td colspan="3" class="text-right">
                            <button type="button" class="btn btn-primary btn-rounded">Complete purchase
                                <i class="fa fa-angle-right right"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Fourth row -->

                    </tbody>
                    <!-- /.Table body -->

                </table>

            </div>
            <!-- Shopping Cart table -->

        </section>

    </div>
    <!-- /Main Container -->

</main>
<!--Main Layout-->


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
<script type="text/javascript" src="{{asset('mdb/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
<script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();
</script>
<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>

</body>

</html>