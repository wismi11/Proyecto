<?php

class DiccionarioDiccipageModuleFrontController extends ModuleFrontController
{
    /**
     * @see ModuleFrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        $glossaries = Glosario::getGlossaries($this->context->language->id, array(), null, null, 'name', 'ASC', true);

        /*if (Configuration::get('DICCI_PAGINATION')) {
            $this->pagination(count($glossaries));
        }*/

        $alphabets = $this->getAlphabets($glossaries);

        $criteria = array();

        if (Tools::getValue('k')) {
            $criteria['k'] = Tools::getValue('k');
        } elseif (count($alphabets['alphabet'])) {
            $criteria['k'] = $alphabets['alphabet'][0];
        }

        if (Configuration::get('DICCI_PAGINATION')) {
            $filtered_list = Glosario::getGlossaries($this->context->language->id, $criteria, null, null, null, null, true);
        } else {
            $filtered_list = $alphabets['glossaries'];
        }

        $this->context->smarty->assign(array(
            'title'                => Configuration::get('DICCI_PAGE_TITLE'),
            'current'              => isset($criteria['k']) ? $criteria['k'] : null,
            'alphabet'             => $alphabets['alphabet'],
            'glossaries'           => $glossaries,
            'filtered_list'        => $filtered_list,
            'pagination_templates' => dirname(__FILE__) . '/../../views/templates/front/paginacion.tpl',
            'pagination'           => Configuration::get('DICCI_PAGINATION'),
        ));

        $this->setTemplate('module:diccionario/views/templates/front/diccipage.tpl');

    }

    /**
     * Get all available alphabets from glossaries
     * And arrange alphabetically
     *
     * @param  array $glossaries
     *
     * @return array
     */
    protected function getAlphabets($glossaries)
    {
        $return = array(
            'alphabet' => array(),
        );

        foreach ($glossaries as $g) {
            $char = strtoupper(substr($g['name'], 0, 1));

            if ($char !== false) {
                $return['glossaries'][$char][] = $g;

                if (!in_array($char, $return['alphabet'])) {
                    $return['alphabet'][] = $char;
                }
            }
        }

        natsort($return['alphabet']);

        return $return;
    }
}
