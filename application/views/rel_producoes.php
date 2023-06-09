<style>
    .modal{
        z-index: 10001;
    }

    .modal-backdrop.fade.in{
        z-index: 10000;
    }

    .select2-container{
        z-index: 10001;
    }

    .badge{
        text-transform: uppercase;
    }

    .badge-alert{
        background: #A55;
    }

    .badge-nominal{
        background: #0078ae;
    }

    .badge-nacional{
        background: #999999;
    }

    .badge-municipio{
        background: #777777;
    }

    .li-rel{
        margin-bottom: 10px;
    }

    .li-rel .btn.btn-success{
        color:black;
    }

    .li-tipo{
        margin-bottom: 20px;
    }
</style>
<form>
    <fieldset>
        <legend><h3>Relat&oacute;rios de Produ&ccedil;&otilde;es (Realizados por Cursos do Pronera)</h3></legend>
        <div class="alert alert-success">
            <i class="glyphicon glyphicon-alert"></i> Gerar em <b>PDF</b> pode demorar 5x mais que <b>XLS</b>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
        <ul class="li-rel">
            <li>
                <ul>
                    <li class="li-tipo">
                        <h5>8A - <b>GERAL</b></h5>
                        <ul>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8A/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8A/PDF'); ?>">PDF</a>
                                PRODU&Ccedil;&Otilde;ES
                            </li>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_autores_8A/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_autores_8A/PDF'); ?>">PDF</a>
                                AUTORES
                            </li>
                        </ul>
                    </li>
                    <li class="li-tipo">
                        <h5>8B - <b>TRABALHO</b></h5>
                        <ul>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8B/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8B/PDF'); ?>">PDF</a>
                                PRODU&Ccedil;&Otilde;ES
                            </li>
                        </ul>
                    </li>
                    <li class="li-tipo">
                        <h5>8C - <b>ARTIGO</b></h5>
                        <ul>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8C/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8C/PDF'); ?>">PDF</a>
                                PRODU&Ccedil;&Otilde;ES
                            </li>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_autores_8C/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_autores_8C/PDF'); ?>">PDF</a>
                                AUTORES
                            </li>
                        </ul>
                    </li>
                    <li class="li-tipo">
                        <h5>8D - <b>MEMÓRIA</b></h5>
                        <ul>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8D/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8D/PDF'); ?>">PDF</a>
                                PRODU&Ccedil;&Otilde;ES
                            </li>
                        </ul>
                    </li>
                    <li class="li-tipo">
                        <h5>8E - <b>LIVROS</b></h5>
                        <ul>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8E/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_8E/PDF'); ?>">PDF</a>
                                PRODU&Ccedil;&Otilde;ES
                            </li>
                            <li class="li-rel">
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_autores_8E/XLS'); ?>">XLS</a> 
                                <a class="btn btn-success" target="_blank" href="<?php echo site_url('relatorio_producoes/producoes_autores_8E/PDF'); ?>">PDF</a>
                                AUTORES
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr/>
            </li>
        </ul>
    </fieldset>
</form>
<script>

    $(document).ready(function () {
        $(".badge-nominal").each(function () {
            this.innerHTML = '<i class="glyphicon glyphicon-list"></i> ' + this.innerHTML;
        });
        $(".badge-alert").each(function () {
            this.innerHTML = '<i class="glyphicon glyphicon-time"></i> ' + this.innerHTML;
        });
        $(".badge-municipio").each(function () {
            this.innerHTML = '<i class="glyphicon glyphicon-map-marker"></i> ' + this.innerHTML;
        });

    });

</script>