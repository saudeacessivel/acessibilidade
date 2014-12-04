<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('form_status')) {

    function form_status($name = '', $selected = '', $extra = '', $options = array(0 => 'Inativo', 1 => 'Ativo')) {
        if ($selected == '') {
            $selected = 1;
        }

        return form_dropdown($name, $options, $selected, $extra);
    }

}

