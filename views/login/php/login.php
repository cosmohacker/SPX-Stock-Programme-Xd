<form action="javascript:void(0)" id="login" name="login" method="POST" class="login100-form validate-form">
    <span class="login100-form-title">
        Kullanıcı Girişi
    </span>

    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="Username" id="Username" placeholder="Kullanıcı Adı veya Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>
    <span id="username-tooltip" style="display: none;" name="username-tooltip" class="custom-span">Böyle bir Kullanıcı Adı veya Email yok.</span>

    <div class="wrap-input100 validate-input" data-validate="Password is required" style="margin-top: 20px;">
        <input class="input100" type="password" name="Password" id="Password" placeholder="Şifre">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    <span id="password-tooltip" style="display: none;" name="username-tooltip" class="custom-span">Girdiğiniz veriler eşleşmiyor / kayıtlı değil!</span>

    <div class="container-login100-form-btn">
        <button type="submit" id="btnLogin" class="login100-form-btn">
            GİRİŞ
        </button>
    </div>

    <div class="text-center p-t-12">
        <span style="color: white;" class="txt1">
            Kullanıcı Adımı / Şifremi
        </span>
        <a style="color: black;" class="txt2" href="#">
            Unuttum ?
        </a>
    </div>

    <div class="text-center p-t-136">
        <a class="txt2" href="../home/master.php">
            Anasayfaya Dön
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>