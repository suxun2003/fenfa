<?php

/**
 * 360
 * User: lincg
 * Date: 8/28/17
 * Time: 6:12 PM
 */
class Tui360 extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Http_client', NULL, 'http');
        $this->_channel = $this->m_Setting->getSettingInfoByKey('360_channel');
        $this->_key = $this->m_Setting->getSettingInfoByKey('360_key');
    }

    protected function getRequestUrl($req)
    {
        ksort($req);
        $url = http_build_query($req);
        $url .= '&sign=' . md5($url.$this->_key);
        return $url;
    }

    public function appList()
    {

    }

}