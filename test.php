<?php
    $s=new PDO("mysql:host=localhost;dbname=schedb","root","noaH0925wapli");
    print "接続OK<br>";

    $re=$s->query("SELECT lec FROM kleccansel");
    while($kekka=$re->fetch()){
        print $kekka[0];
        //print ":";
        //print $kekka[1];
        //print"\t";
        //print ":";
        //print $kekka[2];
        //print ":";
        //print $kekka[3];*/
        print "<br>";
        
    }
    
?>