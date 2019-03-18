<?php
/**
 * Created by PhpStorm.
 * User: Nurs
 * Date: 16.03.2019
 * Time: 15:50
 */
get_header();
?>

<section id="companyAbout" class="s_about bg_light">
    <div class="section_header">
        <h2><?php echo get_cat_name(2 ) ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(2) ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">

                <?php if ( have_posts() ) : query_posts('p=7');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-push-4 animation_1">
                    <div class="logo_center">
                        <?php if ( has_post_thumbnail()) {
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');?>
                            <a href="<?php echo $large_image_url[0]; ?>" title="<?php the_title_attribute(); ?>" class="popup" >
                                <?php the_post_thumbnail(array(200,200)); ?>
                            </a>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4 animation_2">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php if ( have_posts() ) : query_posts('p=17');
                    while (have_posts()) : the_post(); ?>
                        <div class="col-md-4 animation_3 company_info">
                            <h3><?php the_title(); ?></h3>
                            <h2><?php echo get_bloginfo('name');?></h2>
                            <?php the_content(); ?>
                            <?php endwhile; endif; wp_reset_query(); ?>
                            <div class="social_wrap">
                                <ul>
                                    <?php if ( have_posts() ) : query_posts('cat=3');
                                        while (have_posts()) : the_post(); ?>
                                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="<?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                                        <?php endwhile; endif; wp_reset_query(); ?>
                                </ul>
                            </div>
                        </div>



            </div>
        </div>
    </div>
</section>
<section id="services" class="s_services bg_light">
    <div class="section_header">
        <h2><?php echo get_cat_name(4 ) ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(5) ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="resume_container">
                    <div class="col-md-6 col-sm-6 left">
                        <?php if ( have_posts() ) : query_posts('cat=6');
                            while (have_posts()) : the_post(); ?>
                                <div class="s_services_item">
                                    <?php the_content(); ?>
                                    <p><?php the_title(); ?></p>
                                </div>
                            <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
                    <div class="col-md-6 col-sm-6 right">
                        <?php if ( have_posts() ) : query_posts('cat=5');
                            while (have_posts()) : the_post(); ?>
                                <div class="s_services_item">
                                    <?php the_content(); ?>
                                    <p><?php the_title(); ?></p>
                                </div>
                            <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="s_portfolio bg_dark">
    <div class="section_header">
        <h2><?php echo get_cat_name(7 ); ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(7); ?></div>
        </div>
    </div>
    <div class="section_content">
        <div  class="container">
            <div class="row">
                <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">Все работы</li>
                        <li class="filter" data-filter=".sites">Сайты</li>
                        <li class="filter" data-filter=".apps">Приложения</li>
                        <li class="filter" data-filter=".desktopSW">Desktop Software</li>
                        <li class="filter" data-filter=".erp_crm">ERP/CRM</li>
                    </ul>
                </div>
                <div id="portfolio_grid">

                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-1">
                        <img src="img/portfolio-images/wireframe.cc-fEKu0b.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/wireframe.cc-fEKu0b.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-1">
                        <img src="img/portfolio-images/2.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/2.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-1">
                        <img src="img/portfolio-images/3.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/3.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-2">
                        <img src="img/portfolio-images/4.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/4.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-3">
                        <img src="img/portfolio-images/5.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/5.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-1">
                        <img src="img/portfolio-images/6.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/6.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-2">
                        <img src="img/portfolio-images/2.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/2.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-4">
                        <img src="img/portfolio-images/1.jpg" alt="Alt">
                        <div class="port_item_cont">
                            <h3>Заголовок работы</h3>
                            <p>Описание работы</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                    <h3>Заголовок работы</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur corporis dolores porro praesentium sed. Ad aliquid debitis deleniti deserunt dolores ducimus hic impedit iste officia voluptate. Sunt, totam!</p>
                                    <img src="img/portfolio-images/1.jpg" alt="Alt">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="order" class="s_order bg_light">
    <div class="section_header">
        <h2>Заказать услугу</h2>
        <div class="s_descr_wrap">
            <div class="s_descr">Оформите заявку сейчас!</div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form action="https://formspree.io/nursalga@gmail.com" method="post" target="_blank" class="main_form" novalidate>
                        <label class="form-group">
                            <span class="color_element">*</span> Ваше Имя:
                            <input type="text" name="name" placeholder="Ваше Имя" required data-validation-required-message="Вы не заполнили Ваше Имя">
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Ваше E-mail:
                            <input type="email" name="email" placeholder="E-mail" required data-validation-email-message="Вы не корректно ввели E-mail" data-validation-required-message="Вы не ввели E-mail">
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span>Тип вашего заказа:
                            <input type="text" name="name" placeholder="Тип вашего заказа"  required data-validation-required-message="Вы не указали тип Заказа">
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span>Ваше сообщение:
                            <textarea name="message" placeholder="Ваше сообщение"  required data-validation-required-message="Вы не ввели Сообщение"></textarea>
                            <span class="help-block text-danger"></span>
                        </label>
                        <button>Отправить</button>
                    </form>
                </div>
                <div class="col-md-3 col-sm-3"></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>