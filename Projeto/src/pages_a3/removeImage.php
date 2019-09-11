<?php
include("templates/editAuction.php")
?>
<div class="col-sm-9" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" id="indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" id="carousel_product">
            <div class="item active">
                <img class="img-responsive" src="resources/products/samsung_s7.jpg" alt="Name1" >
                <a href="#" class="btn btn-block btn-primary btn-danger"><span class="glyphicon glyphicon-remove"> <strong>Remove</strong></span></a>
            </div>

            <div class="item">
                <img src="resources/products/rival-300.jpg" alt="Name2">
                <a href="#" class="btn btn-block btn-primary btn-danger"><span class="glyphicon glyphicon-remove"> <strong>Remove</strong></span></a>

            </div>

            <div class="item">
                <img src="resources/products/pen.jpg" alt="Name3">
                <a href="#" class="btn btn-block btn-primary btn-danger"><span class="glyphicon glyphicon-remove"> <strong>Remove</strong></span></a>
            </div>
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


</div>
</div>
</div>
</div>


<?php
include("templates/footer.php");
?>
