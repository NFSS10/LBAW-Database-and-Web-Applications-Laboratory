<?php
	include('templates/header.php');
?>
	<div class="big-container">
		<div class="container">
			<p class="thumbnail_header"> <h2>Contacta-nos</h2> </p>
			<hr class="half-rule-contact"/>
			<div class="row">
				<div class="col-md-8">
					<div class="well well-sm">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">
											Nome</label>
										<input type="text" class="form-control" id="name" placeholder="Introduz o teu nome" required="required" />
									</div>
									<div class="form-group">
										<label for="email">
											Email </label>
										<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
									</span>
											<input type="email" class="form-control" id="email" placeholder="Introduz o teu email" required="required" /></div>
									</div>
									<div class="form-group">
										<label for="subject">
											Motivo</label>
										<select id="subject" name="subject" class="form-control" required="required">
											<option value="na" selected="">Escolhe um:</option>
											<option value="service">Problemas/Bugs no site</option>
											<option value="suggestions">Sugestões</option>
											<option value="product">Suporte</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">
											Mensagem</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
												  placeholder="Escreve uma mensagem"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
										Enviar Mensagem</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<form>
						<legend><span class="glyphicon glyphicon-globe"></span> Localização</legend>
						<address>
							<strong>ForBid, Inc.</strong><br>
							Rua Dr. Roberto Frias<br>
							4200-465 PORTO<br>
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							+353 931 832 396
						</address>
						<address>
							<strong>ForBid Company</strong><br>
							<a href="mailto:info@forbid.com">info@forbid.com</a>
						</address>
					</form>
				</div>
			</div>
		</div>
	</div>


<?php
	include('templates/footer.php');
?>