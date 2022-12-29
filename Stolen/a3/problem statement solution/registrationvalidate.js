function valid() {
    var fullname = document.getElementsByName("fullname")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var mobo = document.getElementsByName("phone")[0].value;
    var pwd = document.getElementsByName("pwd")[0].value;
    var rpwd = document.getElementsByName("rpwd")[0].value;
    var username = document.getElementsByName("uname")[0].value;

    if (unamevalidate(username)) {
        if (valname(fullname)) {
            if (valmobo(mobo)) {
                if (valemail(email)) {
                    if (valpass(pwd)) {
                        if (valrpass(pwd, rpwd)) {
                            alert("User Registered Successfully.");
                        }
                    }
                }
            }
        }
    }
}

function unamevalidate(uname) {
    var usernameRegex = /^[a-zA-Z0-9]+$/;
    if (uname.match(usernameRegex) && uname.length > 3 && uname.length < 25) {
        return true;
    }
    else {
        alert("Invalid username");
        return false;
    }
}

function valname(name) {
    var letters = /^[A-Za-z]+$/;
    if (name.match(letters))
        return true;
    else {
        alert("Name must have alphabet characters only.");
        return false;
    }
}

function valrpass(pwd, rpwd) {
    if (rpwd.length == 0) {
        alert("Confirm Password field doesnot empty.");
        return;
    }
    if (rpwd == pwd)
        return true;
    else {
        alert("Confirm Password doesnot Matched.");
        return false;
    }
}

function valpass(pwd) {
    if (pwd.length < 8) {
        alert("Error: Password must contain at least 8 characters!");
        return false;
    }
    re = /[0-9]/;
    if (!re.test(pwd)) {
        alert("Error: password must contain at least one number (0-9)!");
        return false;
    }
    re = /[a-z]/;
    if (!re.test(pwd)) {
        alert("Error: password must contain at least one lowercase letter (a - z)!");
        return false;
    }
    re = /[A-Z]/;
    if (!re.test(pwd)) {
        alert("Error: password must contain at least one uppercase letter (A - Z)!");
        return false;
    }
    return true;
}

function valmobo(mobo) {
    var numbers = /^[0-9]+$/;
    if (mobo.length == 10) {
        if (mobo.match(numbers))
            return true;
        else {
            alert("Mobile Number should be in Number format only.");
            return false;
        }
    }
    else {
        alert("Invalid Mobile number");
        return false;
    }
}

function valemail(email) {
    var mformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.match(mformat)) {
        return true;
    }
    else {
        alert("Invalid E-mail ID");
        return false;
    }
}