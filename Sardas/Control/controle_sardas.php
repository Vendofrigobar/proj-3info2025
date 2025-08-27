<?php
if($sardasAvoMaterno){
    if($sardasAvoMaterna){
        echo "Sardas nos dois lados da família!";
    } else {
        echo "Sardas apenas do lado materno!";
    }

} else {
    if($sardasAvoMaterna){
        echo "Sardas apenas do lado paterno!";
    } else {
        echo "Sem sardas na família!";
    }
}
?>