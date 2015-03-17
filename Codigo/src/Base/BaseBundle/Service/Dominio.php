<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 23/01/15
 * Time: 15:00
 */

namespace Base\BaseBundle\Service;

class Dominio
{
    CONST ATIVO = 1;
    CONST INATIVO = 0;

    CONST SIM = 1;
    CONST NAO = 0;

    CONST MASCULINO = 1;
    CONST FEMININO = 2;

    CONST PRIMEIRA_LINHA = 1;
    CONST SEGUNDA_LINHA = 2;

    CONST MANHA = 1;
    CONST TARDE = 2;
    CONST COMERCIAL = 3;

    CONST NOVO = 1;
    CONST EXISTENTE = 2;

    CONST AVISTA = 1;
    CONST PARCELADO = 2;


    public static function getStAtivo()
    {
        return array(
            ''            => 'Selecione',
            self::ATIVO   => 'Ativo',
            self::INATIVO => 'Inativo'
        );
    }

    public static function getStSexo()
    {
        return array(
            ''              => 'Selecione',
            self::MASCULINO => 'Masculino',
            self::FEMININO  => 'Feminino'
        );
    }

    public static function getStProduto()
    {
        return array(
            ''                   => 'Selecione',
            self::PRIMEIRA_LINHA => '1 Linha',
            self::SEGUNDA_LINHA  => '2 Linha'
        );
    }

    public static function getPeriodo()
    {
        return array(
            ''              => 'Selecione',
            self::MANHA     => 'Manhã',
            self::TARDE     => 'Tarde',
            self::COMERCIAL => 'Comercial'
        );
    }

    public static function getTpTerminal()
    {
        return array(
            ''              => 'Selecione',
            self::NOVO      => 'Novo',
            self::EXISTENTE => 'Existente'
        );
    }

    public static function getTpTaxaHabilitacao()
    {
        return array(
            ''              => 'Selecione',
            self::AVISTA    => 'À vista',
            self::PARCELADO => 'Parcelado'
        );
    }

    public static function getSimNao($radio = false)
    {
        $item = array(
            ''        => 'Selecione',
            self::SIM => 'Sim',
            self::NAO => 'Não'
        );

        if ($radio) {
            unset($item['']);
        }

        return $item;
    }
} 