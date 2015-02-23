<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 30/01/15
 * Time: 10:34
 */

namespace Base\BaseBundle\Twig;

class ComboSituacaoExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('comboSituacao', array($this, 'selectFilter')),
        );
    }


    public function getName()
    {
        return 'como_situacao_extension';
    }

    public function selectFilter($name, $selectedValue = null, $class = null)
    {
        $params = array(
            0 => 'Inativo',
            1 => 'Ativo'
        );

        $html = "<select id=\"{$name}\" name=\"{$name}\" class=\"form-control m-bot15 {$class}\">";
        $html .= '<option value="">Selecione</option>';

        foreach ($params as $key => $value) {
            $html .= "<option value=\"{$key}\"";

            if ($selectedValue == $key) {
                $html .= ' selected="selected" ';
            }

            $html .= ">{$value}</option>";
        }

        $html .= '</select>';

        return $html;
    }

}