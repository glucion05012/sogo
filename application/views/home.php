        <!-- ks breadcrumb begin -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="card-link" href="<?php echo $_SESSION['qr'] ?>"><?php echo $getBranch['name']; ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
        <!-- breadcrumb end -->

        <!-- ks banner begin -->

        <header class="bannerSection">
            <img src="<?php echo base_url()."assets/images/Sogo-FNB-banner1-scaled.jpg"; ?>" class="img-fluid" alt="Sogo Banner">
            <div class="container-fluid" style="height:139px;color:#212529;">
                <div class="blockquote text-center header-label" style="position:relative;top:50%;-ms-transform: translateY(-50%);transform: translateY(-50%);">
                    <h1 class="align-middle">Categories</h1>
                    <hr> 
                </div>
            </div>
        </header>

        <!-- banner end -->
        <!-- ks Menu Category Cards in Masonry layout begin -->
        <main>
            <div class="container-fluid my-3" id="masonryContainer">
                <div class="card-columns col-lg-10 col-xl-10 mx-auto">
                    <!-- ks single card begin -->
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Bento Box" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/bentobox.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bento Box</h5>
                                <!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                            </div>
                        </a>
                    </div>
                    <!-- single card end -->
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Ala Carte" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/alacarte.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">?? La Carte</h5>
                                <!--<p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>-->
                            </div>
                        </a>
                    </div>
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Appetizer" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/appetizer.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Appetizer</h5>
                                <!--<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit.</p>-->
                            </div>
                        </a>
                    </div>

                    <!--<div class="card category-card col-sm mx-auto">-->
                    <!--    <a class="card-link" href="items/<?php echo "Food Promo" ?>">-->
                    <!--        <img src="<?php echo base_url()."assets/images/food categories/promo.jpg"; ?>" class="card-img-top" alt="...">-->
                    <!--        <div class="card-body">-->
                    <!--            <h5 class="card-title">Food Promo</h5>-->
                                <!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Soups" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/soups.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Soups</h5>
                                <!--<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>-->
                            </div>
                        </a>
                    </div>

                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Pasta and Noodles" ?>">
                        <img src="<?php echo base_url()."assets/images/food categories/pastaandnoodles.png"; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pasta & Noodles</h5>
                            <!--<p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>-->
                        </div>
                        </a>
                    </div>
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Desserts" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/desserts.jpg"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Desserts</h5>
                                <!--<p class="card-text">Neque porro quisquam est.</p>-->
                            </div>
                        </a>
                    </div>
                    
                    <!--<div class="card category-card col-sm mx-auto">-->
                    <!--    <a class="card-link" href="items/<?php echo "Special Deals" ?>">-->
                    <!--        <img src="<?php echo base_url()."assets/images/food categories/special.jpg"; ?>" class="card-img-top" alt="...">-->
                    <!--        <div class="card-body">-->
                    <!--            <h5 class="card-title">Special Deals</h5>-->
                                <!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "sandwiches" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/sandwiches.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sandwiches</h5>
                                <!--<p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea?</p>-->
                            </div>
                        </a>
                    </div>
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Beverages" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/beverages.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Beverages</h5>
                                <!--<p class="card-text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>-->
                            </div>
                        </a>
                    </div>
                    <div class="card category-card col-sm mx-auto">
                        <a class="card-link" href="items/<?php echo "Filipino Breakfast" ?>">
                            <img src="<?php echo base_url()."assets/images/food categories/filipinobreakfast.png"; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Filipino Breakfast</h5>
                                <!--<p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>-->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <!-- Menu Category Cards in Masonry layout end -->
