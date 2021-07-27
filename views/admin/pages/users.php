<?php
include  '../layout/header.php';
include  '../layout/sidenav.php';
include  '../layout/topnav.php';
?>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="ni ni-bullet-list-67 text-default"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Kullanıcılar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Varsayılan</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button onclick="toggleAddUser()" class="btn btn-sm btn-neutral">Ekle</button>
                    <button onclick="focusSearchUser()" class="btn btn-sm btn-neutral">Filtrele</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../php/users/add.php'; ?>

<?php include '../php/users/list.php'; ?>

<?php
include  '../layout/footer.php';
?>