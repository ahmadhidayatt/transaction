
function drawMenu() {
    //$.post("test.json",function(data){
    checkCookie();


    $.getJSON("test.json", function (data) {
        //  menus = jQuery.parseJSON(data.response);

        menus = data['' + getCookie("login") + ''];
        console.log(menus[0]);
        document.getElementById("framepage").src = "/ahmad/form/" + menus[0].code + ".html";
        var menutlist = new Array();
        $.each(menus, function (i, menu) {
            //insert the departments



            if (menu.groupname != null && $('#' + menu.groupname).length == 0) {
                var str = menu.groupname;
                var replaced = str.replace(/ /g, '_');

                $('#accordion').append('<h3 id=' + menu.groupname + '><li ><a  ><i id="iconmenu"> <img src="main/img/' + replaced + '.png" style="width:15px;"style="height:15px;" /></i> &nbsp;' + menu.groupname + '<i  class="" style="float:right;" ></i></a></li></h3>');
//                $('#accordion').append('<h3 id=' + menu.groupname + '><li>'+
//                                       '    <div>'+
//                                       '        <div style="width: 92%; float: left; ">'+
//                                       '        <a ><i id="iconmenu"> <img src="/hd/main/img/icon/png/'+replaced+'.png" style="width:15px;"style="height:15px;" /></i> &nbsp;' +  menu.groupname + '</a>'+
//                                          '/div>'+
//                                        '    </div>'+           
//                                       '</li></h3>');
                menutlist.push(menu.groupname);
            }
            //insert contacts in the accordion
//            $('#' + menu.groupname).after('<div class ="submenu" ><li><a style="cursor:pointer;" onclick="javascript:buildPage(this,\''+ menu.code + '\',\''+ menu.name +'\',\''+ menu.group + '\',\''+ menu.path + '\' )" ><i > <img src="/hd/main/img/icon/png/'+menu.code+'.png" style="width:15px;"style="height:15px;" /></i>&nbsp;' + menu.name + '</a></li></div>');
            $('#' + menu.groupname).after('<div class ="submenu" ><li>' +
                    '     <div>' +
                    '<div style="width: 92%;  ">' +
                    ' <a style="float:left; cursor:pointer; width:206px" onclick="javascript:buildPage(this,\'' + menu.code + '\',\'' + menu.name + '\',\'' + menu.group + '\',\'/ahmad/form/\' )" >&nbsp;' + menu.name + ' <i  style="cursor:pointer; float:right;" > <img  src="main/img/' + menu.code + '.png" style="width:15px;"style="height:15px; float:right;" /></i ></a > </div>' +
                    '</div>' +
                    '</li></div><br>');



        });
        $.each(menutlist, function (i, list) {
            $("#" + list).nextUntil("h3").wrapAll("<div ></div>");

        });
        $(function () {
            $("#accordion").accordion({
                collapsible: true,
                heightStyle: "content",
                beforeActivate: function (event, ui) {
                    // The accordion believes a panel is being opened
                    if (ui.newHeader[0]) {
                        var currHeader = ui.newHeader;
                        var currContent = currHeader.next('.ui-accordion-content');
                        // The accordion believes a panel is being closed
                    } else {
                        var currHeader = ui.oldHeader;
                        var currContent = currHeader.next('.ui-accordion-content');
                    }
                    // Since we've changed the default behavior, this detects the actual status
                    var isPanelSelected = currHeader.attr('aria-selected') == 'true';

                    // Toggle the panel's header
                    currHeader.toggleClass('ui-corner-all', isPanelSelected).toggleClass('accordion-header-active ui-state-active ui-corner-top', !isPanelSelected).attr('aria-selected', ((!isPanelSelected).toString()));

                    // Toggle the panel's icon
                    currHeader.children('.ui-icon').toggleClass('fa fa-chevron-right', !isPanelSelected).toggleClass('fa fa-chevron-down fa fa-chevron-right', isPanelSelected);

                    // Toggle the panel's content
//                    currContent.toggleClass('accordion-content-active', !isPanelSelected)
                    if (isPanelSelected) {
                        currContent.slideUp();
                    } else {
                        currContent.slideDown();
                    }

                    return false; // Cancels the default action
                }
            });
        });

    }
//   ,'json'
    );
}
function buildPage(pElement, Code, ActivityCodeTitle, group, path) {

    $('li.active').removeClass("active");
    var parentElement = pElement.parentNode;
    parentElement.classList.add("active");
    document.getElementById("framepage").src = path + Code + ".php";




}
;
function checkCookie() {
    var username = getCookie("login");
    if (username != "") {
        alert("Welcome again " + username);

    } else {
        alert("nyodok lu ya?");

    }
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function logout() {
    document.cookie = "login" + "= ;";
    window.location = "index.html";
   
}




document.cookie = name + '='
$(function () {
    var daftar = {
        url: "/ahmadd/ahmad/search.json"
    }
//    $("#tags").autocomplete({
//        source: function (request, response) {
//            $.getJSON("search.json", function (data) {
//                response($.map(data, function (value, key) {
//                    return {
//                        label: value,
//                        value: key
//                    };
//                }));
//            });
//        },
//        minLength: 2,
//        delay: 100
//

//    $.getJSON("search.json", function (data) {
//        daftar = data;
//        console.log(daftar);
//        
//    });


//            source: daftar
    $('#tags').autocomplete({
        delay: 100,
        source: function (request, response) {
            $.getJSON("search.json", function (data) {
                // data is an array of objects and must be transformed for autocomplete to use
                var array = data.error ? [] : $.map(data.source, function (m) {
                    return {
//                        label: m.value + " (" + m.year + ")",
                        label: m.value,
                        url: m.url

                    };
                });
                response(array);
            });
        },
        focus: function (event, ui) {
            // prevent autocomplete from updating the textbox
            event.preventDefault();
        },
        select: function (event, ui) {
            // prevent autocomplete from updating the textbox
            event.preventDefault();
            document.getElementById("framepage").src = "form/" + ui.item.url + ".html";
            // navigate to the selected item's url

        }
    });

});
function footer() {
    $.getJSON("footer.json", function (data) {
        var footer = data.data;
        var output = '';
        for (var i = 0; i < footer.length; i++) {
            console.log(footer[i].name);
            output += '<a class="contentfooter"  data-toggle="modal" data-target="#myModal" onclick="javascript:datamodal(' + footer[i].name + ',' + footer[i].deskripsi + ')">';
            output += footer[i].name;
            output += '&nbsp &nbsp:&nbsp &nbsp';
            output += footer[i].deskripsi;
            output += '</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
        }
        document.getElementById('footer').innerHTML += output;

    });

}
function datamodal(a, b) {
    document.getElementById('head modal').val = a;

}

$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});


   