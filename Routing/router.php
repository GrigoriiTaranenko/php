<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 025 25.04.17
 * Time: 21:43
 */

namespace Routing;


class UrlMatcher
{
    private $methods=array(
        'GET',
        'POST',
        'PUT',
        'DELETE',
        'HEAD'
    );
    private $routers =array(
        'GET'=>array(),
        'POST'=>array(),
        'PUT'=>array(),
        'DELETE'=>array(),
        'PATCH'=>array(),
        'HEAD'=>array()
    );

    private $patterns=array(
        'num'=>'[0-9]+',
        'str'=>'[a-zA-Z\.\-_%]+',
        'any'=>'[a-zA-Z0-9\.\-_%]+'
    );

}