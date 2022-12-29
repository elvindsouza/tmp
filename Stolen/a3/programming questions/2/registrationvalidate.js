function valid() {
    var bid = document.getElementsByName("bid")[0].value;
    var bpr = document.getElementsByName("bpr")[0].value;
    var cemail = document.getElementsByName("cemail")[0].value;
    var cph = document.getElementsByName("cph")[0].value;

    if (valbid(bid)) {
        if (valprice(bpr)) {
            if (valemail(cemail)) {
                if (valmobo(cph)) {
                    alert("Entry has be recorded!")
                }
            }
        }
    }
}

function valbid(id) {
    var numbers = /^[0-9]+$/;
    if (id.length < 10) {
        if (id.match(numbers)) {
            return true;
        }

        else {
            alert("ID should be a number!")
            return false;
        }
    }
    else {
        alert("ID should be less than 10 characters long")
        return false;
    }
}

function valprice(price) {
    var numbers = /^[0-9]+$/;
    if (price.length < 10) {
        if (price.match(numbers)) {
            return true;
        }

        else {
            alert("Price should be a number!")
            return false;
        }
    }
    else {
        alert("Price cannot be more than 999999999!!");
        return false;
    }
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