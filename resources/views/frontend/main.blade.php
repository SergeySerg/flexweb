@extends('ws-app')

@section('content')

{{--@if( count($report) !== 0 AND $categories_data['report']->active == 1)--}}
    <div class="container">
        <div class="row">

            <div class="section-slider">
                <div class="owl-carousel">

                    <div>

                        <div class="col-md-6">

                            <div class="slide_img-wrap center">
                                <img  class="slide-img" src="/img/slide_design@3x.png" alt="">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="slide_description-wrap">
                                <div class="slide-name">хостинг</div>
                                <p class="slide_main-description">DigitalMakers — креативное бюро,
                                    которое нацелено на создание
                                    идеального продукта для
                                    вашего бренда. </p>
                                <p class="slide_description">Мы работаем над воплощением вашей идеи в жизнь в
                                    цифровом виде. DigitalMakers — креативное бюро,
                                    которое нацелено на  создание идеального продукта
                                    для вашего бренда.  Мы работаем над воплощением
                                    вашей идеи в жизнь в  цифровом виде.</p>
                                <button class="order">Замовити</button>
                            </div>

                        </div>

                    </div>
                    <div>

                        <div class="col-md-6">

                            <div class="slide_img-wrap center">
                                <img  class="slide-img" src="/img/slide_hosting@3x.png" alt="">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="slide_description-wrap">
                                <div class="slide-name">хостинг</div>
                                <p class="slide_main-description">DigitalMakers — креативное бюро,
                                    которое нацелено на создание
                                    идеального продукта для
                                    вашего бренда. </p>
                                <p class="slide_description">Мы работаем над воплощением вашей идеи в жизнь в
                                    цифровом виде. DigitalMakers — креативное бюро,
                                    которое нацелено на  создание идеального продукта
                                    для вашего бренда.  Мы работаем над воплощением
                                    вашей идеи в жизнь в  цифровом виде.</p>
                                <button class="order">Замовити</button>
                            </div>

                        </div>

                    </div>
                    <div>

                        <div class="col-md-6">

                            <div class="slide_img-wrap center">
                                <img  class="slide-img" src="/img/slide_rekonstruction@3x.png" alt="">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="slide_description-wrap">
                                <div class="slide-name">хостинг</div>
                                <p class="slide_main-description">DigitalMakers — креативное бюро,
                                    которое нацелено на создание
                                    идеального продукта для
                                    вашего бренда. </p>
                                <p class="slide_description">Мы работаем над воплощением вашей идеи в жизнь в
                                    цифровом виде. DigitalMakers — креативное бюро,
                                    которое нацелено на  создание идеального продукта
                                    для вашего бренда.  Мы работаем над воплощением
                                    вашей идеи в жизнь в  цифровом виде.</p>
                                <button class="order">Замовити</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <section class="section-slider_bg"></section>

    <div class="section_services">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul class="soc">
                        <li class="soc_item"><a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li class="soc_item"><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="soc_item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="soc_item"><a href="https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="all-items_wrap"><a href="#" class="all-items  all-services retina">всі послуги</a></div>
                    <h2 class="section_title section_title__services retina">Послуги</h2>
                    <h3 class="section_description">Мы уверенны, что сотрудничество со студией «Dream-line»  </h3>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item">
                        <img class="services_item__img" src="/img/imgForSprite/makeup@3x.png" alt="">
                        <h4 class="services_item__title">Верстка</h4>
                        <p class="services_item__description">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса.
                        </p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item">
                        <img class="services_item__img" src="/img/imgForSprite/programming@3x.png" alt="">
                        <h4 class="services_item__title">Програмування</h4>
                        <p class="services_item__description">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса.
                        </p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item">
                        <img class="services_item__img" src="/img/imgForSprite/hosting@3x.png" alt="">
                        <h4 class="services_item__title">Хостинг</h4>
                        <p class="services_item__description">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса.
                        </p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item">
                        <img class="services_item__img" src="/img/imgForSprite/design@3x.png" alt="">
                        <h4 class="services_item__title">Веб-дизайн</h4>
                        <p class="services_item__description">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса.
                        </p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item">
                        <img class="services_item__img" src="/img/imgForSprite/seo@3x.png" alt="">
                        <h4 class="services_item__title">Просування</h4>
                        <p class="services_item__description">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса.
                        </p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item">
                        <img class="services_item__img" src="/img/imgForSprite/rekonstruction@3x.png" alt="">
                        <h4 class="services_item__title">Реконструкція</h4>
                        <p class="services_item__description">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса.
                        </p>
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="section_news">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="all-items_wrap"><a href="#" class="all-items all-news retina">всі новини</a></div>
                    <h2 class="section_title section_title__news retina">Новини</h2>
                    <h3 class="section_description section_description__white">Мы уверенны, что сотрудничество со студией «Dream-line»
                        - это 100% успех Вашего бизнеса. </h3>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item news_item">
                        <img class="services_item__img" src="/img/news-1.jpg" alt="">
                        <h4 class="services_item__title news_item__title">
                            <div class="news-date">
                                <div class="news-date_day">18</div><div class="news-date_month">feb</div>
                            </div>
                            Лучшее, что мы
                            можем сделать</h4>
                        <p class="services_item__description news_item__description">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать
                        </p>
                        <button class="news-button">Детальніше</button>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item news_item">
                        <img class="services_item__img" src="/img/news-2.jpg" alt="">
                        <h4 class="services_item__title news_item__title">
                            <div class="news-date">
                                <div class="news-date_day">18</div><div class="news-date_month">feb</div>
                            </div>
                            Лучшее, что мы
                            можем сделать</h4>
                        <p class="services_item__description news_item__description">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать
                        </p>
                        <button class="news-button">Детальніше</button>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="services_item news_item">
                        <img class="services_item__img" src="/img/news-3.jpg" alt="">
                        <h4 class="services_item__title news_item__title">
                            <div class="news-date">
                                <div class="news-date_day">18</div><div class="news-date_month">feb</div>
                            </div>
                            Лучшее, что мы
                            можем сделать</h4>
                        <p class="services_item__description news_item__description">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать
                        </p>
                        <button class="news-button">Детальніше</button>
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="section_portfolio">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="all-items_wrap"><a href="#" class="all-items  all-portfolio retina">всі роботи</a></div>
                    <h2 class="section_title section_title__portfolio retina">Портфоліо</h2>
                    <h3 class="section_description">Мы уверенны, что сотрудничество со студией «Flex-Web» </h3>
                </div>

                <div class="col-md-12">
                    <ul class="portfolio-type">
                        <li class="portfolio-type_item active" data-portfolio-type="all">All</li>
                        <li class="portfolio-type_item" data-portfolio-type="branding">Branding</li>
                        <li class="portfolio-type_item" data-portfolio-type="design">Design</li>
                        <li class="portfolio-type_item" data-portfolio-type="development">Development</li>
                        <li class="portfolio-type_item" data-portfolio-type="strategy">Strategy</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" data-category="branding">
                    <a href="#" class="portfolio_item">
                        <div class="portfolio_item__img" style="background-image: url('/img/portfolio-1.jpg');" alt="">
                            <div class="portfolio_item-description">
                                <h2 class="section_title portfolio-item_description-title">Заголовок</h2>
                                <div class="portfolio_item-description-text">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" data-category="design">
                    <a href="#" class="portfolio_item">
                        <div class="portfolio_item__img" style="background-image: url('/img/portfolio-2.jpg');" alt="">
                            <div class="portfolio_item-description">
                                <h2 class="section_title portfolio-item_description-title">Заголовок</h2>
                                <div class="portfolio_item-description-text">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4" data-category="development">
                    <a href="#" class="portfolio_item">
                        <div class="portfolio_item__img" style="background-image: url('/img/portfolio-1.jpg');" alt="">
                            <div class="portfolio_item-description">
                                <h2 class="section_title portfolio-item_description-title">Заголовок</h2>
                                <div class="portfolio_item-description-text">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" data-category="development">
                    <a href="#" class="portfolio_item">
                        <div class="portfolio_item__img" style="background-image: url('/img/portfolio-2.jpg');" alt="">
                            <div class="portfolio_item-description">
                                <h2 class="section_title portfolio-item_description-title">Заголовок</h2>
                                <div class="portfolio_item-description-text">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4" data-category="branding">
                    <a href="#" class="portfolio_item">
                        <div class="portfolio_item__img" style="background-image: url('/img/portfolio-1.jpg');" alt="">
                            <div class="portfolio_item-description">
                                <h2 class="section_title portfolio-item_description-title">Заголовок</h2>
                                <div class="portfolio_item-description-text">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" data-category="strategy">
                    <a href="#" class="portfolio_item">
                        <div class="portfolio_item__img" style="background-image: url('/img/portfolio-2.jpg');" alt="">
                            <div class="portfolio_item-description">
                                <h2 class="section_title portfolio-item_description-title">Заголовок</h2>
                                <div class="portfolio_item-description-text">Безусловно, разработка сайтов любой сложности в г. Киев, Винница, Москва – это очень важно, но еще важнее оказать</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="section_slogan">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <img class="slogan-img_bg" src="/img/slogan_bg.png" alt="">
                    <img class="slogan-img_pc" src="/img/slogan_pc.png" alt="">
                    <div class="col-md-offset-3 col-md-9 col-sm-offset-2 col-sm-10 col-xs-12">
                        <h1 class="slogan">Лучшее, что мы можем сделать	— Это создавать веб-сайты!</h1>
                        <button class="slogan_btn">Замовити</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="section_reviews">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="all-items_wrap"><a href="#" class="all-items all-reviews retina">всі відгукм</a></div>
                    <h2 class="section_title section_title__reviews retina">Відгуки</h2>
                    <h3 class="section_description">Мы уверенны, что сотрудничество со студией «Dream-line»
                        - это 100% успех Вашего бизнеса. </h3>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel">
                        <div class="reviews-item clearfix">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="reviews-item_photo" style="background-image: url('img/reviews_1.jpg');"></div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <span class="reviews-item_author-name">Алексей </span>
                                <span class="reviews-item_author-position">директор “Арт -центр”</span>
                                <div class="reviews-item_text">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса. Заказав у компании разработку нашего интернет-магазина, мы не пожалели. Нам сделали отличный интернет-магазин – простая и понятная админ. система, и лаконичный, стильный дизайн. Который превосходно отображает суть нашей компании. Очень понравилось, что все сотрудники компании – это, прежде всего, индивидуальны...</div>
                            </div>
                        </div>
                        <div class="reviews-item clearfix">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="reviews-item_photo" style="background-image: url('img/reviews_1.jpg');"></div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <span class="reviews-item_author-name">Алексей </span>
                                <span class="reviews-item_author-position">директор “Арт -центр”</span>
                                <div class="reviews-item_text">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса. Заказав у компании разработку нашего интернет-магазина, мы не пожалели. Нам сделали отличный интернет-магазин – простая и понятная админ. система, и лаконичный, стильный дизайн. Который превосходно отображает суть нашей компании. Очень понравилось, что все сотрудники компании – это, прежде всего, индивидуальны...</div>
                            </div>
                        </div>
                        <div class="reviews-item clearfix">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="reviews-item_photo" style="background-image: url('img/reviews_1.jpg');"></div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <span class="reviews-item_author-name">Алексей </span>
                                <span class="reviews-item_author-position">директор “Арт -центр”</span>
                                <div class="reviews-item_text">Мы уверенны, что сотрудничество со студией «Dream-line» - это 100% успех Вашего бизнеса. Заказав у компании разработку нашего интернет-магазина, мы не пожалели. Нам сделали отличный интернет-магазин – простая и понятная админ. система, и лаконичный, стильный дизайн. Который превосходно отображает суть нашей компании. Очень понравилось, что все сотрудники компании – это, прежде всего, индивидуальны...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="section_customers">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="all-items_wrap"><a href="#" class="all-items all-customers retina">всі клієнти</a></div>
                    <h2 class="section_title section_title__customers retina">Наші клієнти</h2>
                    <h3 class="section_description">Мы уверенны, что сотрудничество со студией «Dream-line»
                        - это 100% успех Вашего бизнеса. </h3>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="customers_item"><img class="customers_item__img" src="/img/customer_1.png" alt="" class="customer_img"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="customers_item"><img class="customers_item__img" src="/img/customer_2.png" alt="" class="customer_img"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="customers_item"><img class="customers_item__img" src="/img/customer_3.png" alt="" class="customer_img"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="customers_item"><img class="customers_item__img" src="/img/customer_4.png" alt="" class="customer_img"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="customers_item"><img class="customers_item__img" src="/img/customer_5.png" alt="" class="customer_img"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="customers_item"><img class="customers_item__img" src="/img/customer_6.png" alt="" class="customer_img"></div>
                </div>
            </div>
        </div>

    </div>
{{--@endif--}}



@endsection