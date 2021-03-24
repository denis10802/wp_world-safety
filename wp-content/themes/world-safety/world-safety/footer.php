<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package World-Safety
 */

?>


<footer class="copyrights">
    <div class="container">

        <div class="clearfix"></div>

        <div class="footer-block">

            <div class="working-hours">
                <h6>Режим работы:</h6>
                <?php if( have_rows('working_hours') ):while ( have_rows('working_hours') ) : the_row();?>

                <p><?php the_sub_field('day_of_week');?>: <?php the_sub_field('opening_hours');?></p>

                <?php   endwhile; endif; ?>
            </div>


        </div>

        <p class="rights">© <?=date('Y')?>. Мир безопастности. Все права защищены.</p>

    </div>
</footer><!-- end copyrights section -->

<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

<!--modal-->
<div class="popup" id="popup_1" >
    <div class="popup__body">
        <div class="popup__content">
            <a class="popup__close close-popup">X</a>

            <div class="popup-form form-popup">
                <h2 class="popup-form__title">Узнайте точную стоимость <br>наших услуг по телефону!</h2>
                <span class="popup-form__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
                <form >
                    <input type="text" name="username" class="popup-form__input form-popup__name "
                           placeholder="Ваше имя" required>
                    <input type="tel" name="phone" class="telephone popup-form__input form-popup__phone"
                           placeholder="Ваш телефон" required>
                    <button class="button popup-form__button">Узнать стоимость </button>
                    <span class="popup-form__descr" class="popup-form____descr">Или Вы можете перезвонить нам сами по
						телефону:</span>
                    <a href="tel:+79173638591" class="popup-form__tel">+7 917 36 38 591</a>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="popup_thanks">
    <div class="thanks">
        <a class="close-thanks"><img class="close-icons" src="<?=get_template_directory_uri()?>/images/close-modal.png" alt=""></a> <!-- При клике происходит закрытие всплывающего окна -->
                <div class="form-thanks">
                    <div id="form_response" class="text-center">
                        <h1 class="popup_thanks__title">Спасибо за заявку!!!</h1>
                        <p class="popup_thanks__subtitle">Ваше сообщение отправлено!!!</p>
                        <p class="popup_thanks__subtitle">В ближайшее время с Вами свяжется наш специалист.</p>
                    </div>
                </div>

    </div>
    <div class="overlay-form"></div> <!-- Затемнение фона. При клике закрываем всплывающее окно -->
</div>


<!-- ######### JS FILES ######### -->


<script>
    jQuery(function($){

        $('.telephone').mask('+7 (999) 999-99-99');
    });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/universal/jquery.js"></script>


<!-- forms -->
<script src="<?php echo get_template_directory_uri();?>/js/form/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/form.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/modal.js"></script>
<!-- style switcher -->
<script src="<?php echo get_template_directory_uri();?>/js/style-switcher/jquery-1.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/style-switcher/styleselector.js"></script>

<!-- animations -->
<script src="<?php echo get_template_directory_uri();?>/js/animations/js/animations.min.js" type="text/javascript"></script>

<!-- Master Slider -->
<script src="<?php echo get_template_directory_uri();?>/js/masterslider/jquery-1.10.2.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/masterslider/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
    (function($) {
        "use strict";

        var slider = new MasterSlider();

        slider.control('arrows' ,{insertTo:'#masterslider'});
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1170,
            height:700,
            space:5,
            view:'basic',
            fullwidth:true,
            speed:20,
            autoplay:true,
            loop:true,
        });

        $('.statistic-block').each(function() {
            $(this).appear(function() {
                var $endNum = parseInt($(this).find('.statistic-number').text());
                $(this).find('.statistic-number').countTo({
                    from: 0,
                    to: $endNum,
                    speed: 3000,
                    refreshInterval: 30,
                });
            },{accX: 0, accY: 0});
        });

    })(jQuery);
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/carousel/jquery.jcarousel.min.js"></script>

<script defer src="<?php echo get_template_directory_uri();?>/js/carousel/jquery.flexslider.js"></script>

<script defer src="<?php echo get_template_directory_uri();?>/js/carousel/custom.js"></script>
<!-- scroll up -->
<script src="<?php echo get_template_directory_uri();?>/js/scrolltotop/totop.js" type="text/javascript"></script>

<script type="text/javascript">
    (function($) {
        "use strict";

        jQuery(document).ready(function() {
            jQuery('#mycarouselthree').jcarousel();
        });

    })(jQuery);
</script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/mainmenu/modernizr.custom.75180.js"></script>


<!-- progress bar -->
<script src="<?php echo get_template_directory_uri();?>/js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- menu -->
<script src="<?php echo get_template_directory_uri();?>/js/mainmenu/responsive-nav.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/mainmenu/fastclick.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/mainmenu/scroll.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/mainmenu/fixed-responsive-nav.js"></script>

<!-- animate number -->
<script src="<?php echo get_template_directory_uri();?>/js/aninum/jquery.animateNumber.min.js"></script>

<?php if( have_rows('statistic_num') ):while ( have_rows('statistic_num') ) : the_row();?>
<script type="text/javascript">
    (function($) {
        "use strict";

        $("<?php the_sub_field('id_stat');?>").animateNumber(
            {
                number: <?php the_sub_field('num');?> ,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now),
                        target = $(tween.elem);
                    target.text(floored_number);
                }
            },
             <?php the_sub_field('speed');?>        )
    })(jQuery);
</script>
<?php   endwhile; endif; ?>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/cubeportfolio/main2.js"></script>

<!-- carousel -->
<script src="<?php echo get_template_directory_uri();?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>
<script async data-id="75499" src="https://cdn.widgetwhats.com/script.min.js"></script>

</body>
</html>