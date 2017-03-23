<?php 
	$xls = 'xls';
	$pdf = 'pdf';
?>
<form>
    <fieldset>
    	<legend><h3>Relat&oacute;rios Gerais</h3></legend>
    	<ul class="li-rel">
    		<!--<li>
		    	<h4>Informa&ccedil;&otilde;es da Pesquisa</h4>
		    	<ul>
		    		<li class="li-rel"><a href="relatorio/geral_pnera2/andamento_cursos.php">Andamento dos cursos por superintend&ecirc;ncia <b>(total nacional)</b></a></li>
		    		<li class="li-rel"><a href="relatorio/geral_pnera2/formularios_superintendencia.php">Situa&ccedil;&atilde;o de preenchimento dos formul&aacute;rios por superintend&ecirc;ncia <b>(total nacional)</b></a></li>
		    		<li class="li-rel"><a href="relatorio/geral_pnera2/formularios_modalidade.php">Situa&ccedil;&atilde;o de preenchimento dos formul&aacute;rios por modalidade <b>(total nacional)</b></a></li>
		    	</ul>
		    </li>

			</br>-->

    		<li>
		    	<h4>Cursos</h4>
		    	<ul>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/municipios_curso_modalidade/1'); ?>">XLS</a>  
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/municipios_curso_modalidade/2'); ?>">PDF</a>
		    			Munic&iacute;pios de realiza&ccedil;&atilde;o dos cursos por modalidade <b>(nominal)</b> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/municipios_curso/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/municipios_curso/2'); ?>">PDF</a>
		    		Munic&iacute;pios de realiza&ccedil;&atilde;o dos cursos <b>(total nacional)</b> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_modalidade/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_modalidade/2'); ?>">PDF</a>
		    		Cursos por modalidade <b>(total nacional)</b> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_nivel/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_nivel/2'); ?>">PDF</a> 
		    		Cursos por n&iacute;vel <b>(total nacional)</b> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_nivel_superintendencia/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_nivel_superintendencia/2'); ?>">PDF</a> 
		    		Cursos por n&iacute;vel e superintend&ecirc;ncia <b>(total nacional)</b> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_superintendencia/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/cursos_superintendencia/2'); ?>">PDF</a> 
		    		Cursos por superintend&ecirc;ncia <b>(total nacional)</b></a> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_modalidade/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_modalidade/2'); ?>">PDF</a> 
		    		Alunos ingressantes por modalidade <b>(total nacional)</b></a> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_nivel/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_nivel/2'); ?>">PDF</a> 
		    		Alunos ingressantes por n&iacute;vel <b>(total nacional)</b></a> 
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_superintendencia/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_superintendencia/2'); ?>">PDF</a> 
		    		Alunos ingressantes por superintend&ecirc;ncia <b>(total nacional)</b>
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_nivel_sr/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_ingressantes_nivel_sr/2'); ?>">PDF</a> 
		    			Alunos ingressantes por n&iacute;vel e superintend&ecirc;ncia <b>(total nacional)</b>
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_modalidade/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_modalidade/2'); ?>">PDF</a> 
		    			Alunos concluintes por modalidade <b>(total nacional)</b>
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_nivel/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_nivel/2'); ?>">PDF</a> 
		    			Alunos concluintes por n&iacute;vel <b>(total nacional)</b>
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_superintendencia/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_superintendencia/2'); ?>">PDF</a> 
		    			Alunos concluintes por superintend&ecirc;ncia <b>(total nacional)</b>
		    		</li>
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_nivel_sr/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/alunos_concluintes_nivel_sr/2'); ?>">PDF</a> 
		    			Alunos concluintes por n&iacute;vel e superintend&ecirc;ncia <b>(total nacional)</b>
		    		</li>
		    		<!--<li class="li-rel">
		    			<a href="<?php //echo site_url('relatorio_geral_pnera2/informacoes_relevantes'); ?>"><i>Informa&ccedil;&otilde;es Relevantes:
		    				<ul class="listNone">
		    					<li>Pocentagem (%) da titula&ccedil;&atilde;o dos coordenadores <b>(total nacional)</b></li>
		    					<li>Dura&ccedil;&atilde;o m&eacute;dia dos cursos em anos <b>(total nacional)</b></li>
		    					<li>N&uacute;mero de bolsistas que se envolveram nos cursos <b>(total nacional)</b></li>
		    				</ul></i>
		    			</a>
		    		</li>-->
		    		<br>
		    		<li class="li-rel">
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/lista_cursos_modalidade/1'); ?>">XLS</a> 
		    			<a class="btn btn-success" style="color: black;" href="<?php echo site_url('relatorio_geral_pnera2/lista_cursos_modalidade/2'); ?>">PDF</a> 
		    			Lista de cursos por modalidade <b>(nominal)</b>
		    		</li>
		    	</ul>
		    </li>

			</br>

		    <li>
		    	<h4>Professores/Educadores</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/titulacao_educadores'); ?>">Escolaridade/titula&ccedil;&atilde;o dos educadores (%) <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/titulacao_educadores_superintendencia'); ?>">Escolaridade/titula&ccedil;&atilde;o dos educadores (%) por superintend&ecirc;ncia <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/educadores_nivel'); ?>">Educadores por n&iacute;vel <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/educadores_curso'); ?>">Educadores por curso <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/educadores_superintendencia'); ?>">Educadores por superintend&ecirc;ncia <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/genero_educadores_modalidade'); ?>">Participa&ccedil;&atilde;o (%) de homens e mulheres como educadores dos cursos por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>

		    </br>

		    <li>
		    	<h4>Educandos</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/educandos_superintendencia'); ?>">Educandos por superintend&ecirc;ncia <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/municipio_origem_educandos'); ?>">Munic&iacute;pio de origem dos educandos <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/territorio_educandos_modalidade'); ?>">Territ&oacute;rio de origem dos educandos por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/territorio_educandos_superintendencia'); ?>">Territ&oacute;rio de origem dos educandos por superintend&ecirc;ncia <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/idade_educandos_modalidade'); ?>">Idade m&eacute;dia dos educandos por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/genero_educandos_modalidade'); ?>">Participa&ccedil;&atilde;o (%) de homens e mulheres como educandos nos cursos por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/educandos_assentamento_modalidade'); ?>">Educandos por assentamento e modalidade de curso <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/educandos_assentamento_nivel'); ?>">Educandos por assentamento e n&iacute;vel de curso <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/lista_educandos_cursos_sr'); ?>">Educandos, superintendência e curso <b>(nominal)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>

			</br>

			<li>
		    	<h4>Institui&ccedil;&otilde;es de Ensino</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/localizacao_instituicoes_ensino'); ?>">Localiza&ccedil;&atilde;o das institui&ccedil;&otilde;es de ensino <b>(por munic&iacute;pios)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/instituicoes_ensino_modalidade'); ?>">Institui&ccedil;&otilde;es de ensino que realizaram cursos por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/instituicoes_ensino_nivel'); ?>">Institui&ccedil;&otilde;es de ensino que realizaram cursos por n&iacute;vel <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/instituicoes_ensino_superintendencia'); ?>">Institui&ccedil;&otilde;es de ensino que realizaram cursos por superintend&ecirc;ncia <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/instituicoes_ensino_municipio'); ?>">Institui&ccedil;&otilde;es de ensino que realizaram cursos por munic&iacute;pios <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/instituicoes_ensino_estado'); ?>">Institui&ccedil;&otilde;es de ensino que realizaram cursos por estados <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/cursos_natureza_inst_ensino'); ?>">Natureza das institui&ccedil;&otilde;es de ensino e n&uacute;mero de cursos realizados <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/instituicao_ensino_cursos'); ?>">Lista das institui&ccedil;&otilde;es de ensino e n&uacute;mero de cursos realizados <b>(nominal)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>

		    </br>

			<li>
		    	<h4>Organiza&ccedil;&otilde;es Demandantes</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php //echo site_url('relatorio_geral_pnera2/principais_organizacoes'); ?>"><i>Seis principais organiza&ccedil;&otilde;es demandantes e respectivos cursos <b>(nacional - por munic&iacute;pios)</b></i></a> <a disabled class="btn btn-success" style="color: black;" href="">XLS</a> <a disabled class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/organizacoes_demandantes_modalidade'); ?>">Organiza&ccedil;&otilde;es demandantes por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/membros_org_demandantes_modalidade'); ?>">Porcentagem (%) dos membros das organiza&ccedil;&otilde;es demandantes participantes de cursos do PRONERA por modalidade <b>
		    			</br>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/organizacao_demandante_cursos'); ?>">Lista das organiza&ccedil;&otilde;es demandantes e n&uacute;mero de cursos demandados <b>(nominal)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>

		    </br>

			<li>
		    	<h4>Parceiros</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/localizacao_parceiros'); ?>">Localiza&ccedil;&atilde;o dos parceiros <b>(por munic&iacute;pios)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/parceiros_modalidade'); ?>">Parceiros por modalidade <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/parceiros_superintendencia'); ?>">Parceiros por superintend&ecirc;ncia <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/parceiros_natureza'); ?>">Parceiros por natureza da parceria <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/lista_parceiros'); ?>">Lista dos parceiros <b>(nominal)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>

		    </br>

			<li>
		    	<h4>Produ&ccedil;&otilde;es Bibliogr&aacute;ficas do PRONERA</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/producoes_estado'); ?>">Produ&ccedil;&otilde;es por tipo de produ&ccedil;&atilde;o <b>(por estados)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/producoes_superintendencia'); ?>">Produ&ccedil;&otilde;es por tipo de produ&ccedil;&atilde;o <b>(por superintend&ecirc;ncias)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/producoes_tipo'); ?>">Produ&ccedil;&otilde;es por tipo de produ&ccedil;&atilde;o <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>

		    </br>

			<li>
		    	<h4>Produ&ccedil;&otilde;es Bibliogr&aacute;ficas sobre o PRONERA</h4>
		    	<ul>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/pesquisa_estado'); ?>">Produ&ccedil;&otilde;es por tipo de produ&ccedil;&atilde;o <b>(por estados)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/pesquisa_superintendencia'); ?>">Produ&ccedil;&otilde;es por tipo de produ&ccedil;&atilde;o <b>(por superintend&ecirc;ncias)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    		<br>
		    		<li class="li-rel"><a href="<?php echo site_url('relatorio_geral_pnera2/pesquisa_tipo'); ?>">Produ&ccedil;&otilde;es por tipo de produ&ccedil;&atilde;o <b>(total nacional)</b></a> <a class="btn btn-success" style="color: black;" href="">XLS</a> <a class="btn btn-success" style="color: black;" href="">PDF</a> </li>
		    	</ul>
		    </li>
		</ul>
	</fieldset>
</form>
