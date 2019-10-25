<!DOCTYPE html>
<html lang="en">

<?php wp_head(); ?>

<body>

<?php get_header(); ?>

<section class="intro">
    <img class="intro__image" src="img/intro5.jpg">
    <div class="intro-image-background"></div>
    <div class="container">
        <div class="intro-col left">
            <h1 class="intro-title">New <br>Room</h1>
        </div>
        <div class="intro-col right">
            <h3 class="title">New arrival of hand-made wooden frames.</h3>
            <h4 class="subtitle">I want to talk about to things that are quite important to me.</h4>
            <div class="btn" href="#">Explore</div>
        </div>
    </div>
</section>

<section class="products">

    <div class="products-menu">
        <a class="products-title active">Featured</a>
        <a class="products-title">Best Sellers</a>
        <a class="products-title">New arrivals</a>
    </div>

    <div class="products-store">
        <?php
        $products_data = array(
            array(
                'image' => 'img/picture-1.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-2.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-3.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-4.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-5.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-6.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-7.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-8.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            ),
            array(
                'image' => 'img/picture-9.jpg',
                'title' => 'Nielsen Apollo White',
                'price' => '11.99€'
            )
        );

        foreach($products_data as $products_data_element) : ?>

            <div class="products-item">
                <img class="products-image" src="<?php echo $products_data_element['image']; ?>" alt="">
                <div class="products-subtitle"><?php echo $products_data_element['title']; ?></div>
                <p class="text">From
                    <span class="price"><?php echo $products_data_element['price']; ?></span>
                </p>
            </div>

        <?php endforeach; ?>

    </div>

    <a class="btn-store active" href="#">
        <span class="title">All Products</span>
    </a>

</section>

<section class="works">

    <div class="works-container">

        <div class="works__content">

            <div class="works__title"><h3>Our Blog</h3></div>

            <div class="works__item_container">

                <div class="works__item">

                    <div class="works__image">
                        <img src="img/man.jpeg" height="90" width="100" alt="">
                    </div>

                    <div class="works__text_wrap">

                        <div class="works__text">
                            The Powerful<br>
                            Advertising Exec Steve Grasse
                        </div>

                        <div class="works__data">07.09.2015</div>

                    </div>

                </div>
                <div class="works__item">

                    <div class="works__image">
                        <img src="img/man2.jpeg" height="90" width="100" alt="">
                    </div>

                    <div class="works__text_wrap">

                        <div class="works__text">
                            How easy clear your place
                        </div>

                        <div class="works__data">07.09.2017</div>

                    </div>

                </div>
                <div class="works__item">

                    <div class="works__image">
                        <img src="img/man3.jpeg" height="90" width="100" alt="">
                    </div>

                    <div class="works__text_wrap">

                        <div class="works__text">
                            Make your Flat<br>Great again

                        </div>

                        <div class="works__data">07.11.2017</div>

                    </div>

                </div>

            </div>

            <a class="btn-work" href="#">
                <span>All news</span>
            </a>

        </div>

        <div class="works__photo">

            <img src="img/ourblog5.png" height="1000px" alt="">

        </div>

    </div>

</section>

<section class="about">

    <div class="container__about">

        <div class="about__photo">
            <img class="about__img" src="img/ourblog6.jpg" alt="">
        </div>

        <div class="about__content">

            <div class="about__title"><h3>About Us</h3></div>

            <div class="about__text">
                We believe that it is our talented, motivated and results-oriented team makes the difference. We work
                entirely from our office and do not outsource. Quality is what matters the most. Whilst some agencies
                are all about great design and others offer quality development, we strive to offer both.
            </div>

            <a class="btn-work" href="page-about.php">
                <span>Read More</span>
            </a>

        </div>

    </div>

</section>

<section class="art">

    <div class="art__text_wrap">

        <div class="art__title"><h3>Our Instagram</h3></div>

        <div class="art__text">2011 folowers</div>

    </div>


    <div class="art__container">

        <div class="art__item">
            <img src="img/instagram_img_9.jpg" alt="">
        </div>

        <div class="art__item">
            <img src="img/instagram_img_11.jpg" alt="">
            <img src="img/instagram_img_3.jpg" alt="">
        </div>

        <div class="art__item">
            <img src="img/instagram_img_7jpg" alt="">
            <img src="img/instagram_img_8.jpg.jpg" alt="">
        </div>

        <div class="art__item">
            <img src="img/instagram_img_10.jpg" alt="">
        </div>

    </div>

    <div class="btn-art">
        <a class="btn-work" href="#">
            <span>Follow</span>
        </a>
    </div>

</section>

<section class="subscribe">

    <div class="subscribe__title"><h2>Subscribe to receive behind the <br> scenes stories & news</h2></div>

    <div class="container__sub">

        <div class="container__input">

            <input type="text" name="email" placeholder="Your email"> <a class="btn-input"><span>Subscribe</span></a>

        </div>

    </div>

</section>

<?php get_footer(); ?>

<?php wp_footer(); ?>

</body>
</html>