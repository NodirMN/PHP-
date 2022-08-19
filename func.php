<?php
function counr_app(){
    static $count=0;
    $count++ ;
    echo "Raqam: $count". "<br>";
}