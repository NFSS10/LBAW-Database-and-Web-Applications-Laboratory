{include file='auctions/edit/editAuction.tpl'}
<div class="col-sm-9">
    <form id="changeC_form" action="{$BASE_URL}actions/auctions/change_characteristics.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div id="cc_alert1" class="alert alert-danger a_error" role="alert" style="display:none">
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label"> Nome do Produto:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="titulo" id="titulo_cc"
                       value="{$rinfo['titulo']}" required>
            </div>
        </div>

        <div class="form-group">
            <input type="hidden" name="idleilao" value={$auction_id}>
            <input type="hidden" name="data_inicio" id="data_inicio_cc" value={$rinfo['data_inicio']}>
        </div>
        <div id="cc_alert2" class="alert alert-danger a_error" role="alert" style="display:none">
        </div>
        <div class="form-group">
            <label for="about" class="col-sm-3 control-label"> Descrição do Produto:</label>
            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="descricao" id="descricao_cc" required>{$rinfo['descrição']}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-3 control-label"> Preço Inicial(&euro;):</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="preco_inicial" id="preco_inicial_cc"
                       value={$rinfo['preco_inicial']}  min="0" required>
            </div>
        </div>

        <div id="cc_alert3" class="alert alert-danger a_error" role="alert" style="display:none">
        </div>
        <div class="form-group registration-date">
            <label class="control-label col-sm-3" for="end_datee">Date:</label>
            <div class="col-sm-2">
                <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="end_date" id="data_final_cc" type="datetime-local" value="{$date}">
                </div>
            </div>
        </div>

        <div style="text-align:center">
            <button id="change_char_sub" class="btn icon-btn btn-lg btn-success" type="submit" name="cc_submit"><span class="glyphicon btn-glyphicon glyphicon-floppy-saved img-circle text-success"></span>Save</button>
        </div>
    </form>
</div>


</div>
</div>
</div>
</div>
{include file='common/footer.tpl'}