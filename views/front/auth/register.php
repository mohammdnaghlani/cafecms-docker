<?php require_once createPath('views.layouts.front-partials.header') ; ?>
<body>
    <div class="wrapper default">
        <div class="container">
            <div class="row">
                <div class="main-content col-12 col-md-7 col-lg-5 mx-auto">
                    <div class="account-box">
                        <a href="#" class="logo">
                            <img src="<?=getFrontAssets('img/logo.png') ; ?>" alt="">
                        </a>
                        <div class="account-box-title">ثبت‌نام در تاپ کالا</div>
                        <div class="message-light">اگر قبلا با ایمیل ثبت‌نام کرده‌اید، نیاز به
                            ثبت‌نام مجدد با شماره
                            همراه ندارید</div>
                        <div class="account-box-content">
                            <form class="form-account" method="post" action="<?=getUriByAliensName('register_user') ; ?>">
                            <?= CSRFInput() ;?>
                                <div class="form-account-title">پست الکترونیک یا شماره موبایل</div>
                                <div class="form-account-row">
                                    <label class="input-label"><i class="now-ui-icons users_single-02"></i></label>
                                    <input class="input-field" type="text" name="email"
                                        placeholder="پست الکترونیک یا شماره موبایل خود را وارد نمایید">
                                </div>
                                <div class="form-account-title">کلمه عبور</div>
                                <div class="form-account-row">
                                    <label class="input-label"><i
                                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                                    <input class="input-field" type="password" name="password"
                                        placeholder="کلمه عبور خود را وارد نمایید">
                                </div>
                                <div class="form-account-agree">
                                    <label class="checkbox-form checkbox-primary">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkbox-check"></span>
                                    </label>
                                    <label for="agree">
                                        <a href="#" class="btn-link-border">حریم خصوصی</a> و <a href="#"
                                            class="btn-link-border">شرایط و قوانین</a> استفاده از سرویس های سایت
                                        تاپ کالا را مطالعه نموده و با کلیه موارد آن موافقم.</label>
                                </div>
                                <div class="form-account-row form-account-submit">
                                    <div class="parent-btn">
                                        <button class="dk-btn dk-btn-info">
                                            ثبت نام در تاپ کالا
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="account-box-footer">
                            <span>قبلا در تاپ کالا ثبت‌نام کرده‌اید؟</span>
                            <a href="#" class="btn-link-border">وارد شوید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mini-footer">
            <nav>
                <div class="container">
                    <ul class="menu">
                        <li>
                            <a href="#">درباره تاپ کالا</a>
                        </li>
                        <li>
                            <a href="#">فرصت‌های شغلی</a>
                        </li>
                        <li>
                            <a href="#">تماس با ما</a>
                        </li>
                        <li>
                            <a href="#">همکاری با سازمان‌ها</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="copyright-bar">
                <div class="container">
                    <p>
                        استفاده از مطالب فروشگاه اینترنتی تاپ کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
                        کلیه حقوق این سایت متعلق
                        به شرکت نوآوران فن آوازه (فروشگاه آنلاین تاپ کالا) می‌باشد.
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <?php require_once createPath('views.layouts.front-partials.footer-script') ; ?>  