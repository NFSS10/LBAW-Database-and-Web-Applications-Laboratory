{include file='common/header.tpl' title="Histórico de transações"}
<div class="big-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="mytransitions_header">
            <h2>Histórico de Transações</h2> </p>
            <hr class="half-rule-history"/>
        </div>
    </div>
    <div class="row" class="trans_hist">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list table-hover" id="mytransitions">
                        <thead>
                        <tr>
                            <th>Produto/Leilão</th>
                            <th class="hidden-xs">Troca efectuada com:</th>
                            <th>
                                <div class="checkboxTransitions">
                                    <label>
                                        {if $typeExchange['vendaChecked'] == 1}
                                        <input type="checkbox" name="venda" value="" checked>
                                        {else}
                                            <input type="checkbox" name="venda" value="">
                                        {/if}
                                        <span class="crTransitions"><i class="cr-icon-transitions fa fa-check"></i></span>
                                        Venda
                                    </label>
                                    <label>
                                        {if $typeExchange['compraChecked'] == 1}
                                        <input type="checkbox" name="compra" value="" checked>
                                        {else}
                                        <input type="checkbox" name="compra" value="">
                                        {/if}
                                        <span class="crTransitions"><i class="cr-icon-transitions fa fa-check"></i></span>
                                        Compra
                                    </label>
                                </div></th>
                            <th>Data</th>
                            <th>Preço</th>
                        </tr>
                        </thead>
                        {if $noHistoryResults === 'true'}
                        <tr>
                            <td colspan ="5"><span>Não possui quaisquer transações até ao momento.</span></td>
                        </tr>
                        {else}
                        {foreach  $transactions as $key=>$value}
                        <tbody>
                        <tr>
                            <td><a href="{$value.auction_id}">{$value.titulo}</a></td>
                            <td class="hidden-xs"><a href="{$BASE_URL}pages/users/viewProfile.php?id={$value.idutilizador}">{$value.username}</a></td>
                            <td>{$value.tipo}</td>
                            <td class =>{$value.data_final}</td>
                            <td>{$value.maxbid} &euro;</td>
                        </tr>
                        </tbody>
                        {/foreach}
                        {/if}
                    </table>
                </div>
                {if $noHistoryResults !== 'true'}
                <div class="panel-footer">
                    <div class="paginate">
                        <ul class="pagination">
                            {if $pagination['atualPage'] > 1 }
                            <li><a href="{$BASE_URL}pages/users/myTransactionsHist.php?page={$pagination['atualPage'] - 1}"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                            {/if}
                            {for $key= $pagination['lowerBound'] to $pagination['upperBound']}
                                {if $key == $pagination['atualPage']}
                                    <li class="active "> <span>{$key} </span></li>
                                {else}
                                    <li><a href="{$BASE_URL}pages/users/myTransactionsHist.php?page={$key}" class=" ">{$key} </a></li>
                                {/if}
                            {/for}
                            {if $pagination['atualPage'] < $pagination['pageNo'] }
                                <li><a href="{$BASE_URL}pages/users/myTransactionsHist.php?page={$pagination['atualPage'] + 1}" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
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



{include file='common/footer.tpl'}