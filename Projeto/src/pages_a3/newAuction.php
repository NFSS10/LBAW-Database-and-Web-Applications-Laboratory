<?php
include('templates/headerAT.php');
?>
    <div class="big-container" id="newact_container">
        <div class="container">

            <section class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Novo Produto</strong></h3>
                </div>
                <div class="panel-body" id="new_auct_panelb">

                    <form action="myAuctions.php#search" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label"> Nome do Produto:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Insira o nome do producto aqui...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about" class="col-sm-3 control-label"> Descrição do Produto:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5"
                                          placeholder="Insira a descrição do producto aqui..."></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="about" class="col-sm-3 control-label"> Preço Inicial(&euro;):</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="starter_price" id="starter_price"
                                       placeholder="0.0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about" class="col-sm-3 control-label"> Categoria:</label>
                            <div class="col-sm-3">
                                <a class="btn btn-primary btn-select btn-select-light">
                                    <input type="hidden" class="btn-select-input" id="category" name="category" value="" />
                                    <span class="btn-select-value" id="select">Selecione uma categoria</span>
                                    <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                    <ul>
                                        <li>Option 1</li>
                                        <li>Option 2</li>
                                        <li>Option 3</li>
                                        <li>Option 4</li>
                                    </ul>
                                </a>
                            </div>
                        </div>


                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="Imagem do Producto...">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                 </button>

                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title"> Procure</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="product_image"/>
                    </div>
                </span>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-offset-6 col-sm-9">
                                <button type="submit" class="btn btn-success "><span
                                        class="glyphicon glyphicon-ok" id="newprod_done"></span>Concluido
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>


        </div>
    </div>

<?php
include('templates/footer.php');
?>