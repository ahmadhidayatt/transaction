$(document).ready(function () {
    loaddata();

});


function hitung() {
    var datein = new Date(document.getElementById("checkin").value);
    var jumlah = document.getElementById("lama").value;

    //   var n = datein.toString();

    console.log(datein, jumlah);
    var hasil = datein.getDate() + parseInt(jumlah);

    if (hasil <= 30) {
        var datein = ((parseInt(datein.getMonth()) + 1) + '/' + hasil + '/' + datein.getFullYear());

        console.log(datein);
    } else if (hasil > 30) {
        hasil = hasil - 30;
        var datein = ((parseInt(datein.getMonth()) + 2) + '/' + hasil + '/' + datein.getFullYear());

    } else if (hasil > 60) {
        hasil = hasil - 60;
        var datein = ((parseInt(datein.getMonth()) + 3) + '/' + hasil + '/' + datein.getFullYear());

    } else {

        alert("tidak ada paket");
    }
    document.getElementById("checkout").value = datein;

}
function loaddata() {

    $.getJSON("../tabelflight.json", function (data) {

        var outputFasal = '<datalist id="kota asal">';
        var outputFtujuan = '<datalist id="kotatujuanflight">';
        var outputTasal = '<datalist id="kotaasaltrain">';
        var outputTtujuan = '<datalist id="kotatujuantrain">';
        var outputHtujuan = '<datalist id="kota dikunjungi">';


        var tabel = data.kota;
        var i = 0;
        for (i; i < tabel.length; i++) {
            console.log(tabel[i].head);
            outputFasal += '<option value= "' + tabel[i].bandara + '"><span class="label label-default">' + tabel[i].nama + '</span></option>';
            outputFtujuan += '<option value= "' + tabel[i].bandara + '"><span class="label label-default">' + tabel[i].nama + '</span></option>';
            outputTasal += '<option value= "' + tabel[i].stasiun + '"><span class="label label-default">' + tabel[i].nama + '</span></option>';
            outputTtujuan += '<option value= "' + tabel[i].stasiun + '"><span class="label label-default">' + tabel[i].nama + '</span></option>';
            outputHtujuan += '<option value= "' + tabel[i].nama + '"></option>';
        }
        outputFtujuan += '</datalist>';
        outputFasal += '</datalist>';
        outputTasal += '</datalist>';
        outputTtujuan += '</datalist>';
        outputHtujuan += '</datalist>';
        document.getElementById('datalist').innerHTML += outputFtujuan;
        document.getElementById('datalist').innerHTML += outputFasal;
        document.getElementById('datalist').innerHTML += outputTasal;
        document.getElementById('datalist').innerHTML += outputTtujuan;
        document.getElementById('datalist').innerHTML += outputHtujuan;
    });





}
function login() {

    window.location = "/ahmadd/ahmad/index.html";

}
function registration() {

    alert("belum ada");


}
function caritiketpesawat() {
    var keberangkatan = document.getElementById("Fberangkat").value;
    var tanggalberangkat = document.getElementById("Ftanggalberangkat").value;
    var kedatangan = document.getElementById("Fkedatangan").value;
    var tanggalbalik = document.getElementById("ppinput").value;
    var jumlah = document.getElementById("Fjumlah").value;


    $.getJSON("../tabelflight.json", function (data) {
        var datas = data.tiketpesawat;

        var index = 0;
        try {
            for (index; index < datas.length; index++) {

                if (tanggalberangkat == datas[index].tanggal) {
                    if ((keberangkatan == datas[index].bandarakeberangkatan) && (kedatangan == datas[index].bandarakedatangan) && (parseInt(jumlah) < parseInt(datas[index].max - parseInt(jumlah)))) {
                        alert(datas[index].namapesawat + datas[index].hargastandart);


                    } else {
                        alert("tidak ada armada yang berangkat");
                    }
                } else {
                    alert("tanggal tidak ada");
                }



            }
        } catch (err) {
            alert("adakesalahn" + err);

        }
    });

}


function caritiketkereta() {
    var keberangkatan = document.getElementById("Sberangkat").value;
    var tanggalberangkat = document.getElementById("Stanggalberangkat").value;
    var kedatangan = document.getElementById("Skedatangan").value;
    var tanggalbalik = document.getElementById("ppinput1").value;
    var jumlah = document.getElementById("Sjumlah").value;


    $.getJSON("../tabelflight.json", function (data) {
        var datas = data.tiketkereta;

        var index = 0;
        try {
            for (index; index < datas.length; index++) {

                if (tanggalberangkat == datas[index].tanggal) {
                    if ((keberangkatan == datas[index].stasiunkeberangkatan) && (kedatangan == datas[index].stasiunkedatangan) && (parseInt(jumlah) < parseInt(datas[index].max - parseInt(jumlah)))) {
                        alert(datas[index].namakereta + datas[index].hargastandart);


                    } else {
                        alert("tidak ada armada yang berangkat");
                    }
                } else {
                    alert("tanggal tidak ada");
                }



            }
        } catch (err) {
            alert("adakesalahn" + err);

        }
    });

}

function caritikethotel() {
    var tanggaldatang = document.getElementById("checkin").value;
    var kedatangan = document.getElementById("Hkedatangan").value;
    var jumlah = document.getElementById("lama").value;


    $.getJSON("../tabelflight.json", function (data) {
        var datas = data.tikethotel;

        var index = 0;
        try {
            for (index; index < datas.length; index++) {

                if (tanggaldatang == datas[index].tanggal) {
                    if ((kedatangan == datas[index].kotakedatangan) && (parseInt(jumlah) < parseInt(datas[index].max - parseInt(jumlah)))) {
                        alert(datas[index].namahotel + datas[index].harga2bed);


                    } else {
                        alert("tidak ada armada yang berangkat");
                    }
                } else {
                    alert("tanggal tidak ada");
                }



            }
        } catch (err) {
            alert("adakesalahn" + err);

        }
    });

}

