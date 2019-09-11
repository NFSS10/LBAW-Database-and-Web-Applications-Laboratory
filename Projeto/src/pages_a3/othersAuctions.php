<?php
include('templates/headerAT.php');
?>
    <div class="big-container">
        <div class="myauct_container" id="myAuc">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="myAuct_header">
                    <h2>Leilões de X</h2> </p>
                    <hr class="half-rule2"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default panel-table">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th class="col-sm-3">Produto</th>
                                    <th>Licitação Atual</th>
                                    <th>Tempo Restante</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-sm-3"> <a href="productPage.php#search">Samsung Galaxy S6</a></td>
                                    <td> Nenhuma.</td>
                                    <td>

                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-primary progress-bar-striped active text-center"
                                                role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width:50%"
                                                id="ca">
                                                <strong>02:00:00</strong>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td> <a href="productPage.php#search">Headphones Razer</a></td>
                                    <td>87.99 &euro;</td>
                                    <td>
                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-primary progress-bar-striped active text-center"
                                                role="progressbar"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width:80%">
                                                03:40:37
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td><a href="productPage.php#search">Asus A+</a></td>
                                    <td> Nenhuma.</td>
                                    <td>
                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-primary progress-bar-striped active text-center"
                                                role="progressbar"
                                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"
                                                style="width:98%">
                                                00:05:57
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td> <a href="productPage.php#search">Tapete Steel Series</a></td>
                                    <td> 32.99 &euro;</td>
                                    <td>
                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-primary progress-bar-striped active text-center"
                                                role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                                style="width:10%">
                                                01:50:00
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="paginate">
                                <ul class="pagination">
                                    <li><a href="#" rel="prev" class="page-prev"><span
                                                class="glyphicon glyphicon-chevron-left"></span></a></li>
                                    <li class="active "><span>1</span></li>
                                    <li><a href="#" class=" ">2</a></li>
                                    <li><a href="#" class=" ">3</a></li>
                                    <li><a href="#" rel="next" class="page-next"><span
                                                class="glyphicon glyphicon-chevron-right"></span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php
include('templates/footer.php');
?>