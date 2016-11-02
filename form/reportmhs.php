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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="../lib/tableExport.js"></script>
        <script type = "text/javascript" src = "../lib/jquery.base64.js" ></script>
        <script type="text/javascript" src="../lib/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="../lib/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="../lib/jspdf/libs/base64.js"></script>
        <script type="text/javascript" src="../lib/html2canvas.js"></script>
    </head>
    <body  >
        <div class="container">
            <div class="wrapper"> 




                <div id="table">
                    <table id="StudentInfoListTable">
                        <thead>
                            <tr>    
                                <th>Name</th>
                                <th>Email</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th>fakultas</th>
                                <th>status</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>alimon  </td>
                                <td>Email</td>
                                <td>ciledug</td>
                                <td>089504210790</td>
                                <td>teknik</td>
                                <td>lajang</td>

                            </tr>               
                        </tbody>
                    </table>
                    <div class="buttoncetak">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" onClick ="$('#table').tableExport({type: 'pdf', escape: 'false'});">download pdf</button>
                            <button type="button" class="btn btn-primary" onClick ="$('#table').tableExport({type: 'json', escape: 'false'});">download json</button>
                            <button type="button" class="btn btn-primary" onClick ="$('#table').tableExport({type: 'excel', escape: 'false'});">download excel</button>

                            <button type="button" class="btn btn-primary" onClick ="$('#table').tableExport({type: 'txt', escape: 'false'});">download txt</button>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
