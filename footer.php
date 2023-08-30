<!-- Footer -->
<?php $front_id = get_option('page_on_front'); ?>
<footer class="footer">
    <div class="block__content block__content_footer ">
        <div class="footer__row">
            <a href="#" class="footer__img">
                <img src="<?php the_field('footer_logo', $front_id); ?>" alt="">
            </a>
            <div class="footer__links">
                <a href="tel:<?php the_field('footer_num', $front_id); ?>"><?php the_field('footer_num', $front_id); ?></a>
                <a href="mailto:<?php the_field('footer_mail', $front_id); ?>"><?php the_field('footer_mail', $front_id); ?></a>
            </div>
            <div class="footer__subtitle">
                <?php the_field('footer_subtitle', $front_id); ?>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->
</div>


<?php wp_footer(); ?>
</body>
</html>