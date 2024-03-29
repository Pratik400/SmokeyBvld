<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'aaheader.php'; ?>
</head>

<body>

    <?php include './aanavbar.php'; ?>

    <nav aria-label="breadcrumb" class="breadcrumb-box">
        <ol class="breadcrumb container">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Bongs</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>

    <section class="section-filter">

        <div class="container">
            <div class="row mb-5">

                <div class="col-12">
                    <div class="filter-title">

                        <h5>Filters</h5>
                        <div class="sort-box">
                            <span>SORT BY : </span>
                            <select class="sortproduct">
                                <option data-display="Choose">Choose</option>
                                <option value="1">Price</option>
                                <option value="2">Name</option>
                                <option value="4">On Sale</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-3 mb-5 px-1">
                    <div class="accordion panel-group" id="accordionFilter">
                        <div class="accordion-item panel">
                            <h2 class="accordion-header panel-heading" id="headingOne">
                                <div class="panel-title">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Type
                                    </a>
                                </div>
                            </h2>
                            <div id="collapseOne" class="panel-collapse accordion-collapse collapse show" aria-labelledby="headingOne">
                                <div class="accordion-body panel-body">
                                    <ul class="catergory-lists">
                                        <li>
                                            <a class="panel-links" href="">Parts & Accessories</a>

                                            <ul>
                                                <li><a class="panel-sublinks" href="./product-list.php">Ashcatchers</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Glass Adapters</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Downstems</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Tools & AppliancesTools & AppliancesTools & Appliances</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Rosin Presses</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Scales</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Lighters</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Storage & Cases</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Vape Accessories & Parts</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Atomizers</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Other Glass Accessories</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Home Goods and Merch</a></li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a class="panel-links" href="">Lifestyle</a>

                                            <ul>
                                                <li><a class="panel-sublinks" href="./product-list.php">Smoke Cartel Swag</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Food & Novelty</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Apparel</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Home Goods</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Pet Stuff</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Cleaning</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Detox</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Grow Kits</a></li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a class="panel-links" href="">For Dry Herbs</a>
                                            <ul>
                                                <li><a class="panel-sublinks" href="./product-list.php">Bongs & Water Pipes</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Bubblers</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Hand Pipes</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Bong Bowls</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Dugouts</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Grinders</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Rolling Paper & Trays</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Blunt Wraps</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Bong Accessories</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Grow Kits</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Lighters</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Dab Rigs</a></li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a class="panel-links" href="">For Oil & Waxes</a>

                                            <ul>
                                                <li><a class="panel-sublinks" href="./product-list.php">Electric Dab Rigs</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Recycler Dab Rigs</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Quartz Bangers & Nails</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Titanium & Ceramic Nails</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Nectar Collectors</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Rosin Presses</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Torches</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Carb Caps</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Dab Tools</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">E-Nails</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Oil & Wax Storage</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Dab Tools & Accessories</a></li>
                                                <li><a class="panel-sublinks" href="./product-list.php">Tools & Accessories</a></li>


                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel">
                            <h2 class="accordion-header panel-heading" id="headingTwo">
                                <div class="panel-title">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Perc
                                    </a>
                                </div>
                            </h2>
                            <div id="collapseTwo" class="panel-collapse accordion-collapse collapse" aria-labelledby="headingTwo">

                                <div class="accordion-body panel-body ">
                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc Lorem</span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc ipsum dolor</span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc adipisicing elit</span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc Sunt quaerat</span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc dolorum autem</span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc unde omnis amet </span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>Perc enim, totam</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="accordion-item panel">
                            <h2 class="accordion-header panel-heading" id="headingThree">
                                <div class="panel-title">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Review
                                    </a>
                                </div>
                            </h2>
                            <div id="collapseThree" class="panel-collapse accordion-collapse collapse" aria-labelledby="headingThree">
                                <div class="accordion-body panel-body">
                                    <div class="accordion-body panel-body ">
                                        <label>
                                            <input type="checkbox" class="option-input" />
                                            <span>4 Stars & up</span>
                                        </label>

                                        <label>
                                            <input type="checkbox" class="option-input" />
                                            <span>3 Stars & up</span>
                                        </label>

                                        <label>
                                            <input type="checkbox" class="option-input" />
                                            <span>2 Stars & up</span>
                                        </label>

                                        <label>
                                            <input type="checkbox" class="option-input" />
                                            <span>1 Stars & up</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel">
                            <h2 class="accordion-header panel-heading" id="headingFour">
                                <div class="panel-title">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Price
                                    </a>
                                </div>
                            </h2>
                            <div id="collapseFour" class="panel-collapse accordion-collapse collapse show" aria-labelledby="headingFour">
                                <div class="accordion-body panel-body">

                                    <div class="range-container">
                                        <input type="text" id="price-range" name="price-range" value="" />


                                        <p class="pt-3 mb-0 text-main">Range:</p>
                                        <div class="range-info">
                                            <div class="pe-1">$<span id="price_from"></div></span>
                                            - <div class="ps-1">$<span id="price_to"></span></div>
                                        </div>

                                        <button class="btn default-btn mt-3 mb-0">Filter</button>
                                    </div>




                                    <!-- <div class="price-place">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">$</div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="XX">
                                        </div>

                                        <div class="mx-2"> to</div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">$</div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="XXXX">
                                        </div>
                                    </div>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>$500 & above</span>
                                    </label>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>$400 & above</span>
                                    </label>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>$300 & above</span>
                                    </label>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>$200 & above</span>
                                    </label>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>$50 & above</span>
                                    </label> -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel">
                            <h2 class="accordion-header panel-heading" id="headingFive">
                                <div class="panel-title">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Length
                                    </a>
                                </div>
                            </h2>
                            <div id="collapseFive" class="panel-collapse accordion-collapse collapse" aria-labelledby="headingFive">
                                <div class="accordion-body panel-body">

                                    <div class="price-place">
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="XX">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">"</div>
                                            </div>
                                        </div>

                                        <div class="mx-2"> to</div>

                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="XXXX">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">"</div>
                                            </div>
                                        </div>
                                    </div>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>30" to 20" inches</span>
                                    </label>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>20" to 10" inches</span>
                                    </label>

                                    <label>
                                        <input type="radio" name="price" class="option-input radio" />
                                        <span>10" inches and above</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel">
                            <h2 class="accordion-header panel-heading" id="headingSix">
                                <div class="panel-title">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Type
                                    </a>
                                </div>
                            </h2>
                            <div id="collapseSix" class="panel-collapse accordion-collapse collapse" aria-labelledby="headingSix">
                                <div class="accordion-body panel-body ">
                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>
                                            <div class="pin-card">
                                                <div class="pin-icon" style="background:red">
                                                </div>
                                            </div>
                                            Red
                                        </span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>
                                            <div class="pin-card">
                                                <div class="pin-icon" style="background:Green"> </div>
                                            </div>Green
                                        </span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>

                                            <div class="pin-card">
                                                <div class="pin-icon" style="background:Blue"></div>
                                            </div>Blue
                                        </span>
                                    </label>

                                    <label>
                                        <input type="checkbox" class="option-input" />
                                        <span>
                                            <div class="pin-card">
                                                <div class="pin-icon" style="background:purple"></div>
                                            </div>purple
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="recent-posts">
                        <h5>Recent Posts</h5>
                        <a href="./product.php" class="recent-items">
                            <img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">

                            <div class="recent-info">
                                <h6>Zippo Lighter Psychedelic</h6>
                                <p> <del>$40.00</del> $30.00 </p>
                            </div>

                        </a>

                        <a href="./product.php" class="recent-items">
                            <img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">

                            <div class="recent-info">
                                <h6>Zippo Lighter Psychedelic</h6>
                                <p> <del>$40.00</del> $30.00 </p>
                            </div>

                        </a>

                        <a href="./product.php" class="recent-items">
                            <img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">

                            <div class="recent-info">
                                <h6>Zippo Lighter Psychedelic</h6>
                                <p> <del>$40.00</del> $30.00 </p>
                            </div>

                        </a>

                    </div>
                </div>

                <div class="col-md-9 px-1">

                    <div class="row mt-3 g-3 row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4">

                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-product">
                                <div class="product-card">
                                    <a href="./product.php">
                                        <div class="sale">
                                            <span> on sale</span>
                                        </div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWpjsOx8_bK4Qsc-va4esLHDP1OJ9G1LPBwg&usqp=CAU" alt="">

                                        <div class="p-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(53)</span>
                                        </div>
                                        <div class="p-name">Pandora Ash Catcher</div>
                                        <div class="p-price">$74.99 <del>$90.00</del></div>
                                    </a>
                                    <div class="p-btn">
                                        <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                        <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-double-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>



    <!-- Recently Viewed -->
    <section class="section-slider">
        <div class="slider-v1-container container">
            <h4 class="v1-section-title"><span>Recently Viewed</span> <a href="" class=" btn title-btn">View All</a> </h4>
            <div class="v1-slider">
                <div>
                    <div class="product-card">
                        <a href="./product.php"><img src="https://www.puresativa.com/pub/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/v/i/vibes-aerospace-grinder-black-2.jpg" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"><img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"><img src="https://www.puresativa.com/pub/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/v/i/vibes-aerospace-grinder-black-2.jpg" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"> <img src="https://cdn.shopify.com/s/files/1/0250/8793/4554/products/82d20cc714f3f9ac36145173a9b60190_1000x_dfcf9b1c-ddce-45d2-a328-4cfa2e969d16.jpg?v=1573270646" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"> <img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php">
                            <div class="save">
                                <span>save 20%</span>
                            </div><img src="https://cdn.shopify.com/s/files/1/0250/8793/4554/products/82d20cc714f3f9ac36145173a9b60190_1000x_dfcf9b1c-ddce-45d2-a328-4cfa2e969d16.jpg?v=1573270646" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"> <img src="https://cdn.shopify.com/s/files/1/0250/8793/4554/products/82d20cc714f3f9ac36145173a9b60190_1000x_dfcf9b1c-ddce-45d2-a328-4cfa2e969d16.jpg?v=1573270646" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Different Bongs -->
    <section class="section-slider">

        <div class="slider-v1-container container">
            <h4 class="v1-section-title"><span>Shop Different Bongs</span> <a href="" class=" btn title-btn">View All</a> </h4>
            <div class="v1-slider">
                <div>
                    <div class="product-card">
                        <a href="./product.php"><img src="https://www.puresativa.com/pub/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/v/i/vibes-aerospace-grinder-black-2.jpg" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"><img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"><img src="https://www.puresativa.com/pub/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/v/i/vibes-aerospace-grinder-black-2.jpg" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"> <img src="https://cdn.shopify.com/s/files/1/0250/8793/4554/products/82d20cc714f3f9ac36145173a9b60190_1000x_dfcf9b1c-ddce-45d2-a328-4cfa2e969d16.jpg?v=1573270646" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"> <img src="https://cdn.shopify.com/s/files/1/0011/0025/1195/products/SA2788-14BL_1024x1024.jpg?v=1604955704" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php">
                            <div class="save">
                                <span>save 20%</span>
                            </div><img src="https://cdn.shopify.com/s/files/1/0250/8793/4554/products/82d20cc714f3f9ac36145173a9b60190_1000x_dfcf9b1c-ddce-45d2-a328-4cfa2e969d16.jpg?v=1573270646" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-card">
                        <a href="./product.php"> <img src="https://cdn.shopify.com/s/files/1/0250/8793/4554/products/82d20cc714f3f9ac36145173a9b60190_1000x_dfcf9b1c-ddce-45d2-a328-4cfa2e969d16.jpg?v=1573270646" alt="">
                            <div class="p-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(453)</span>
                            </div>
                            <div class="p-name">Pandora Ash Catcher</div>
                            <div class="p-price">$74.99 <del>$90.00</del></div>
                        </a>
                        <div class="p-btn">
                            <a href="./cart.php" class="btn cartbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Cart"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                            <a href="./wishlist.php" class="btn wishbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>






    <?php include './aafooter.php'; ?>

    <script>
        $(document).ready(function() {
            $('.sortproduct').niceSelect();

            // $(".content").css('height', '200px !important');
            $(".show_hide").on("click", function() {

                if ($(".content").height() < 201) {
                    console.log($(".content").height());
                    $(".content").addClass('all')
                    $(".show_hide").text('Read Less');
                } else {
                    console.log($(".content").height());
                    $(".show_hide").text('Read More');
                    $(".content").removeClass('all')
                }

            });

            $("#price-range").ionRangeSlider({
                skin: "round",
                type: "double",
                min: 0,
                max: 1000,
                from: 300,
                to: 600,
                grid: false,
                force_edges: true,
                prefix: "$ ",
                onStart: function(data) {
                    document.getElementById('price_to').innerHTML = data.to;
                    document.getElementById('price_from').innerHTML = data.from;
                },
                onFinish: function(data) {
                    document.getElementById('price_to').innerHTML = data.to;
                    document.getElementById('price_from').innerHTML = data.from;
                }
            });
        });
    </script>


</body>

</html>