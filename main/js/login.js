function ceklogin() {

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
//    console.log(username);
//    console.log(password);

    $.getJSON("datauser.json", function (data) {
        var user = data.response;
//        console.log(user);
        var index = 0;
        try {
            for (index; index <= user.length; index++) {
                console.log(user[index].username);

                if (username == user[index].username) {
                    if (password == user[index].password) {

                        setCookie("login", user[index].username);
                        window.location = "home.html";

                    } else {
                        alert("password salah");
                    }
                }


            }
        } catch (err) {
            alert("adakesalahn" + err);

        }
    });


}
;

function setCookie(cname, cvalue) {
    var d = new Date();

    var cookie = document.cookie = cname + "=" + cvalue + ";";
    alert("selamat datang" + cookie);
}
function Captcha() {
    var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    var i;
    for (i = 0; i < 6; i++) {
        var a = alpha[Math.floor(Math.random() * alpha.length)];
        var b = alpha[Math.floor(Math.random() * alpha.length)];
        var c = alpha[Math.floor(Math.random() * alpha.length)];
        var d = alpha[Math.floor(Math.random() * alpha.length)];
        var e = alpha[Math.floor(Math.random() * alpha.length)];
        var f = alpha[Math.floor(Math.random() * alpha.length)];
        var g = alpha[Math.floor(Math.random() * alpha.length)];
    }
    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
    document.getElementById("mainCaptcha").value = code;
}
function ValidCaptcha() {
    var stringa = removeSpaces(document.getElementById('mainCaptcha').value);
    var stringb = removeSpaces(document.getElementById('txtInput').value);
    var string1 = stringa.toLowerCase();
    var string2 = stringb.toLowerCase();
    if (string1 === string2) {

        ceklogin();

    } else {
        alert("captcha salah");
        return false;

    }
}
function removeSpaces(string) {
    return string.split(' ').join('');
}
