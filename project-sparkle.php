<!DOCTYPE html>
<html lang="en-US">

<?php require('header.php') ?>


    <main class="main-root">
        <div id="dsn-scrollbar">
            <header>
                <div class="fullscreen-slider">
                    <div class="swiper-container" data-dsn-header="project">
                        <div id="descover-holder" class="descover-holder">
                            <span class="letter">scroll to</span>
                            <div class="scroll-down__line">
                                <span></span>
                            </div>
                            <span class="letter">discover</span>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="slider-item swiper-slide">
                                <div class="bg parallax-move-element" id="dsn-hero-parallax-img">
                                    <div class="bg-image cover-bg" data-overlay="5" data-dsn-ajax="img"
                                        data-image-src="assets/img/triangle/home-slider/DSC_1612.jpg"></div>
                                </div>

                                <div class="container h-100">
                                    <div id="dsn-hero-parallax-title" class="content-inner h-100">
                                       

                                        <div class="content">
                                            <div class="slider-header slider-header-top">
                                                <h1 data-dsn-animate="ajax">Sparkle</h1>
                                            </div>
                                            <div id="dsn-hero-parallax-fill-title"
                                                class="slider-header slider-header-bottom">
                                                <h1 data-dsn-animate="ajax">Sparkle</h1>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-project">
                    <div class="container intro-project section-margin">
                        <div class="intro-text text-center">
                            <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                                data-dsn-duration="170%" data-dsn-move="0%">
                                VIGOWORK
                            </div>
                            <div class="inner">
                                <h2 data-dsn-animate="text">Lorem Ipsum</h2>
                                <p data-dsn-animate="up">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure exercitationem eaque deleniti facilis magnam reiciendis obcaecati vero cumque nulla voluptatum mollitia quos culpa doloremque error provident, natus, sed possimus nostrum?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="box-seat">
                        <div class="dsn-v-text">
                            <div class="container-fluid">
                                <div class="box-middle-text">
                                    <a href="https://vimeo.com/175353205" class="vid">
                                        <div class="play-button">
                                            <div class="play-btn">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="inner-img" data-dsn-grid="move-up">
                                    <img data-dsn-scale="1" src="assets/img/triangle/project-sparkle/DSC_1708.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container intro-project section-p section-margin">
                        <div class="intro-text text-center">
                            <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                                data-dsn-duration="170%" data-dsn-move="0%">VIGOWORK
                            </div>
                            <div class="inner">
                                <h2 data-dsn-animate="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quidem, nesciunt labore nostrum similique expedita! Itaque placeat, molestias hic commodi, veniam fugiat ea eos voluptatum nihil quis voluptates corporis architecto?
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid slider-project section-margin">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/img/triangle/project-sparkle/DSC_1566.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/triangle/project-sparkle/DSC_1636.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/triangle/project-sparkle/DSC_1669.jpg" alt="">
                                </div>

                            </div>
                        </div>

                        <div class="swiper-pagination"></div>

                        <div class="slider-button-prev">
                            <div>
                                <svg viewBox="0 0 40 40">
                                    <polyline class="path" points="25.4 22.55 20 17.15 14.6 22.55"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="slider-button-next">
                            <div>
                                <svg viewBox="0 0 40 40">
                                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="next-project" data-dsn-footer="project">
                    <div id="dsn-next-parallax-img" class="bg">
                        <div class="bg-image cover-bg" data-overlay="4"
                            data-image-src="assets/img/triangle/home-slider/PearlTowers-5.jpg"></div>
                    </div>

                    <div id="dsn-next-parallax-title" class="project-title">
                        <a href="project-eko.php" class="effect-ajax" data-dsn-ajax="next-project">
                            <div class="title-text-header">
                                <div class="title-text-header-inner">
                                    <span>Eko Atlantic</span>
                                </div>
                            </div>
                            <div class="sub-text-header">
                                <h5>Next Project</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <?php require_once('footer.php') ?>
           
</body>
</html>