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
                            <li class="breadcrumb-item"><a href="#" <i class="ni ni-pin-3 text-primary"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">İletişim</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Varsayılan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card border-0">
                <div id="map-default" class="map-canvas" data-lat="40.748817" data-lng="-73.985428" style="height: 600px;"></div>
            </div>
        </div>
    </div>

<div class=" bg-secondary pb-6" id="contact-send" >
    <div class="col-lg-12 col-12">
        <div class="row">
            <div class="col">
                <div class="card" style="padding: 20px;">
                    <div class="card-header border-0">
                        <h3 class="mb-0">İletişim</h3>
                        <hr>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="subject" class="form-control-label">Konu</label>
                            <input class="form-control" type="text" placeholder="Konu" id="subject">
                        </div>

                        <div class="form-group">
                            <label for="description" class="form-control-label">Mesajınız</label>
                            <textarea class="form-control" placeholder="Mesajınız....." id="description" rows="3"></textarea>
                        </div>

                        <div class="form-group" style="justify-content: center; display: flex;">
                            <button type="button" class="btn btn-outline-success">Gönder</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include  '../layout/footer.php';
?>