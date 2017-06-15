<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="src/bootstrap.min.js"></script>

<center>
    <div class="row">
        <br><br>
        <div class="col-sm-4"><img src="pics/c.png" width="300" height="200" title="C"></div>
        <div class="col-sm-4"><img src="pics/cpp.png" width="200" height="200" title="c++"></div>
        <div class="col-sm-4"><img src="pics/shell.png" width="200" height="200" title="Bash"></div>
    </div><br><br>
        <div class="row">
        <div class="col-sm-4"><img src="pics/Java.png" width="300" height="200" title="Java"></div>
        <div class="col-sm-4"><img src="pics/C%23.png" width="300" height="200" title="C#"></div>
        <div class="col-sm-4"><img src="pics/python.png" width="300" height="200" title="Python"></div>
    </div><br><br>
        <div class="row">
        <div class="col-sm-4"><img src="pics/sql.png" width="300" height="200" title="Sql"></div>
        <div class="col-sm-4"><img src="pics/mysql.png" width="300" height="200" title="Mysql"></div>
        <div class="col-sm-4"><img src="pics/ds.png" width="300" height="200" title="Datastructures"></div>
    </div><br><br>
     <div class="row">
        <div class="col-sm-4"><img src="pics/perl.png" width="300" height="200" title="Perl"></div>
        <div class="col-sm-4"><img src="pics/ruby.png" width="300" height="200" title="Ruby"></div>
        <div class="col-sm-4"><img src="pics/php.png" width="300" height="200" title="Php"></div>
    </div><br><br>
     <div class="row">
        <div class="col-sm-4"><img src="pics/js.png" width="300" height="200" title="Javascript"></div>
        <div class="col-sm-4"><img src="pics/hc.png" width="300" height="200" title="Html Css"></div>
        <div class="col-sm-4"><img src="pics/vb.png" width="300" height="200" title="VB.Net"></div>
    </div><br><br>
    </center>