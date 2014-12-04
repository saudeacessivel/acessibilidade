<?php

class MY_Pagination extends CI_Pagination {

    
    function __construct($config = array()) {
        parent::__construct($config);
    }

    public function create_links_painel() {
        $this->use_page_numbers = true;
        #$this->per_page = 1;
        #$this->uri_segment = 3;
        
        if($_SERVER['QUERY_STRING'] !==''){
            $this->suffix = '/?'.$_SERVER['QUERY_STRING'];
        }
        $this->first_url = $this->base_url . $this->suffix;
        
        $this->full_tag_open = '<div class="div-pagination"><ul class="pagination">';
        $this->full_tag_close = '</ul></div><!--pagination-->';        

        $this->first_link = '&laquo; Primeiro';
        $this->first_tag_open = '<li class="prev page">';
        $this->first_tag_close = '</li>';        

        $this->last_link = 'Último &raquo;';
        $this->last_tag_open = '<li class="next page">';
        $this->last_tag_close = '</li>';

        $this->next_link = 'Próximo &rarr;';
        $this->next_tag_open = '<li class="next page">';
        $this->next_tag_close = '</li>';

        $this->prev_link = '&larr; Anterior';
        $this->prev_tag_open = '<li class="prev page">';
        $this->prev_tag_close = '</li>';

        $this->cur_tag_open = '<li class="active"><a href="">';
        $this->cur_tag_close = '</a></li>';

        $this->num_tag_open = '<li class="page">';
        $this->num_tag_close = '</li>';
        
        return $this->create_links();
    }
    
    public function create_links_total(){
        #echo $this->cur_page;
        #if(($this->cur_page-1) < 0){
        #    $this->cur_page = 0;
        #}
        
        if($this->total_rows <= $this->per_page){
            $this->cur_page = 1;
        }
        
        $inicial = ($this->cur_page-1) * $this->per_page;
        $final = $inicial + $this->per_page;
        $total = $this->total_rows;
        #echo 'se final for 0 o final recebe total coisa assim... olhar paginação';
        #echo $total . '->' . $final;
        $ate = ($final > $total) ? $total : $final;
        return ($inicial+1) . ' até ' . $ate . ' de ' . $total . ' registros';
        #return "Showing $start - $end of $total total results";
    }
    
}
