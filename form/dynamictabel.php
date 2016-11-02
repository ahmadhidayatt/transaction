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
        <script type="text/javascript" src="../lib/jquery/jquery-1.12.4.min.js"></script>

        <link rel="stylesheet" href="../main/css/layout.css">
        <script data-require="angular.js@*" data-semver="1.2.0-rc2" src="http://code.angularjs.org/1.2.0-rc.2/angular.js"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="../main/js/accordion.js"></script>
        <script type="text/javascript" src="../main/js/accordion2.js"></script>
        <script src="../main/js/dynamictabel.js"></script>
        <script src="../main/js/game.js"></script>
        <link rel="stylesheet" href="../main/css/dynamictabel.css"> 
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">




    </head>
    <body ng-app="">
        <table id="myTable">
            <div id="mylist">
                <datalist id="">
                    <option value="a"></option>
                </datalist>
            </div>
            <tr>
                <th>&nbsp;</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>kamis</th>
                <th>jumat</th>
                <th>sabtu</th>
                <th>minggu</th>
            </tr>
            <tr>
                <th scope="row">TI-A</th>
                <td>Basis Data</td>
                <td>Desain Web</td>
                <td>Matematik</td>
                <td>b.indonesia</td>
                <td>agama</td>
                <td>libur</td>
                <td>libur</td>
            </tr>
            <tr>
                <th>TI-B</th>
                <td>Desain Web</td>
                <td>Struktur Data</td>
                <td>Basis Data</td>
                <td>b.inggris</td>
                <td>agama</td>
                <td>pramuka</td>
                <td>libur</td>
            </tr>
            <tr>
                <th>TI-C</th>
                <td>Struktur Data</td>
                <td>Pemrograman</td>
                <td>Matematika</td>
                <td>b.arab</td>
                <td>agama</td>
                <td>libur</td>
                <td>libur</td>
            </tr>
        </table>

        <div class="btn-group">
            <button type="button" class="btn btn-primary" onClick ="myCreateFunction()">create</button>
            <button type="button" class="btn btn-primary" onClick ="myDeleteFunction()">delete</button>
        </div>
        <hr>

        <table>
            <thead>
                <tr>
                    <th>Divisi</th>
                    <th>2013</th>
                    <th>2014</th>
                    <th>2015</th>
                    <th>2016</th>
                </tr>
            </thead>
            <tbody>
            <tbody class="labels">
                <tr>
                    <td colspan="5" >
                        <label for="accounting">Accounting</label>
                        <input type="checkbox" name="accounting" id="accounting"  data-toggle="toggle">
                    </td>
                </tr>
            </tbody>
            <tbody class="hide" id="accounting">
                <tr>
                    <td>Australia</td>
                    <td>$7,685</td>
                    <td>$3,544</td>
                    <td>$5,834</td>
                    <td>$10,583</td>
                </tr>
                <tr>
                    <td>Indonesia</td>
                    <td>$7,68</td>
                    <td>$3,54</td>
                    <td>$5,83</td>
                    <td>$10,58</td>
                </tr>

            </tbody>
            <tbody class="labels">
                <tr>
                    <td colspan="5">
                        <label for="management">Management</label>
                        <input type="checkbox" name="management" id="management" data-toggle="toggle">
                    </td>
                </tr>
            </tbody>
            <tbody class="hide">
                <tr>
                    <td>Australia</td>
                    <td>$7,685</td>
                    <td>$3,544</td>
                    <td>$5,834</td>
                    <td>$10,58</td>
                </tr>
                <tr>
                    <td>Central America</td>
                    <td>$7,6</td>
                    <td>$3,5</td>
                    <td>$5,8</td>
                    <td>$10,5</td>
                </tr>
            </tbody>        
        </tbody>
    </table>

    <hr>

    <div ng-controller="repeatTest">
        <table>
            <thead style="background-color: lightgray;">
                <tr>
                    <td style="width: 30px;"></td>
                    <td>
                        Name
                    </td>
                    <td>Gender</td>
                </tr>  
            </thead>
            <tbody>
                <tr ng-repeat-start="person in people">
                    <td>
                        <button ng-if="person.expanded" ng-click="person.expanded = false">-</button>
                        <button ng-if="!person.expanded" ng-click="person.expanded = true">+</button>
                    </td>
                    <td>{{person.name}}</td>
                    <td>{{person.gender}}</td>
                </tr>
                <tr ng-if="person.expanded" ng-repeat-end="">
                    <td colspan="3">{{person.details}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <button class="expand" href="#">Expand</button> | <button class="collapse" href="#">Collapse</button><hr />
    <table id="mytable">
        <thead>
            <tr>
                <td>
                    HEAD
                </td>
                <td>
                    HEAD
                </td>
                <td>
                    HEAD
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Demo
                </td>
                <td>
                    Demo
                </td>
                <td>
                    Demo
                </td>
            </tr>
            <tr>
                <td>
                    Demo
                </td>
                <td>
                    Demo
                </td>
                <td>
                    Demo
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table cellpadding='0' cellspacing='0' style='width: 500px;'>
        <tr>
            <td colspan='3' style="background: #ddd; ">top content</td>
        </tr>
        <tr>
            <td style="background: #fcc;  vertical-align: top;" onclick="reducer('as', 10, 50);">CLOSE</td>
            <td id='as' style="background: #cfc; vertical-align: top;" onclick="expander(this.id, 500, 50);">OPEN</td>
            <td style="background: #ccf; width:200px;">col3</td>
        </tr>
        <tr>
            <td colspan='3' style="background: #ddd; ">bottom content</td>
        </tr>
    </table>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    <hr>
    <br><br>
    
    

</body>

</html>

</body>
</html>
