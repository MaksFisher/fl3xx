<?php require_once('views/base/header.php'); ?>

<section class="intro-section">

    <img src="../images/home-intro.jpg" alt="" class="intro-bg img-full-fit">

    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__item">HOME</a> <span>/</span>
        <p class="breadcrumbs__item breadcrumbs__item--current">about</p>
    </div>

    <div class="container">
        <div class="intro">

            <p class="intro__label">PRICING</p>

            <h1 class="intro__title">Grow better with the right plan</h1>

            <p class="intro__text">Subtitle Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <div class="d-flex mt-4">
                <a href="#" class="btn btn-primary mr-4">
                    <span class="btn__text">Compae Plans</span>
                    <div class="btn__icon">
                        <svg width="15" height="9">
                            <use xlink:href="#arrow-icon"></use>
                        </svg>
                    </div>
                </a>


                <div class="select select--orange">
                    <button type="button" class="select-btn">
                        <span class="select-result">USD</span>
                        <div class="select-btn__icon">
                            <svg width="10" height="18">
                                <use href="#too-way-icon"></use>
                            </svg>
                        </div>
                    </button>
                    <div class="select-list">
                        <a href="#asas" class="select-list__item">UAH</a>
                        <a href="#asas" class="select-list__item">KRT</a>
                        <a href="#asas" class="select-list__item">FSE</a>
                        <a href="#asas" class="select-list__item">OPE</a>
                        <a href="#asas" class="select-list__item">RTT</a>
                    </div>
                    <input type="hidden" class="form-field-hidden">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="price-plan-section">
    <div class="container">
        <div class="row">

            <?php foreach (range(1, 3) as $item) : ?>
                <div class="col-xl-4">
                    <!-- Если нужно, то можешь просто заменить этот див на форму. Стили подтянуться  -->
                    <form action="#" class="price-plan">
                        <img src="./images/header-logo.svg" alt="Fl3xx" class="price-plan__logo">

                        <div class="price-plan__value">$<span>189</span>.00</div>

                        <p class="price-plan__periodical">per aircraft per month</p>

                        <h3 class="price-plan__name">FLEXX GO</h3>
                        <p class="price-plan__descript">Perfect for small operations</p>

                        <div class="select">
                            <button type="button" class="select-btn">
                                <span class="select-result">100 Tasks / mo</span>
                                <div class="select-btn__icon">
                                    <svg width="10" height="18">
                                        <use href="#too-way-icon"></use>
                                    </svg>
                                </div>
                            </button>
                            <div class="select-list">
                                <p class="select-list__item">100 Tasks / mo</p>
                                <p class="select-list__item">100 Tasks / mo</p>
                                <p class="select-list__item">100 Tasks / mo</p>
                                <p class="select-list__item">100 Tasks / mo</p>
                                <p class="select-list__item">100 Tasks / mo</p>
                            </div>
                            <input type="hidden" class="form-field-hidden">
                        </div>

                        <a href="#" class="btn btn-primary mt-3 w-100">
                            <span class="btn__text">Enquire Now</span>
                        </a>
                    </form>

                    <div class="plan-list">
                        <h4 class="plan-list__title mb-2">FL3XX GO</h4>

                        <?php foreach (range(1, 5) as $item) : ?>
                            <p class="plan-list__item">Operator Discription</p>
                            <p class="plan-list__item">Integtations</p>
                            <p class="plan-list__item">Sales, Dispatch, Crew</p>
                        <?php endforeach; ?>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<section class="faq-section">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__title">FAQ</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-8">

                <?php foreach (range(1, 5) as $item) : ?>
                    <div class="faq">
                        <button class="faq__question">
                            <h4 class="pr-4">What are Tasks and how many do I need?</h4>

                            <svg width="12" height="15">
                                <use href="#arrow-shevron-icon"></use>
                            </svg>
                        </button>

                        <div class="faq__answear">
                            <p>A Task is counted every time a Zap successfully moves data or takes action for you. For example, if your Zap has an action to create new Google Contacts, each contact that is created will use one Task.</p>
                            <p>The number of Tasks you need depends on the number of active Zaps you have and how frequently those Zaps will run to automate your workflow. Don’t worry, if you use up all your Tasks in a given month we’ll hold your Tasks until you upgrade or your monthly usage resets. If you use more than 2 million Tasks, you will be billed at a per-task rate of $0.0010.</p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
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