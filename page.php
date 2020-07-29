<?php
get_header();
?>
    <section class="hero pt-lg-0 pb-lg-0 position-relative">
        <div class="background" style="background-image: url(<?= field('hero_achtergrond') ?>)"></div>
        <div class="container">
            <div class="logo"><?= wp_img('hero_logo') ?></div>
            <div class="row hero-row align-items-center">
                <div class="col-sm-8">
                    <div class="title">
                        <h1><?= field('hero_titel') ?></h1>
                        <div class="border-top"></div>
                        <div class="border-bottom"></div>
                    </div>
                    <div class="subtext">
                        <p><?= field('hero_subtekst') ?></p>
                    </div>
                    <div class="button">
                        <a href="#" class="full_btn">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#scroll_container" class="scroll-link">
            <div class="svg-mouse">
                <svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130"
                     preserveAspectRatio="xMidYMid meet">
                    <g fill="none" fill-rule="evenodd">
                        <rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36"></rect>
                        <circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#FFF"></circle>
                    </g>
                </svg>
            </div>
        </a>
        <div id="scroll_container" class="scroll_container">

        </div>
        <div class="line"></div>
    </section>

    <section class="intro-text">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h2><?= field('intro_tekst_titel') ?></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="content">
                        <?= field('intro_tekst_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="half-text grey">
        <div class="container container-left">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <div class="img-holder">
                        <?= wp_img('info_tekst_afbeelding') ?>
                    </div>
                </div>
                <div class="col-sm-6 offset-lg-1">
                    <div class="title">
                        <h2><?= field('info_tekst_titel') ?></h2>
                    </div>
                    <div class="content">
                        <div class="extra-content-large">
                            <?= field('info_tekst_content') ?>
                        <div class="more-info">Meer info</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="title">
                        <div class="border-top"></div>
                        <h2><?= field('cta_titel') ?></h2>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <div class="button">
                        <a href="<?= field('cta_button_link') ?>" class="full_btn"><?= field('cta_button_tekst') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title">
                        <h2><?= field('contact_titel') ?></h2>
                    </div>
                    <div class="content">
                        <?= field('contact_tekst') ?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <a href="tel:<?= field('contact_icon_tel_tekst') ?>" class="contact-icon">
                        <div class="img-holder">
                            <?= wp_img('contact_icon_tel') ?>
                        </div>
                        <div class="contact-text">
                            <div class="person">
                                <?= field('contact_tel_person') ?>
                            </div>
                            <?= field('contact_icon_tel_tekst') ?>
                        </div>
                    </a>
                    <a href="mailto:<?= field('contact_icon_mail_tekst') ?>" class="contact-icon">
                        <div class="img-holder">
                            <?= wp_img('contact_icon_mail') ?>
                        </div>
                        <div class="contact-text">
                            <?= field('contact_icon_mail_tekst') ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>