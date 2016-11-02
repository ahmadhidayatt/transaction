<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="img/gif" href="main/img/logo.png">
        <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../lib/css/bootstrap.css">
        <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="../main/css/layout.css">
        <link rel="stylesheet" href="../main/css/accordion.css">
        <script type="text/javascript" src="../main/js/accordion.js"></script>
        <script type="text/javascript" src="../main/js/accordion2.js"></script>
           <script type="text/javascript" src="../main/js/reload.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    </head>
     <body onload="muatDaftarData();">
        
        <div class="col-md-8 col-md-offset-2" ng-controller="listContactCtrl">
            <div class="page-header">
                <h1>
                   Menyimpan data di json local storage
                </h1>
                <ul class="nav nav-pills">
                  <li><a id="nav-list-data" href="javascript:void(0);" onclick="gantiMenu('list-data');">Daftar Data</a></li>
                  <li><a id="nav-tambah-data" href="javascript:void(0);" onclick="gantiMenu('tambah-data');">Tambah Data</a></li>
                </ul>

            </div>
            <div id="tambah-data" class="well" style="display:none;">
                <form id="form-data">
                    <div id="name-group" class="form-group">
                        <label>Nama:</label> 
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama anda" /><br/>
                    </div>
                    <div id="alamat-group" class="form-group">
                        <label>Alamat:</label> 
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukan alamat anda" /><br/>
                    </div>
                    <div id="ket-group" class="form-group">
                        <label>Keterangan:</label> 
                        <textarea class="form-control" id="ket" name="ket" placeholder="masukan keterangan"></textarea><br/>
                    </div>
                    <input type="button" value="Simpan" onclick="simpanData();" class="btn btn-success btn-small"/>
                    <input type="reset" value="Reset" onclick="" class="btn btn-warning btn-small"/>
                </form>
            </div>
            <div id="edit-data" class="well" style="display:none;">
                <form id="eform-data">
				
                    <div id="name-group" class="form-group" style="display:none;">
                        <label>id data:</label> 
                        <input type="text" class="form-control" id="eid_data" name="nama" placeholder="" /><br/>
                    </div>
				
                    <div spellcheck="true" id="name-group" class="form-group">
                        <label>Nama:</label> 
                        <input type="text" class="form-control" id="enama" name="nama" placeholder="masukan nama anda" /><br/>
                    </div>
                    <div id="alamat-group" class="form-group">
                        <label>Alamat:</label> 
                        <input type="text" class="form-control" id="ealamat" name="alamat" placeholder="masukan alamat anda" /><br/>
                    </div>
                    <div id="ket-group" class="form-group">
                        <label>Keterangan:</label> 
                        <textarea class="form-control" id="eket" name="ket" placeholder="masukan keterangan"></textarea><br/>
                    </div>
                    <input type="button" value="Simpan" onclick="simpanEditData();" class="btn btn-success btn-small"/>
                    <input type="reset" value="Reset" onclick="" class="btn btn-warning btn-small"/>
                    <input type="button" value="Cancel" onclick="gantiMenu('list-data');" class="btn btn-warning btn-small"/>
                </form>
            </div>
            <div id="list-data" class="well">
                data kosong
            </div>
        </div>
        
    </body>
  
</html>
