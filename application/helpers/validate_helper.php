<?php

if (!function_exists('validate_msn')) {

    function validate_msn($erro, $campo) {
        if (isset($erro->$campo)) {
            return '<em for="' . $campo . '" class="invalid">' . $erro->$campo . '</em>';
        }
        
        return '';
    }
}
