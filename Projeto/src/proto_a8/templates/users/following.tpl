{include file='common/header.tpl' title="A seguir"}
<div class="big-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="following_header">
            <h2>A seguir</h2> </p>
            <hr class="half-rule-following"/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list" id="following">
                        <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th>Utilizador</th>
                            <th class="hidden-xs">Leilões Atuais</th>
                            <th>Contactar</th>
                        </tr>
                        </thead>
                        {if $noFollowingResults === 'true'}
                        <tr>
                            <td colspan ="5"><span>Ainda não segue qualquer utilizador até ao momento.</span></td>
                        </tr>
                        {else}
                        {foreach  $following as $key=>$value}
                        <tbody>
                        <tr>
                            <td class="col-md-1" align="center">
                                <a data-href="{$BASE_URL}actions/users/unfollow.php?id={$value.idutilizador}" class="btn btn-danger removeItem" data-target="#myModal"  data-toggle="modal"><span class="glyphicon glyphicon-eye-close"></span></a>
                            </td>
                            <td><a href="{$BASE_URL}pages/users/viewProfile.php?id={$value.idutilizador}">{$value.username}</a></td>
                            <td class="hidden-xs">
                                <a href="{$BASE_URL}pages/users/user_auctions.php?id={$value.idutilizador}" class="btn btn-info">
                                    <div class="glyphicon glyphicon-shopping-cart"></div> Leilões disponíveis
                                </a>
                            </td>
                            <td align="center">
                                <a href="{$BASE_URL}pages/users/sendMessage.php?id={$value.idutilizador}" class="btn btn-info"><em class="fa fa-envelope"></em></a>
                            </td>
                        </tr>
                        </tbody>
                        {/foreach}
                        {/if}
                    </table>
                </div>
                {if $noFollowingResults !== 'true'}
                    <div class="panel-footer">
                        <div class="paginate">
                            <ul class="pagination">
                                {if $pagination['atualPage'] > 1 }
                                    <li><a href="{$BASE_URL}pages/users/following.php?page={$pagination['atualPage'] - 1}"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                {/if}
                                {for $key=$pagination['lowerBound'] to $pagination['upperBound']}
                                    {if $key == $pagination['atualPage']}
                                        <li class="active "> <span>{$key} </span></li>
                                    {else}
                                        <li><a href="{$BASE_URL}pages/users/following.php?page={$key}" class=" ">{$key} </a></li>
                                    {/if}
                                {/for}
                                {if $pagination['atualPage'] < $pagination['pageNo'] }
                                    <li><a href="{$BASE_URL}pages/users/following.php?page={$pagination['atualPage'] + 1}" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div><span class="glyphicon glyphicon-warning-sign"></span><strong> Tem a certeza que pretende deixar de seguir o utilizador?</strong></div>
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
            $('#myModal .btn-success').click(function () {
                window.location.href = url;
            });
        });
    });
    </script>

</script>
{include file='common/footer.tpl'}