<?php
/*
Template Name: template
*/
?>

<?php get_header() ?>


    <main>
        <?php
        if (have_rows('create_cards')):
            while (have_rows('create_cards')) :
                the_row(); ?>
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
                                    <div class="card__rating-item card__rating-item_star">
                                        <div class="card__rating-star">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                      fill="#ED8A19"/>
                                            </svg>
                                        </div>
                                        <div class="card__rating-star">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                      fill="#ED8A19"/>
                                            </svg>
                                        </div>
                                        <div class="card__rating-star">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                      fill="#ED8A19"/>
                                            </svg>
                                        </div>
                                        <div class="card__rating-star">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                      fill="#ED8A19"/>
                                            </svg>
                                        </div>
                                        <div class="card__rating-star">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5084 5.9808L12.1871 5.43674C11.8866 5.39892 11.623 5.20751 11.4822 4.92491L9.45734 0.862377C9.10256 0.150766 8.12838 0.17709 7.80874 0.906523L5.98271 5.07241C5.85569 5.36196 5.60152 5.56741 5.30332 5.62115L1.01384 6.39667C0.262556 6.53236 -0.0147849 7.51774 0.544146 8.06405L3.73675 11.1827C3.95865 11.3997 4.06533 11.7181 4.0219 12.0338L3.39576 16.5754C3.286 17.3708 4.08912 17.9536 4.75449 17.5615L8.55388 15.3232C8.81791 15.1675 9.13806 15.1589 9.40937 15.3001L13.3118 17.3316C13.9954 17.6873 14.769 17.0624 14.6208 16.2738L13.7761 11.7716C13.7173 11.4584 13.8084 11.1349 14.0197 10.9063L17.0577 7.6203C17.59 7.0451 17.2653 6.07607 16.5084 5.9808Z"
                                                      fill="#ED8A19"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="card__rating-item"><p class="card__rating-reviews-number">
                                            <?php the_sub_field('card_review'); ?>
                                    </div>
                                    <div class="card__rating-item">
                                        <p class="card__rating-sum"><?php the_sub_field('card_rating'); ?></p>
                                    </div>
                                    <div class="card__rating-item card__rating-item_score">
                                        <div class="card__score card__score_like">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.5807 14.9096L19.2274 11.1698C19.3889 10.2357 18.6706 9.38135 17.7237 9.38135H12.9744C12.5037 9.38135 12.1452 8.95884 12.2214 8.49381L12.8289 4.7863C12.9275 4.18398 12.8994 3.56766 12.7461 2.97689C12.6192 2.4875 12.2416 2.09453 11.745 1.93502L11.6121 1.89232C11.312 1.79591 10.9845 1.81834 10.7015 1.95469C10.3901 2.10476 10.1622 2.3785 10.0778 2.70406L9.64174 4.38509C9.50295 4.91996 9.30092 5.43624 9.04029 5.92406C8.65955 6.63682 8.07089 7.20725 7.45898 7.73455L6.14014 8.87103C5.76829 9.1915 5.573 9.67138 5.61531 10.1607L6.3598 18.7707C6.42809 19.5604 7.08836 20.1667 7.88016 20.1667H12.1414C15.3326 20.1667 18.056 17.9432 18.5807 14.9096Z"
                                                      fill="#14B11B"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.72036 8.69465C3.08819 8.67878 3.40323 8.95549 3.43494 9.32231L4.32558 19.6224C4.38279 20.2841 3.86162 20.8543 3.19615 20.8543C2.56932 20.8543 2.0625 20.3458 2.0625 19.7201V9.38153C2.0625 9.01335 2.35253 8.71053 2.72036 8.69465Z"
                                                      fill="#14B11B"/>
                                            </svg>
                                            <p class="card__score-counter">203</p>
                                        </div>
                                        <div class="card__score card__score_dislike">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.4193 7.09042L2.77259 10.8302C2.61107 11.7643 3.32937 12.6187 4.27629 12.6187L9.02563 12.6187C9.49634 12.6187 9.85476 13.0412 9.77858 13.5062L9.17111 17.2137C9.07247 17.816 9.10062 18.4323 9.25388 19.0231C9.38084 19.5125 9.75841 19.9055 10.255 20.065L10.3879 20.1077C10.688 20.2041 11.0155 20.1817 11.2985 20.0453C11.6099 19.8952 11.8378 19.6215 11.9222 19.2959L12.3583 17.6149C12.497 17.08 12.6991 16.5638 12.9597 16.0759C13.3404 15.3632 13.9291 14.7927 14.541 14.2655L15.8599 13.129C16.2317 12.8085 16.427 12.3286 16.3847 11.8393L15.6402 3.22933C15.5719 2.43962 14.9116 1.83334 14.1198 1.83334L9.85861 1.83334C6.66742 1.83334 3.944 4.0568 3.4193 7.09042Z"
                                                      fill="#AA0000"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M19.2796 13.3054C18.9118 13.3212 18.5968 13.0445 18.5651 12.6777L17.6744 2.37757C17.6172 1.71592 18.1384 1.14566 18.8039 1.14566C19.4307 1.14566 19.9375 1.65423 19.9375 2.27985L19.9375 12.6185C19.9375 12.9867 19.6475 13.2895 19.2796 13.3054Z"
                                                      fill="#AA0000"/>
                                            </svg>
                                            <p class="card__score-counter">53</p>
                                        </div>
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

                            <div class="card__rating-item card__rating-item_score">
                                <div class="card__score card__score_like">
                                    <?php
                                    echo do_shortcode('[liker]');
                                    ?>

                            <div class="card__grid-item card__grid-item_4">
                                <div class="card__course-minuses">
                                    <div class="card__minuses-title"><?php the_sub_field('card_minuses_title'); ?></div>
                                    <?php the_sub_field('card_minuses_text'); ?>
                                </div>
                            </div>
                            <div class="card__grid-item card__grid-item_5">
                                <div class="card__course-price"><?php the_sub_field('card_price'); ?></div>
                                <button href="#" class="card__course-btn">
                                    <?php the_sub_field('card_btn'); ?>
                                </button>

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


            <?php endwhile;
        else :
        endif;
        ?>

        <section class="slats">
            <div class="block__content block__content_slats">
                <div class="slats__item">
                    <div class="slats__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-1.png?>" alt="error"/>
                    </div>
                    <div class="slats__text-group">
                        <div class="slats__title">И ТАК, КТО ТАКОЙ SEO-СПЕЦИАЛИСТ?</div>
                        <div class="slats__text">Тексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе
                            ТексеТексе
                            Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе
                            ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе
                            ТексеТексе
                            Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе
                            ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе ТексеТексе Тексе
                            ТексеТексе
                            Тексе Тексе се ТексеТексе Тексе се ТексеТексе Тексе се ТексеТексе Тексе

                            sssssss
                            sssssss
                            ssssss
                            sssssss


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="block__content block__content_reviews">
                <div class="reviews__content">
                    <h2 class="reviews_title">ОТЗЫВЫ</h2>
                    <div class="reviews__table">
                        <div class="reviews__table-item">
                            <div class="reviews__top">
                                <div class="reviews__name">
                                    <p class="reviews__name-title">Виктория</p>
                                    <strong><a href="#">Онлайн курс Андрея Буйлова. Самостоятельное SEO “БЕЗ
                                            ВОДЫ”</a></strong>
                                </div>
                                <div class="reviews__stars">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
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
                                    <p>5/5</p>
                                </div>
                            </div>
                            <div class="reviews__text">Текст текст текст Текст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текст!
                            </div>
                        </div>
                        <div class="reviews__table-item">
                            <div class="reviews__top">
                                <div class="reviews__name">
                                    <p class="reviews__name-title">Виктория</p>
                                    <strong><a href="#">Онлайн курс Андрея Буйлова. Самостоятельное SEO “БЕЗ
                                            ВОДЫ”</a></strong>
                                </div>
                                <div class="reviews__stars">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
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
                                    <p>5/5</p>
                                </div>
                            </div>
                            <div class="reviews__text">Текст текст текст Текст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текст!
                            </div>
                        </div>
                        <div class="reviews__table-item">
                            <div class="reviews__top">
                                <div class="reviews__name">
                                    <p class="reviews__name-title">Виктория</p>
                                    <strong><a href="#">Онлайн курс Андрея Буйлова. Самостоятельное SEO “БЕЗ
                                            ВОДЫ”</a></strong>
                                </div>
                                <div class="reviews__stars">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
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
                                    <p>5/5</p>
                                </div>
                            </div>
                            <div class="reviews__text">Текст текст текст Текст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текст!
                            </div>
                        </div>
                        <div class="reviews__table-item">
                            <div class="reviews__top">
                                <div class="reviews__name">
                                    <p class="reviews__name-title">Виктория</p>
                                    <strong><a href="#">Онлайн курс Андрея Буйлова. Самостоятельное SEO “БЕЗ
                                            ВОДЫ”</a></strong>
                                </div>
                                <div class="reviews__stars">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
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
                                    <p>5/5</p>
                                </div>
                            </div>
                            <div class="reviews__text">Текст текст текст Текст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текстТекст текст текстТекст текст текстТекст текст текстТекст текст
                                текстТекст текст текст!
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>


<?php get_footer(); ?>