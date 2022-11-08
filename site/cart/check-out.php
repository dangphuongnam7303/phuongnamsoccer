<?php
require_once '/xampp/htdocs/DAM_FALL2022/global.php';
check_login();
$tt = 0;
if (isset($_SESSION['user'])) {
    $str = explode(" ", $_SESSION['user']['ho_ten']);
    $ho = $str[0];
    $ten = $str[count($str) - 1];
    $email = $_SESSION['user']['email'];
    // echo $ten.$ho;
    // die;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../content/css/check-out.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #cash::selection~.pay {
            display: none;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div style="width:1440px">


        <?php
        require_once '/xampp/htdocs/DAM_FALL2022/site/trang-chinh/header.php';

        ?>
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../../content/images/users/DPN-100.jpg" alt="" width="200" height="200">
                <h2>Confirm your order</h2>
                <p class="lead">We guarantee that your information will be absolutely confidential</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">


                        <?php
                        foreach ($_SESSION['my_cart'] as $cart) {
                            $tt += $cart[5];
                        ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?= $cart[1] ?></h6>
                                    <small style="color:red; font-weight:500"><?= $cart[4] ?></small>
                                </div>
                                <span class="text-muted">$<?= $cart[5] ?></span>
                            </li>

                        <?php
                        }
                        ?>

                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Other cost</h6>
                            </div>
                            <span class="text-muted">$<?= $_GET['total'] - $tt ?></span>
                        </li>

                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$<?= $_GET['total'] ?></strong>
                        </li>
                    </ul>


                </div>
                <div class="col-md-8 order-md-1">

                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" action="index.php?act=pay" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="<?= isset($_SESSION['user']) ? $ten : '' ?>" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="<?= isset($_SESSION['user']) ? $ho : '' ?>" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" id="username" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['ho_ten'] : '' ?>" placeholder="Username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= isset($_SESSION['user']) ? $email : '' ?>" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" value="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" value="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" value="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="cash" value="cash" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="cash">Pay in Cash</label>
                            </div>
                        </div>
                        <div class="pay">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-cvv">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" name="pay" type="submit">Pay</button>
                    </form>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2022 Phuong Nam SPORT</p>

            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
    <script>
        var name_card = document.getElementById('cc-name');
        var cc_number = document.getElementById('cc-number');
        var cc_expiration = document.getElementById('cc-expiration');
        var cc_cvv=document.getElementById('cc-cvv');
        var show = document.getElementById('cash');
        var show1 = document.getElementById('credit');
        var show2 = document.getElementById('debit');
        var show3 = document.getElementById('paypal');

        var stl = document.querySelector('.pay');
        show.onclick = function() {
            if (show.checked) {
                stl.style.display = "none";
                name_card.value='none';
                cc_number.value='none';
                cc_expiration.value='none';
                cc_cvv.value='none';
            }
        }
        show1.onclick = function() {
            if (show1.checked) {
                stl.style.display = "block";
            }
        }
        show2.onclick = function() {
            if (show2.checked) {
                stl.style.display = "block";
            }
        }
        show3.onclick = function() {
            if (show3.checked) {
                stl.style.display = "block";
            }
        }
    </script>
</body>

</html>