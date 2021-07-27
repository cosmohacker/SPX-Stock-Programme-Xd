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
                            <li class="breadcrumb-item"><a href="#"><i class="ni ni-planet text-orange"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Profilim</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Varsayılan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="../../../contents/admin/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="../../../contents/admin/assets/img/theme/team-4.jpg" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-info  mr-4 ">ID</a>
                        <a href="#" class="btn btn-sm btn-default float-right">10/12/2021</a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">22</span>
                                    <span class="description">Arkadaşlar</span>
                                </div>
                                <div>
                                    <span class="heading">10</span>
                                    <span class="description">Paylaşımlarım</span>
                                </div>
                                <div>
                                    <span class="heading">89</span>
                                    <span class="description">Yorumlarım</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="h3">
                            Jessica Jones<span class="font-weight-light">, 27</span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>Bucharest, Romania
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>University of Computer Science
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-profile">
                <div class="card-body pt-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Şifrem </h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-success">Kaydet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Şuanki Şifrem</label>
                            <input type="text" id="current-password" class="form-control" placeholder="Şuanki Şifre">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Yeni Şifre</label>
                            <input type="text" id="new-password" class="form-control" placeholder="Yeni Şifre">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Yeni Şifre Tekrar</label>
                            <input type="text" id="confirm-new-password" class="form-control" placeholder="Yeni Şifre Tekrar">
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-secondary btn-lg btn-block">Gönderi Paylaş</button>
        </div>



        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Bilgilerim </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-success">Kaydet</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Genel Bilgilerim</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kullanıcı Adı</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="Kullanıcı Adı">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">E-mail</label>
                                        <input type="email" id="input-email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">İsim</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="İsim">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Soyisim</label>
                                        <input type="text" id="input-last-name" class="form-control" placeholder="Soyisim">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">İletişim Bilgilerim</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Adresim</label>
                                        <input id="input-address" class="form-control" placeholder="Adres" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">Şehir</label>
                                        <input type="text" id="input-city" class="form-control" placeholder="Şehir">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Ülke</label>
                                        <input type="text" id="input-country" class="form-control" placeholder="Ülke">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Posta Kodu</label>
                                        <input type="number" id="input-postal-code" class="form-control" placeholder="Posta Kodu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Hakkımda</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Hakkımda</label>
                                <textarea rows="4" class="form-control" placeholder="Hakkında bir kaç kelime veya cümle sana kalmış 😋"></textarea>
                            </div>
                        </div>
                        <h6 class="heading-small text-muted mb-4">Diğer</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Doğum Günü</label>
                                        <input class="form-control" type="date" placeholder="Doğum Günü" id="example-date-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">Meslek/Alan</label>
                                        <input type="text" id="input-city" class="form-control" placeholder="Meslek/Alan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Eğitim</label>
                                        <input type="text" id="input-country" class="form-control" placeholder="Eğitim">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Telefon Numarası</label>
                                        <input type="tel" id="input-postal-code" class="form-control" placeholder="Telefon Numarası">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Websitesi</label>
                                        <input class="form-control" type="url" placeholder="Websitesi" id="example-url-input">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Cinsiyet</label>
                                        <select class="form-control" id="gender-dropdown">
                                            <option>Erkek</option>
                                            <option>Kadın</option>
                                            <option>Atak Helikopteri</option>
                                            <option>Diğer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Profil Fotoğrafı</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="profile-picture" lang="en">
                                            <label class="custom-file-label" for="customFileLang">Select file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Profil Arkaplanı</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="profile-wallpepr" lang="en">
                                            <label class="custom-file-label" for="customFileLang">Select file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include  '../layout/footer.php';
    ?>