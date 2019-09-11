{include file='auctions/edit/editAuction.tpl'}
{if count($photos) > 0}
<div class="col-sm-9" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" id="indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            {foreach array_slice($photos, 1) as $key=>$value}
                <li data-target="#myCarousel" data-slide-to="{$key}"></li>
            {/foreach}
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" id="carousel_product">
            <div class="item active">
                <img class="img-responsive" src="{$BASE_URL}{$photos[0].imagepath}" alt="Name1" >
                <a href="{$BASE_URL}actions/auctions/delete_image.php?id={$auction_id}&photo={$photos[0].idfoto}" class="btn btn-block btn-primary btn-danger"><span class="glyphicon glyphicon-remove"> <strong>Remove</strong></span></a>
            </div>

            {foreach array_slice($photos, 1) as $foto}
                <div class="item">
                    <img class="img-responsive" src="{$BASE_URL}{$foto.imagepath}" alt="Name1">
                    <a href="{$BASE_URL}actions/auctions/delete_image.php?id={$auction_id}&photo={$foto.idfoto}" class="btn btn-block btn-primary btn-danger"><span class="glyphicon glyphicon-remove"> <strong>Remove</strong></span></a>
                </div>
            {/foreach}
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    {else}
    <div style="text-align:center">
        <span> <strong> Não possui imagens ainda.</strong></span>
    </div>

{/if}


</div>
</div>
</div>
</div>
{include file='common/footer.tpl'}