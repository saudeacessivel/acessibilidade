<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {malerta} function plugin
 *
 * Type:     function<br>
 * Name:     malerta<br>
 * Date:     Mar 27, 2012<br>
 * Purpose:  Mostar as mensagem passadas por array<br>
 * Input:
 *         - array('tipo', 'mensagem')
 *
 * Examples:<br>
 * <pre>
 * {smarty_message msn=$mensagem} 
 * </pre>
 * @author MIXD Internet <atendimento@mixd.com.br>
 * @author credit to MIXD Internet <atendimento@mixd.com.br>
 * @param $params é obrigatório 
 * @return string|null
 */

function smarty_function_smart_message($params, &$smarty){ 
    if(empty($params['msn'])){
        return;
    }
    
    $tipo = "info";
    $mensagem = $params['msn'];
    
    if(is_array($params['msn'])){
        $tipo = key($params['msn']);
        $mensagem = current($params['msn']);
    }
    
    $url_retorno = '';
    if($params['url_retorno']){
        $url_retorno = "/?url_retorno=".$params['url_retorno'];
    }
    
    $desfazer = '';
    if($params['restaurar_id']){
        #$desfazer = '(<a href="' . $params['undo_url'] . '/restaurar/' . $params['restaurar_id'] . $url_retorno . '">desfazer</a>)';
        $desfazer = '<p class="text-align-left">
            <br>
            <a href="' . $params['undo_url'] . '/restaurar/' . $params['restaurar_id'] . $url_retorno . '" class="btn btn-sm btn-info"><strong><i class="fa fa-undo"></i> Desfazer</strong></a>
        </p>';
    }
    
    if($params['remover_id']){
        #$desfazer = '(<a href="' . $params['undo_url'] . '/remover/' . $params['remover_id'] . $url_retorno . '">desfazer</a>)';
        $desfazer = '<p class="text-align-left">
            <br>
            <a href="' . $params['undo_url'] . '/remover/' . $params['remover_id'] . $url_retorno . '" class="btn btn-sm btn-info"><strong><i class="fa fa-undo"></i> Desfazer</strong></a>
        </p>';
        
    }
    
    switch ($tipo) {
        case 'sucesso':
            $msn = '<div class="alert alert-success alert-block fade in">
                        <button class="close" data-dismiss="alert">×</button>
                        <!--i class="fa-fw fa fa-check"></i-->
                        <h4 class="alert-heading">Sucesso!</h4>
                        ' . $mensagem . '. ' . $desfazer . '
                    </div>';
            break;
        case 'erro':
            $msn = '<div class="alert alert-danger alert-block fade in">
                        <button class="close" data-dismiss="alert">×</button>
                        <!--i class="fa-fw fa fa-times"></i-->
                        <h4 class="alert-heading">Erro!</h4>
                        ' . $mensagem . '. ' . $desfazer . '
                    </div>';
            break;
        case 'alerta':
            $msn = '<div class="alert alert-warning alert-block fade in">
                        <button class="close" data-dismiss="alert">×</button>
                        <!--i class="fa-fw fa fa-warning"></i-->
                        <h4 class="alert-heading">Atenção!</h4>
                        ' . $mensagem . '. ' . $desfazer . '
                    </div>';
            break;
        default:
            $msn = '<div class="alert alert-info alert-block fade in">
                        <button class="close" data-dismiss="alert">×</button>
                        <!--i class="fa-fw fa fa-info"></i-->
                        <h4 class="alert-heading">Informação!</h4>
                        ' . $mensagem . '. ' . $desfazer . '
                    </div>';
    }
    return $msn;
}
