{include file='common/header.tpl' title="Leilões do utilizador"}
<div class="big-container">
    <div class="myauct_container" id="myAuc">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="myAuct_header">
                <h2>Leilões de {$usernameAuctions}</h2> </p>
                <hr class="half-rule2"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    {if $my_auctions === 'true'}
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-12 text-right">

                                <a href="{$BASE_URL}pages/auctions/newAuction.php" class="btn btn-sm btn-success"><span
                                            class="glyphicon glyphicon-plus"></span> Criar Novo</a>

                            </div>
                        </div>
                    </div>
                    {/if}
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                {if $my_auctions === 'true' || $isAdmin === 'true'}
                                <th class="first"><em class="fa fa-cog"></em></th>
                                {/if}
                                <th class="hidden-xs">Produto</th>
                                <th>Licitação Atual</th>
                                <th>Tempo Restante</th>
                            </tr>
                            </thead>
                            {if $noAuctions === 'true'}
                                <tr>
                                    <td colspan ="5"><span>Não possuí qualquer leilão ativo de momento.</span></td>
                                </tr>
                            {else}
                            {foreach $auctions as $key=>$value}
                            <tbody>
                            <tr>
                                {if $my_auctions === 'true' || $isAdmin === 'true'}
                                    {if $value.valor === null || $isAdmin === 'true'}
                                        <td class="first align_center">
                                            <a href="{$BASE_URL}pages/auctions/edit.php?id={$value.idleilao}&edit=1" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                            <a data-href="{$BASE_URL}actions/auctions/delete_auction.php?id={$value.idleilao}" class="btn btn-danger removeItem" data-target="#myAuctionsModal" data-toggle="modal"><em class="fa fa-trash"></em></a>
                                        </td>
                                    {else}
                                        <td class="first align_center">
                                            <a href="#" class="btn btn-default disabled"><em class="fa fa-pencil"></em></a>
                                            <a href="#" class="btn btn-danger disabled"><em class="fa fa-trash"></em></a>
                                        </td>
                                    {/if}
                                {/if}
                                <td class="hidden-xs">
                                    <a href="{$BASE_URL}pages/auctions/productPage.php?id={$value.idleilao}">{$value.titulo}</a>
                                </td>
                                {if $value.valor === null}
                                    <td> Nenhuma.</td>
                                {else}
                                    <td> {$value.valor}€</td>
                                {/if}
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
                                                id="ca">
                                            <strong>{$value.tempo_restante}</strong>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            {/foreach}
                            {/if}
                        </table>
                    </div>
                    {if $noAuctions !== 'true'}
                    <div class="panel-footer">
                        <div class="paginate">
                            <ul class="pagination">
                                {if $pagination['atualPage'] > 1 }
                                    <li><a href="{$BASE_URL}pages/users/user_auctions.php?id={$userIdAuctions}&page={$pagination['atualPage'] - 1}"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                {/if}
                                {for $key= $pagination['lowerBound'] to $pagination['upperBound']}
                                    {if $key == $pagination['atualPage']}
                                        <li class="active "> <span>{$key} </span></li>
                                    {else}
                                        <li><a href="{$BASE_URL}pages/users/user_auctions.php?id={$userIdAuctions}&page={$key}" class=" ">{$key} </a></li>
                                    {/if}
                                {/for}
                                {if $pagination['atualPage'] < $pagination['pageNo'] }
                                    <li><a href="{$BASE_URL}pages/users/user_auctions.php?id={$userIdAuctions}&page={$pagination['atualPage'] + 1}" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
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


<div class="modal fade" id="myAuctionsModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div><span class="glyphicon glyphicon-warning-sign"></span><strong> Tem a certeza que pretende apagar este leilão?</strong></div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" >Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('.removeItem').click(function (e) {
            e.preventDefault();
            var url = $(this).attr('data-href');
            $('#myAuctionsModal .btn-success').click(function () {
                window.location.href = url;
            });
        });
    });
</script>

{include file='common/footer.tpl'}