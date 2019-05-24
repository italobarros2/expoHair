<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('gerenciamento/dashboard')?>">Principal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('gerenciamento/comissoes')?>">Comissões</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Cursos</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <?php foreach ($cursos as $curso){
                                    echo 
                                    '<li class="nav-item">
                                        <a class="nav-link" href="'.base_url('gerenciamento/cursos/'.$curso->idATIVIDADE).'">'.$curso->nomeATIVIDADE.'<span class="badge badge-secondary"></span></a>
                                    </li>';
                                }?>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fas fa-fw fa-inbox"></i></i>Workshops</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <?php foreach ($workshops as $workshop){
                                    echo 
                                    '<li class="nav-item">
                                        <a class="nav-link" href="'.base_url('gerenciamento/workshops/'.$workshop->idATIVIDADE).'">'.$workshop->nomeATIVIDADE.'<span class="badge badge-secondary"></span></a>
                                    </li>';
                                }?>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-2"><i class="fab fa-fw fa-wpforms"></i></i>Concursos</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <?php foreach ($concursos as $concurso){
                                    echo 
                                    '<li class="nav-item">
                                        <a class="nav-link" href="'.base_url('gerenciamento/palestras/'.$concurso->idATIVIDADE).'">'.$concurso->nomeATIVIDADE.'<span class="badge badge-secondary"></span></a>
                                    </li>';
                                }?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
