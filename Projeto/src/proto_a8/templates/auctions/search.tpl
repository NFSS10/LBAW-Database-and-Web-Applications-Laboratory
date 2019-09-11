{if $query != ""}
    {include file='common/header.tpl' title=$query}
{else}
    {include file='common/header.tpl' title="Pesquisa avançada"}
{/if}
<div class="container">
    <div class="row">
        <p class="mytransitions_header">
        <h2>Resultados da Pesquisa</h2> </p>
        <hr class="half-rule-results"/>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" name="query" form="adv_search_form" class="form-control" placeholder="Pesquisa Avançada" value="{$query}" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form id="adv_search_form" class="form-horizontal" role="form" action="{$BASE_URL}pages/auctions/search.php" method="get">
                                    <div class="form-group">
                                        <label for="filter">Ordenar por</label>
                                        <select name="order" class="form-control">
                                            {if $order != null}
                                                <option value="rank"></option>
                                            {else}
                                                <option value="rank" selected></option>
                                            {/if}
                                            {if $order == "rank"}
                                                <option value="rank" selected>Rank</option>
                                            {else}
                                                <option value="rank">Rank</option>
                                            {/if}
                                            {if $order == "data_final"}
                                                <option value="data_final" selected>Tempo Restante</option>
                                            {else}
                                                <option value="data_final">Tempo Restante</option>
                                            {/if}
                                            {if $order == "preco_inicial"}
                                                <option value="preco_inicial" selected>Preço Inicial</option>
                                            {else}
                                                <option value="preco_inicial">Preço Inicial</option>
                                            {/if}
                                            {if $order == "categoria"}
                                                <option value="categoria" selected>Categoria</option>
                                            {else}
                                                <option value="categoria">Categoria</option>
                                            {/if}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contain">Ordenação</label>
                                        <select name="sort" class="form-control">
                                            {if $sort != null}
                                                <option value="DESC"></option>
                                            {else}
                                                <option value="DESC" selected></option>
                                            {/if}
                                            {if $sort == "ASC"}
                                                <option value="ASC" selected>Crescente</option>
                                            {else}
                                                <option value="ASC">Crescente</option>
                                            {/if}
                                            {if $sort == "DESC"}
                                                <option value="DESC" selected>Decrescente</option>
                                            {else}
                                                <option value="DESC">Decrescente</option>
                                            {/if}

                                        </select>
                                    </div>
                                 </form>
                            </div>
                        </div>
                        <button form="adv_search_form" type="submit" class="btn btn-primary" action="{$BASE_URL}pages/auctions/search.php" method="get"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {if $hasNothing !== 'true'}
        {include file='auctions/list.tpl'}
    {else}
        <div class="alert alert-danger">
            <strong>Aviso: </strong> Nenhum leilão encontrado para os dados introduzidos!
        </div>
    {/if}
    <div class="container">
        <div class="paginate">
            <ul class="pagination">
                {if $atualPage > 1 }
                    <li><a href="{$BASE_URL}pages/auctions/index.php?page={$atualPage - 1}"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                {/if}
                {for $key=1 to $pageNo}
                    {if $key == $atualPage}
                        <li class="active "> <span>{$key} </span></li>
                    {else}
                        <li><a href="{$BASE_URL}pages/auctions/index.php?page={$key}" class=" ">{$key} </a></li>
                    {/if}
                {/for}
                {if $atualPage < $pageNo }
                    <li><a href="{$BASE_URL}pages/auctions/index.php?page={$atualPage + 1}" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                {/if}
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}