<div class="alert alert-success alert-dismissible fade show" role="alert" id="user-inserted-success" style="display:none; margin: 42px;">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>Eklendi!</strong> Kullanıcı başarılı bir şekilde kayıt edildi!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="alert alert-danger alert-dismissible fade show" role="alert" id="user-inserted-error" style="display:none; margin: 42px;">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>Hata!</strong> Kullanıcı eklenirken hata oluştu!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="p-4 bg-secondary pb-6" id="users-add" style="display:none;">
    <div class="col-lg-12 col-12">
        <div class="row">
            <div class="col">
                <div class="card" style="padding: 20px;">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Kullanıcı Ekle</h3>
                        <hr>
                    </div>
                    <form action="javascript:void(0)" id="insertUser" name="insertUser" method="POST">
                        <div class="form-group">
                            <label for="username" class="form-control-label">Kullanıcı Adı</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input class="form-control" type="text" minlength="4" maxlength="32" aria-describedby="basic-addon1" onkeyup="checkUsername()" placeholder="Kullanıcı Adı" id="Username" name="Username" required>
                            </div>
                            <span id="username_available" style="display: none;width: 17%;margin-top: 10px; text-transform:none !important;" class="badge badge-danger">Bu Kullanıcı Adı alınmış!</span>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-control-label">E-mail</label>
                            <input class="form-control" type="email" maxlength="72" placeholder="E-Mail" id="Email" name="Email" required>
                            <span id="email_available" style="display: none;width: 17%;margin-top: 10px; text-transform:none !important;" class="badge badge-danger">Bu Email alınmış!</span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-control-label">Şifre</label>
                            <input maxlength="128" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" minlength="8" placeholder="Şifre" id="Password" name="Password" required>
                        </div>

                        <div class="p-4 bg-secondary pb-6" id="message">
                            <h3>Şifreniz şu şekilde olmalı:</h3>
                            <p id="letter" class="invalid"> <b>En az bir küçük harf</b></p>
                            <p id="capital" class="invalid"> <b>En az bir büyük harf</b></p>
                            <p id="number" class="invalid"> <b>En az bir sayı</b></p>
                            <p id="length" class="invalid"><b>Minimum 8 karakter</b></p>
                        </div>

                        <div class="form-group">
                            <label for="confirm-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control-label">Şifre Tekrar</label>
                            <input maxlength="128" class="form-control" type="password" minlength="8" placeholder="Şifre Tekrar" id="Confirm" name="Confirm" required>
                        </div>

                        <div class="p-4 bg-secondary pb-6" id="confirm_message">
                            <h3>Şifrelerin aynı olması gerekir:</h3>
                            <p id="confirm_letter" class="invalid"> <b>Şifreler eşleşti.</b></p>
                        </div>

                        <div class="form-group" style="justify-content: center; display: flex;">
                            <button type="submit" id="btnInsert" class="btn btn-outline-success" disabled>Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>