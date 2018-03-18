<?php

function smarty_function_imageurl($params, &$smarty)
{
    $url = $params['url'] ? $params['url'] : '';
    if(!$url)
        return '';
    if(stripos($url, 'http') === 0)
        return $url;
    return base_url().ltrim($url, '/');
}
