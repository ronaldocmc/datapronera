<ul class="nav navbar-nav scrollable selectable" id="nav-tools">
    <li class="dropdown" id="select-mapa" onchange="updateMap();">
        <a href="#" class="dropdown-toggle flex-horizontal" style="padding-left: 25px;" data-toggle="dropdown">
            <div class="col flex-vertical">
                <span class="row title"><i class="fa fa-map"></i> Mapa</span>
                <span class="row subtitle">Educandos</span>
            </div>
            <div class="col">
                <i class="fa fa-caret-down" style="margin-left: 25px;margin-top: 10px;"></i>
            </div>
        </a>
        <ul class="dropdown-menu drop">
            <li class="active">
                <a href="#" class="option" value="educando" title="Educandos">
                    <b>Educandos</b><br/>
                    Educandos por município de origem
                </a>
            </li>
            <li>
                <a href="#" class="option" value="curso" title="Cursos">
                    <b>Cursos</b><br/>
                    Cursos por município de realização
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown" id="modo-visualizacao" onchange="updateTypeMarker()">
        <a href="#" class="dropdown-toggle flex-horizontal" style="padding-left: 25px;" data-toggle="dropdown">
            <div class="col flex-vertical">
                <span class="row title"><i class="fa fa-map-marker"></i>  Tipo de Visualização</span>
                <span class="row subtitle">Com Agrupamento</span>
            </div>
            <div class="col" style="margin-left: 25px;margin-top: 10px;">
                <i class="fa fa-caret-down"></i>
            </div>
        </a>
        <ul class="dropdown-menu drop">
            <li>
                <a href="#" class="option" value="group" title="Com Agrupamento">
                    <b>Com Agrupamento</b><br/>
                    Marcadores próximos serão agrupados
                </a>
            </li>
            <li>
                <a href="#" class="option" value="normal" title="Sem Agrupamento">
                    <b>Sem Agrupamento</b><br/>
                    Pode levar muito tempo para processar<br/> devido a quantidade de marcadores
                </a>
            </li>
            <li>
                <a href="#" class="option" value="circle" title="Circulo Ponderado">
                    <b>Circulo Ponderado</b><br/>
                    Permite ver a concentração de caracterizações
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle flex-horizontal" data-toggle="dropdown">
            <div class="col flex-vertical vertical-center">
                <span><i class="fa fa-filter"></i>  Filtros</span>
            </div>
            <div class="col" style="margin-left: 10px;margin-top: 10px;">
                <i class="fa fa-caret-down"></i>
            </div>
        </a>
        <ul class="dropdown-menu" id="filters-config">
            <li class="dropdown-submenu filter-type" value="status">
                <a href="#" class="title-filter" count="0">
                    Status do Curso
                </a>
                <ul class="dropdown-menu">
                    <li class="no-close fixed">
                        <input id="status_all" class="select-all" checked value="ALL" type="checkbox"/>
                        <label href="#" for="status_all">
                            Selecionar Tudo
                        </label>
                    </li>
                    <hr/>
                    <li>
                        <ul class="overflow">
                            <li class="no-close">
                                <input class="filter-checkbox" id="status_an" checked value="AN" type="checkbox"/>
                                <label href="#" for="status_an">
                                    CADASTRO EM ANDAMENTO
                                </label>
                            </li>
                            <li class="no-close">
                                <input class="filter-checkbox" id="status_cc" checked value="CC" type="checkbox"/>
                                <label href="#" for="status_cc">
                                    CADASTRO CONCLUÍDO
                                </label>
                            </li>
                            <li class="no-close">
                                <input class="filter-checkbox" id="status_2p" checked value="2P" type="checkbox"/>
                                <label href="#" for="status_2p">
                                    CADASTRO DO PNERA 2
                                </label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
<!--            <li class="dropdown-submenu filter-type" value="vigencia">
                <a href="#" class="title-filter" count="0">
                    Vigência do Curso
                </a>
                <ul class="dropdown-menu">
                    <li class="no-close fixed">
                        <input id="status_all" class="select-all" checked value="ALL" type="checkbox"/>
                        <label href="#" for="status_all">
                            Selecionar Tudo
                        </label>
                    </li>
                    <hr/>
                    <li>
                        <ul class="overflow">
                            <li class="no-close">
                                <input class="filter-checkbox" id="vigencia_an" checked value="AN" type="checkbox"/>
                                <label href="#" for="vigencia_an">
                                    Dentro da Vigência
                                </label>
                            </li>
                            <li class="no-close">
                                <input class="filter-checkbox" id="vigencia_cc" checked value="CC" type="checkbox"/>
                                <label href="#" for="vigencia_cc">
                                    Fora da Vigência
                                </label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>-->
            <li class="dropdown-submenu filter-type" value="modalidade">
                <a href="#" class="title-filter" count="0">
                    Modalidade
                </a>
                <ul class="dropdown-menu"> 
                    <li class="no-close fixed">
                        <input id="modalidade_all" class="select-all" checked value="ALL" type="checkbox"/>
                        <label href="#" for="modalidade_all">
                            Selecionar Tudo
                        </label>
                    </li>
                    <hr/>
                    <li>
                        <ul class="overflow">
                            <?PHP foreach ($modalidades as $modalidade): ?>
                                <li class="no-close">
                                    <input class="filter-checkbox" id="modalidade_<?= $modalidade->id ?>" checked value="<?= $modalidade->id ?>" type="checkbox"/>
                                    <label href="#" for="modalidade_<?= $modalidade->id ?>">
                                        <?= $modalidade->nome ?>
                                    </label>
                                </li>
                            <?PHP endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown-submenu filter-type" value="superintendencia">
                <a href="#" class="title-filter" count="<?= (is_bool($srAtual) ? "0" : count($superintendencias)) ?>">
                    Superintendência
                </a>
                <ul class="dropdown-menu">
                    <li class="no-close fixed">
                        <input id="superintendencia_all" class="select-all" <?= (is_bool($srAtual) ? "checked" : "indeterminate") ?> value="ALL" type="checkbox"/>
                        <label href="#" for="superintendencia_all">
                            Selecionar Tudo
                        </label>
                    </li>
                    <hr/>
                    <li>
                        <ul class="overflow">
                            <?PHP foreach ($superintendencias as $sr): ?>
                                <li class="no-close">
                                    <input class="filter-checkbox" <?= (is_bool($srAtual) ? "checked" : ($srAtual == $sr->id ? "checked" : "")) ?> id="superintendencia_<?= $sr->id ?>" value="<?= $sr->id ?>" type="checkbox"/>
                                    <label href="#" for="superintendencia_<?= $sr->id ?>">
                                        <?= $sr->nome ?>
                                    </label>
                                </li>
                            <?PHP endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle flex-horizontal" data-toggle="dropdown">
            <div class="col flex-vertical vertical-center">
                <span><i class="fa fa-plus-circle"></i>  Relações</span>
            </div>
            <div class="col" style="margin-left: 10px;margin-top: 10px;">
                <i class="fa fa-caret-down"></i>
            </div>
        </a>
        <ul class="dropdown-menu drop">
            <li>
                <a href="#" id="relacao_sr_cursos_button" data-toggle="modal" data-target="#relacao_sr_cursos_modal">
                    <b>Cursos e Educandos</b><br/>
                    Visualize as informações das Superintendências do Incra</br>
                    E seus respectivos cursos
                </a>
            </li>
        </ul>
    </li>
</ul>
<script>
    (function () {

<?= (is_bool($srAtual) ? "" : "$('#superintendencia_all')[0].indeterminate = true;") ?>

        function initSelect(id) {
            var select = $("#" + id).eq(0);

            select.attr("value", select.find(".option").eq(0).attr("value"))
                    .attr("oldvalue", select.find(".option").eq(0).attr("value"));
            select.find(".subtitle").eq(0).text(select.find(".option").eq(0).attr("title"));
            select.find(".option").eq(0).parents("li").eq(0).addClass("active");
            //SELEÇÃO
            select.find(".option").click(function () {
                select.find("li").removeClass("active");
                select.find(".subtitle").eq(0).text($(this).attr("title"));
                $(this).parents("li").eq(0).addClass("active");
                select
                        .attr("oldvalue", select.attr("value"))
                        .attr("value", $(this).attr("value"))
                        .change();
            });
            //REVERTER SELEÇÃO
            select.on("revert", function () {
                var oldoption = select.find(".option[value='" + $(this).attr("oldvalue") + "']").eq(0);
                select.find("li").removeClass("active");
                select.find(".subtitle").eq(0).text(oldoption.attr("title"));
                oldoption.parents("li").eq(0).addClass("active");
                select.attr("value", select.attr("oldvalue"));
            });
        }

        initSelect("select-mapa");
        initSelect("modo-visualizacao");
        
        $(".no-close").click(function () {
            event.stopPropagation();
        });
        $(".divider").click(function () {
            event.stopPropagation();
        });
        
        function countNotSelected(checkboxes) {
            var count = 0;
            $(checkboxes).each(function (key, value) {
                if (!value.checked) {
                    count++;
                }
            });
            return count;
        }

        function checkAnySelected(checkboxes) {
            var check = false;
            $(checkboxes).each(function (key, value) {
                check = check || value.checked;
            });
            return check;
        }

        function checkboxEvent(checkboxes, selectall, event, select) {
            if (checkAnySelected(checkboxes)) {
                var count = countNotSelected(checkboxes);
                if (count === 0) { //todos selecionados
                    selectall[0].checked = true;
                    selectall[0].indeterminate = false;
                } else { //parcialmente selecionado
                    selectall[0].checked = false;
                    selectall[0].indeterminate = true;
                }
                select.find(".title-filter").attr("count", count);
                updateMap();
            } else {// somente 1 selecionado
                event.target.checked = true;
            }
        }

        function selectAllCheckboxes(value, list, selectall, select) {
            if (value) {
                selectall[0].indeterminate = false;
                $(list).each(function (key, value) {
                    value.checked = true;
                });
                select.find(".title-filter").attr("count", 0);
            } else {
                selectall[0].indeterminate = true;
                var first = true;
                var count = -1;
                $(list).each(function (key, value) {
                    count++;
                    if (value.checked && first) {
                        first = false;
                    } else {
                        value.checked = false;
                    }
                });
                select.find(".title-filter").attr("count", count);
            }
            updateMap();
        }

        $(".filter-type").each(function (key, value) {
            var selectall = $(this).find(".select-all");
            var checkboxes = $(this).find(".filter-checkbox");
            var select = $(this);
            $(checkboxes).click(function () {
                checkboxEvent(checkboxes, selectall, event, select);
            });
            selectall.click(function () {
                selectAllCheckboxes(selectall[0].checked, checkboxes, selectall, select);
            });

        });


        window.getFilter = function () {
            var data = {
                "status": [],
                "modalidade": {"ids": [], "nil": false},
                "sr": []
            };
            var parent = $("#filters-config");
            parent.find(".filter-type[value='status'] input.filter-checkbox:checked").each(function () {
                data.status.push(this.value);
            });
            parent.find(".filter-type[value='modalidade'] input.filter-checkbox:checked").each(function () {
                if (this.value !== "NULL") {
                    data.modalidade.ids.push(this.value);
                } else {
                    data.modalidade.nil = true;
                }
            });
            parent.find(".filter-type[value='superintendencia'] input.filter-checkbox:checked").each(function () {
                data.sr.push(this.value);
            });
            return data;
        };

    })();
</script>