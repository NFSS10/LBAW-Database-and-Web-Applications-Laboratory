{include file='common/header.tpl' title="Lista de Favoritos"}

<div class="big-container">
    <div class="myauct_container" id="myAuc">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <p class="myAuct_header">
                <h2>Lista de Favoritos</h2> </p>
                <hr class="half-rule2" id="wish_list_underline"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th class="first"><em class="fa fa-cog"></em></th>
                                <th>Produto</th>
                                <th>Vendedor</th>
                            </tr>
                            </thead>
                            {if $noWishListResults === 'true'}
                            <tr>
                                <td colspan ="5"><span>Ainda não adicionou qualquer produto até ao momento.</span></td>
                            </tr>
                            {else}
                            {foreach  $wishlist as $key=>$value}
                            <tbody>
                            <tr>
                                <td class="align_center">
                                    <a data-href="{$BASE_URL}actions/users/deleteWProduct.php?id={$value.idleilao}" class="btn btn-primary btn-danger removeItem" data-target="#myWishListModal"  data-toggle="modal"><span class="glyphicon glyphicon-star-empty"></span></a>
                                </td>
                                <td> <a href="{$BASE_URL}pages/auctions/productPage.php?id={$value.idleilao}">{$value.titulo}</a></td>
                                <td> <a href="{$BASE_URL}pages/users/viewProfile.php?id={$value.vendedor}">{$value.username}</a></td>
                            </tr>
                            </tbody>
                            {/foreach}
                            {/if}
                        </table>
                    </div>
                    {if $noWishListResults !== 'true'}
                        <div class="panel-footer">
                            <div class="paginate">
                                <ul class="pagination">
                                    {if $pagination['atualPage'] > 1 }
                                        <li><a href="{$BASE_URL}pages/users/wishList.php?page={$pagination['atualPage'] - 1}"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                    {/if}
                                    {for $key=$pagination['lowerBound'] to $pagination['upperBound']}
                                        {if $key == $pagination['atualPage']}
                                            <li class="active "> <span>{$key} </span></li>
                                        {else}
                                            <li><a href="{$BASE_URL}pages/users/wishList.php?page={$key}" class=" ">{$key} </a></li>
                                        {/if}
                                    {/for}
                                    {if $pagination['atualPage'] < $pagination['pageNo'] }
                                        <li><a href="{$BASE_URL}pages/users/wishList.php?page={$pagination['atualPage'] + 1}" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
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


<div class="modal fade" id="myWishListModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div><span class="glyphicon glyphicon-warning-sign"></span><strong> Tem a certeza que pretende eliminar o produto dos favoritos?</strong></div>
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
        $('.removeItem').click(function () {
            var url = $(this).attr('data-href');
            $('#myWishListModal .btn-success').click(function () {
                window.location.href = url;
            });
        });
    });
</script>


{include file='common/footer.tpl'}