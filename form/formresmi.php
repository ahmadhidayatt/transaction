<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Schedule</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"  />
        <script  src="https://code.jquery.com/jquery-1.12.3.js" ></script> 
        <script  src="../lib/js/jquery.datatables.js" ></script> 
        <script src="../main/js/formresmi.js" ></script>
        <link rel="stylesheet" href="../lib/css/bootstrap.css">
        <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="../main/css/formresmi.css">
  </head>
    <body >
        <div class="container-fluid" >
            <div id="dvContainer">
                <div id="result"> </div>
                <div class="row" >
                    <div class=" col-xs-12 col-sm-8 col-lg-8">
                        <div class=" table-responsive">
                            <table  class="table ">
                                <tr>
                                <ul class="list-group">
                                    <td style="border : none;"><li class="list-group-item"><a>schedule number  &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</a><input type='text'value="15108059" /></li> </td>

                                </ul>
                                </tr>
                                <tr>
                                <ul class="list-group">
                                    <td style="border : none;"><li class="list-group-item"><a>schedule date  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</a><input type='text'value="2016/12/10" /></li></td>

                                </ul>
                                </tr>
                                <tr>
                                <ul class="list-group">
                                    <td style="border : none;"><li class="list-group-item"><a>schedule status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</a><input type='text'value="schedule FTI" /></li></td>

                                </ul>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item"></li>
                            <li class="list-group-item"><h2>SCHEDULE</h2></li>
                        </ul>
                    </div>
                </div>
                <li style="border-top: solid 3px black; margin-bottom: 9px;"></li>
                <div class="row">
                    <div class=" col-xs-12 col-sm-12 col-lg-12 ">
                        <div class="table-responsive">
                            <form action="inserttable.php" method="post" id="formtable">
                                <table class="table table-hover table-bordered" id="example" class="display" cellspacing="0" width="100%" >

                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Kelas</th>
                                            <th>Senin</th>
                                            <th>Selasa</th>
                                            <th>Rabu</th>
                                            <th>kamis</th>
                                            <th>jumat</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        include '../main/php/dbconfig.php';
                                        $result = mysql_query("SELECT * FROM form ");
                                        $indexinsert = 0;
                                        $dServer = array();

                                        $rows = array();
                                        while ($row = mysql_fetch_assoc($result)) {
                                            $rows[] = $row;
                                        }
                                        ?>   
                                    <script type='text/javascript'>
                                        var rows = <?php echo json_encode($rows); ?>;
//                                       

                                        var rows_arr = rows.toString().split(',');

                                        for (var i = 0; i < rows_arr.length; i++) {

                                            document.write("<tr><th><input type='checkbox' class='cekas' name='cek[] id='cek[]'  value='" + rows[i]['id'] + "'  /></th>",
                                                    "<th ><input type='text' value='" + rows[i]['kelas'] + "' style='width:60px;' name='kelasas[]'></th>",
                                                    " <td ><input type='text' value='" + rows[i]['senin'] + "'style='width:260px;'  name='seninas[]'><ul><li><input type='text' value='" + rows[i]['detail'] + "'style='width:100%;' name='detailas[]'></li></ul></td>",
                                                    "<td ><input type='text' value='" + rows[i]['selasa'] + "'style='width:100%;' name='selasaas[]'></td>",
                                                    " <td ><input type='text' value='" + rows[i]['rabu'] + "'style='width:100%;' name='rabuas[]'></td>",
                                                    "<td ><input type='text' value='" + rows[i]['kamis'] + "'style='width:100%;' name='kamisas[]'></td>",
                                                    "<td ><input type='text' value='" + rows[i]['jumat'] + "'style='width:100%;' name='jumatas[]'></td></tr>");
                                        }
                                    </script>
                                    <?php mysql_close($connector); ?>                          

                                    </tbody>

                                </table>



                                <div class="btn-group">
                                    <button type="button" class="btn btn-link" id="addRow"><img src="../main/img/craeted.png" style="height:20px;" /></button>
                                    <button type="button" class="btn btn-link" onclick="aprint();"> <img src="../main/img/printed.png" style="height:20px;" /></button>
                                    <button type="button" class="btn btn-link"id="deleted"> <img src="../main/img/deleted.png" style="height:20px;" /></button>
                                    <!--                                    <button type="submit" class="btn btn-primary" > save</button>-->
                                    <button type="button" class="btn btn-link" id="updated"> <img src="../main/img/saved.png" style="height:20px;" /></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <li style="border-top: solid 3px black; margin-bottom: -20px;"></li>
                <div class="row">
                    <div class=" col-xs-6 col-sm-8 ">
                        <div class="table">
                            <table  class="table ">
                                <tr>
                                <ul class="list-group">
                                    <td style="border : none;" ><li class="list-group-item"><a>product by  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</a><input type='text'value="easysoft" /></li> </td>

                                </ul>
                                </tr>


                            </table>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-sm-4 ">
                        <table  class="table ">
                            <tr>
                            <ul class="list-group">
                                <td style="border : none;"><li class="list-group-item"><a>verified by  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</a><input type='text'value="easysoft" /></li> </td>

                            </ul>
                            </tr>
                            <tr>
                            <ul class="list-group">
                                <td style="border : none;"><li class="list-group-item"><a>approved by &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</a><input type='text'value="trilogy university" /></li></td>

                            </ul>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
