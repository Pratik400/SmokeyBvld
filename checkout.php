<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './aaheader.php'; ?>
</head>

<body>
    <?php include './aanavbar.php'; ?>



    <section class="section-checkout">
        <div class="container">
            <div class="row  no-gutters checkout-page-row">

                <div class="heading col-12 ">
                    <h2>Checkout form</h2>
                </div>

                <div class="col-lg-4 order-lg-2 ">
                    <div class="checkout-cart-product">
                        <div class="">
                            <div class="checkout-form-section-title checkout-cart-header">
                                <span class="">#</span>
                                <h2 class="">Your Cart</h2>
                                <h3 class="badge badge-pill">4</h3>
                            </div>
                            <ul class="list-group checkout-cart-list">

                                <li class="list-group-item">
                                    <img src="https://lh3.googleusercontent.com/proxy/6Pj0r75u2HX3RiBo_SoabSNL3Hg_ATYcwYDx0wSDFSTt73IdXXF6w9tkoKBQ9XhU2ZMbIQWJruWPWYZqKGQiVl5dyvPeLc7PeTE8kbDtko1nV_gD3JwRvadHLgEQDWgnObQApJ5-j6o" alt="">
                                    <div>
                                        <h6 class="checkout-cart-name">Product Name </h6>
                                        <small class="checkout-cart-line">Quantity:
                                            3</small>

                                    </div>
                                    <span class="checkout-cart-amt">$179.97</span>
                                </li>
                                <li class="list-group-item">
                                    <img src="https://lh3.googleusercontent.com/proxy/6Pj0r75u2HX3RiBo_SoabSNL3Hg_ATYcwYDx0wSDFSTt73IdXXF6w9tkoKBQ9XhU2ZMbIQWJruWPWYZqKGQiVl5dyvPeLc7PeTE8kbDtko1nV_gD3JwRvadHLgEQDWgnObQApJ5-j6o" alt="">
                                    <div>
                                        <h6 class="checkout-cart-name">Product Name </h6>
                                        <small class="checkout-cart-line">Quantity:
                                            3</small>

                                    </div>
                                    <span class="checkout-cart-amt">$179.97</span>
                                </li>
                                <li class="list-group-item">
                                    <img src="https://lh3.googleusercontent.com/proxy/6Pj0r75u2HX3RiBo_SoabSNL3Hg_ATYcwYDx0wSDFSTt73IdXXF6w9tkoKBQ9XhU2ZMbIQWJruWPWYZqKGQiVl5dyvPeLc7PeTE8kbDtko1nV_gD3JwRvadHLgEQDWgnObQApJ5-j6o" alt="">
                                    <div>
                                        <h6 class="checkout-cart-name">Product Name </h6>
                                        <small class="checkout-cart-line">Quantity:
                                            3</small>

                                    </div>
                                    <span class="checkout-cart-amt">$179.97</span>
                                </li>
                              

                                <li class="list-group-item subtotal-r">
                                    <span class="subtotal">Sub-total</span>
                                    <strong class="subtotal-amt">$539.91</strong>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h6 class="checkout-cart-name">Other Charges</h6>
                                    </div>
                                    <span class="checkout-cart-amt">n/a</span>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h6 class="checkout-cart-name">Delivery</h6>
                                        <small class="checkout-cart-line">Type of delivery</small>
                                    </div>
                                    <span class="checkout-cart-amt">Free</span>
                                </li>
                                <li class="list-group-item total-r">
                                    <span class="total">Grand Total</span>
                                    <strong class="total-amt">$539.91</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 order-lg-1">
                    <form action="" class="checkout-form mt-3 px-3 px-sm-2 px-md-4">

                        <div class="mb-4 ml-3 checkout-form-section-title flex-wrap">
                            <div class="d-flex align-items-center ">
                                <span class="">1</span>
                                <h2 class="">Shipping & Billing Information</h2>
                            </div>

                        </div>

                        <div class="checkout-details-form">
                            <div class="form-group row">
                                <label for="adname" class="col-md-2 offset-md-1 col-form-label">First Name </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adname" class="col-md-2 offset-md-1 col-form-label">Last Name </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control " id="last_name" name="last_name" placeholder="Enter Last Name">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-2 offset-md-1 col-form-label">Phone Number </label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zipcode" class="col-md-2 offset-md-1 col-form-label">Zip Code </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control " id="zipcode" name="zipcode" placeholder="Enter Zip Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-md-2 offset-md-1 col-form-label">City </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control " id="city" name="city" placeholder="Enter City">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="street" class="col-md-2 offset-md-1 col-form-label">Address Detail </label>
                                <div class="col-md-9">
                                    <textarea rows="5" class="form-control" id="address1" name="address1" placeholder="Enter Address Details"></textarea>
                                </div>
                            </div>
                        </div>

                        <br><br>

                        <div class=" py-3">
                            <div class="mb-4 ml-3 checkout-form-section-title">
                                <span class="">2</span>
                                <h2 class="">Shipping Preference</h2>
                            </div>
                            <div class="form-group row m-0">
                                <div class="col-md-10 offset-md-1 d-flex flex-column">

                                    <label>
                                        <input type="radio" class="option-input radio" name="deliveryType" />
                                        <span>Free Shipping </span>
                                    </label>

                                    <label>
                                        <input type="radio" class="option-input radio" name="deliveryType" />
                                        <span>Standard Shipping <span class="text-danger">| $20</span></span>
                                    </label>

                                    <label>
                                        <input type="radio" class="option-input radio" name="deliveryType" />
                                        <span>Express Shipping <span class="text-danger">| $100</span></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <br><br>

                        <div class=" py-3">
                            <div class="mb-5 ml-3 checkout-form-section-title">
                                <span class="">3</span>
                                <h2 class=""> Payment method Preferences</h2>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="row m-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-4">
                                            <label>
                                                <input type="radio" class="option-input radio" name="paymentType" />
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Visa.svg/1200px-Visa.svg.png" alt="">
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-4">
                                            <label>
                                                <input type="radio" class="option-input radio" name="paymentType" />
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png" alt="">
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-4">
                                            <label>
                                                <input type="radio" class="option-input radio" name="paymentType" />
                                                <img src="https://challengepost-s3-challengepost.netdna-ssl.com/photos/production/software_photos/000/735/310/datas/original.jpg" alt="">
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-4">
                                            <label>
                                                <input type="radio" class="option-input radio" name="paymentType" />
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyREvBN8TvUqQ4zA0W1JlAl3QQUg9lw6yxcyN89Y1__pRhc4M4gHMcSxU0W3dIcB4cpQA&usqp=CAU" alt="">
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                        <br><br>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-sumbit w-100">Place Order</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>



    <?php include './aafooter.php'; ?>


    <!-- page specific js -->

    <script>

    </script>


</body>

</html>