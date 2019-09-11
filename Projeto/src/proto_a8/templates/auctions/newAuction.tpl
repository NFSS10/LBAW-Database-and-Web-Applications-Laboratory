{include file='common/header.tpl' title="Novo leilão"}
<div class="big-container" id="newact_container">
    <div class="container">

        <section class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Novo Produto</strong></h3>
            </div>
            <div class="panel-body" id="new_auct_panelb">

                <form id="new_auction" action="{$BASE_URL}actions/auctions/new_auction.php" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                    <div id="cc_alert1" class="alert alert-danger a_error" role="alert" style="display:none">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"> Nome do Produto: (*) </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="titulo" id="new_titulo"
                                   placeholder="Insira o nome do producto aqui..." required>
                        </div>
                    </div>

                    <div id="cc_alert2" class="alert alert-danger a_error" role="alert" style="display:none">
                    </div>
                    <div class="form-group">
                        <label for="about" class="col-sm-3 control-label"> Descrição do Produto: (*)</label>
                        <div class="col-sm-9">
                                <textarea class="form-control" rows="5"
                                          placeholder="Insira a descrição do producto aqui..." name="descricao" id="new_descript"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="about" class="col-sm-3 control-label"> Preço Inicial(&euro;): (*)</label>
                        <div class="col-sm-1">
                            <input type="number" class="form-control" name="preco_inicial" id="starter_price"
                                   placeholder="0.0" min="0" required>
                        </div>
                    </div>

                    <div id="cc_alert3" class="alert alert-danger a_error" role="alert" style="display:none">
                    </div>
                    <div class="form-group registration-date">
                        <label class="control-label col-sm-3" for="end_date">Data de fim: (*)</label>
                        <div class="col-sm-1">
                            <div class="input-group registration-date-time">
                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                <input class="form-control" name="end_date" id="new_data_final" type="datetime-local">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Categoria: (*)</label>
                        <div class="col-sm-2">
                            <a class="btn btn-primary btn-select btn-select-light" id="a_mcategory">
                                <input type="hidden" class="btn-select-input" id="category" name="categoria" value=""/>
                                <span class="btn-select-value" id="select">Selecione uma categoria</span>
                                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                <ul id="categories_opt">
                                    {foreach $main_categories as $key => $value}
                                    {if $key != 0}
                                        <li>{$value.nome}</li>
                                    {else}
                                        <li>{$value.nome}</li>
                                    {/if}
                                    {/foreach}
                                </ul>
                            </a>
                        </div>

                        <label class="col-sm-3 control-label"> Sub-Categoria: (*)</label>
                        <div class="col-sm-2">
                            <a class="btn btn-primary btn-select btn-select-light" id="a_scategory">
                                <input type="hidden" class="btn-select-input" name="sub_categoria" value="" />
                                <span class="btn-select-value" id="select">Selecione uma sub categoria</span>
                                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                <ul id="subcategories_opt">
                                </ul>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-9">
                            <button type="submit" class="btn btn-success " name="new_submit"><span
                                        class="glyphicon glyphicon-ok" id="newprod_done"></span>Concluido
                            </button>
                        </div>
                    </div>

                </form>

            </div>
            <p id="required_text"> <strong>(*) </strong> - Campos obrigatórios </p>
        </section>
    </div>
</div>
{include file='common/footer.tpl'}