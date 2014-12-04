<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * MIXD URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage          Helpers
 * @category            Helpers
 * @author		Irineu Junior
 * @email		irineu@mixd.com.br
 */
if (!function_exists('assets_url')) {
    function assets_url($file = '') {
        $ci = get_instance();
        $base_url = $ci->config->item('base_url');
        $asset_url = $base_url . 'assets/' . $file;
        return $asset_url;
    }
}


if (!function_exists('painel_url')) {
    function painel_url($file = '') {
        $ci = get_instance();
        $base_url = $ci->config->item('base_url');
        $painel_folder = $ci->config->item('painel_folder');
        $painel_url = $base_url . $painel_folder . $file;
        return $painel_url;
    }
}

/* End of file MY_url_helper.php */
/* Location: ./application/helpers/MY_url_helper.php */