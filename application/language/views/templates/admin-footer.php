<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                            Plataforma Administrativa E-commerce. Desenvolvido por ©<a href="#"> TecHHub - Soluções Tecnológicas</a>.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?=base_url('static/assets/vendor/jquery/jquery-3.3.1.min.js')?>"></script>
    <!-- bootstap bundle js -->
    <script src="<?=base_url('static/assets/vendor/bootstrap/js/bootstrap.bundle.js')?>"></script>
    <!-- slimscroll js -->
    <script src="<?=base_url('static/assets/vendor/slimscroll/jquery.slimscroll.js')?>"></script>
    <!-- main js -->
    <script src="<?=base_url('static/assets/libs/js/main-js.js')?>"></script>
    <!-- chart chartist js -->
    <script src="<?=base_url('static/assets/vendor/charts/chartist-bundle/chartist.min.js')?>"></script>
    <!-- sparkline js -->
    <script src="<?=base_url('static/assets/vendor/charts/sparkline/jquery.sparkline.js')?>"></script>
    <!-- morris js -->
    <script src="<?=base_url('static/assets/vendor/charts/morris-bundle/raphael.min.js')?>"></script>
    <script src="<?=base_url('static/assets/vendor/charts/morris-bundle/morris.js')?>"></script>
    <!-- chart c3 js -->
    <script src="<?=base_url('static/assets/vendor/charts/c3charts/c3.min.js')?>"></script>
    <script src="<?=base_url('static/assets/vendor/charts/c3charts/d3-5.4.0.min.js')?>"></script>
    <script src="<?=base_url('static/assets/vendor/charts/c3charts/C3chartjs.js')?>"></script>
    <script src="<?=base_url('static/assets/libs/js/dashboard-ecommerce.js')?>"></script>
    <script src="<?=base_url('static/js/charts-config.js')?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabelatest').DataTable({
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": " ",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar  ",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });
        } );
    </script>
</body>
 
</html>