<?php
    include '../include/header.php';
    include '../include/topnav.php';
?>
    
    <!-- grid-list start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Categories</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter">
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Baker's rack <span class="grid-items">(4)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Bestseller<span class="grid-items">(6)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Breakfast <span class="grid-items">(8)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Dairy & chesse <span class="grid-items">(7)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Dairy & chesse <span class="grid-items">(3)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Deal collection <span
                                            class="grid-items">(10)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Dinner <span class="grid-items">(12)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Featured product <span
                                            class="grid-items">(11)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Fresh fruits <span class="grid-items">(16)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Fresh meat <span class="grid-items">(18)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Fresh vegetable <span
                                            class="grid-items">(16)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Green seafood <span class="grid-items">(12)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Lunch <span class="grid-items">(14)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">New product <span class="grid-items">(20)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Organic dryfruit <span
                                            class="grid-items">(21)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Organic juice <span class="grid-items">(23)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Organic wine <span class="grid-items">(17)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Sea & fish <span class="grid-items">(1)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Special product <span class="grid-items">(5)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Starters <span class="grid-items">(9)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                <li class="f-price">
                                    <input type="checkbox">
                                    <label>0-100</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox">
                                    <label>100-200</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox">
                                    <label>200-300</label>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-size">
                            <h4 class="filter-title">Filter by size</h4>
                            <a href="#size-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by size
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-size collapse" id="size-filter">
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>10kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>10ltr</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>1kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>1ltr</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>2kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>3kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>5kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>5ltr</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-tag">
                            <h4 class="filter-title">Filter by tags</h4>
                            <a href="#tags-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by tags
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-tag collapse" id="tags-filter">
                                <li class="tag"><a href="product.php">Almond</a></li>
                                <li class="tag"><a href="product.php">Banana</a></li>
                                <li class="tag"><a href="product.php">Bitrrot</a></li>
                                <li class="tag"><a href="product.php">Blackberry</a></li>
                                <li class="tag"><a href="product.php">Chikoo</a></li>
                                <li class="tag"><a href="product.php">Coconet</a></li>
                                <li class="tag"><a href="product.php">Guava</a></li>
                                <li class="tag"><a href="product.php">juice</a></li>
                                <li class="tag"><a href="product.php">Ladiesfinger</a></li>
                                <li class="tag"><a href="product.php">Litchi</a></li>
                                <li class="tag"><a href="product.php">Minirrot</a></li>
                                <li class="tag"><a href="product.php">Mussel</a></li>
                                <li class="tag"><a href="product.php">Onion</a></li>
                                <li class="tag"><a href="product.php">Organic-food</a></li>
                                <li class="tag"><a href="product.php">Potato</a></li>
                                <li class="tag"><a href="product.php">Shrimp</a></li>
                                <li class="tag"><a href="product.php">Tomato</a></li>
                            </ul>
                        </div>
                        <div class="vendor-filter">
                            <h4 class="filter-title">Filter by vendor</h4>
                            <a href="#vendor" data-bs-toggle="collapse" class="filter-link"><span>Filter by vendor
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-vendor collapse" id="vendor">
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Fargglad</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Flisat</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Kyrre</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Lustigt</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Sundvik</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-banner">
                            <a href="grid-list.php" class="grid-banner">
                                <img src="../asset/image/grid-banner.jpg" class="img-fluid" alt="image">
                            </a>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-8 col-12">
                    <div class="grid-list-banner" style="background-image: url(image/slider10.jpg);">
                        <div class="grid-banner-content">
                            <h4>Bestseller</h4>
                            <p>Praesent dapibus, neque id cursus Ucibus, tortor neque egestas augue, eu vulputate magna
                                eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, facilisis luc...</p>
                        </div>
                    </div>
                    <div class="grid-4-product">
                        <div class="grid-list-select">
                            <ul class="grid-list">
                                <li class="colloction-icn"><a href="grid-list-2.php"><i
                                            class="ti-layout-list-thumb"></i></a></li>
                                <li class="colloction-icn"><a href="grid-list-3.php"><i
                                            class="ti-layout-grid2"></i></a></li>
                                <li class="colloction-icn three-grid"><a href="grid-list.php" class="active"><i
                                            class="ti-layout-grid3"></i></a></li>
                                <li class="colloction-icn four-grid"><a href="grid-list-4.php"><i
                                            class="ti-layout-grid4"></i></a></li>
                            </ul>
                            <ul class="grid-list-selector">
                                <li>
                                    <label>Sort by</label>
                                    <select>
                                        <option>Featured</option>
                                        <option>Best selling</option>
                                        <option>Alphabetically,A-Z</option>
                                        <option>Alphabetically,Z-A</option>
                                        <option>Price, low to high</option>
                                        <option>Price, high to low</option>
                                        <option>Date new to old</option>
                                        <option>Date old to new</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="grid-pro">
                            <ul class="grid-product">
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-1.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-01.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Fresh organic fruit (50gm)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$130.00 USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-2.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-02.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Fresh & healty food</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$126.00 USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-3.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-03.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-20%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Fresh apple</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$130.00 USD</span>
                                            <span class="old-price"><del>$150.00 USD</del></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-4.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-04.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Fresh litchi 100% organic</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$117.00 USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-5.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-05.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-12%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Vegetable tomato fresh</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$133.00 USD</span>
                                            <span class="old-price"><del>$145.00 USD</del></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-6.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-06.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-21%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Natural grassbean</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$139.00 USD</span>
                                            <span class="old-price"><del>$160.00 USD</del></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-7.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-07.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-10%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Fresh dryed almod (50gm)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$580.00 USD</span>
                                            <span class="old-price"><del>$590.00 USD</del></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-8.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-08.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Orange juice (5ltr)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$93.00 USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-9.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-09.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-12%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Organic coconet (5ltr) juice</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$167.00 USD</span>
                                            <span class="old-price"><del>$179.00 USD</del></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-10.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-010.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Shrimp jumbo (5Lb)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-11.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-011.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Sp.red fresh guava</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$45.00 USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product.php">
                                                <img class="img-fluid" src="../asset/image/pro/pro-img-12.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="../asset/image/pro/pro-img-012.jpg"
                                                    alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-25%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.php" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.php" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product.php">Fresh mussel (500g)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$245.00 USD</span>
                                            <span class="old-price"><del>$270.00 USD</del></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="list-all-page">
                        <span class="page-title">Showing 1 - 17 of 17 result</span>
                        <div class="page-number">
                            <a href="grid-list.php" class="active">1</a>
                            <a href="grid-list-2.php">2</a>
                            <a href="grid-list-3.php">3</a>
                            <a href="grid-list-4.php">4</a>
                            <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grid-list start -->
    <!-- quick veiw start -->
    <!-- <section class="quick-view">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i
                                class="ion-close-round"></i></a>
                    </div>
                    <div class="quick-veiw-area">
                        <div class="quick-image">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="image-1">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-2">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/prro-page-image01.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-3">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-4">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image1.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-5">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image2.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-6">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-7">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image3.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-8">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="../asset/image/pro-page-image/pro-page-image03.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                <li class="nav-item items">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img
                                            src="../asset/image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img
                                            src="../asset/image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img
                                            src="../asset/image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img
                                            src="../asset/image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img
                                            src="../asset/image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img
                                            src="../asset/image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img
                                            src="../asset/image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img
                                            src="../asset/image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="quick-caption">
                            <h4>Fresh organic reachter</h4>
                            <div class="quick-price">
                                <span class="new-price">$350.00 USD</span>
                                <span class="old-price"><del>$399.99 USD</del></span>
                            </div>
                            <div class="quick-rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and</p>
                            </div>
                            <div class="pro-size">
                                <label>Size: </label>
                                <select>
                                    <option>1 ltr</option>
                                    <option>3 ltr</option>
                                    <option>5 ltr</option>
                                </select>
                            </div>
                            <div class="plus-minus">
                                <span>
                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                    <input type="text" name="name" value="1">
                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                </span>
                                <a href="cart.php" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="wishlist.php" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- quick veiw end -->
    <?php
    include '../include/footer.php'
  ?>