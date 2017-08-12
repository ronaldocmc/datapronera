<?php

class Mapas_m extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();   // Loading Database 
        $this->load->library('session'); // Loading Session
        $this->load->helper('url');  // Loading Helper
    }
    
    //mapas
    function get_municipios_cursos($filtros) {
        
        $filtros = str_replace("[", "(", $filtros);
        $filtros = str_replace("]", ")", $filtros);
        
        $query = $this->db->query("
            SELECT m.id as id,COUNT(m.id) as total,m.nome as municipio,est.nome as estado,lg.latitude as lat, lg.longitude as lng 
            FROM `curso` c
            INNER JOIN caracterizacao cr ON c.id = cr.id_curso
            INNER JOIN caracterizacao_cidade ccr ON ccr.id_caracterizacao = cr.id
            INNER JOIN cidade m ON m.id = ccr.id_cidade
            INNER JOIN estado est ON est.id = m.id_estado 
            INNER JOIN cidades_lat_long lg ON lg.id_geocode = m.cod_municipio
            WHERE c.ativo_inativo = 'A' AND c.status in $filtros
            GROUP BY m.id");

        return $query->result();
    }

    function get_municipios_educandos($filtros) {
        
        $filtros = str_replace("[", "(", $filtros);
        $filtros = str_replace("]", ")", $filtros);
        
        $query = $this->db->query("
            SELECT m.id as id,COUNT(m.id) as total,m.nome as municipio,est.nome as estado,lg.latitude as lat, lg.longitude as lng FROM `educando` e
            INNER JOIN educando_cidade ec ON ec.id_educando = e.id
            INNER JOIN cidade m ON m.id = ec.id_cidade
            INNER JOIN estado est ON est.id = m.id_estado  
            INNER JOIN cidades_lat_long lg ON lg.id_geocode = m.cod_municipio 
            INNER JOIN curso c ON c.id = e.id_curso 
            WHERE c.ativo_inativo = 'A' AND c.status in $filtros
            GROUP BY m.id
        ");

        return $query->result();
    }
    
    //desabilitado
    function get_municipios_instituicoes($filtros) {
        $query = $this->db->query("
            SELECT m.id as id,COUNT(m.id) as total,m.nome as municipio,est.nome as estado,lg.latitude as lat, lg.longitude as lng 
            FROM `instituicao_ensino` ie
            INNER JOIN cidade m ON m.id = ie.id_cidade 
            INNER JOIN estado est ON est.id = m.id_estado  
            INNER JOIN cidades_lat_long lg ON lg.id_geocode = m.cod_municipio 
            GROUP BY m.id
        ");

        return $query->result();
    }

    
    //tabelas
    function get_cursos_educandos($id_municipio) {
        $query = $this->db->query("
            SELECT DISTINCT CONCAT(LPAD(c.id_superintendencia, 2, 0 ),'.', LPAD(c.id, 3, 0 )), `c`.`nome` , `m`.`nome` as modal, `c`.`id` as idcurso
            FROM `educando` e 
            INNER JOIN `educando_cidade` ec ON `ec`.`id_educando` = `e`.`id` 
            INNER JOIN `curso` c ON `c`.`id` = `e`.`id_curso` 
            INNER JOIN `curso_modalidade` m ON `m`.`id` = `c`.`id_modalidade` 
            WHERE `ec`.`id_cidade` = '" . $id_municipio . "'  AND `c`.`ativo_inativo` = 'A'
        ");

        $result = $this->get_table($query);
        $table = $result['aaData'];

        foreach ($table as $key => $row) {

            $this->db->select("COUNT(e.id) as total");
            $this->db->from("educando e");
            $this->db->join('educando_cidade ec', 'ec.id_educando = e.id');
            $this->db->join('curso c', 'c.id = e.id_curso');
            $this->db->where("c.id", $row[3]);
            $this->db->where('ec.id_cidade', $id_municipio);
            $this->db->where('c.ativo_inativo', 'A');
            $this->db->distinct();

            $query1 = $this->db->get();

            $fetch = $query1->result();

            $result['aaData'][$key][3] = $fetch[0]->total;
        }

        return $result;
    }

    function get_educandos_cursos($id_municipio) {
        $id = (int) $id_municipio;
        $query = $this->db->query("
            SELECT 
                e.nome as educando,
                CONCAT(m.nome,' (',est.sigla,')'),
                e.nome_territorio,
                e.tipo_territorio,
                CONCAT(LPAD(c.id_superintendencia, (2), (0) ),('.'), LPAD(c.id, (3), (0) )) as codcurso
            FROM `curso` c
            INNER JOIN caracterizacao cr ON c.id = cr.id_curso
            INNER JOIN caracterizacao_cidade ccr ON ccr.id_caracterizacao = cr.id
            INNER JOIN educando e ON e.id_curso = c.id
            LEFT JOIN educando_cidade ec ON ec.id_educando = e.id 
            LEFT JOIN cidade m ON m.id = ec.id_cidade 
            LEFT JOIN estado est ON est.id = m.id_estado 
            WHERE c.ativo_inativo = 'A' AND ccr.id_cidade = $id 
            ORDER BY c.id");

        return $this->get_table($query);
    }

    function get_educandos($id_municipio) {
        $this->db->select("e.nome, e.nome_territorio, e.code_sipra_assentamento, CONCAT(LPAD(c.id_superintendencia, (2), (0) ),('.'), LPAD(c.id, (3), (0) )) as codcurso");
        $this->db->from('educando e');
        $this->db->join('educando_cidade ec', 'ec.id_educando = e.id');
        $this->db->join('curso c', 'c.id = e.id_curso');
        $this->db->where('ec.id_cidade', $id_municipio);
        $this->db->where('c.ativo_inativo', 'A');
        return $this->get_table($this->db->get());
    }

    function get_instituicoes($id_municipio) {
        $this->db->select('ie.id,ie.nome,ie.sigla,ie.unidade,c.nome as curso');
        $this->db->from('instituicao_ensino ie');
        $this->db->join('curso c', 'c.id = ie.id_curso');
        $this->db->where('ie.id_cidade', $id_municipio);
        return $this->get_table($this->db->get());
    }

    function get_cursos($id_municipio) {
        $id = (int) $id_municipio;
        $query = $this->db->query("
            SELECT DISTINCT 
                CONCAT(LPAD(c.id_superintendencia, 2, 0 ),'.', LPAD(c.id, 3, 0 )), 
                `c`.`nome` , 
                `modal`.`nome` as mdldd, 
                ie.nome as inst, 
                c.id
            FROM `curso` c 
            INNER JOIN caracterizacao cr ON c.id = cr.id_curso
            INNER JOIN caracterizacao_cidade ccr ON ccr.id_caracterizacao = cr.id
            INNER JOIN cidade m ON m.id = ccr.id_cidade
            INNER JOIN estado est ON est.id = m.id_estado 
            INNER JOIN cidades_lat_long lg ON lg.id_geocode = m.cod_municipio 
            INNER JOIN `curso_modalidade` modal ON `modal`.`id` = `c`.`id_modalidade` 
            INNER JOIN instituicao_ensino ie ON ie.id_curso = c.id 
            WHERE c.ativo_inativo = 'A' AND m.id = " . $id);

        $result = $this->get_table($query);
        $table = $result['aaData'];

        foreach ($table as $key => $row) {
            $idc = $row[4];
            $query1 = $this->db->query("
            SELECT COUNT(e.id) as total
            FROM educando e 
            INNER JOIN `curso` c ON c.id =e.id_curso 
            WHERE c.id = $idc");

            $fetch = $query1->result();

            $result['aaData'][$key][4] = $fetch[0]->total;
        }

        return $result;
    }

    //Buscas
    function search_educando($search) {
        $this->db->select('ec.id_cidade as id,e.nome as nome,c.nome as curso');
        $this->db->from('educando e');
        $this->db->join('educando_cidade ec', 'ec.id_educando = e.id');
        $this->db->join('curso c', 'c.id = e.id_curso');
        $this->db->like('e.nome', "$search");
        $this->db->where('c.ativo_inativo', "A");
        return $this->get_table($this->db->get());
    }

    function search_curso($search) {
        $this->db->select('cc.id_cidade as id, c.nome as curso, cid.nome as município');
        $this->db->from('caracterizacao_cidade cc');
        $this->db->join('caracterizacao ca', 'cc.id_caracterizacao = ca.id');
        $this->db->join('curso c', 'c.id = ca.id_curso');
        $this->db->join('cidade cid', 'cid.id = cc.id_cidade');
        $this->db->like('c.nome', "$search");
        $this->db->where('c.ativo_inativo', "A");
        return $this->get_table($this->db->get());
    }

    function get_table($query) {
//        var_dump($this->db->last_query());

        $dados = $query->result_array();

        /** Output * */
        $output = array(
            "sEcho" => 1,
            "iTotalRecords" => 0,
            "iTotalDisplayRecords" => 0,
            "aaData" => array()
        );

        foreach ($dados as $item) {
            $row = array();

            foreach ($item as $cell) {
                $row[] = $cell;
            }

            $output['aaData'][] = $row;
        }

        return $output;
    }

}

?>