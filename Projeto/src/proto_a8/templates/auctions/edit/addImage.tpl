{include file='auctions/edit/editAuction.tpl'}
<div class="col-sm-9">
    <form id="editA_form" action="{$BASE_URL}actions/auctions/add_image.php?id={$auction_id}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="alert alert-danger a_error" role="alert" style="display:none">
        </div>
        <div class="input-group image-preview">
        <input type="text" class="form-control image-preview-filename" disabled="disabled"
               placeholder="Imagem do Producto...">
        <span class="input-group-btn">
                                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                                 </button>

                                                <div class="btn btn-default image-preview-input">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                    <span class="image-preview-input-title"> Procure</span>
                                                    <input type="file" accept="image/png, image/jpeg" name="product_image" id="upload_image"/>
                                                </div>
                                              </span>
    </div>
    <div style="text-align:center">
        <button id="foto_add" class="btn icon-btn btn-success" type="submit"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Add</button>
    </div>
    </form>​
   </div>


</div>
</div>
</div>
</div>
{include file='common/footer.tpl'}