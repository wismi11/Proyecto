<?php
/**
 * 2007-2020 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2020 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

class DbBlogPremium extends ObjectModel
{
    public static function getConfigForm()
    {
        $module = Module::getInstanceByName('dbblog');

        $general_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('General'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_TITLE',
                        'label' => $module->l('Título Blog'),
                        'desc' => $module->l('El titulo del blog'),
                        'lang'  => true,
                    ),

                    array(
                        'type' => 'textarea',
                        'name' => 'DBBLOG_HOME_SHORT_DESC',
                        'label' => $module->l('Descripción corta'),
                        'desc' => $module->l('Descripción corta en la home del blog'),
                        'autoload_rte' => true,
                        'rows' => 5,
                        'cols' => 40,
                        'lang'  => true,
                    ),

                    array(
                        'type' => 'textarea',
                        'name' => 'DBBLOG_HOME_LARGE_DESC',
                        'label' => $module->l('Descripción larga'),
                        'desc' => $module->l('Descripción larga en la home del blog'),
                        'autoload_rte' => true,
                        'rows' => 5,
                        'cols' => 40,
                        'lang'  => true,
                    ),

                    array(
                        'type' => 'color',
                        'name' => 'DBBLOG_COLOR',
                        'label' => $module->l('Color'),
                        'desc' => $module->l('Color general del blog'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POSTS_PER_PAGE',
                        'label' => $module->l('Nº Posts por categoría'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POSTS_PER_HOME',
                        'label' => $module->l('Nº Posts en Home'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POSTS_PER_AUTHOR',
                        'label' => $module->l('Nº Posts en página de autor'),
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        $seo_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('SEO'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_SLUG',
                        'label' => $module->l('URL del blog'),
                        'lang'  => true,
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_META_TITLE',
                        'label' => $module->l('Meta Título Blog'),
                        'desc' => $module->l('El meta Description del blog'),
                        'lang'  => true,
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_META_DESCRIPTION',
                        'label' => $module->l('Meta Description Blog'),
                        'desc' => $module->l('La metadescription del blog'),
                        'lang'  => true,
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        $sidebar_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('Sidebar'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_SIDEBAR_VIEWS',
                        'label' => $module->l('Nº Posts más vistos'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_SIDEBAR_LAST',
                        'label' => $module->l('Nº Últimos posts'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_SIDEBAR_AUTHOR',
                        'label' => $module->l('Nº de autores'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        $list_cms = CMSCore::listCms(Context::getContext()->language->id);
        $comment_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('Comentarios'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'switch',
                        'label' => $module->l('Permitir comentarios'),
                        'name' => 'DBBLOG_COMMENTS',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $module->l('Disabled')
                            )
                        ),
                    ),

                    array(
                        'type' => 'textarea',
                        'name' => 'DBBLOG_RGPD',
                        'label' => $module->l('Texto RGPD'),
                        'autoload_rte' => true,
                        'rows' => 5,
                        'cols' => 40,
                        'lang'  => true,
                    ),

                    array(
                        'type' => 'select',
                        'lang' => true,
                        'label' => $module->l('Política de privacidad'),
                        'name' => 'DBBLOG_PRIVACITY',
                        'desc' => $module->l('Seleccionar la página de de política de privacidad'),
                        'options' => array(
                            'query' => $list_cms,
                            'id' => 'id_cms',
                            'name' => 'meta_title'
                        ),
                    ),

                    array(
                        'type' => 'switch',
                        'label' => $module->l('Activar Recaptcha V2'),
                        'name' => 'DBBLOG_RECAPTCHA_ENABLE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $module->l('Disabled')
                            )
                        ),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_RECAPTCHA',
                        'label' => $module->l('reCAPTCHA clave pública'),
                        'desc' => $module->l('Introducir la clave publica de reCAPTCHA de Google'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_RECAPTCHA_PRIVATE',
                        'label' => $module->l('reCAPTCHA clave privada'),
                        'desc' => $module->l('Introducir la clave privada de reCAPTCHA de Google'),
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        $post_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('Posts'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'switch',
                        'label' => $module->l('Mostrar extracto listado'),
                        'name' => 'DBBLOG_POST_EXTRACT',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $module->l('Disabled')
                            )
                        ),
                    ),

                    array(
                        'type' => 'switch',
                        'label' => $module->l('Mostrar leer más'),
                        'name' => 'DBBLOG_POST_READMORE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $module->l('Disabled')
                            )
                        ),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POST_RELATED',
                        'label' => $module->l('Nº Post relacionados'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POST_AUTHOR',
                        'label' => $module->l('Nº Post del mismo autor'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        $home_ps_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('Home PrestaShop'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POST_FEATURED_HOMEPS',
                        'label' => $module->l('Nº Post destacados'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POST_VIEWS_HOMEPS',
                        'label' => $module->l('Nº Post más vistos'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        $sidebar_ps_options = array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('Sidebar PrestaShop'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POST_VIEWS_SIDEBARPS',
                        'label' => $module->l('Nº Post más vistos'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                    array(
                        'type' => 'text',
                        'name' => 'DBBLOG_POST_LAST_SIDEBARPS',
                        'label' => $module->l('Nº Últimos posts'),
                        'desc' => $module->l('0 para desactivarlos'),
                    ),

                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );

        return array($general_options, $seo_options, $sidebar_options, $comment_options, $post_options, $home_ps_options, $sidebar_ps_options);
    }

    public static function hookdisplayHome($params)
    {
        $module = Module::getInstanceByName('dbblog');

        $id_lang = Context::getContext()->language->id;
        // Mas vistos Sidebar
        $limit_views_home = (int)Configuration::get('DBBLOG_POST_VIEWS_HOMEPS');
        $more_views = DbBlogCategory::getPostsViews($id_lang, null, null, null, $limit_views_home);
        // Ultimos Sidebar
        $limit_last_home = (int)Configuration::get('DBBLOG_POST_FEATURED_HOMEPS');
        $last_posts = DbBlogCategory::getPostsLast($id_lang, null, null, null, $limit_last_home);

        return array(
            'limit_views_home' => $limit_views_home,
            'more_views' => $more_views,
            'limit_last_home' => $limit_last_home,
            'last_posts' => $last_posts,
        );
    }

    public static function hookdisplayLeftColumn($params)
    {
        $module = Module::getInstanceByName('dbblog');

        $id_lang = Context::getContext()->language->id;
        // Mas vistos Sidebar
        $num_views = Configuration::get('DBBLOG_POST_VIEWS_SIDEBARPS');
        $more_views = DbBlogCategory::getPostsViews($id_lang, null, null, null, $num_views);
        // Ultimos Sidebar
        $num_last = Configuration::get('DBBLOG_POST_LAST_SIDEBARPS');
        $last_posts = DbBlogCategory::getPostsLast($id_lang, null, null, null, $num_last);

        return array(
            'more_views' => $more_views,
            'last_posts' => $last_posts,
        );
    }

    public static function shortCodes($desc)
    {
        $module = Module::getInstanceByName('dbblog');

        preg_match_all("/{dbblog_products (.*)}/",
            $desc,
            $shortcodes, PREG_PATTERN_ORDER);

        // Valores
        $variables = [];
        foreach ($shortcodes[1] as $z => $sc){
            $valores = explode(' ', $sc);
            foreach ($valores as $val){
                list($key, $data) = explode('=', $val);
                $variables[$z][$key] = $data;
                if($key == 'id_product'){
                    $variables[$z]['type'] = 'product';
                } elseif($key == 'id_category'){
                    $variables[$z]['type'] = 'category';
                }
            }
        }

        foreach($variables as $key => $val){
            $replace = '';
            if($val['type'] == 'product'){
                $product = $module->getProductSC((int)$val['id_product']);
                if(is_object($product)) {
                    Context::getContext()->smarty->assign(array(
                        'product' => $product,
                        'type' => 'product'
                    ));
                    $replace = $module->renderPremiumTpl('sc_product.tpl');
                }
            } elseif($val['type'] == 'category') {
                $products = $module->getProductsSC((int)$val['id_category'], $val['order'], $val['way'], (int)$val['num']);
                if(is_array($products)) {
                    Context::getContext()->smarty->assign(array(
                        'products' => $products,
                        'type' => 'category'
                    ));
                    $replace = $module->renderPremiumTpl('sc_product.tpl');
                }
            }
            $string_replace = $shortcodes[0][$key];

            $desc = str_replace($string_replace, $replace, $desc);
        }

        return $desc;
    }

    public static function renderFormCategory()
    {
        $module = Module::getInstanceByName('dbblog');

        return array(
            'type' => 'switch',
            'label' => $module->l('Index'),
            'name' => 'index',
            'is_bool' => true,
            'values' => array(
                array(
                    'id' => 'active_on',
                    'value' => 1,
                    'label' => $module->l('Yes')
                ),
                array(
                    'id' => 'active_off',
                    'value' => 0,
                    'label' => $module->l('No')
                )
            ),
        );
    }

    public static function renderFormProduct()
    {
        $module = Module::getInstanceByName('dbblog');

        return array(
            'type' => 'switch',
            'label' => $module->l('Index'),
            'name' => 'index',
            'is_bool' => true,
            'values' => array(
                array(
                    'id' => 'active_on',
                    'value' => 1,
                    'label' => $module->l('Yes')
                ),
                array(
                    'id' => 'active_off',
                    'value' => 0,
                    'label' => $module->l('No')
                )
            ),
        );
    }

    public static function renderListProduct()
    {
        $module = Module::getInstanceByName('dbblog');

        return array(
            'title' => 'Index',
            'active' => 'index',
            'type' => 'bool',
            'class' => 'fixed-width-xs',
            'align' => 'center',
            'ajax' => true,
            'orderby' => false,
            'search' => true,
            'width' => 25,
        );
    }

}