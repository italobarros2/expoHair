<?php
    $path = 1;
    $id = 0;
    $path_value;
    $subpath_value;
    if ($path == 1) {
        $path_value = 'Dashboard';
        if ($id == 0) {
            $subpath_value = 'Principal';
        }else {
            $subpath_value = 'Comissões';
        }
    }elseif ($path == 2) {
        $path_value = 'Cursos';
        $subpath_value = $id;
    }elseif ($path == 3) {
        $path_value = 'Workshops';
        $subpath_value = $id;
    }elseif ($path == 4) {
        $path_value = 'Palestras';
        $subpath_value = $id;
    }
?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Plataforma Administrativa E-commerce</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><?=$path_value?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?=$subpath_value?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->