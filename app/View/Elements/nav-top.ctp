
<?php if($current_user['profile'] !='admin'):?>

<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="<?= $_URL ;?>publicidades" class="brand">
		
											<small>
					<!--<img src="/img/logo.png" class="logo"/> -->
					No-Cambuí
				</small>
		
			</a><!--/.brand-->

			<ul class="nav ace-nav pull-right">
				<li class="red user-profile">
					<a data-toggle="dropdown" href="<?= $_URL ;?>#" class="user-menu dropdown-toggle">
						<img class="nav-user-photo" src="/themes/images/user.png" alt="Jason's Photo" />
						<span id="user_info">
							<small>Olá,</small>
							<?= $current_user['username']?>
						</span>

						<i class="icon-caret-down"></i>
					</a>

					<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">							
						<li>
							<a href="<?= $_URL ;?>users/edit">
								<i class="icon-cog"></i>
								Editar minha senha
							</a>
						</li>

						<li>
							<a href="<?= $_URL ;?>users/logout">
								<i class="icon-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul><!--/.w8-nav-->
		</div><!--/.container-fluid-->
	</div><!--/.navbar-inner-->
</div>
<?php else: ?>

<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="<?= $_URL ;?>#" class="brand">
		
											<small>
					<!--<img src="/img/logo.png" class="logo"/> -->
					No-Cambuí
				</small>
		
			</a><!--/.brand-->

			<ul class="nav ace-nav pull-right">
				
				


				<li class="grey">
					<a data-toggle="dropdown" class="dropdown-toggle" href="<?= $_URL ;?>#">
						<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
						<span class="badge badge-grey">	<?= count($contatosNaoLidos)?></span>
					</a>

					<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
						<li class="nav-header">
							<i class="icon-envelope"></i>
							<?= count($contatosNaoLidos)?> Mensagens não lidas
						</li>
						<?php foreach($contatosNaoLidos as $contatosNaoLido): ?>
							<li>
								<a href="<?= $_URL ;?>mensagems/view/<?= $contatosNaoLido['Mensagem']['id'] ?>">
									<img src="/img/img-padrao-foto.png" class="msg-photo" alt="Alex's Avatar" />
									<span class="msg-body">
										<span class="msg-title">
											<span class="blue"><?= $contatosNaoLido['Mensagem']['nome'] ?>:</span>
											<?= $this->Caracter->_getLimit($contatosNaoLido['Mensagem']['texto'],50) ?>
										</span>

										<span class="msg-time">
											<i class="icon-time"></i>
											<span><?= $this->Data->intervalo($contatosNaoLido['Mensagem']['created']) ?></span>
										</span>
									</span>
								</a>
							</li>
						<?php endforeach; ?>								
						<li>
							<a href="<?= $_URL ;?>/mensagems">
								Ver todas as mensgens
								<i class="icon-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<li class="red user-profile">
					<a data-toggle="dropdown" href="<?= $_URL ;?>#" class="user-menu dropdown-toggle">
						<img class="nav-user-photo" src="/themes/images/user.png" alt="Jason's Photo" />
						<span id="user_info">
							<small>Olá,</small>
							<?= $current_user['username']?>
						</span>

						<i class="icon-caret-down"></i>
					</a>

					<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
						<li>
							<a href="<?= $_URL ;?>users">
								<i class="icon-user"></i>
								Administrar usuários
							</a>
						</li>								
						<li>
							<a href="<?= $_URL ;?>users/edit">
								<i class="icon-cog"></i>
								Editar minha senha
							</a>
						</li>

						<li>
							<a href="<?= $_URL ;?>users/logout">
								<i class="icon-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul><!--/.w8-nav-->
		</div><!--/.container-fluid-->
	</div><!--/.navbar-inner-->
</div>	
<?php endif; ?>