{include file='common/header.tpl' title="Contacto"}
<div class="big-container">
    <div class="container">
        <p class="thumbnail_header"> <h2>Contacta-nos</h2> </p>
        <hr class="half-rule-contact"/>
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form action="{$BASE_URL}actions/users/contact.php" method="post" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nome</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                            {if $FORM_VALUES.name != null}
                                           value="{$FORM_VALUES.name}"
                                            {else}
                                                {if $nome != null}
                                                    value="{$nome}"
                                                {else}
                                                    placeholder="Introduz o teu nome"
                                                {/if}
                                            {/if}
                                            required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email </label>
                                    <div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
									</span>

                                        <input type="email" name="email" class="form-control" id="email"
                                               {if $FORM_VALUES.email != null}
                                                   value="{$FORM_VALUES.email}"
                                               {else}
                                                    {if $email != null}
                                                   value="{$email}"
                                                   {else}
                                                        placeholder="Introduz o teu email"
                                                    {/if}
                                               {/if}
                                               required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Motivo</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        {if $FORM_VALUES.subject != null}
                                            <option value="na">Escolhe um:</option>
                                        {else}
                                            <option value="na" selected="">Escolhe um:</option>
                                        {/if}
                                        {if $FORM_VALUES.subject == "Problema num leilão"}
                                            <option value="Problema num leilão" selected="">Problema num leilão</option>
                                        {else}
                                            <option value="Problema num leilão">Problema num leilão</option>
                                        {/if}
                                        {if $FORM_VALUES.subject == "Problemas/Bugs no site"}
                                            <option value="Problemas/Bugs no site" selected="">Problemas/Bugs no site</option>
                                        {else}
                                            <option value="Problemas/Bugs no site">Problemas/Bugs no site</option>
                                        {/if}
                                        {if $FORM_VALUES.subject == "Sugestões"}
                                            <option value="Sugestões" selected="">Sugestões</option>
                                        {else}
                                            <option value="Sugestões">Sugestões</option>
                                        {/if}
                                        {if $FORM_VALUES.subject == "Outro suporte"}
                                            <option value="Outro suporte" selected="">Outro suporte</option>
                                        {else}
                                            <option value="Outro suporte">Outro suporte</option>
                                        {/if}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Mensagem</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Escreve uma mensagem">{$FORM_VALUES.message}</textarea>
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
{include file='common/footer.tpl'}