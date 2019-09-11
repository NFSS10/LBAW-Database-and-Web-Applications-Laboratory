{include file='common/header.tpl' title="Minhas licitações"}
<div class="big-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="myBids_header">
            <h2>Minhas Licitações</h2> </p>

            <hr class="half-rule-bid"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list" id="myBids">
                        <thead>
                        <tr>
                            <th>Produto/Leilão</th>
                            <th>Licitação Feita (€)</th>
                            <th>Licitação Atual (€)</th>
                            <th class="hidden-xs">Tempo Restante</th>
                            <th class="hidden-xs">Licitar</th>
                        </tr>
                        </thead>
                        {if $noBids === 'true'}
                        <tr>
                            <td colspan ="5"><span>Não possuí qualquer licitação até ao momento.</span></td>
                        </tr>
                        {else}
                            {foreach $myBids as $key=>$value}
                        <tbody>
                        <tr>
                            <td><a id="myBidsTitle{$key}"  href="{$BASE_URL}pages/auctions/productPage.php?id={$value.idleilao}">{$value.titulo}</a></td>
                            <td id="myBidsValue{$key}" >{$value.my_bid}</td>
                            <td id="myBidsMaxV{$key}" >{$value.max_valor}</td>
                            <td>
                                <div class="progress">
                                    <div
                                            class="progress-bar progress-bar-warning progress-bar-striped active text-center"
                                            role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            {if $value.width_bar>100}
                                                style="width:100%;"
                                            {else}
                                                style="width:{$value.width_bar}%"
                                            {/if}
                                            id="ca{$key}">
                                        <strong><div id="timeLeft{$key}">{$value.tempo_restante}</div></strong>
                                    </div>
                                </div>
                            </td>
                            <td class="hidden-xs">
                                <form id=my_bids_form" action="{$BASE_URL}actions/auctions/bid.php" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" >
                                    <div class="input-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon">€</div>
                                            <input id="myBidsButton{$key}" type="number" class="form-control" name="valor_licitacao" value="{$value.max_valor}" min="{$value.max_valor}"
                                                   step="0.1" data-number-to-fixed="2"
                                                   data-number-stepfactor="100"/>
                                            <input type="hidden" name="id_leilao" value="{$value.idleilao}"/>
                                                <span class="input-group-btn">
        											<button class="btn btn-info" type="submit" value="Submit">Licitar</button>
												</span>
                                        </div>
                                    </div>
                                </form>
                            </td>

                        </tr>
                        </tbody>
                            {/foreach}
                        {/if}
                    </table>

                </div>
                {if $noBids !== 'true'}
                    <div class="panel-footer">
                        <div class="paginate">
                            <ul class="pagination">
                                {if $pagination['atualPage'] > 1 }
                                    <li><a href="{$BASE_URL}pages/users/myBids.php?id={$userIdBids}&page={$pagination['atualPage'] - 1}"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                {/if}
                                {for $key= $pagination['lowerBound'] to $pagination['upperBound']}
                                    {if $key == $pagination['atualPage']}
                                        <li class="active "> <span>{$key} </span></li>
                                    {else}
                                        <li><a href="{$BASE_URL}pages/users/myBids.php?id={$userIdBids}&page={$key}" class=" ">{$key} </a></li>
                                    {/if}
                                {/for}
                                {if $pagination['atualPage'] < $pagination['pageNo'] }
                                    <li><a href="{$BASE_URL}pages/users/myBids.php?id={$userIdBids}&page={$pagination['atualPage'] + 1}" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                {/if}
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                {/if}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    user_id = {$userIdBids};
    limit = {$limit_per_page};
    offset = {$offset};
</script>
<script src="{$BASE_URL}javascript/updateMyBids.js"></script>
{include file='common/footer.tpl'}