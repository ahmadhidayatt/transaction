
function myCreateFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);
    var cell6 = row.insertCell(6);
    var cell7 = row.insertCell(7);
     var cell8 = row.insertCell(8);
    cell0.innerHTML = "<th><input list='value1' placeholder='masukan value'></th>";
    cell1.innerHTML = "<td><input list='senin' placeholder='masukan value'></td>";
    cell2.innerHTML = "<td><input list='selasa' placeholder='masukan value'></td>";
    cell3.innerHTML = "<td><input list='rabu' placeholder='masukan value'></td>";
    cell4.innerHTML = "<td><input list='kamis' placeholder='masukan value'></td>";
    cell5.innerHTML = "<td><input list='jumat' placeholder='masukan value'></td>";
    cell6.innerHTML = "<td><input list='sabtu' placeholder='masukan value'></td>";
    cell7.innerHTML = "<td><input list='minggu' placeholder='masukan value'></td>";
    cell8.innerHTML = "<td><input type='button' value='Delete' onclick='deleteRow(this)'>";
    loaddata();

}
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}
function myDeleteFunction() {
    document.getElementById("myTable").deleteRow(-1);
}


function loaddata() {

    $.getJSON("../tabel.json", function (data) {

        var tabel = data.response;
        var outputhead = '<datalist id="value1">';
        var senin = '<datalist id="senin">';
        var selasa = '<datalist id="selasa">';
        var rabu = '<datalist id="rabu">';
        var kamis = '<datalist id="kamis">';
        var jumat = '<datalist id="jumat">';
        var sabtu = '<datalist id="sabtu">';
        var minggu = '<datalist id="minggu">';

        var i = 0;
        for (i; i < tabel.length; i++) {
            console.log(tabel[i].head);
            outputhead += '<option value= "' + tabel[i].head + '"></option>';
            senin += '<option value= "' + tabel[i].senin + '"></option>';
            selasa += '<option value= "' + tabel[i].selasa + '"></option>';
            rabu += '<option value= "' + tabel[i].rabu + '"></option>';
            kamis += '<option value= "' + tabel[i].kamis + '"></option>';
            jumat += '<option value= "' + tabel[i].jumat + '"></option>';
            sabtu += '<option value= "' + tabel[i].sabtu + '"></option>';
            minggu += '<option value= "' + tabel[i].minggu + '"></option>';

        }



        senin += '</datalist>';
        selasa += '</datalist>';
        rabu += '</datalist>';
        kamis += '</datalist>';
        jumat += '</datalist>';
        sabtu += '</datalist>';
        minggu += '</datalist>';
        outputhead += '</datalist>';
        document.getElementById('mylist').innerHTML += outputhead;
        document.getElementById('mylist').innerHTML += senin;
        document.getElementById('mylist').innerHTML += selasa;
        document.getElementById('mylist').innerHTML += rabu;
        document.getElementById('mylist').innerHTML += kamis;
        document.getElementById('mylist').innerHTML += jumat;
        document.getElementById('mylist').innerHTML += sabtu;
        document.getElementById('mylist').innerHTML += minggu;


    });

}
$(document).ready(function () {
    $('[data-toggle="toggle"]').change(function () {
        $(this).parents().next('.hide').toggle();
    });


    $(".expand").click(function () {
        $("#mytable tbody").show("slow");
    });
    $(".collapse").click(function () {
        $("#mytable tbody").hide("fast");
    });

});
function repeatTest($scope) {
    $scope.people = [
        {name: "Bob", gender: "Male", details: "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa."},
        {name: "Jane", gender: "Female", details: "aaaaaaaaaaaaaaaa"},
        {name: "Bill", gender: "Male", details: "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"}
    ];
}
function expander(id, maxheight, time) {
    var slice = document.getElementById(id);
    var height = Number(slice.style.height.replace('px', ''));
    var expandRate = maxheight / time;
    var i = 0;

    var timer = setInterval(function () {
        height = height + expandRate;

        if (i < time) {
            i++;
            slice.style.height = height + 'px';
        } else {
            clearInterval(timer);
        }
    }, 1);
}

function reducer(id, minHeight, time) {
    var slice = document.getElementById(id);
    var height = Number(slice.style.height.replace('px', ''));
    var collapseRate = Math.abs(height - minHeight) / time;
    var i = 0;

    var timer = setInterval(function () {
        height = height - collapseRate;

        if (i < time) {
            i++;
            slice.style.height = height + 'px';
        } else {
            clearInterval(timer);
        }
    }, 1);
}
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.name+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.extn+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}
 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "../tabel2.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );