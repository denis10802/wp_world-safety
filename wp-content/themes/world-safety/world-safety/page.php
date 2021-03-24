<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package World-Safety
 */

get_header();
?>

    <div class="clearfix"></div>

    <div class="sectionarea" id="home">

        <!-- Slider start -->
        <div class="ms-fullscreen-template" id="slider1-wrapper">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">

                <div class="ms-slide slide-1" data-delay="5">

                    <h3 class="ms-layer medium-text"
                        data-type="text"
                        style="top:290px;"
                        data-effect="skewright(25,250)"
                        data-duration="1500"
                        data-ease="easeOutQuart"
                        data-delay="700"
                    >
                        <?php the_field('slide_title_1')?>
                    </h3>
                    <h3 class="ms-layer big-text"
                        data-type="text"
                        style="top:370px;"
                        data-effect="scalebottom(1.1,1.1,50)"
                        data-duration="1500"
                        data-ease="easeOutQuart"
                        data-delay="1200"
                    >
                        <?php the_field('2_slide_title_1')?>
                    </h3>

                    <div class="ms-layer"
                         style="top:465px;"
                         data-type="text"
                         data-duration="900"
                         data-delay="2200"
                         data-ease="easeOutExpo"
                         data-effect="bottom(40)"
                    >
                        <a href="#" name="#popup_1" class="sbutton1 popup-link">Узнать подробнее</a>
                    </div>

                    <img src="<?php the_field('slide_img_1')?>"  alt="slide_img_1"/>
                </div>


                <div class="ms-slide slide-2" data-delay="5">

                    <h3 class="ms-layer medium-text"
                        data-type="text"
                        style="left:600px; top:200px;line-height: 55px;"
                        data-effect="skewright(25,250)"
                        data-duration="1500"
                        data-ease="easeOutQuart"
                        data-delay="100"
                    >
                        <?php the_field('slide_title_2')?>
                    </h3>
                    <h3 class="ms-layer big-text"
                        data-type="text"
                        style="left:600px; top:370px;line-height: 55px;"
                        data-effect="scalebottom(1.1,1.1,50)"
                        data-duration="1500"
                        data-ease="easeOutQuart"
                        data-delay="600"
                    >
                        <?php the_field('2_slide_title_2')?>
                    </h3>

                    <div class="ms-layer"
                         style="left:600px; top:505px;"
                         data-type="text"
                         data-duration="900"
                         data-delay="1600"
                         data-ease="easeOutExpo"
                         data-effect="bottom(40)"
                    >
                        <a href="#" name="#popup_1" class="sbutton1 popup-link">Отправить заявку</a>
                    </div>

                    <img src="<?php the_field('slide_img_2')?>"  alt="slide_img_2"/>
                </div>


                <div class="ms-slide slide-3" data-delay="5">

                    <h3 class="ms-layer thin-text-white blacktext"
                        style="top:350px;"
                        data-type="text"
                        data-effect="rotate3dleft(50,0,0,380)"
                        data-duration="1000"
                        data-ease="easeInOutQuint"
                    >
                        <?php the_field('slide_title_3')?>
                    </h3>

                    <h3 class="ms-layer thin-text-black whitetext"
                        style="top:435px;"
                        data-type="text"
                        data-effect="rotate3dright(-50,0,0,380)"
                        data-duration="1000"
                        data-ease="easeInOutQuint"
                    >
                        <?php the_field('2_slide_title_3')?>
                    </h3>

                    <img src="<?php the_field('slide_img_3')?>"  alt="slide_img_3"/>
                </div>



                <div class="ms-slide slide-4" data-delay="5">

                    <h4 class="ms-layer small-text"
                        style="top:120px;"
                        data-type="text"
                        data-effect="top(45)"
                        data-duration="3400"
                        data-delay="100"
                        data-ease="easeOutExpo"
                    >
                        <?php the_field('slide_title_4')?>
                    </h4>

                    <h4 class="ms-layer bold-text-white bigtext"
                        style="top:175px;line-height: 55px;"
                        data-type="text"
                        data-effect="top(45)"
                        data-duration="3400"
                        data-delay="700"
                        data-ease="easeOutExpo"
                    >
                        <?php the_field('2_slide_title_4')?>
                    </h4>
                    <img src="<?php the_field('slide_img_4')?>"  alt="slide_img_4"/>
                </div>




            </div>

        </div><!-- end of slider -->

    </div>

    <div class="clearfix"></div>

    <div class="container">
        <div class="section1" id="about">

            <h1><?php the_field('title_block_2');?></h1>
            <h5><b><?php the_field('descripton_block_2');?></b></h5>

            <div class="clearfix margin_top7"></div>

            <?php if( have_rows('advantages') ):while ( have_rows('advantages') ) : the_row();?>
            <div class="one_fourth">
                <div class="circle animate" data-anim-type="zoomIn" data-anim-delay="<?php the_sub_field('timing');?>">
                    <i class="<?php the_sub_field('icon');?>"></i>
                </div>
                <strong><?php the_sub_field('advant_title');?></strong>
                <p><?php the_sub_field('advant_descr');?></p>
            </div>
            <!-- end section -->
            <?php   endwhile; endif; ?>

        </div>
    </div><!-- end about section -->

    <div class="clearfix"></div>

    <div class="funfacts">
        <div class="container animate" data-anim-type="fadeIn" data-anim-delay="800">

        <?php
        if( have_rows('statistic') ):while ( have_rows('statistic') ) : the_row();?>
            <div class="one_fifth">
                <span id="<?php the_sub_field('statistic_id');?>">0</span>
                <h4><?php the_sub_field('statistic_title');?></h4>
            </div>
        <?php   endwhile; endif; ?>

        </div>
    </div><!-- end fun facts section -->

    <div class="clearfix"></div>

    <div class="section2" id="portfolio">
        <div class="container">

            <h1 class="white"><?PHP the_field('portfolio_title');?></h1>

            <h5><b class="white"><?PHP the_field('portfolio_descr');?></b></h5>

            <div class="clearfix margin_top5"></div>
            <div id="filters-container" class="cbp-l-filters-button animate" data-anim-type="fadeInRight">

                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Все наши работы</div>

                <?php if( have_rows('filter_by_category') ):while ( have_rows('filter_by_category') ) : the_row();?>

                    <div data-filter="<?php the_sub_field('data-filter');?>" class="cbp-filter-item">
                        <?php the_sub_field('category');?>
                    </div>

                <?php   endwhile; endif; ?>

            </div>

        </div>

        <div class="container_full animate" data-anim-type="fadeInUp">

            <div id="grid-container" class="cbp-l-grid-fullScreen">
                <ul>

    <?php if( have_rows('show_by_category') ):while ( have_rows('show_by_category') ) : the_row();?>

                    <li class="cbp-item <?php the_sub_field('filters_by_category');?>">
                        <a href="<?php the_sub_field('show_img');?>" class="cbp-caption cbp-lightbox" data-title="<?php the_sub_field('name_of_service');?>">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php the_sub_field('show_img');?>" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">
                                            <?php the_sub_field('name_of_service');?>
                                        </div>
<!--                                        <div class="cbp-l-caption-desc">by GSRthemes9</div>-->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

    <?php   endwhile; endif; ?>

                </ul>
            </div>

            <div class="cbp-l-loadMore-text">
                <div data-href="#" class="cbp-l-loadMore-text-link"></div>
            </div>

        </div>
    </div><!-- end portfolio section -->

    <div class="clearfix"></div>

    <div class="section3" id="services">
        <div class="container">

            <h1 class="white"><?php the_field('service_title');?></h1>
            <h5><b class="white"><?php the_field('service_descr');?></b></h5>

            <div class="clearfix margin_top7"></div>

           <?php if( have_rows('description_of_services') ):while ( have_rows('description_of_services') ) : the_row();?>

            <div class="one_fourth animate" data-anim-type="fadeIn" data-anim-delay="<?php the_sub_field('data-anim-delay');?>">
                <img src="<?php the_sub_field('service_Icon');?>" alt="" />
                <strong><?php the_sub_field('title_service');?></strong>
                <p><?php the_sub_field('subtitle_service');?></p>

            </div><!-- end section -->

           <?php   endwhile; endif; ?>

            <div class="clearfix margin_top7"></div>
        </div>
    </div><!-- end services section -->

    <div class="clearfix"></div>

    <div class="parallax_sec1">
        <div class="container">

            <h1 class="animate" data-anim-type="fadeIn" data-anim-delay="400">
                <?php the_field('сreative_block_title');?>
            </h1>

            <h5 class="animate for-button" data-anim-type="fadeIn" data-anim-delay="700">
                <?php the_field('сreative_block_subtitle');?>
            </h5>

            <a name="#popup_1" class="animate popup-link sbutton1" data-anim-type="fadeIn" data-anim-delay="1000">
                <?php the_field('сreative_block_button');?>
            </a>

        </div>
    </div><!-- end parallax section -->

    <div class="clearfix"></div>

    <div class="section5" id="blog">
        <div class="container animate our-func"  data-anim-type="fadeInUp" data-anim-delay="400">

            <h1><?php the_field('technologies_title');?></h1>


            <div class="clearfix margin_top6"></div>

        <?php if( have_rows('description_of_technologies') ):while ( have_rows('description_of_technologies') ) : the_row();?>

            <div class="one_third">
                <img src="<?php the_sub_field('img_technologies');?>" alt="" class="wres" />
                <div class="cont">
                    <h4><?php the_sub_field('title_one_tech');?></h4>
                    <p><?php the_sub_field('descr_one_tech');?></p>
                </div>
            </div><!-- end section -->

        <?php   endwhile; endif; ?>
            <div class="clearfix margin_top6"></div>

            <h5><b><?php the_field('technologies_descr');?></b></h5>

        </div>
    </div><!-- end bolg section -->

    <div class="clearfix"></div>

    <div class="section6" id="contact">
        <div class="container">

            <h1 class="white"><?php the_field('contact_title');?></h1>
            <h5><b class="white"><?php the_field('contact_descr');?></b></h5>

            <div class="clearfix margin_top5"></div>

            <div class="two_third">

                <div class="cforms animate" data-anim-type="fadeInUp" data-anim-delay="200">

                    <form class="sky-form">
                        <fieldset>
                            <div class="row">
                                <div class="col col-6">
                                    <label class="label">Ваше имя</label>
                                    <label class="input"> <i class="icon-append icon-user"></i>
                                        <input type="text" name="username" id="name" required>
                                    </label>
                                </div>
                                <div class="col col-6">
                                    <label class="label">Ваш E-mail</label>
                                    <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                                        <input type="email" name="email" id="email" required>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="label">Ваш номер телефона</label>
                                <label class="input"> <i class="icon-append icon-tag"></i>
                                    <input type="tel" class="telephone" name="phone" id="subject" required>
                                </label>
                            </div>
                            <div>
                                <label class="label">Введите сообщение...</label>
                                <label class="textarea"> <i class="icon-append icon-comment"></i>
                                    <textarea rows="10" name="message" id="message"></textarea>
                                </label>
                            </div>
                        </fieldset>
                        <div class="button-contact">
                            <button type="submit" class="button">Оставить заявку</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="one_third last">

                <div class="addressinfo " data-anim-type="fadeInUp" data-anim-delay="400">

                    <h3 class="white">Наши контакты</h3>

                    <strong><?php the_field('company_name');?></strong><br />

                    Наш адрес: <?php the_field('company_address'); ?><br />

                <?php if( have_rows('telephones') ):while ( have_rows('telephones') ) : the_row();?>


                <?php the_sub_field('сommunication_tool');?>: <a href="tel:<?php the_sub_field('сontact');?>">
                        <?php the_sub_field('сontact');?></a><br />

                <?php   endwhile; endif; ?>

<?php if( have_rows('mailboxes') ):while ( have_rows('mailboxes') ) : the_row();?>

    <?php the_sub_field('mail');?>: <a href="mailto:<?php the_sub_field('email');?>">
                            <?php the_sub_field('email');?>
                    </a><br />
<?php   endwhile; endif; ?>
                    <h3 class="white">Наши реквизиты</h3>
                        <?php if( have_rows('bank_details') ):while ( have_rows('bank_details') ) : the_row();?>
                      <?php the_sub_field('props_name');?>: <?php the_sub_field('requisites');?><br />
                        <?php   endwhile; endif; ?>





                </div><!-- end section -->

                <div class="clearfix margin_top4"></div>

                <div class="googglemap animate" data-anim-type="fadeInUp" data-anim-delay="500">

                    <h3 class="white">Найти нас на карте</h3>

                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A59552640151e68face83c78705354919f3e5e525e9227f62ccf5ae01def0cfb2&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>

                </div><!-- end section -->


            </div>


        </div>
    </div><!-- end contact section -->

    <div class="clearfix "></div>

    <div class="clients ">

        <div class="container">


            <ul id="mycarouselthree" class="jcarousel-skin-tango">
<?php if( have_rows('clients') ):while ( have_rows('clients') ) : the_row();?>
                <li><img src="<?php the_sub_field('client_logo');?>" alt="" /></li>
<?php   endwhile; endif; ?>

            </ul>

        </div>

    </div>

    <div class="clearfix "></div>



<?php
get_footer();
