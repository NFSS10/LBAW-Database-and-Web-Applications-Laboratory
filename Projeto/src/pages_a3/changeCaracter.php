<?php
include("templates/editAuction.php")
?>
<div class="col-sm-9">
    <form action="myAuctions.php#search" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label"> Nome do Produto:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name"
                       value="Samsung Galaxy S6">
            </div>
        </div>

        <div class="form-group">
            <label for="about" class="col-sm-3 control-label"> Descrição do Produto:</label>
            <div class="col-sm-9">
                                <textarea class="form-control" rows="5">Samsung Galaxy S6 apresenta a união perfeita do vidro com o metal. O seu design concebido a pensar nos detalhes, apresenta curvas perfeitas e superfícies de vidro radiantes que refletem um amplo espectro de cores deslumbrantes.
                                </textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="about" class="col-sm-3 control-label"> Preço Inicial(&euro;):</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="starter_price" id="starter_price"
                       value="799.99">
            </div>
        </div>
        </form>
</div>


</div>
</div>
</div>
</div>


<?php
	include("templates/footer.php");
?>
