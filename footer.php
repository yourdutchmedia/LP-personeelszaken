</main>

<footer style="background-image: url(<?= url('/assets/images/logo-pavo-blauw@2x.svg') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-12 mobile-socials">
                <?php dynamic_sidebar('footer_widget_4'); ?>
            </div>
            <div class="col-lg-3 col-md-6 contactinformation">
                <?php dynamic_sidebar('footer_widget_1'); ?>
            </div>
            <div class="col-lg-3 col-md-6 footermenu">
                <?php dynamic_sidebar('footer_widget_2'); ?>
            </div>
            <div class="col-lg-3 col-md-6 footermenu">
                <?php dynamic_sidebar('footer_widget_3'); ?>
            </div>
            <div class="col-lg-3 col-md-6 footersocial">
                <div class="socials">
                    <?php dynamic_sidebar('footer_widget_4'); ?>
                </div>
                <div class="footerinfo">
                    <?php dynamic_sidebar('footer_widget_5'); ?>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>@<?= date('Y') ?> <b><a target="_blank" href="https://www.pavoadvice.nl/">Pavo advice</a></b>. Alle rechten
                    voorbehouden.
            </div>
            <div class="col-md-6 right">
                <p>Powered by: <b> <a target="_blank" href="https://www.yourdutchmedia.nl/">Your Dutch Media</a></b></p>
            </div>
        </div>
    </div>

</div>

<?php
wp_footer()
?>

<!-- scripts -->
<script type="text/javascript" src="<?= url('/assets/dist/js/main.js') ?>"></script>
<!-- end scripts -->
