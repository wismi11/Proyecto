<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:dbbrandsliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bcd90638_73017631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea7814480eeb36e5b618f84d775ab5d49b398cd' => 
    array (
      0 => 'module:dbbrandsliderviewstemplat',
      1 => 1617704756,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_60be74bcd90638_73017631 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dbbrandslide mt-3">
    <p class="h3 title">Principales marcas</p>
    <div id="splide_dbbrandslide" class="splide">
        <div class="splide__track">
            <div class="splide__list">
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/3-hp">
                            <img src="//ismael.devblinders.com/img/m/3-medium_default.jpg" alt="HP" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/4-asus">
                            <img src="//ismael.devblinders.com/img/m/4-medium_default.jpg" alt="Asus" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/5-newskill">
                            <img src="//ismael.devblinders.com/img/m/5-medium_default.jpg" alt="Newskill" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/6-logitech">
                            <img src="//ismael.devblinders.com/img/m/6-medium_default.jpg" alt="Logitech" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/7-lenovo">
                            <img src="//ismael.devblinders.com/img/m/7-medium_default.jpg" alt="Lenovo" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/8-msi">
                            <img src="//ismael.devblinders.com/img/m/8-medium_default.jpg" alt="MSI" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/9-razer">
                            <img src="//ismael.devblinders.com/img/m/9-medium_default.jpg" alt="Razer" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/10-benq">
                            <img src="//ismael.devblinders.com/img/m/10-medium_default.jpg" alt="BENQ" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/11-xiaomi">
                            <img src="//ismael.devblinders.com/img/m/11-medium_default.jpg" alt="Xiaomi" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/12-apple">
                            <img src="//ismael.devblinders.com/img/m/12-medium_default.jpg" alt="Apple" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/14-samsung">
                            <img src="//ismael.devblinders.com/img/m/14-medium_default.jpg" alt="Samsung" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                                    <div class="splide__slide">
                        <a href="https://ismael.devblinders.com/brand/16-huawei">
                            <img src="//ismael.devblinders.com/img/m/16-medium_default.jpg" alt="Huawei" loading="lazy" width="125" height="125">
                        </a>
                    </div>
                            </div>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#splide_dbbrandslide', {
                perPage     : 5,
                pagination: false,
                lazyLoad: 'sequential',
                arrows: true,
                breakpoints: {
                    600: {
                        perPage: 2,
                        padding: {
                            right: '2rem',
                        },
                        arrows: false,
                    },
                    800: {
                        perPage: 2,
                        padding: {
                            right: '2rem',
                        },
                        arrows: false,
                    },
                }
            } ).mount();
        } );
    </script>
</div><?php }
}
