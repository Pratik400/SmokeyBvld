<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './aaheader.php'; ?>
</head>

<body>
    <?php include './aanavbar.php'; ?>

    <div class="sign-body">
        <section class="sign-container container">
            <div class="container-box" >
                <div class="row">
                    <div class="col-lg-5 bg">
                        <h6 class="card-title">Welcome to <br> <span>Smokey BVLD</spa>
                        </h6>

                        <p>
                            Register for an account with us at Smokey BVLD and beco
                            me one of our members.
                            <br>
                            Members earn points, get access to exclusive deals, discounts, and giveaways - and so much more.
                            <br>
                            Reap the rewards of being a Smokey BVLD member and sign up today! It's free & easy.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-box">
                            <div class="card-body">
                                <h6 class="card-title">Login</h6>



                                <form action="" class="row no-gutters" style="max-width: 100%;">

                                    <div class="form-group col-lg-12">
                                        <label for="regemail">Email</label>
                                        <input type="email" name="regemail" id="regemail" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-md-12 text-align-start">
                                        <a class="btn login-btn mb-4" href="./profile.php">Login</a>
                                    </div>

                                </form>

                                <a href="./forgotpassword.php" class="forgot-password-link">Forgot password?</a>

                                <p class="already-text">Create an account.
                                    <a href="./signup.php">Sign Up</a>
                                </p>

                                <nav class="login-card-footer-nav">
                                    <a href="">Terms of use.</a>
                                    <a href="">Privacy policy</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?php include './aafooter.php'; ?>


    <!-- page specific js -->

    <script>

    </script>


</body>

</html>