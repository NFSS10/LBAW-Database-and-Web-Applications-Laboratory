{include file='common/header.tpl' title="Mensagens privadas"}
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="editarPerfil_header">
				<h2>Mensagens</h2> </p>
				<hr class="half-rule-mensagens"/>
			</div>
		</div>
	<hr />

	<div class="row">
		<div class="tabbable-panel">
			<div class="tabbable-line">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a href="#tab_default_1" data-toggle="tab">
							Recebidas</a>
					</li>
					<li>
						<a href="#tab_default_2" data-toggle="tab">
							Enviadas</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_default_1">

						<div class="col">
							<div class="tab-content">
								<div class="tab-pane fade in active" id="home">
									<div class="list-group recebidas">
                                        {foreach $msgRecebidas as $key => $value}
										<a title="{$value.idmp}" href="#msg{$value.idmp}" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
											<span class="name" style="min-width: 120px; display: inline-block; {if $value.visualizada !== true}
													font-weight: bold;
                                            {/if}">{$value.username}</span>
											<span class="title" style="
                                            {if $value.visualizada !== true}
													font-weight: bold;
                                            {/if}
													">{$value.titulo}</span>
											<span class="text-muted" style="font-size: 11px;">{$value.extrato}</span>
											<span class="espaco" style="min-width: 170px; display: inline-block;">   </span>
											<span class="data" style="{if $value.visualizada !== true}
													font-weight: bold;
                                            {/if}">{$value.data}</span>
											<div class="collapse" id="msg{$value.idmp}">
												<p>{$value.mensagem}</p>
											</div>
										</a>
                                            {/foreach}
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane" id="tab_default_2">

						<div class="col">
							<div class="tab-content">
								<div class="tab-pane fade in active" id="home2">
									<div class="list-group enviadas">
										{foreach $msgEnviadas as $key => $value}
										<a title="{$value.idmp}" href="#msg{$value.idmp}" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
											<span class="name" style="min-width: 120px; display: inline-block;  font-weight: bold;">{$value.username}</span>
											<span class="title" style="font-weight: bold;">{$value.titulo}</span>
											<span class="text-muted" style="font-size: 11px;">{$value.extrato}</span>
											<span class="espaco" style="min-width: 170px; display: inline-block;">   </span>
											<span class="data" style="font-weight: bold;">{$value.data}</span>
											<div class="collapse" id="msg{$value.idmp}">
												<p>{$value.mensagem}</p>
											</div>
											{/foreach}
										</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="{$BASE_URL}javascript/list_messages.js"></script>
{include file='common/footer.tpl'}