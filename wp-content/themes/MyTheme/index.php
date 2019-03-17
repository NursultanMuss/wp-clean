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

                <div class="col-md-4 animation_3 company_info">
                    <h3>!Персональная информация!</h3>
                    <h2 class="personal_header">Name of company</h2>
                    <ul>
                        <li>Профессиональное создание сайтов, приложений Android IOS, ERP CRM систем, Desktop Software</li>
                        <li>День рождения: 10 июня 2010</li>
                        <li>E-mail: <a href="mailto: nursalga@gmail.com">musstech@gmail.com</a></li>
                    </ul>
                    <div class="social_wrap">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="s_services bg_light">
    <div class="section_header">
        <h2>Услуги</h2>
        <div class="s_descr_wrap">
            <div class="s_descr">Чем мы можем помочь Вам?</div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="resume_container">
                    <div class="col-md-6 col-sm-6 left">
                        <div class="s_services_item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" version="1.1" width="96" height="96" style="fill: rgb(0, 0, 0);">
                                <g id="surface1">
                                    <path style=" fill:#ECEFF1;" d="M 16 42 L 32 42 C 37.523438 42 42 37.523438 42 32 L 42 16 C 42 10.476563 37.523438 6 32 6 L 16 6 C 10.476563 6 6 10.476563 6 16 L 6 32 C 6 37.523438 10.476563 42 16 42 Z "/>
                                    <path style=" fill:#FFC107;" d="M 13.546875 18.734375 C 13.546875 19.15625 13.203125 19.496094 12.78125 19.496094 C 12.363281 19.496094 12.019531 19.15625 12.019531 18.734375 C 12.019531 18.316406 12.363281 17.972656 12.78125 17.972656 C 13.203125 17.972656 13.546875 18.316406 13.546875 18.734375 Z "/>
                                    <path style=" fill:#FF5722;" d="M 15.980469 21.808594 L 17.425781 21.199219 C 18.105469 19.980469 19.261719 19.273438 20.757813 19.273438 C 21.097656 19.273438 21.417969 19.316406 21.71875 19.386719 L 23.09375 18.808594 C 22.414063 18.472656 21.640625 18.28125 20.757813 18.28125 C 18.367188 18.28125 16.664063 19.59375 15.980469 21.808594 Z "/>
                                    <path style=" fill:#FF5722;" d="M 13.296875 22.945313 L 13.296875 21.375 L 12.273438 21.375 L 12.273438 23.378906 Z "/>
                                    <path style=" fill:#F44336;" d="M 13.296875 25.734375 L 13.296875 22.945313 L 12.273438 23.378906 L 12.273438 26.164063 Z "/>
                                    <path style=" fill:#F44336;" d="M 16.742188 24.148438 C 16.742188 22.980469 16.988281 21.984375 17.425781 21.199219 L 15.980469 21.808594 C 15.769531 22.507813 15.648438 23.285156 15.648438 24.148438 C 15.648438 24.347656 15.675781 24.53125 15.6875 24.722656 L 16.75 24.273438 C 16.75 24.230469 16.742188 24.191406 16.742188 24.148438 Z "/>
                                    <path style=" fill:#F44336;" d="M 30.421875 18.5 C 30.140625 18.585938 29.882813 18.695313 29.648438 18.828125 Z "/>
                                    <path style=" fill:#F44336;" d="M 23.09375 18.808594 L 21.71875 19.386719 C 22.746094 19.621094 23.546875 20.25 24.070313 21.183594 L 25.09375 20.75 C 24.625 19.878906 23.941406 19.226563 23.09375 18.808594 Z "/>
                                    <path style=" fill:#E91E63;" d="M 13.296875 28.519531 L 13.296875 25.734375 L 12.273438 26.164063 L 12.273438 28.953125 Z "/>
                                    <path style=" fill:#E91E63;" d="M 30.421875 18.5 L 29.648438 18.828125 C 28.664063 19.375 28.070313 20.289063 28.070313 21.40625 C 28.070313 21.710938 28.117188 21.976563 28.1875 22.230469 L 29.21875 21.796875 C 29.183594 21.664063 29.164063 21.527344 29.164063 21.375 C 29.164063 20.148438 30.28125 19.257813 31.898438 19.257813 C 32.691406 19.257813 33.363281 19.472656 33.855469 19.839844 L 34.902344 19.394531 C 34.210938 18.710938 33.167969 18.28125 31.929688 18.28125 C 31.382813 18.28125 30.875 18.359375 30.421875 18.5 Z "/>
                                    <path style=" fill:#E91E63;" d="M 16.75 24.273438 L 15.6875 24.722656 C 15.746094 25.683594 15.949219 26.535156 16.285156 27.257813 L 17.289063 26.835938 C 16.953125 26.121094 16.765625 25.261719 16.75 24.273438 Z "/>
                                    <path style=" fill:#E91E63;" d="M 25.09375 20.75 L 24.070313 21.183594 C 24.449219 21.863281 24.671875 22.714844 24.726563 23.691406 L 25.789063 23.246094 C 25.695313 22.296875 25.46875 21.453125 25.09375 20.75 Z "/>
                                    <path style=" fill:#9C27B0;" d="M 25.609375 26.109375 C 25.753906 25.507813 25.851563 24.859375 25.851563 24.148438 C 25.851563 23.832031 25.816406 23.539063 25.789063 23.242188 L 24.726563 23.691406 C 24.734375 23.84375 24.757813 23.988281 24.757813 24.148438 C 24.757813 25.117188 24.578125 25.957031 24.277344 26.671875 Z "/>
                                    <path style=" fill:#9C27B0;" d="M 17.289063 26.835938 L 16.285156 27.257813 C 16.695313 28.136719 17.292969 28.824219 18.0625 29.296875 L 19.320313 28.765625 C 18.421875 28.425781 17.726563 27.765625 17.289063 26.835938 Z "/>
                                    <path style=" fill:#9C27B0;" d="M 13.296875 28.519531 L 12.273438 28.953125 L 12.273438 29.789063 L 13.296875 29.789063 Z "/>
                                    <path style=" fill:#9C27B0;" d="M 29.21875 21.796875 L 28.1875 22.230469 C 28.433594 23.097656 29.101563 23.703125 30.316406 24.121094 L 31.917969 23.445313 L 31.578125 23.359375 C 30.121094 22.996094 29.40625 22.527344 29.21875 21.796875 Z "/>
                                    <path style=" fill:#9C27B0;" d="M 34.71875 21.273438 L 35.796875 21.273438 C 35.746094 20.542969 35.417969 19.898438 34.902344 19.394531 L 33.855469 19.835938 C 34.328125 20.1875 34.636719 20.683594 34.71875 21.273438 Z "/>
                                    <path style=" fill:#3F51B5;" d="M 25.609375 26.109375 L 24.277344 26.671875 C 23.648438 28.148438 22.425781 29.03125 20.757813 29.03125 C 20.230469 29.03125 19.757813 28.929688 19.320313 28.765625 L 18.0625 29.296875 C 18.8125 29.753906 19.710938 30.023438 20.757813 30.023438 C 23.300781 30.023438 25.019531 28.539063 25.609375 26.109375 Z "/>
                                    <path style=" fill:#3F51B5;" d="M 28.828125 26.859375 L 27.75 26.859375 C 27.777344 27.226563 27.878906 27.5625 28.015625 27.878906 L 29.003906 27.460938 C 28.917969 27.273438 28.851563 27.074219 28.828125 26.859375 Z "/>
                                    <path style=" fill:#3F51B5;" d="M 32.695313 23.640625 L 31.914063 23.445313 L 30.316406 24.121094 C 30.550781 24.203125 30.804688 24.277344 31.078125 24.34375 L 32.367188 24.671875 C 33.082031 24.847656 33.625 25.070313 34.027344 25.34375 L 35.230469 24.832031 C 34.703125 24.316406 33.878906 23.933594 32.695313 23.640625 Z "/>
                                    <path style=" fill:#03A9F4;" d="M 29.003906 27.464844 L 28.015625 27.882813 C 28.390625 28.75 29.152344 29.410156 30.179688 29.753906 L 31.871094 29.039063 C 30.492188 29.007813 29.414063 28.394531 29.003906 27.464844 Z "/>
                                    <path style=" fill:#03A9F4;" d="M 35.914063 27.332031 C 35.949219 27.140625 35.976563 26.941406 35.976563 26.734375 C 35.976563 25.949219 35.742188 25.332031 35.230469 24.832031 L 34.027344 25.34375 C 34.605469 25.730469 34.882813 26.226563 34.882813 26.851563 C 34.882813 27.246094 34.753906 27.601563 34.535156 27.914063 Z "/>
                                    <path style=" fill:#009688;" d="M 35.914063 27.332031 L 34.535156 27.914063 C 34.0625 28.597656 33.140625 29.046875 31.984375 29.046875 C 31.945313 29.046875 31.910156 29.042969 31.871094 29.039063 L 30.179688 29.753906 C 30.695313 29.925781 31.265625 30.023438 31.890625 30.023438 C 34.097656 30.023438 35.613281 28.964844 35.914063 27.332031 Z "/>
                                </g>
                            </svg>
                            <p>Разработка приложений под IOS</p>
                        </div>
                        <div class="s_services_item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve" width="96px" height="96px">
								<polygon style="fill:#00B0FF;" points="20,25.026 5.011,25 5.012,37.744 20,39.818 "/>
                                <polygon style="fill:#00B0FF;" points="22,25.03 22,40.095 42.995,43 43,25.066 "/>
                                <polygon style="fill:#00B0FF;" points="20,8.256 5,10.38 5.014,23 20,23 "/>
                                <polygon style="fill:#00B0FF;" points="22,7.973 22,23 42.995,23 42.995,5 "/>
							</svg>
                            <p>Разрабокта ПО под ОС Windows</p>
                        </div>
                        <div class="s_services_item">
                            <img src="img/erp_srm.png" alt="erp_srm" class="logo_img">
                            <p>Разработка CRM ERP систем</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 right">
                        <div class="s_services_item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve" width="96px" height="96px">
							<g id="surface1">
                                <path style="fill:#7CB342;" d="M12,29c0,1.1-0.9,2-2,2s-2-0.9-2-2v-9c0-1.1,0.9-2,2-2s2,0.9,2,2V29z"/>
                                <path style="fill:#7CB342;" d="M40,29c0,1.1-0.9,2-2,2s-2-0.9-2-2v-9c0-1.1,0.9-2,2-2s2,0.9,2,2V29z"/>
                                <path style="fill:#7CB342;" d="M22,40c0,1.1-0.9,2-2,2s-2-0.9-2-2v-9c0-1.1,0.9-2,2-2s2,0.9,2,2V40z"/>
                                <path style="fill:#7CB342;" d="M30,40c0,1.1-0.9,2-2,2s-2-0.9-2-2v-9c0-1.1,0.9-2,2-2s2,0.9,2,2V40z"/>
                                <path style="fill:#7CB342;" d="M14,18v15c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V18H14z"/>
                                <path style="fill:#7CB342;" d="M24,8c-6,0-9.7,3.6-10,8h20C33.7,11.6,30,8,24,8z M20,13.6c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1   s1,0.4,1,1C21,13.1,20.6,13.6,20,13.6z M28,13.6c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1C29,13.1,28.6,13.6,28,13.6z"/>
                                <path style="fill:#7CB342;" d="M28.3,10.5c-0.2,0-0.4-0.1-0.6-0.2c-0.5-0.3-0.6-0.9-0.3-1.4l1.7-2.5c0.3-0.5,0.9-0.6,1.4-0.3   c0.5,0.3,0.6,0.9,0.3,1.4l-1.7,2.5C29,10.3,28.7,10.5,28.3,10.5z"/>
                                <path style="fill:#7CB342;" d="M19.3,10.1c-0.3,0-0.7-0.2-0.8-0.5l-1.3-2.1c-0.3-0.5-0.2-1.1,0.3-1.4c0.5-0.3,1.1-0.2,1.4,0.3   l1.3,2.1c0.3,0.5,0.2,1.1-0.3,1.4C19.7,10,19.5,10.1,19.3,10.1z"/>
                            </g>
						</svg>
                            <p>Разработка приложений под Android платформу</p>
                        </div>
                        <div class="s_services_item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" version="1.1" width="96px" height="96px">
                                <g id="surface1">
                                    <path style=" fill:#42A5F5;" d="M 40.085938 32.613281 C 39.234375 34.449219 38.828125 35.269531 37.742188 36.886719 C 36.222656 39.152344 34.070313 41.976563 31.414063 41.996094 C 29.054688 42.015625 28.445313 40.488281 25.238281 40.515625 C 22.035156 40.53125 21.367188 42.023438 19.003906 41.996094 C 16.347656 41.976563 14.316406 39.429688 12.792969 37.171875 C 8.535156 30.832031 8.085938 23.402344 10.71875 19.449219 C 12.578125 16.648438 15.523438 15.003906 18.289063 15.003906 C 21.105469 15.003906 22.878906 16.515625 25.203125 16.515625 C 27.46875 16.515625 28.84375 15 32.101563 15 C 34.566406 15 37.171875 16.3125 39.03125 18.574219 C 32.941406 21.835938 33.929688 30.335938 40.085938 32.613281 Z "/>
                                    <path style=" fill:#42A5F5;" d="M 30.046875 12.070313 C 31.316406 10.496094 32.277344 8.269531 31.929688 6 C 29.859375 6.136719 27.4375 7.417969 26.023438 9.074219 C 24.742188 10.585938 23.679688 12.828125 24.09375 14.996094 C 26.351563 15.066406 28.6875 13.765625 30.046875 12.070313 Z "/>
                                    <path style=" fill:#1E88E5;" d="M 36.734375 20.421875 C 28 30 20 21 9.226563 27.84375 C 9.601563 30.867188 10.757813 34.144531 12.792969 37.171875 C 14.3125 39.429688 16.347656 41.976563 19.003906 42 C 21.367188 42.023438 22.035156 40.53125 25.238281 40.515625 C 28.445313 40.492188 29.054688 42.015625 31.414063 41.996094 C 34.070313 41.976563 36.222656 39.152344 37.742188 36.886719 C 38.828125 35.269531 39.234375 34.449219 40.085938 32.613281 C 34.878906 30.6875 33.390625 24.3125 36.734375 20.421875 Z "/>
                                </g>
                            </svg>
                            <p>Разработка ПО под ОС IOS</p>
                        </div>
                        <div class="s_services_item">
                            <img src="img/wordpress.png" alt="wordpress" class="logo_img" style="">
                            <p>Профессиональная разработка сайтов, вэб-приложений</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="s_portfolio bg_dark">
    <div class="section_header">
        <h2>Портфолио</h2>
        <div class="s_descr_wrap">
            <div class="s_descr">Последние работы</div>
        </div>
    </div>
    <div class="section_content">
        <div  class="container">
            <div class="row">
                <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">Все работы</li>
                        <li class="filter" data-filter=".category-1">Сайты</li>
                        <li class="filter" data-filter=".category-2">Приложения</li>
                        <li class="filter" data-filter=".category-3">Desktop Software</li>
                        <li class="filter" data-filter=".category-4">ERP/CRM</li>
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