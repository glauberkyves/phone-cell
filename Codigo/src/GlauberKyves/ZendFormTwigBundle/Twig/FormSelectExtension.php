<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 30/01/15
 * Time: 10:34
 */

namespace GlauberKyves\ZendFormTwigBundle\Twig;
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
class FormSelectExtension extends \Twig_Extension
{
    protected $class;

    public function __construct()
    {
        $this->class = str_replace(array(__NAMESPACE__, 'Extension', '\\'), array('', '', ''), get_class($this));
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter(lcfirst($this->class), array($this, lcfirst($this->class))),
        );
    }

    public function getName()
    {
        return 'form_select_extension';
    }

    public function __call($method, $args)
    {
        if (strtolower($this->class) == strtolower($method)) {
            $class = new $this->class();

            return $class->{$method}->class(func_get_args());
        }
    }
}