            <div class="ecommerce-widget">
                <div class="row">                    
                    <!-- ============================================================== -->
                                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Tabela de Transações</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="tabelatest">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Product Name</th>
                                                <th class="border-0">Product Id</th>
                                                <th class="border-0">Quantity</th>
                                                <th class="border-0">Price</th>
                                                <th class="border-0">Order Time</th>
                                                <th class="border-0">Customer</th>
                                                <th class="border-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php for($i = 0; $i<100; $i++){
                                                echo'<tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #'.$i.' </td>
                                                        <td><a href="'.base_url('gerenciamento/compra/'.$i).'">000'.$i.'</a></td>
                                                        <td>34</td>
                                                        <td>$340.00</td>
                                                        <td>23-08-2018 09:12:35</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>';
                                           }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->
                    <!-- ============================================================== -->
                    
                </div>
                
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- sales  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Vendas Online</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">R$12099</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- new customer  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">TecHHub</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">R$1245</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end new customer  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- visitor  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Comissões</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">R$13000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end visitor  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Total</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">R$1340</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total orders  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- total revenue  -->
                    <!-- ============================================================== -->

                    
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- category revenue  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Vendas por categoria</h5>
                            <div class="card-body">
                                <div id="c3chart_categoria" style="height: 420px;">
                                    <?php 
                                        $count = 5;
                                        $lista = array('workshop_1', 'palestra_5', 'curso_4', 'show_sexta', 'show_sabado');
                                        echo '<span id="contador" class="display_none">'.$count.'</span>';
                                        for ($i=1; $i < ($count+1); $i++) { 
                                            $fator = $i*7;
                                            echo '
                                                <span id="elemento-'.$i.'" class="display_none">'.$lista[$i-1].'</span>
                                                <span id="elemento-'.(2*($count+1)-$i).'" class="display_none">'.$fator.'</span>
                                            ';
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end category revenue  -->
                    <!-- ============================================================== -->

                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"> Evolução das vendas</h5>
                            <div class="card-body">
                                <div id="morris_evolucao_vendas">

                                <?php 
                                        $meses = array('Maio', 'Junho', 'Julho');
                                        $controle = 1;
                                        $lista = array();
                                        echo '<span id="controle" class="display_none">'.$controle.'</span>';

                                        if($controle = 0){
                                            for($i = 0; $i< 30; $i++){
                                                array_push($lista, rand(0, 50));
                                            }
                                        }else{
                                            for($i = 0; $i< 31; $i++){
                                                array_push($lista, rand(0,50));
                                            }
                                        }
                                        for ($i=0; $i < sizeof($lista); $i++) { 
                                            echo '
                                                <span id="elemento-morris-'.$i.'" class="display_none">'.$lista[$i].'</span>
                                            ';
                                        }

                                ?>

                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>