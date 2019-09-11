<?php
include('templates/headerAT.php');
?>


<div class="card col-md-offset-2">
    <div class="row">
        <div class="col-sm-4">
            <div id="pp_carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="indicators">
                    <li data-target="#pp_carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#pp_carousel" data-slide-to="1"></li>
                    <li data-target="#pp_carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox" id="carousel_product">
                    <div class="item active">
                        <img class="img-responsive" src="resources/products/samsung_s7.jpg" alt="Name1">
                    </div>

                    <div class="item">
                        <img src="resources/products/rival-300.jpg" alt="Name2">
                    </div>

                    <div class="item">
                        <img src="resources/products/pen.jpg" alt="Name3">
                    </div>
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
        </div>
        <div class="col-sm-4" style="border:0px solid gray" id="product_page_title">
            <h3>Samsung Galaxy S6 </h3>

            <h5 style="color:#337ab7">vendido por <a href="#">Vendedor</a></h5>


            <div class="pp_sold_product">
                <form>
                    <div class="input-group">
                        <a class="btn btn-primary btn-danger" id="wish_button"></span>
                             Producto Vendido!</a>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-sm-9">
            <ul class="menu-items">
                <li class="active">Detalhes do producto</li>
            </ul>
            <div style="width:100%;border-top:1px solid silver">
                <p style="padding:15px;">
                    <small>
                        A Samsung ficou longe da perfeição ao criar o S5,
                        que tinha sensação de "mais do mesmo" e com poucas melhorias quando o S4 estava em jogo.
                        Tudo mudou no S6, ele ficou bem mais bonito,
                        a câmera está ainda mais incrível (ponto onde a fabricante vem acertando, também na
                        linha Note)
                        e alguma coisa mudou do lado de dentro, no hardware. Nem tudo é perfeito e a TouchWiz
                        ainda existe,
                        demonstrando que o Galaxy S6 é um devorador voraz de memória RAM, mesmo que ele
                        apresente 3 GB deste tipo de spec.
                        O processador é um Exynos 7420 que roda quatro núcleos em 1.5 GHz e outros quatro
                        núcleos em 2.1 GHz,
                        acompanhado de uma GPU Mali-T760.
                    </small>
                </p>
                <small>
                    <ul class="ul_pp">
                        <li>Peso: 138 gramas</li>
                        <li>conexão MicroUSB e USB</li>
                        <li>Interfaces com Wi-Fi 802.11 a/b/g/n/ac e Bluetooth</li>
                        <li>SMS, MMS, email, Push Mail e IM</li>
                        <li> Camera frontal possui autofocus, com flash LED</li>
                        <li> Possui 16 GB memoria e 2 GB RAM</li>
                        <li> Tempo de vida da bateria é de +/- 17 horas</li>
                    </ul>
                </small>
            </div>
        </div>
    </div>
    <a id="questions" onclick="$('#target').toggle();$('#sell_rev').hide();" class="btn btn-primary btn-info"><span
            class="glyphicon glyphicon-question-sign"></span> Questões</a>
    <a onclick="$('#sell_rev').toggle();$('#target').hide();" id="feedback" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span> Feedback</a>

    <div id="sell_rev" class="seller_review" style="display: none;">
        <label>Comment (Optional): </label><br>
        <textarea id="comment_review" class="text" cols="80" rows="8" maxlength="500"
                  name="comment_review" form=""></textarea>
        <form method="POST" action="" id="" enctype="multipart/form-data">
            <label>Rating: </label><br>
            <div class="rate">
                <input class="star star-5" id="star-5" type="radio" name="star" value="5" required/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                <label class="star star-1" for="star-1"></label>
            </div>
            <br>
            <a href="#" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-arrow-up"></span> Enviar</a>
        </form>
    </div>


	<div id="target" style="display: none">
        <div class="qp_container">
            <div class="container col-sm-10" id="qp_container_sec">
                <div class="media">
                    <div class="media-left">
                        <img src="resources/default_avatar.png" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Joao Serra
                            <small><i> Postado a 12 de Dezembro de 2008</i></small>
                        </h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                        <div class="media-left">
                            <a onclick="$('.replys').toggle();"><span class="glyphicon glyphicon-sort"></span> Mostrar
                                Respostas</a>
                        </div>

                        <div class="replys">
                            <div class="media">
                                <div class="media-left">
                                    <img src="resources/default_avatar.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Vendedor
                                        <small><i> Postado a 13 de Dezembro de 2008</i></small>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut
                                        labore et dolore magna aliqua.
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin.
                                        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                        condimentum
                                        nunc
                                        ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="resources/default_avatar.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <form class="qp_form">
                                        <textarea class="form-control" rows="4"
                                                  placeholder="Escreva um comentário..."></textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img src="resources/default_avatar.png" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Carlos Neiva
                            <small><i> Postado a 21 de Dezembro de 2012</i></small>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua.
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                            nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                </div>
                <a  onclick="$('#question_target').toggle();" id="create_question" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> <strong>Colocar questão</strong></a>

                <div class="media" id="question_target" style="display: none">
                    <div class="media-left">
                        <img src="resources/default_avatar.png" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <form class="qp_form">
                            <textarea class="form-control" rows="4" placeholder="Faça uma questão..."></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="feedback_modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="text" class="form-control" id="psw" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>

    </div>
</div>


<?php
include('templates/footer.php');
?>
