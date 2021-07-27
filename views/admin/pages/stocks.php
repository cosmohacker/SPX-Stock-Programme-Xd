<?php
include  '../layout/header.php';
include  '../layout/sidenav.php';
include  '../layout/topnav.php';
?>

<style>
    #products-add {
        opacity: 1;
        transition: opacity 1s;
    }

    #products-add.hide {
        opacity: 0;
    }
</style>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="ni ni-single-02 text-yellow"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Ürünler</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Varsayılan</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button onclick="toggleAddProduct()" class="btn btn-sm btn-neutral">Ekle</button>
                    <button onclick="focusSearch()" class="btn btn-sm btn-neutral">Filtrele</button>
                </div>
            </div>
            <!-- Card stats -->
        </div>
    </div>
</div>

<?php include '../php/stocks/add.php'; ?>

<?php include '../php/stocks/list.php'; ?>

<?php
include  '../layout/footer.php';
?>