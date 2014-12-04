<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class MY_Router extends CI_Router {
    public function _set_request($segments){
        // Fix only the first 2 segments
        $segment_deep = 2;
        if($segments[0] == "painel"){
            $segment_deep = 3;
        }
        for($i = 0; $i < $segment_deep; ++$i){
            if(isset($segments[$i])){
                $segments[$i] = str_replace('-', '_', $segments[$i]);
            }
        }

        // Run the original _set_request method now, giving it our newly replaced segments
        parent::_set_request($segments);
    }
}