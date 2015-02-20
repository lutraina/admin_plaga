<?php if($current_user['profile'] !='admin'):?>
<!-- Menu do cliente apenas para ver publicidade -->

<div id="sidebar">
	<ul class="nav nav-list">
		<li class="<?php isset($activeIndex) ? $activeIndex: ''?>">
			<a href="/">
				<i class="icon-home"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="<?= isset($activeschedule) ? $activeschedule : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-calendar"></i>
				<span>Agenda</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>schedules">
						<i class="icon-double-angle-right"></i>
						Ver Agenda
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>categories/index/schedule">
						<i class="icon-double-angle-right"></i>
						Categorias de Agenda
					</a>
				</li>
			</ul>
		</li>		
		<li class="<?= isset($activenews) ? $activenews : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-comment"></i>
				<span>Notícias / Post</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>news">
						<i class="icon-double-angle-right"></i>
						Ver Notícias
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>categories/index/news">
						<i class="icon-double-angle-right"></i>
						Categorias de Notícia
					</a>
				</li>

			</ul>
		</li>
		<li class="<?= isset($activeclassificados) ? $activeclassificados : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-bullhorn"></i>
				<span>Classificados</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>autos">
						<i class="icon-double-angle-right"></i>
						Autos
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>imoveis">
						<i class="icon-double-angle-right"></i>
						Imóveis
					</a>
				</li>

			</ul>
		</li>					
		<li class="<?= isset($activebusinesses) ? $activebusinesses : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-briefcase"></i>
				<span>Estabelecimentos</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>businesses">
						<i class="icon-double-angle-right"></i>
						Ver estabelecimentos
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>categories/index/businesses">
						<i class="icon-double-angle-right"></i>
						Cat. de estabelecimentos
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>reviews">
						<i class="icon-double-angle-right"></i>
						Avaliacoes & Comentários
					</a>
				</li>
			</ul>
		</li>		
		<li class="<?= isset($activeadvantages) ? $activeadvantages : ''?>">
			<a href="<?= $_URL ;?>advantages">
				<i class="icon-gift"></i>
				<span>Vantagens</span>
			</a>
		</li>		
		<li class="<?= isset($actigalleries) ? $actigalleries : ''?>">
			<a href="<?= $_URL ;?>galerias">
				<i class="icon-camera"></i>
				<span>Galerias de fotos</span>
			</a>
		</li>		
		<li class="<?= isset($activeslides) ? $activeslides : ''?>">
			<a href="<?= $_URL ;?>slides">
				<i class="icon-th-large"></i>
				<span>Slide Show</span>
			</a>
		</li>			
		<li class="<?= isset($activenetworks) ? $activenetworks : ''?>">
			<a href="<?= $_URL ;?>networks">
				<i class="icon-globe"></i>
				<span>Redes Sociais</span>
			</a>
		</li>
		<li class="<?= isset($activebanners) ? $activebanners : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-screenshot"></i>
				<span>Publicidade</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>banners">
						<i class="icon-double-angle-right"></i>
						Ver banners
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>banners/posicao">
						<i class="icon-double-angle-right"></i>
						Posição dos banners
					</a>
				</li>

			</ul>
		</li>			
		<li class="<?= isset($activenewsletter) ? $activenewsletter : ''?>">
			<a href="<?= $_URL ;?>newsletters">
				<i class="icon-envelope-alt"></i>
				<span>Newsletter</span>
			</a>
		</li>	
		<li class="<?= isset($activeUsuario) ? $activeUsuario : ''?>">
			<a href="<?= $_URL ;?>users/user_cadastro">
				<i class="icon-user"></i>
				<span>Usuários</span>
			</a>
		</li>			
		<li class="<?= isset($activeinstitucional) ? $activeinstitucional : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-pencil"></i>
				<span>Institucional</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li class="<?= isset($activesobres) ? $activesobres : ''?>">
					<a href="<?= $_URL ;?>sobres">
						<i class="icon-double-angle-right"></i>
						Quem somos
					</a>
				</li>
				<li class="<?= isset($activeanuncios) ? $activeanuncios : ''?>">
					<a href="<?= $_URL ;?>anuncios">
						<i class="icon-double-angle-right"></i>
						Anuncie conosco
					</a>
				</li>

			</ul>
		</li>					
		<li class="<?= isset($activeContato) ? $activeContato : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-envelope-alt"></i>
				<span>Contatos</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li class="<?= isset($activeContatoI) ? $activeContatoI : ''?>">
					<a href="<?= $_URL ;?>mensagems">
						<i class="icon-double-angle-right"></i>
						Ver Contatos
					</a>
				</li>
				<li class="<?= isset($activeContatoII) ? $activeContatoII : ''?>">
					<a href="<?= $_URL ;?>mensagems/configurar">
						<i class="icon-double-angle-right"></i>
						Configurar contato
					</a>
				</li>

			</ul>
		</li>		
	</ul><!--/.nav-list-->
	<div id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>
</div>
<?php else: ?>
	
<!-- Menu principal -->
<div id="sidebar">
	<div id="sidebar-shortcuts">
		<div id="sidebar-shortcuts-large">
			<a href="<?= $_URL ;?>schedules" class="btn btn-small btn-success">
		
				<i class="icon-calendar"></i>
			</a>
			<a href="<?= $_URL ;?>sobres" class="btn btn-small btn-info">
				<i class="icon-pencil"></i>
			</a>
			<a href="<?= $_URL ;?>businesses" class="btn btn-small btn-warning">
				<i class="icon-briefcase"></i>
			</a>
			<a href="<?= $_URL ;?>users/edit" class="btn btn-small btn-danger">
				<i class="icon-cogs"></i>
			</a>
		</div>
		<div id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!--#sidebar-shortcuts-->
	<ul class="nav nav-list">
		<li class="<?= isset($activeIndex) ? $activeIndex: ''?>">
			<a href="/">
				<i class="icon-home"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="<?= isset($activeschedule) ? $activeschedule : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-calendar"></i>
				<span>Agenda</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>schedules">
						<i class="icon-double-angle-right"></i>
						Ver Agenda
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>categories/index/schedule">
						<i class="icon-double-angle-right"></i>
						Categorias de Agenda
					</a>
				</li>
			</ul>
		</li>		
		<li class="<?= isset($activenews) ? $activenews : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-comment"></i>
				<span>Notícias / Post</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>news">
						<i class="icon-double-angle-right"></i>
						Ver Notícias
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>categories/index/news">
						<i class="icon-double-angle-right"></i>
						Categorias de Notícia
					</a>
				</li>

			</ul>
		</li>
		<li class="<?= isset($activeclassificados) ? $activeclassificados : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-bullhorn"></i>
				<span>Classificados</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>autos">
						<i class="icon-double-angle-right"></i>
						Autos
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>imoveis">
						<i class="icon-double-angle-right"></i>
						Imóveis
					</a>
				</li>

			</ul>
		</li>					
		<li class="<?= isset($activebusinesses) ? $activebusinesses : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-briefcase"></i>
				<span>Estabelecimentos</span>

				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
					<a href="<?php echo $_URL ;?>businesses">
						<i class="icon-double-angle-right"></i>
						Ver estabelecimentos
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>categories/index/businesses">
						<i class="icon-double-angle-right"></i>
						Cat. de estabelecimentos
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>reviews">
						<i class="icon-double-angle-right"></i>
						Avaliacoes & Comentários
					</a>
				</li>
			</ul>
		</li>		
		<li class="<?= isset($activeadvantages) ? $activeadvantages : ''?>">
			<a href="<?= $_URL ;?>advantages">
				<i class="icon-gift"></i>
				<span>Vantagens</span>
			</a>
		</li>		
		<li class="<?= isset($actigalleries) ? $actigalleries : ''?>">
			<a href="<?= $_URL ;?>galerias">
				<i class="icon-camera"></i>
				<span>Galerias de fotos</span>
			</a>
		</li>		
		<li class="<?= isset($activeslides) ? $activeslides : ''?>">
			<a href="<?= $_URL ;?>slides">
				<i class="icon-th-large"></i>
				<span>Slide Show</span>
			</a>
		</li>			
		<li class="<?= isset($activenetworks) ? $activenetworks : ''?>">
			<a href="<?= $_URL ;?>networks">
				<i class="icon-globe"></i>
				<span>Redes Sociais</span>
			</a>
		</li>
		<li class="<?= isset($activebanners) ? $activebanners : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-screenshot"></i>
				<span>Publicidade</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li>
					<a href="<?= $_URL ;?>banners">
						<i class="icon-double-angle-right"></i>
						Ver banners
					</a>
				</li>
				<li>
					<a href="<?= $_URL ;?>banners/posicao">
						<i class="icon-double-angle-right"></i>
						Posição dos banners
					</a>
				</li>

			</ul>
		</li>			
		<li class="<?= isset($activenewsletter) ? $activenewsletter : ''?>">
			<a href="<?= $_URL ;?>newsletters">
				<i class="icon-envelope-alt"></i>
				<span>Newsletter</span>
			</a>
		</li>	
		<li class="<?= isset($activeUsuario) ? $activeUsuario : ''?>">
			<a href="<?= $_URL ;?>users/user_cadastro">
				<i class="icon-user"></i>
				<span>Usuários</span>
			</a>
		</li>			
		<li class="<?= isset($activeinstitucional) ? $activeinstitucional : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-pencil"></i>
				<span>Institucional</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li class="<?= isset($activesobres) ? $activesobres : ''?>">
					<a href="<?= $_URL ;?>sobres">
						<i class="icon-double-angle-right"></i>
						Quem somos
					</a>
				</li>
				<li class="<?= isset($activeanuncios) ? $activeanuncios : ''?>">
					<a href="<?= $_URL ;?>anuncios">
						<i class="icon-double-angle-right"></i>
						Anuncie conosco
					</a>
				</li>

			</ul>
		</li>					
		<li class="<?= isset($activeContato) ? $activeContato : ''?>">
			<a href="#" class="dropdown-toggle">
				<i class="icon-envelope-alt"></i>
				<span>Contatos</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li class="<?= isset($activeContatoI) ? $activeContatoI : ''?>">
					<a href="<?= $_URL ;?>mensagems">
						<i class="icon-double-angle-right"></i>
						Ver Contatos
					</a>
				</li>
				<li class="<?= isset($activeContatoII) ? $activeContatoII : ''?>">
					<a href="<?= $_URL ;?>mensagems/configurar">
						<i class="icon-double-angle-right"></i>
						Configurar contato
					</a>
				</li>

			</ul>
		</li>		
	</ul><!--/.nav-list-->
	<div id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>
</div>
<?php endif; ?>