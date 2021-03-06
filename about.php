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
                    <p>At FL3XX we want to solve the biggest problem in business aviation: How to give you back valuable
                        time in your daily workflow.</p>
                    <p>We are on a mission to enable a world where anyone can fly anywhere on short notice. To do this
                        we automate and optimize aviation, starting with an Aviation Management platform for business
                        aviation.</p>
                    <p>Every day we deliver solutions and connections that really matter for our consumers. Our platform
                        connects all your necessary services for sales, dispatch, crew, maintenance, and reporting for
                        Trip Support, Corporate Flight Departments, Charter Operators, and Non-Scheduled Operations.</p>
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


<section class="about-article-section">
    <div class="container">

        <?php foreach (range(1, 3) as $item) : ?>
            <div class="row about-article">
                <div class="col-xl-6">
                    <img src="./images/about/article-decore.svg" alt="" class="about-article__decore">
                    <h3 class="about-article__title">Our founding</h3>
                    <p class="about-article__text">We are a diverse group of young people from all over the world, that came
                        together in Vienna to work on an exciting aviation project; FL3XX. We are always eager to meet new
                        additions to the team. Do you think that can be you? Then have a look at our careers, or write us an
                        unsolicited application!</p>
                </div>
                <div class="col-xl-6">
                    <figure class="about-article__img">
                        <img src="./images/about/about-article.jpg" alt="">
                    </figure>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<section class="team-section decore-section decore-section--left">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__title">Meet Our Team</h2>
            <a href="#" class="btn btn-primary mt-4">
                <span class="btn__text">We’re Hiring</span>
                <div class="btn__icon">
                    <svg width="15" height="9">
                        <use xlink:href="#arrow-icon"></use>
                    </svg>
                </div>
            </a>
        </div>

        <div class="row">
            <?php foreach (range(1, 11) as $item) : ?>
                <div class="col-xl-3 mb-4">
                    <div class="teamate">
                        <div class="teamate__img">
                            <img src="../images/about/avatar.jpg" alt="" class="img-full-fit">
                        </div>

                        <h3 class="teamate__title">John Doe</h3>
                        <p class="teamate__position">Marketing Director</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="good-section call-to-action">

    <img src="./images/home-intro.jpg" alt="" class="good-bg img-full-fit">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="good-companie">

                    <h2 class="good-companie__title good-companie__title--start">Interested in our latest chapter? </h2>

                    <p class="good-companie__subtext good-companie__subtext--start">Learn more about FL3XX products</p>

                    <div class="text-center">
                        <a href="#" class="btn btn-secondary mt-3">
                            <span class="btn__text">Get a free demo</span>
                            <div class="btn__icon">
                                <svg width="15" height="9">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('views/base/footer.php'); ?>