{include file='common/header.tpl' title="Editar leilão"}
<div class="big-container" id="newact_container">
    <div class="container">
        <div class="row">
            <p class="myAuct_header">
            <h2>Editar leilão</h2> </p>
            <hr class="half-rule2"/>
        </div>
        <section class="panel panel-default">


            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3" id="editAuc_options">
                        <div class="list-group">
                            {if $editOption == 1}
                            <a href="{$BASE_URL}pages/auctions/edit.php?id={$auction_id}&edit=1" class="list-group-item active">Adicionar uma Imagem</a>
                            {else}
                                <a href="{$BASE_URL}pages/auctions/edit.php?id={$auction_id}&edit=1" class="list-group-item">Adicionar uma Imagem</a>
                            {/if}
                            {if $editOption == 2}
                                <a href="{$BASE_URL}pages/auctions/edit.php?id={$auction_id}&edit=2" class="list-group-item active">Remover uma Imagem</a>
                                {else}
                                <a href="{$BASE_URL}pages/auctions/edit.php?id={$auction_id}&edit=2" class="list-group-item">Remover uma Imagem</a>
                            {/if}
                            {if $editOption == 3}
                                <a href="{$BASE_URL}pages/auctions/edit.php?id={$auction_id}&edit=3" class="list-group-item active">Alterar caracteristicas</a>
                                {else}
                                <a href="{$BASE_URL}pages/auctions/edit.php?id={$auction_id}&edit=3" class="list-group-item">Alterar caracteristicas</a>
                            {/if}
                        </div>
                    </div>