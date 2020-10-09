<?php require_once('views/base/header.php'); ?>

<section class="intro-section">

    <img src="../images/home-intro.jpg" alt="" class="intro-bg img-full-fit">

    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__item">HOME</a> <span>/</span>
        <p class="breadcrumbs__item breadcrumbs__item--current">about</p>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="intro">

                    <p class="intro__label">About</p>

                    <h1 class="intro__title">We are <span class="orange">FL3XX</span></h1>

                    <p class="intro__text">Helping you to automate and optimize your aviation business.</p>

                </div>
            </div>

            <div class="col-xl-6">
                <div class="intro-description">
                    <p>At FL3XX we want to solve the biggest problem in business aviation: How to give you back valuable time in your daily workflow.</p>
                    <p>We are on a mission to enable a world where anyone can fly anywhere on short notice. To do this we automate and optimize aviation, starting with an Aviation Management platform for business aviation.</p>
                    <p>Every day we deliver solutions and connections that really matter for our consumers. Our platform connects all your necessary services for sales, dispatch, crew, maintenance, and reporting for Trip Support, Corporate Flight Departments, Charter Operators, and Non-Scheduled Operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timeline-section">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__title">The FL3XX Story <span class="orange">10 Years</span> in the Making</h2>
        </div>

        <div class="timeline">
            <?php foreach (range(1, 12) as $item) : ?>
                <div class="timeline-item">
                    <div class="timeline-inner">
                        <figure class="timeline-img">
                            <img src="../images/about/timeline-icon1.svg" alt="">
                        </figure>
                        <div class="timeline-content">
                            <h3 class="timeline-content__title">May 2010 </h3>
                            <p class="timeline-content__text">First offices - Softwarepark 21, Hagenberg</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<div id="otstup"></div>
<?php require_once('views/base/footer.php'); ?>