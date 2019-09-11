<?php
    include("templates/editAuction.php")
?>
                <div class="col-sm-9">
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
                                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="product_image"/>
                                                </div>
                                             </span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<?php
include("templates/footer.php");
?>
