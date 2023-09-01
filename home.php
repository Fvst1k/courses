<?php
/*
Template Name: template
*/
?>

<?php get_header() ?>


    <main>
        <section  class="filter__btns">
            <div class="block__content block__content_filter">
                <div class="filter__row">
                    <p>Фильтрация: </p>
                    <select class="filter__btn-list">
                        <option value="1" class="filter__btn">
                            для начинающих
                        </option>
                        <option value="2" class="filter__btn">
                            для опытных
                        </option >
                        <option value="3" class="filter__btn filter__btn_price" selected>
                            сначала недорогие
                        </option >

                        <option value="4" class="filter__btn filter__btn_price_inv" >
                            сначала дорогие
                        </option >

                        <option value="5" class="filter__btn">
                            по рейтингу
                        </option >
                        <option value="6" class="filter__btn">
                            по отзывам
                        </option >
                    </select>
                </div>

            </div>
        </section>
        <div class="filter">
            <?php
            $like_counter = 9999;
            if (have_rows('create_cards')):
                while (have_rows('create_cards')) :
                    the_row(); ?>
                    <div class="filter_item" reviews="<?php the_sub_field('filter_reviews'); ?>" rating="<?php the_sub_field('filter_rating'); ?>" level="<?php the_sub_field('filter_level'); ?>" data-price="<?php the_sub_field('filter_price'); ?>">
                        <section class="card">
                            <div class="block__content">
                                <div class="card__grid">
                                    <div class="card__grid-item card__grid-item_1">
                                        <div class="card__img">
                                            <img src="<?php the_sub_field('card_image'); ?>" alt="error">
                                        </div>
                                        <div class="card__video">
                                            <video src="<?php the_sub_field('card_video'); ?>" controls>
                                            </video>
                                        </div>
                                    </div>
                                    <div class="card__grid-item card__grid-item_2">
                                        <div class="card__title">
                                            <?php the_sub_field('card_title'); ?>
                                        </div>
                                        <div class="card__rating-table">
                                            <div class="card__rating-item card__rating-item_star card__rating-item_1">
                                                <div class="card__rating-star">
                                                    <svg width="20" height="18" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                              fill="#ff9900"/>
                                                    </svg>
                                                </div>
                                                <div class="card__rating-star">
                                                    <svg width="20" height="18" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                              fill="#ff9900"/>
                                                    </svg>
                                                </div>
                                                <div class="card__rating-star">
                                                    <svg width="20" height="18" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                              fill="#ff9900"/>
                                                    </svg>
                                                </div>
                                                <div class="card__rating-star">
                                                    <svg width="20" height="18" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                              fill="#ff9900"/>
                                                    </svg>
                                                </div>
                                                <div class="card__rating-star">
                                                    <svg width="20" height="18" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                              fill="#ff9900"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="card__rating-item card__rating-item_2">
                                                <div class="card__rating-reviews-number">
                                                    <?php the_sub_field('card_review'); ?>
                                                </div>
                                            </div>
                                            <div class="card__rating-item card__rating-item_3">
                                                <div class="card__rating-sum"><?php the_sub_field('card_rating'); ?></div>
                                            </div>
                                            <div class="card__rating-item card__rating-item_score card__rating-item_4">
                                                <?php echo do_shortcode('[wp_ulike id="' . $like_counter . '"]');
                                                $like_counter++;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="card__rating-description">
                                            <?php the_sub_field('card_text'); ?>
                                        </div>
                                    </div>
                                    <div class="card__grid-item card__grid-item_3">
                                        <div class="card__course-pluses">
                                            <div class="card__pluses-title"><?php the_sub_field('card_pluses_title'); ?></div>
                                            <?php the_sub_field('card_pluses_text'); ?>
                                        </div>
                                    </div>

                                    <div class="card__grid-item card__grid-item_4">
                                        <div class="card__course-minuses">
                                            <div class="card__minuses-title"><?php the_sub_field('card_minuses_title'); ?></div>
                                            <?php the_sub_field('card_minuses_text'); ?>
                                        </div>
                                    </div>
                                    <div class="card__grid-item card__grid-item_5">
                                        <div class="card__course-price"><?php the_sub_field('card_price'); ?></div>
                                        <a href="<?php the_sub_field('card_btn_link'); ?>" class="card__course-btn">
                                            <?php the_sub_field('card_btn'); ?>
                                        </a>

                                        <div class="card__course-info">
                                            <?php the_sub_field('card_info'); ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>


                        <?php
                        if (get_sub_field('courses_content_select')) { ?>
                            <section class="content-courses">
                                <div class="block__content block__content_content-courses">
                                    <div class="content-courses__list-wrapper">
                                        <div class="content-courses__title">
                                            <?php the_sub_field('courses_title'); ?>
                                        </div>
                                        <div class="content-courses__list">
                                            <?php
                                            if (have_rows('courses_summary')):
                                                while (have_rows('courses_summary')) :
                                                    the_row(); ?>
                                                    <div class="content-courses__item">
                                                        <div class="content-courses__title-row">
                                                            <div class="content-courses__item-counter"><?php the_sub_field('courses_summary_number'); ?></div>
                                                            <h4 class="content-courses__item-title"><?php the_sub_field('courses_summary_title'); ?></h4>
                                                            <div class="content-courses__item-btn-group">
                                                                <div class="content-courses__item-btn content-courses__item-btn_1"></div>
                                                                <div class="content-courses__item-btn content-courses__item-btn_2"></div>
                                                            </div>
                                                        </div>
                                                        <article class="content-courses__text">
                                                            <?php the_sub_field('courses_summary_text'); ?>
                                                        </article>
                                                    </div>


                                                <?php endwhile;
                                            else :
                                            endif;
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php } ?>
                    </div>


                <?php endwhile;
            else :
            endif;
            ?>
        </div>

        <?php
        if (have_rows('slags_create')):
            while (have_rows('slags_create')) :
                the_row(); ?>

                <section class="slats">
                    <div class="block__content block__content_slats">
                        <div class="slats__item">
                            <div class="slats__img">
                                <img src="<?php the_sub_field('slags_image'); ?>" alt="error"/>
                            </div>
                            <div class="slats__text-group">
                                <div class="slats__title"><?php the_sub_field('slags_title'); ?></div>
                                <div class="slats__text"><?php the_sub_field('slags_text'); ?></div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile;
        else :
        endif;
        ?>

        <section class="reviews">
            <div class="block__content block__content_reviews">
                <div class="reviews__content">
                    <div class="reviews_title"><?php the_field('reviews_title'); ?></div>
                    <div class="reviews__table">
                        <?php
                        if (have_rows('create_reviews')):
                            while (have_rows('create_reviews')) :
                                the_row(); ?>

                                <div class="reviews__table-item">
                                    <div class="reviews__top">
                                        <div class="reviews__name">
                                            <div class="reviews__name-title"><?php the_sub_field('reviews_name'); ?></div>
                                            <a href="<?php the_sub_field('reviews_link'); ?>">
                                                <?php the_sub_field('reviews_title'); ?>
                                            </a>
                                        </div>
                                        <div class="reviews__stars">
                                            <svg width="26" height="23" viewBox="0 0 23 23" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_14_255)">
                                                    <path d="M18.5084 7.98104L14.1871 7.43698C13.8866 7.39917 13.623 7.20775 13.4822 6.92515L11.4573 2.86262C11.1026 2.15101 10.1284 2.17733 9.80874 2.90677L7.98271 7.07266C7.85569 7.3622 7.60152 7.56766 7.30332 7.6214L3.01384 8.39691C2.26256 8.53261 1.98522 9.51798 2.54415 10.0643L5.73675 13.183C5.95865 13.3999 6.06533 13.7183 6.0219 14.0341L5.39576 18.5756C5.286 19.3711 6.08912 19.9539 6.75449 19.5617L10.5539 17.3235C10.8179 17.1677 11.1381 17.1592 11.4094 17.3003L15.3118 19.3319C15.9954 19.6875 16.769 19.0626 16.6208 18.2741L15.7761 13.7718C15.7173 13.4587 15.8084 13.1351 16.0197 12.9066L19.0577 9.62054C19.59 9.04535 19.2653 8.07631 18.5084 7.98104Z"
                                                          fill="#ED8A19"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_14_255">
                                                        <rect width="17.907" height="17.1824" fill="white"
                                                              transform="matrix(-0.317683 -0.948197 -0.937071 0.349139 22.4624 16.9795)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <?php the_sub_field('reviews_rating'); ?>
                                        </div>
                                    </div>
                                    <div class="reviews__text">
                                        <?php the_sub_field('reviews_text'); ?>
                                    </div>
                                </div>
                            <?php endwhile;
                        else :
                        endif;
                        ?>

                    </div>
                </div>

            </div>
        </section>

    </main>


<?php get_footer(); ?>