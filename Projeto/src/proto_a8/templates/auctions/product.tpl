{include file='common/header.tpl' title=$auctInfoContainer['Titulo']}
<div class="card col-md-offset-2">
    <div class="row">
        <div class="col-sm-4">
            <div id="pp_carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="indicators">
                    <li data-target="#pp_carousel" data-slide-to="0" class="active"></li>
                    {foreach array_slice($Fotos, 1) as $key=>$value}
                        <li data-target="#pp_carousel" data-slide-to="{$key}"></li>
                    {/foreach}

                </ol>
                <div class="carousel-inner" role="listbox" id="carousel_product">

                    <div class="item active">
                        <img class="img-responsive" src="{$BASE_URL}{$Fotos[0].imagepath}" alt="Name1">
                    </div>

                    {foreach array_slice($Fotos, 1) as $Foto}
                        <div class="item">
                            <img class="img-responsive" src="{$BASE_URL}{$Foto.imagepath}" alt="Name1">
                        </div>
                    {/foreach}
                </div>

                <a class="left carousel-control" href="#pp_carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#pp_carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="time_left">
                <h5 class="title-price">
                    <small>Tempo Restante</small>
                </h5>
                <div class="progress">
                    <div
                            class="progress-bar progress-bar-warning progress-bar-striped active text-center"
                            role="progressbar"
                            aria-valuemin="0" aria-valuemax="100"
                            id="ca">
                        <strong><span id="timeText"></span></strong>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-4" style="border:0px solid gray" id="product_page_title">
            <h3>{$auctInfoContainer['Titulo']} </h3>

            <h5 id="sell_by">vendido por <a href="{$BASE_URL}pages/users/viewProfile.php?id={$SellerID}">{$auctInfoContainer['NomeVendedor']}</a></h5>
            <h5 class="title-price">
                <small>Licitação Atual</small>
            </h5>
            <h3 id="bid_value_p" >{$ValorAtual} &euro;</h3>

            {if !$eOVendedor && $USERNAME && !$ADMIN && !$Finished}
            <div class="pp_buttons">
                <form method="post" action="{$BASE_URL}actions/auctions/bid.php">
                    <div class="input-group">
                        <div class="input-group">
                            <div class="input-group-addon">€</div>
                            <input id="product_page_bid" name="valor_licitacao" type="number" class="form-control" value="{$auctInfoContainer['ValorAtual']}" min="{$auctInfoContainer['ValorAtual']}"
                                   step="1" data-number-to-fixed="2"
                                   data-number-stepfactor="100"/>
                            <input type="hidden" name="id_leilao" value="{$auction_id}"/>
                            <span class="input-group-btn">
								<button class="btn btn-info" type="submit">Licitar</button>
							</span>
                        </div>
                        {if $UserLoggedIn == 'true' && $eVendedor !== 'true' && !$ADMIN}
                        {if $isOnWL != 'true'}
                        <a href="{$BASE_URL}actions/auctions/add_to_wishlist.php?id={$auction_id}" class="btn btn-primary btn-danger" id="wish_button"><span
                                    class="glyphicon glyphicon-star"></span>
                            Favoritos</a>
                        {else}
                            <a href="{$BASE_URL}actions/auctions/add_to_wishlist.php?id={$auction_id}" class="btn btn-primary btn-danger disabled" id="wish_button"><span
                                        class="glyphicon glyphicon-star"></span>
                                Favoritos</a>
                        {/if}
                        {/if}
                    </div>
                </form>
            </div>
            {/if}

        </div>

        <div class="col-sm-9">
            <ul class="menu-items">
                <li class="active">Detalhes do producto</li>
            </ul>
            <div id="details_d_des">
                <p id="p_d_p">
                    <small id="product_description">
                        {$auctInfoContainer['Descricao']}
                    </small>
                </p>
            </div>
        </div>
    </div>
    <a id="questions" onclick="$('#target').toggle();" class="btn btn-primary btn-info"><span
                class="glyphicon glyphicon-question-sign"></span> Questões</a>

    {if $Finished == 1 && $NoBids == 0 && (($eOVendedor === 'true' && $sellerFeedback == 0)  || ($Comprador == true && $clientFeedback == 0))}
    <a onclick="$('#sell_rev').toggle();$('#target').hide();" id="feedback" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span> Feedback</a>

    <div id="sell_rev" class="seller_review">
        <label>Comentário (Opcional): </label><br>
        <textarea id="comment_feedback" class="text" cols="80" rows="8" maxlength="500"
                  name="comment" form="feedback_form"></textarea>
        <form method="post" action="{$BASE_URL}actions/users/addFeedback.php" id="feedback_form"  class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="idleilao" value="{$auction_id}"/>
            <input type="hidden" name="comprador" value="{$buyer_id}"/>
            <label>Rating: <small id="req_field"> (Obrigatório) </small> </label><br>
            <div class="rate">
                <input class="star star-5" id="star-5" type="radio" name="score" value="5" required/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="score" value="4"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="score" value="3"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="score" value="2"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="score" value="1"/>
                <label class="star star-1" for="star-1"></label>
            </div>
            <br>
            <button class="btn btn-primary btn-success" type="submit" name="feedback_submit"><span class="glyphicon glyphicon-arrow-up"></span> Enviar</button>
        </form>
    </div>
    {/if}



    <div id="target">
        <div class="qp_container">
            <div class="container col-sm-10" id="qp_container_sec">
                {foreach $QuestionsInfo as $key=>$value}
                <div class="media">
                    <div class="media-left">
                        <img src="{$BASE_URL}{$value.foto}" alt="{$value.username}" class="media-object qm_img">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"> <a href="{$BASE_URL}pages/users/viewProfile.php?id={$value.idutilizador}">{$value.username}</a>
                            <small><i id="PostData{$key}"></i></small>
                            <script>
                                var data = new Date("{$value.data}");
                                var year = data.getFullYear();
                                var day = data.getDate();

                                var months = new Array(12);
                                months[0] =  "Janeiro";
                                months[1] = "Fevereiro";
                                months[2] = "Março";
                                months[3] = "Abril";
                                months[4] = "Maio";
                                months[5] = "Junho";
                                months[6] = "Julho";
                                months[7] =  "Agosto";
                                months[8] = "Setembro";
                                months[9] = "Outubro";
                                months[10] = "Novembro";
                                months[11] = "Dezembro";
                                var month = months[data.getMonth()];

                                document.getElementById("PostData{$key}").innerHTML = "Postado a " + day + " de " + month + " de "
                                        + year;
                            </script>
                        </h4>
                        <p class="questions_text">{$value.questao}</p>

                        {if is_array($AnswersToQuestion[$key]) && count($AnswersToQuestion[$key]) > 0}
                        <div class="media-left">
                                <a onclick="$('.replys{$key}').toggle();"><span class="glyphicon glyphicon-sort"></span> Mostrar
                                    Respostas</a>
                            </div>

                            <div class="replys{$key}">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{$BASE_URL}{$AnswersToQuestion[$key].foto}" alt="{$AnswersToQuestion[$key].username}" class="media-object rep_img">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="{$BASE_URL}pages/users/viewProfile.php?id={$AnswersToQuestion[$key].idutilizador}"> {$AnswersToQuestion[$key].username}</a>
                                            <small><i id="PostDataAns{$key}"></i></small>
                                            <script>
                                                var data = new Date("{$AnswersToQuestion[$key].data}");
                                                var year = data.getFullYear();
                                                var day = data.getDate();

                                                var months = new Array(12);
                                                months[0] =  "Janeiro";
                                                months[1] = "Fevereiro";
                                                months[2] = "Março";
                                                months[3] = "Abril";
                                                months[4] = "Maio";
                                                months[5] = "Junho";
                                                months[6] = "Julho";
                                                months[7] =  "Agosto";
                                                months[8] = "Setembro";
                                                months[9] = "Outubro";
                                                months[10] = "Novembro";
                                                months[11] = "Dezembro";
                                                var month = months[data.getMonth()];

                                                document.getElementById("PostDataAns{$key}").innerHTML = "Postado a " + day + " de " + month + " de "
                                                        + year;
                                            </script>
                                        </h4>
                                        <p class="answers_text">{$AnswersToQuestion[$key].resposta}</p>
                                    </div>
                                </div>
                        </div>
                        {elseif $eOVendedor === 'true'}
                        <div class="media">
                            <div class="media-left">
                                <img src="{$BASE_URL}{$FotoVendedor.foto}" alt="{$auctInfoContainer['NomeVendedor']}" class="media-object vimg" >
                            </div>
                            <div class="media-body">
                                <form class="ap_form" id="ap_form{$value.idquestao}" action="{$BASE_URL}actions/auctions/answer.php" method="post">
                                    <div class="alert alert-danger a_error" role="alert">
                                    </div>
                                    <input type="hidden" name="idquestao" value="{$value.idquestao}"/>
                                    <input type="hidden" name="leilaoID" value="{$auction_id}"/>
                                    <textarea class="form-control" rows="4"
                                                  placeholder="Escreva um comentário..." name="resposta"></textarea>
                                    <button type="submit" class="btn btn-block btn-xs btn-success" name="submit" ><span class="glyphicon glyphicon-ok"></span> </button>
                                </form>
                            </div>
                        </div>
                        {/if}

                    </div>
                </div>
                {/foreach}

                {if $eOVendedor !== 'true' && $UserLoggedIn && !$ADMIN}
                <a onclick="$('#question_target').toggle();" id="create_question" class="btn btn-default"><span
                            class="glyphicon glyphicon-plus-sign"></span> <strong>Colocar questão</strong></a>

                <div class="media" id="question_target">
                    <div class="media-left">
                        <img src="{$BASE_URL}{$AtualUserFoto.foto}" alt="{$username}" class="media-object qimage" >
                    </div>
                    <div class="media-body">
                        <form class="qp_form2" action="{$BASE_URL}actions/auctions/question.php" method="post" >
                            <div class="alert alert-danger" id="q_error" role="alert">
                            </div>
                            <input type="hidden" name="leilaoID" value="{$auction_id}"/>
                            <textarea class="form-control" rows="4" placeholder="Faça uma questão..." name="questao"></textarea>
                            <button type="submit" class="btn btn-block btn-xs btn-success" name="submit" ><span class="glyphicon glyphicon-ok"></span> </button>
                        </form>
                    </div>
                </div>
                {/if}
            </div>
        </div>
    </div>
</div>
</div>
<script>auction_id = {$auction_id} </script>
<script src="{$BASE_URL}javascript/updateProductPage.js"></script>
{include file='common/footer.tpl'}
