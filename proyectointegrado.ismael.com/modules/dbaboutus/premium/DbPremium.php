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

class DbPremium extends ObjectModel
{
    public static function adminRenderFormAuthor($specialties, $tags, $image)
    {
        $module = Module::getInstanceByName('dbaboutus');

        $fields_form = array(
            'legend' => array(
                'title' => $module->l('Autor'),
                'icon' => 'icon-pencil'
            ),

            'input' => array(

                array(
                    'type' => 'hidden',
                    'name' => 'id_dbaboutus_author',
                ),

                array(
                    'type' => 'hidden',
                    'name' => 'position',
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Nombre'),
                    'name' => 'name',
                    'required' => true,
                    'lang' => true,
                    'id' => 'name',
                    'class' => 'copy2friendlyUrl',
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Email'),
                    'name' => 'email',
                    'required' => true,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Cargo en la empresa'),
                    'name' => 'profession',
                    'required' => true,
                    'lang' => true,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Nº Colegiado'),
                    'name' => 'number',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'select',
                    'label' => $module->l('Especialidades'),
                    'name' => 'specialties',
                    'multiple' => true,
                    'required' => false,
                    'desc' => $module->l('Selecciona las especialidades'),
                    'options' => array(
                        'id' => 'id_dbaboutus_speciality',
                        'query' => $specialties,
                        'name' => 'name'
                    )
                ),

                /*array(
                    'type' => 'checkbox',
                    'label' => $this->l('Especialidades'),
                    'name' => 'specialties',
                    'required' => true,
                    'desc' => $this->l('Selecciona las especialidades'),
                    'values' => array(
                        'query' =>$specialties,
                        'id' => 'id_dbaboutus_speciality',
                        'name' => 'name',
                        'expand' => array(
                            'print_total' => count($specialties),
                            'default' => 'show',
                            'show' => array('text' => $this->l('show'), 'icon' => 'plus-sign-alt'),
                            'hide' => array('text' => $this->l('hide'), 'icon' => 'minus-sign-alt')
                        ),
                    )
                ),*/

                array(
                    'type' => 'select',
                    'label' => $module->l('Etiqueta de experto'),
                    'name' => 'id_tag',
                    'multiple' => false,
                    'required' => true,
                    'desc' => $module->l('Selecciona la etiqueta'),
                    'options' => array(
                        'id' => 'id_dbaboutus_tag',
                        'query' => $tags,
                        'name' => 'name'
                    )
                ),

                array(
                    'type' => 'textarea',
                    'label' => $module->l('Descripción corta'),
                    'name' => 'short_desc',
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 40,
                    'autoload_rte' => true,
                ),

                array(
                    'type' => 'textarea',
                    'label' => $module->l('Descripción larga'),
                    'name' => 'large_desc',
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 40,
                    'autoload_rte' => true,
                ),

                array(
                    'type' => 'textarea',
                    'label' => $module->l('Me has visto en'),
                    'name' => 'views',
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 40,
                    'autoload_rte' => true,
                ),

                array(
                    'type' => 'file',
                    'label' => $module->l('Imagen'),
                    'display_image' => true,
                    'image' => $image,
                    'name' => 'image',
                    'desc' => $module->l('Subir imagen desde tu ordenador'),
                    'lang' => true,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Twitter'),
                    'name' => 'twitter',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Facebook'),
                    'name' => 'facebook',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Linkedin'),
                    'name' => 'linkedin',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('YouTube'),
                    'name' => 'youtube',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Instagram'),
                    'name' => 'instagram',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Web'),
                    'name' => 'web',
                    'required' => false,
                    'lang' => false,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Meta-título'),
                    'name' => 'metatitle',
                    'required' => false,
                    'lang' => true,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Meta descripción'),
                    'name' => 'metadescription',
                    'required' => false,
                    'lang' => true,
                ),

                array(
                    'type' => 'text',
                    'label' => $module->l('Url'),
                    'name' => 'link_rewrite',
                    'required' => true,
                    'lang' => true,
                ),

                array(
                    'type' => 'switch',
                    'label' => $module->l('Active'),
                    'name' => 'active',
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
                ),

            ),
        );

        return $fields_form;
    }

    public static function getConfigFormGeneral()
    {
        $module = Module::getInstanceByName('dbaboutus');
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $module->l('Configuración'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'name' => 'DBABOUTUS_TITLE',
                        'label' => $module->l('Título'),
                        'lang'  => true,
                    ),
                    array(
                        'col' => 9,
                        'type' => 'text',
                        'name' => 'DBABOUTUS_METATITLE',
                        'label' => $module->l('Meta-título'),
                        'lang'  => true,
                    ),
                    array(
                        'col' => 9,
                        'type' => 'text',
                        'name' => 'DBABOUTUS_METADESC',
                        'label' => $module->l('Meta descripción'),
                        'lang'  => true,
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $module->l('Path general, ejem: sobre-nosotros'),
                        'name' => 'DBABOUTUS_URL',
                        'label' => $module->l('Url'),
                        'lang'  => true,
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'DBABOUTUS_SHORT_DESC',
                        'label' => $module->l('Descripción corta'),
                        'autoload_rte' => true,
                        'rows' => 5,
                        'cols' => 40,
                        'lang'  => true,
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'DBABOUTUS_LARGE_DESC',
                        'label' => $module->l('Descripción larga'),
                        'autoload_rte' => true,
                        'rows' => 5,
                        'cols' => 40,
                        'lang'  => true,
                    ),
                ),
                'submit' => array(
                    'title' => $module->l('Save'),
                ),
            ),
        );
    }

    public static function connectBlog($author, $id_lang)
    {
        if (Module::isInstalled('dbblog') && Module::isEnabled('dbblog')) {
            $posts = DbAboutUsAuthor::getPosts((int)$author['id_dbaboutus_author'], (int)$id_lang,
                Configuration::get('DBBLOG_POSTS_PER_AUTHOR'));
            $posts_more_read = DbAboutUsAuthor::getPosts((int)$author['id_dbaboutus_author'], (int)$id_lang,
                Configuration::get('DBBLOG_SIDEBAR_VIEWS'));
            $totals_comment = DbAboutUsAuthor::getTotalsOpinionsByAuthor((int)$author['id_dbaboutus_author']);
            $total_opiniones = (int)$totals_comment['total'];
            if ((int)$totals_comment['suma'] > 0) {
                $media_opiniones = number_format(round($totals_comment['suma'] / $totals_comment['total'], 1), 1,
                    '.', '');
            } else {
                $media_opiniones = 0;
            }
            $opiniones = DbAboutUsAuthor::getOpinionsByAuthor((int)$author['id_dbaboutus_author']);
            $c_active = Configuration::get('DBBLOG_COMMENTS');

            return array(
                'posts' => $posts,
                'posts_more_read' => $posts_more_read,
                'totals_comment' => $totals_comment,
                'total_opiniones' => $total_opiniones,
                'media_opiniones' => $media_opiniones,
                'opiniones' => $opiniones,
                'c_active' => $c_active,
            );
        }
    }
}