<section class="case-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="section-header">
                    <p class="section-header__label">case studies</p>
                    <h2 class="section-header__title">Integrated systems</h2>
                    <p class="section-header__text">FL3XX works with the tools you already use. Integrations help you automatically move information back and forth between FL3XX and other systems.</p>
                </div>
            </div>
        </div>

        <div class="cases">
            <?php foreach (range(1, 6) as $item) : ?>
                <figure class="cases__item">
                    <img src="../images/home/case/case<?= $item; ?>.png" alt="">
                </figure>
            <?php endforeach; ?>
        </div>

        <div class="text-center case-btn">
            <a href="#" class="btn btn-primary">
                <span class="btn__text">Explore FL3XX Integrations</span>
                <div class="btn__icon">
                    <svg width="15" height="9">
                        <use xlink:href="#arrow-icon"></use>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>