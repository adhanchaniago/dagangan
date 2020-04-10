<?php
$id = $this->session->userdata('id');
$user = $this->user_model->user_detail($id);
$meta = $this->meta_model->get_meta();
?>



<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?php echo base_url('assets/img/logo/' . $meta->favicon); ?>" width="45px" />
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        MASTER DATA
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/berita'); ?>">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Berita</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/category'); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Ketgori Berita</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Seting Web
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Example Pages</h6>
                <a class="collapse-item" href="<?php echo base_url('admin/meta'); ?>">Setings</a>
                <a class="collapse-item" href="<?php echo base_url('admin/meta/logo'); ?>">Logo</a>
                <a class="collapse-item" href="<?php echo base_url('admin/meta/favicon'); ?>">Favicon</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/menu'); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Menu</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">