<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './aaheader.php'; ?>
</head>

<body>
    <?php include './aanavbar.php'; ?>

    <section class="profile-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="profile-top-layout">
                        <div class="profile-info">
                            <div class="profile-picture"><img src="https://66.media.tumblr.com/de62698dc1b7eab4e505358bf0414f13/tumblr_prmny2ZaBb1uua0sto5_540.png" alt="ananddavis" />
                            </div>
                            <div class="profile-header">
                                <div class="profile-account">
                                    <h4 class="profile-username">Fname Mname MMname Lname</h4>
                                    <h6 class="profile-email">username@gmail.com</h6>
                                </div>
                                <div class="profile-edit"><a class="profile-button" href="#">Edit Profile</a></div>
                            </div>
                            <div class="profile-stats">
                                <div class="profile-stat ">
                                    <div class="profile-icon profile-icon--gold"><i class="fa fa-heart"></i></div>
                                    <div class="profile-value">
                                        8
                                        <div class="profile-key">Orders</div>
                                    </div>
                                </div>
                                <div class="profile-stat ">
                                    <div class="profile-icon profile-icon--blue"><i class="fa fa-heart"></i></div>
                                    <div class="profile-value">4
                                        <div class="profile-key">Delivered</div>
                                    </div>
                                </div>
                                <div class="profile-stat ">
                                    <div class="profile-icon profile-icon--pink"><i class="fa fa-heart"></i></div>
                                    <div class="profile-value">6
                                        <div class="profile-key">Wishlists</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile-sidebar-container">
                        <?php include 'profile-sidebar.php'; ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">

                        <!-- edit account -->
                        <div>
                            <div class="content-title">
                                <h2>Account</h2>
                                <h4>Personal details</h4>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobnum" class="col-sm-2 col-form-label">Mobile Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="mobnum" placeholder="98*********">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="dob" placeholder="98*********">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tele" class="col-sm-2 col-form-label">Telephone</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="tele" placeholder="55*****">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select form-control">
                                            <option selected>Select</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-2 col-sm-9">
                                        <button type="submit" class="btn default-btn">Submit </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- change password -->
                        <div>
                            <div class="content-title">
                                <h2>password</h2>
                                <h4>Change your password</h4>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <label for="pass" class="col-sm-2 col-form-label">Enter Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="pass" placeholder="Enter New Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="repass" class="col-sm-2 col-form-label">Re-enter Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="repass" placeholder="Re-enter New Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-sm-9">
                                        <button type="submit" class="btn default-btn">Submit </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- address -->
                        <div>
                            <div class="content-title">
                                <h2>Address</h2>
                                <h4>Manage your Address</h4>
                            </div>

                            <div class="alert alert-warning fade show p-0 d-flex align-items-center" role="alert">
                                <i class="far fa-folder-open fa-2x border border-warning p-3 mr-2 bg-warning text-white"></i>
                                <span class="p-2"> <strong>Sorry!</strong> No saved address.</span>
                            </div>

                            <button class="btn btn-add"> <span class="p-2">Add New Address</span> <i class="fa fa-plus"></i></button>

                            <form>
                                <div class="form-group row">
                                    <label for="adname" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="adname" placeholder="Enter Full Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="zcode" class="col-sm-2 col-form-label">Zip Code</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="zcode" placeholder="Enter Zip Code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state" class="col-sm-2 col-form-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="state" placeholder="Enter State 3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-2 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="country" placeholder="Enter Nepal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-2 col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="country" placeholder="Enter Phone / Mob">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-sm-9">
                                        <button type="submit" class="btn default-btn">Submit </button>
                                    </div>
                                </div>

                            </form>

                            <div class="address-table table-responsive">
                                <table class="table table-light table-borderless">
                                    <tbody>
                                        <tr class="address-row row">
                                            <td class="address col-sm-8">
                                                <strong> Bhrikuti Mandap, Kathmandu</strong>
                                                <br>
                                                State 3, Nepal
                                                <br>
                                                <i class="fa fa-phone-square-alt me-1"></i>4256910

                                            </td>
                                            <td class="address-btns col-sm-4">
                                                <button class="btn btn-sm btn-success">
                                                    <span>Edit</span><i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <span>Delete</span><i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!-- my order -->
                        <div>
                            <div class="content-title">
                                <h2>My Orders</h2>
                                <h4>Your Orders History</h4>
                            </div>

                            <div class="alert alert-warning fade show p-0 d-flex align-items-center" role="alert">
                                <i class="far fa-folder-open fa-2x border border-warning p-3 mr-2 bg-warning text-white"></i>
                                <span class="p-2"> <strong>Sorry!</strong> No Items. Order a cake now. :)</span>
                            </div>

                            <div class="orders-container">
                                <div class="row orders-row">
                                    <div class="col-12 col-md-5 col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="orderFilters"><i class="fa fa-filter"></i></label>
                                            </div>
                                            <select class="custom-select" id="orderFilters">
                                                <option selected>Choose...</option>
                                                <option value="1">Name </option>
                                                <option value="1">Date </option>
                                                <option value="2">Price</option>
                                                <option value="3">Quantity </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-4">
                                        <div class="input-group">
                                            <input type="search" class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-0 order-item border">
                                    <div class="col-12 col-md-12 border-bottom">
                                        <div class="order-info">
                                            <div>
                                                <h5>Order <span>#</span>123761982</h5>
                                                <h6>Order placed on <span>20 july 2020</span></h6>
                                            </div>
                                            <button class="btn btn-manage">MANAGE</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="order-img">
                                            <img src="https://www.grasscity.com/media/mf_webp/jpg/media/catalog/product/cache/60428b3eda425a2d6e147d2d49519051/g/1/g111-_03_.webp" class="img-fluid">
                                            <h6> <a href="#">Pandora Classic Bong</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="order-num">
                                            <div class="order-qty"> <span>Qty : </span><strong>3</strong></div>
                                            <div class="order-price"> <span>Price : </span><strong>$1200</strong>
                                            </div>
                                            <div class="order-total"> <span>Total : </span><strong>$3600</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="order-status">
                                            <div>
                                                <span class="mr-1 text-success">
                                                    <i class="fa fa-check-circle mr-1 text-success"></i>DELIVERED
                                                </span>
                                                on 22 July 2020
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-0 order-item border">
                                    <div class="col-12 col-md-12 border-bottom">
                                        <div class="order-info">
                                            <div>
                                                <h5>Order <span>#</span>123761982</h5>
                                                <h6>Order placed on <span>20 july 2020</span></h6>
                                            </div>
                                            <button class="btn btn-manage">MANAGE</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="order-img">
                                            <img src="https://www.grasscity.com/media/mf_webp/jpg/media/catalog/product/cache/60428b3eda425a2d6e147d2d49519051/g/1/g111-_03_.webp" class="img-fluid">
                                            <h6> <a href="#">Pandora Classic Bong</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="order-num">
                                            <div class="order-qty"> <span>Qty : </span><strong>3</strong></div>
                                            <div class="order-price"> <span>Price : </span><strong>$1200</strong>
                                            </div>
                                            <div class="order-total"> <span>Total : </span><strong>$3600</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="order-status">
                                            <div>
                                                <span class="mr-1 text-success">
                                                    <i class="fa fa-check-circle mr-1 text-success"></i>DELIVERED
                                                </span>
                                                on 22 July 2020
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- my order manage -->
                        <div>
                            <div class="content-title">
                                <h2>Order details</h2>
                                <h4>Manage Your Order</h4>
                            </div>

                            <div class="orders-manage-container">
                                <div class="row m-0 order-item border">
                                    <div class="col-12 col-md-12 border-bottom">
                                        <div class="order-info">
                                            <div>
                                                <h5>Order <span>#</span>123761982</h5>
                                                <h6>Order placed on <span>20 july 2020</span></h6>
                                            </div>
                                            <div class="order-total"> <span>Total : </span><strong>$2100</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="order-img">
                                            <img src="https://www.grasscity.com/media/mf_webp/jpg/media/catalog/product/cache/60428b3eda425a2d6e147d2d49519051/g/1/g111-_03_.webp" class="img-fluid">
                                            <h6> <a href="#">Pandora Classic Bong</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="order-num">
                                            <div class="order-qty"> <span>Qty : </span><strong>1</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="order-num">
                                            <div class="order-price"> <span>Price : </span><strong>$2000</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md">
                                        <div class="order-track border">
                                            <h5 class="border-bottom">Order Status</h5>
                                            <div class="steps">
                                                <div class="order-track-step active">
                                                    <div class="order-track-status">
                                                        <span class="order-track-status-dot"><i class="fa fa-check"></i></span>
                                                        <span class="order-track-status-line"></span>
                                                    </div>
                                                    <div class="order-track-text">
                                                        <p class="order-track-text-stat">Order Placed</p>
                                                        <span class="order-track-text-sub">21st November, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="border bill-address">
                                            <h5 class="border-bottom">Billing Address</h5>
                                            <div class="bill-address-user">
                                                <h6>Sanakaji Sanakaji</h6>
                                                <address> Mangalbazaar, Lalitpur, Kathmandu, Nepal</address>
                                                <address> <i class="fa fa-phone-square-alt"></i> 9823423423</address>
                                            </div>
                                        </div>

                                        <div class="border">
                                            <h5 class="border-bottom">Total summary</h5>
                                            <div class="order-detail-total">
                                                <div class="order-price"> <span>Sub-Total :
                                                    </span><strong>$ 2000</strong></div>
                                                <div class="order-price"> <span>Delivery Fee :
                                                    </span><strong>$ 100</strong>
                                                </div>
                                                <div class="order-total"> <span>Total : </span><strong>$
                                                        2100</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4 ">
                                        <button type="submit" class="float-end btn default-btn">Cancel Order <i class="fa fa-times"></i></button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './aafooter.php'; ?>

    <script>
        $('.custom-select').niceSelect();
    </script>
</body>

</html>