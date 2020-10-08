<section class="news-section decore-section decore-section--left">
    <div class="container">

        <div class="section-header">
            <p class="section-header__label">News</p>
            <h2 class="section-header__title">News & Insights</h2>
            <p class="section-header__text">Be informed of our latest news, articles, tips, and insights.</p>
        </div>

        <div class="row">
            <?php foreach (range(1, 3) as $item) : ?>
                <div class="col-xl-4 mb-4 mb-xl-0">
                    <article class="news-item">
                        <a href="#" class="news-item__img">
                            <img src="../images/news/news-img<?= $item; ?>.jpg" alt="News" class="img-full-fit">
                        </a>
                        <div class="news-content">
                            <a href="#" class="news-content__title h3">FL3XX supports remote working during the ...</a>
                            <p class="news-content__text">FL3XX aviation management platform provides a full solution for aviation business…</p>
                            <a href="#" class="news-content__link">Learn more</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>