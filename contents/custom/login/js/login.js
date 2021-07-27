var username_tooltip = document.getElementById("username-tooltip");
var password_tooltip = document.getElementById("password-tooltip");

$('#login').submit(function () {
    $.ajax({
        type: "POST",
        url: "../login/ajax/login.php",
        data: $(this).serialize(),
        success: function (result) {
            if (password_tooltip.style.display === "block") {
                password_tooltip.style.color = 'green';
                password_tooltip.innerText = "Yönlendiriliyorsunuz lütfen bekleyin...";
                setTimeout(function () {
                    window.location.replace("../admin/pages/home.php");
                }, 5000);
            } else if (password_tooltip.style.display === "none") {
                password_tooltip.style.color = 'green';
                password_tooltip.innerText = "Yönlendiriliyorsunuz lütfen bekleyin...";
                setTimeout(function () {
                    window.location.replace("../admin/pages/home.php");
                }, 5000);

            }
        },
        error: function (result) {
            if (password_tooltip.style.display === "none") {
                password_tooltip.style.display = "block";
                password_tooltip.style.color = 'red';
                password_tooltip.innerText = "Girdiğiniz veriler eşleşmiyor / kayıtlı değil!";
            } else if (password_tooltip.style.display === "block") {
                password_tooltip.style.display = "block";
                password_tooltip.style.color = 'red';
                password_tooltip.innerText = "Girdiğiniz veriler eşleşmiyor / kayıtlı değil!";
            }
        }
    });
});

$('#Username').keyup(function () {
    $.ajax({
        type: "GET",
        url: "../login/ajax/usernames.php",
        data: $(this).serialize(),
        success: function (result) {
            if (username_tooltip.style.display === "block") {
                username_tooltip.style.color = 'green';
                username_tooltip.innerText = "Kullanıcı Adı / Email Kayıtlı";
            }
        },
        error: function (result) {
            if (username_tooltip.style.display === "none") {
                username_tooltip.style.display = "block";
                username_tooltip.style.color = 'red';
                username_tooltip.innerText = "Böyle bir Kullanıcı Adı veya Email yok.";
            } else if (username_tooltip.style.display === "block") {
                username_tooltip.style.display = "block";
                username_tooltip.style.color = 'red';
                username_tooltip.innerText = "Böyle bir Kullanıcı Adı veya Email yok.";
            }
        }
    });
});