<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 23/01/15
 * Time: 13:51
 */

namespace Base\BaseBundle\Service;

class Estado extends AbstractService
{
    CONST BRASILIA = 7;

    protected $entityName = 'Base\BaseBundle\Entity\TbEstado';

    public function getEstadoBrowser()
    {
        $ip = $this->getContainer()->get('request')->getClientIp();
        $url = "{$this->getContainer()->getParameter('url_geo')}{$ip}";

        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        $resultado = curl_exec($cURL);
        curl_close($cURL);

        $result = json_decode($resultado);

        if ($result && isset($result->region)) {
            $estado = utf8_decode($result->region);
            return $this->getRepository()->getEstadoBrowser($estado);
        }else{
            return $this->getRepository()->find(self::BRASILIA);
        }
    }
}