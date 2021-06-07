<?php

/**
 * 2007-2021 PrestaShop
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
 *  @copyright 2007-2021 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once _PS_MODULE_DIR_ . 'diccionario/models/Glosario.php';

class Diccionario extends Module
{

    /** @var string */
    public $folder_path;

    /**
     * @see Module::__construct()
     */
    public function __construct()
    {
        $this->name                   = 'diccionario';
        $this->tab                    = 'front_office_features';
        $this->version                = '1.0.0';
        $this->author                 = 'Ismael Garcia';
        $this->need_instance          = 0;
        $this->bootstrap              = true;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        parent::__construct();

        $this->folder_path = $this->local_path;
        $this->displayName = $this->l('Diccionario');
        $this->description = $this->l('Es un modulo para añadir definiciones a un glosario');

        $this->confirmUninstall = $this->l('¿Estas seguro de querer desinstalarlo?');
    }

    /**
     * @see Module::install()
     */
    public function install()
    {

        // Instalar tablas
        $tab = new Tab();
        // Need a foreach for the language
        $tab->name[$this->context->language->id] = $this->l('Glosario');
        $tab->class_name                         = 'AdminGlosario';
        $tab->id_parent                          = 0; // Home tab
        $tab->module                             = $this->name;
        $tab->add();

        if (!parent::install()
            || !$this->createTables()
            || !$this->createTabs()
            || !$this->registerHook('displayBackOfficeTop')
            || !Configuration::updateValue('DICCI_PAGE_TITLE', 'Glosario')
        ) {
            return false;
        }

        return true;
    }

    /**
     * Creamos tablas
     *
     * @return bool
     */
    protected function createTables()
    {
        $sql = Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'diccionario` (
                `id_diccionario` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `active` TINYINT(1) NOT NULL,
                `date_add` DATETIME NOT NULL,
                `date_upd` DATETIME NOT NULL,
                PRIMARY KEY (`id_diccionario`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;
        ');

        $sql &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'diccionario_lang` (
                `id_diccionario` int(10) unsigned NOT NULL,
                `id_lang` int(10) unsigned NOT NULL,
                `name` varchar(255) NOT NULL,
                `description` text NOT NULL
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;
        ');

        return $sql;
    }

    public function createTabs()
    {
        $idTabs = array();
        $idTabs[] = Tab::getIdFromClassName('AdminDicci');
        $idTabs[] = Tab::getIdFromClassName('adminglosario');

        foreach ($idTabs as $idTab) {
            if ($idTab) {
                $tab = new Tab($idTab);
                $tab->delete();
            }
        }

        if (!Tab::getIdFromClassName('AdminCompugaming')) {
            $parent_tab = new Tab();
            $parent_tab->name = array();
            foreach (Language::getLanguages(true) as $lang) {
                $parent_tab->name[$lang['id_lang']] = $this->l('Compugaming');
            }
            $parent_tab->class_name = 'AdminCompugaming';
            $parent_tab->id_parent = 0;
            $parent_tab->module = $this->name;
            $parent_tab->add();

            $id_full_parent = $parent_tab->id;
        } else {
            $id_full_parent = Tab::getIdFromClassName('AdminCompugaming');
        }

        $parent = new Tab();
        $parent->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $parent->name[$lang['id_lang']] = $this->l('Diccionario');

        $parent->class_name = 'AdminDicci';
        $parent->id_parent = $id_full_parent;
        $parent->module = $this->name;
        $parent->icon = 'assignment';
        $parent->add();


        // Post
        $tab_config = new Tab();
        $tab_config->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab_config->name[$lang['id_lang']] = $this->l('Glosario');
        $tab_config->class_name = 'adminglosario';
        $tab_config->id_parent = $parent->id;
        $tab_config->module = $this->name;
        $tab_config->add();
    }

    /**
     * @see Module::uninstall()
     */
    public function uninstall()
    {
        // Desinstalar tablas
        $moduleTabs = Tab::getCollectionFromModule($this->name);

        if (!empty($moduleTabs)) {
            foreach ($moduleTabs as $moduleTab) {
                $moduleTab->delete();
            }
        }

        if (!parent::uninstall() || !$this->deleteTables()) {
            return false;
        }

        return true;
    }

    /**
     * Borrar tablas
     *
     * @return bool
     */
    protected function deleteTables()
    {
        $sql = Db::getInstance()->execute('
            DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'diccionario`;
        ');

        $sql &= Db::getInstance()->execute('
            DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'diccionario_lang`;
        ');

        return $sql;
    }

    /**
     * Creamos la configuracion de la pagina
     *
     * @return string
     */
    /**
     * Cargamos la configuracion del formulario
     */
    public function getContent()
    {
        $output = '';

        $this->context->smarty->assign(
            array(
                'ps_version' => _PS_VERSION_,
                'module_dir' => $this->_path,
                'module_version' => $this->version
            )
        );

        if (Tools::isSubmit('submit' . $this->name)) {
            $page_title = strval(Tools::getValue('DICCI_PAGE_TITLE'));
            if (!$page_title || empty($page_title)) {
                $output .= $this->displayError($this->l('Titulo de la pagina invalido'));
            } else {
                Configuration::updateValue('DICCI_PAGE_TITLE', $page_title);
                Configuration::updateValue('DICCI_PAGINATION', Tools::getValue('DICCI_PAGINATION'));

                $output .= $this->displayConfirmation($this->l('Opciones guardadas'));
            }
        }

        $this->context->controller->addCSS(($this->_path).'views/css/back.css', 'all');

        $output .= $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output . $this->renderForm();
    }

    public function hookDisplayBackOfficeTop()
    {
        if (Module::isInstalled('diccionario')) {
            return '<style>.icon-AdminGlosario:before{content:"\f14b";}</style>';
        }
    }

    /**
     * Formulario de configuracion
     *
     * @return string
     */
    public function renderForm()
    {
        $default_lang = (int) Configuration::get('PS_LANG_DEFAULT');

        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Opciones'),
                'icon' => 'icon-plus-sign-alt'
            ),
            'input'  => array(
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Titulo de la pagina'),
                    'name'     => 'DICCI_PAGE_TITLE',
                    'size'     => 20,
                    'required' => true,
                ),
                array(
                    'type'     => 'switch',
                    'label'    => $this->l('Habilitar paginacion'),
                    'desc'     => $this->l('Si esta habilitado obtendrá una pagina por letra'),
                    'name'     => 'DICCI_PAGINATION',
                    'required' => true,
                    'class'    => 't',
                    'is_bool'  => true,
                    'values'   => array(
                        array(
                            'id'    => 'dicci_pagination_on',
                            'value' => true,
                            'label' => $this->l('Yes'),
                        ),
                        array(
                            'id'    => 'dicci_pagination_off',
                            'value' => false,
                            'label' => $this->l('No'),
                        ),
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Guardar'), // Este boton guarda todos los campos.
                'class' => 'btn btn-default pull-right'
            ),
        );

        $helper = new HelperForm();

        // Modulo, token y currentIndex
        $helper->module          = $this;
        $helper->name_controller = $this->name;
        $helper->token           = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex    = AdminController::$currentIndex . '&configure=' . $this->name;

        // Lenguage
        $helper->default_form_language    = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Titulo y barra de herramientras
        $helper->title          = $this->displayName;
        $helper->show_toolbar   = true; // false -> borrar barra de herramientas
        $helper->toolbar_scroll = true; // yes - > Barra de herramientas siempre visible en la pantalla
        $helper->submit_action  = 'submit' . $this->name;
        $helper->toolbar_btn    = array(
            'back' => array(
                'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Volver a la lista'),
            ),
        );

        // Cargar valores
        $helper->fields_value['DICCI_PAGE_TITLE'] = Configuration::get('DICCI_PAGE_TITLE');
        $helper->fields_value['DICCI_PAGINATION'] = Configuration::get('DICCI_PAGINATION');

        return $helper->generateForm($fields_form);
    }
}
