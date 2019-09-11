<div class="container" id="thumbnail">
    <div class="row" id="thumb">
        <div class="thumbnails">
            {foreach $auctionsToDisplay as $key => $value}
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="productPage.php?id={$value.idleilao}"><img src="{$BASE_URL}{$value.photo}" alt="{$value.titulo}"/></a>
                        <div class="caption" style="min-height: 110px;">
                            <a href="productPage.php?id={$value.idleilao}"><h4 class="item-name">{$value.titulo}</h4></a>
                            <p class="auction-price">{$value.max_licit} &euro;</p>
                        </div>
                        <p class="bid-btn"><a href="productPage.php?id={$value.idleilao}" class="btn btn-primary btn-block">Licitar aqui</a></p>
                    </div>
                </div>
            {/foreach}

        </div>
    </div>
</div>