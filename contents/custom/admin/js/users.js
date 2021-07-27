function toggleAddUser() {
    var addUser = document.getElementById("users-add");
    if (addUser.style.display === "none") {
        addUser.classList.remove("hide");
        setTimeout(function() {
            addUser.style.display = "block";
        }, 1000);
    } else {
        addUser.classList.add("hide");
        setTimeout(function() {
            addUser.style.display = "none";
        }, 1000);
    }
}

function focusSearchUser() {
    document.getElementById("search-users").focus();
}

var username_tooltip = document.getElementById("username_available");
var email_tooltip = document.getElementById("email_available");
var c_letter = document.getElementById("confirm_letter");
var btnInsert = document.getElementById("btnInsert");
var password = document.getElementById("Password");
var username = document.getElementById("Username");
var confirm = document.getElementById("Confirm");
var capital = document.getElementById("capital");
var letter = document.getElementById("letter");
var number = document.getElementById("number");
var length = document.getElementById("length");
var email = document.getElementById("Email");

var bool_username = false;
var bool_capital = false;
var bool_letter = false;
var bool_number = false;
var bool_length = false;
var bool_same = false;
var bool_mail = false;

password.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

password.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
password.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (password.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
        bool_letter = true;
        checkValidations();
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
        bool_letter = false;
        checkValidations();
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (password.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        bool_capital = true;
        checkValidations();
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
        bool_capital = false;
        checkValidations();
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (password.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        bool_number = true;
        checkValidations();
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
        bool_number = false;
        checkValidations();
    }

    // Validate length
    if (password.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        bool_length = true;
        checkValidations();
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        bool_length = false;
        checkValidations();
    }
}

confirm.onfocus = function() {
    document.getElementById("confirm_message").style.display = "block";
}

confirm.onblur = function() {
    document.getElementById("confirm_message").style.display = "none";
}

confirm.onkeyup = function() {
    var password_char = document.getElementById("Password").value;
    var confirm_char = document.getElementById("Confirm").value;

    if (password_char != confirm_char) {
        c_letter.classList.add("invalid");
        c_letter.classList.remove("valid");
        bool_same = false;
        checkValidations();
    } else {
        c_letter.classList.remove("invalid");
        c_letter.classList.add("valid");
        bool_same = true;
        checkValidations();
    }
}

function checkValidations() {
    if (bool_length && bool_capital && bool_letter && bool_number && bool_same && bool_username) {
        btnInsert.disabled = false;
    } else {
        btnInsert.disabled = true;
    }
}

$('#insertUser').submit(function() {
    $.ajax({
        type: "POST",
        url: "../php/users/ajax/insert.php",
        data: $(this).serialize(),
        success: function(result) {
            var userInserted = document.getElementById("user-inserted-success");
            if (userInserted.style.display === "none") {
                userInserted.style.display = "block";
                setTimeout(function() {
                    userInserted.style.display = "none";
                }, 10000);
            } else {
                userInserted.style.display = "none";
            }
            document.getElementById("Email").value = "";
            document.getElementById("Password").value = "";
            document.getElementById("Confirm").value = "";
            document.getElementById("Username").value = "";

            bool_username = false;
            bool_capital = false;
            bool_letter = false;
            bool_number = false;
            bool_length = false;
            bool_same = false;
            bool_mail = false
            btnInsert.disabled = true;

            $("#users-list").load(window.location.href + " #users-list  ");

        },
        error: function(result) {
            var userNotInserted = document.getElementById("user-inserted-error");
            if (userNotInserted.style.display === "none") {
                userNotInserted.style.display = "block";
                setTimeout(function() {
                    userNotInserted.style.display = "none";
                }, 10000);
            } else {
                userNotInserted.style.display = "none";
            }
        }
    });
});

$('#Username').keyup(function() {
    $.ajax({
        type: "GET",
        url: "../php/users/ajax/usernames.php",
        data: $(this).serialize(),
        success: function(result) {
            username_tooltip.classList.remove("badge-danger");
            username_tooltip.classList.add("badge-success");
            username_tooltip.innerText = "Kullanıcı Adı Kullanılabilir";
            if (username_tooltip.style.display === "none") {
                username_tooltip.style.display = "block";
            }

            if (username.value.length === 0) {
                username_tooltip.style.display = "none";
                bool_username = false;
            }

            bool_username = true;
        },
        error: function(result) {
            username_tooltip.classList.add("badge-danger");
            username_tooltip.classList.remove("badge-success");
            username_tooltip.innerText = "Bu Kullanıcı Adı alınmış!";
            if (username_tooltip.style.display === "none") {
                username_tooltip.style.display = "block";
            }

            if (username.value.length === 0) {
                username_tooltip.style.display = "none";
                bool_username = false;
            }

            bool_username = false;
        }
    });
});

$('#search-users').keyup(function() {
    $.ajax({
        type: "POST",
        "processing": true,
        "serverSide": true,
        url: "../php/users/list.php",
        dataType: "json",
        data: $(this).serialize(),
        success: function(result) {
            $('#filtered').html(data.html);
        },
        error: function(result) {}
    });
});

$('#Email').keyup(function() {
    $.ajax({
        type: "GET",
        url: "../php/users/ajax/mails.php",
        data: $(this).serialize(),
        success: function(result) {
            email_tooltip.classList.remove("badge-danger");
            email_tooltip.classList.add("badge-success");
            email_tooltip.innerText = "Email Kullanılabilir";
            if (email_tooltip.style.display === "none") {
                email_tooltip.style.display = "block";
            }

            if (email.value.length === 0) {
                email_tooltip.style.display = "none";
                bool_mail = false;
            }

            bool_mail = true;
        },
        error: function(result) {
            email_tooltip.classList.add("badge-danger");
            email_tooltip.classList.remove("badge-success");
            email_tooltip.innerText = "Bu Email alınmış!";
            if (email_tooltip.style.display === "none") {
                email_tooltip.style.display = "block";
            }
            if (email.value.length === 0) {
                email_tooltip.style.display = "none";
                bool_mail = false;
            }
            bool_mail = false;
        }
    });
});

$(document).ready(function($) {
    $('#addNewUser').click(function() {
        $('#userInserUpdateForm').trigger("reset");
        $('#userModel').html("Add New User");
        $('#user-model').modal('show');
    });
    $('body').on('click', '.edit', function() {
        var id = $(this).data('id');
        // ajax
        $.ajax({
            type: "POST",
            url: "edit.php",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                $('#userModel').html("Edit User");
                $('#user-model').modal('show');
                $('#id').val(res.id);
                $('#name').val(res.name);
                $('#age').val(res.age);
                $('#email').val(res.email);
            }
        });
    });
    $('body').on('click', '.delete', function() {
        if (confirm("Delete Record?") == true) {
            var id = $(this).data('id');
            // ajax
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    $('#name').html(res.name);
                    $('#age').html(res.age);
                    $('#email').html(res.email);
                    window.location.reload();
                }
            });
        }
    });

    $('#update').submit(function() {
        // ajax
        $.ajax({
            type: "POST",
            url: "insert-update.php",
            data: $(this).serialize(), // get all form field value in 
            dataType: 'json',
            success: function(res) {
                window.location.reload();
            }
        });
    });
});