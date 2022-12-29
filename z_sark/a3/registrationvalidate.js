function valid() {
    var custname = document.getElementsByName("cust_name")[0].value;
    var address = document.getElementsByName("addy")[0].value;
    var gender = document.getElementsByName("sex")[0].value;
    var city = document.getElementsByName("city")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
    var email = document.getElementsByName("email")[0].value;

    if (valname(custname)) {
        if (valaddress(address)) {
            if (valsex(gender)) {
                if (valcity(city)) {
                    if (valmobo(phone)) {
                        if (valemail(email)) {
                            alert("User Registered Successfully.");
                        }
                    }
                }
            }   
        }
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

function valaddress(address) {
    var addy = /^[a-zA-Z0-9\s,.'-]{3,}$/
    if (address.match(addy)) {
        return true;
    }
    else {
        alert("Address is invalid.");
        return false;
    }
}

function valsex(sex) {
    if (sex === "Male" || sex === "Female") {
        return true;
    }
    else {
        alert("Gender is invalid!");
        return false;
    }
}

function valcity(city) {
    var c = /.+/
    if (city.match(c)) {
        return true;
    }
    else {
        alert("Invalid city name!");
        return false;
    }
}