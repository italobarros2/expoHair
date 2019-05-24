            <div class="ecommerce-widget">
                <div class="row">                    
                    <!-- ============================================================== -->
                                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body">
                                <div class="table-responsive">
									<div class="table-responsive">
										<table class="table" id="tabelatest">
											<thead class="bg-light">
											<tr class="border-0">
												<th class="border-0">Nome</th>
												<th class="border-0">E-mail</th>
												<th class="border-0">Telefone</th>
												<th class="border-0">CPF</th>
												<th class="border-0">Cidade</th>
												<th class="border-0">Sexo</th>
												<th class="border-0" style="width: 60px">Status</th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $query){
												echo'<tr>
                                                        <td>'.$query->Nome.'</td>
                                                        <td>'.$query->email.'</td>
                                                        <td>'.$query->telefone.'</td>
                                                        <td>'.$query->cpf.'</td>
                                                        <td>'.$query->Cidade.'</td>
                                                        <td>'.$query->sexo.'</td>
                                                        <td>';
												switch ($query->validacao) {
													case 'pago':
														echo '<span class="badge-dot badge-success mr-1"></span>Pago</td>';
														break;
													case 'analise':
														echo '<span class="badge-dot badge-brand mr-1"></span>Em análise</td>';
														break;
													case 'cancelado':
														echo '<span class="badge-dot badge-danger mr-1"></span>Cancelado</td>';
														break;
													case 'extornado':
														echo '<span class="badge-dot badge-danger mr-1"></span>Estornado</td>';
														break;
												}


												echo'</tr>';
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
				</div>
                

					<div class="row">
						<!-- ============================================================== -->
						<!-- sales  -->
						<!-- ============================================================== -->
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
							<div class="card border-3 border-top border-top-primary">
								<div class="card-body">
									<h5 class="text-muted">Vendas na Atividade</h5>
									<div class="metric-value d-inline-block">
										<h1 class="mb-1">R$<?php $tot = $total->qtd*$const->preco;echo $tot;?></h1>
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
										<h1 class="mb-1">R$<?php $tottec = $tec->qtd*0.1*$const->preco; echo $tottec;?></h1>
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
										<h1 class="mb-1"><?php $comissoes = 35; echo $comissoes;?></h1>
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
										<h1 class="mb-1">R$<?php $supertot = $tot - $tottec -$comissoes; echo $supertot;?></h1>
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
                            <h5 class="card-header">Revenue by Category</h5>
                            <div class="card-body">
                                <div id="c3chart_category" style="height: 420px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end category revenue  -->
                    <!-- ============================================================== -->

                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"> Total Revenue</h5>
                            <div class="card-body">
                                <div id="morris_totalrevenue"></div>
                            </div>
                            <div class="card-footer">
                                <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
