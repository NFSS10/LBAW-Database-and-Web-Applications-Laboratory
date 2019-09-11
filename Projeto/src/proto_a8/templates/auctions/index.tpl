{include file='common/header.tpl' title="ForBid"}

<div class="container">
	<div class="row">
		<p class="thumbnail_header">
		<h2>Leilões recentes</h2> </p>
		<hr class="half-rule"/>
	</div>
    {include file='auctions/list.tpl'}
	<div class="container">
		<div class="paginate">
			<ul class="pagination">
				{if $atualPage > 1 }
				<li><a href="{$BASE_URL}pages/auctions/index.php?page={$atualPage - 1}" rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
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