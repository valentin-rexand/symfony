<?php

namespace Troiswa\TestBundle\Utilities;

class Slug
{
public static function slugify($string)
    {
    	if(!is_string($string)) throw new \InvalidArgumentException('Valeur invalide');
        $string=preg_replace('/\\W+/', '-', $string);
        $string=strtolower(trim($string, '-'));
        if(empty($string)) throw new \InvalidArgumentException('Valeur invalide');        	
        return $string;
    }
}