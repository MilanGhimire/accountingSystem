<?php
$active = 'contact';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>

<!DOCTYPE html>
<html>
<head>
<title>Try jQuery Online</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    
    $.get("https://api.apixu.com/v1/current.json?key=533920d31cc44af491660306182603&q=Kathmandu", function(data, status){ 
        $("div.text").text(data.current.condition.text);
        $("div.temp").text(data.current.temp_c);
    })
    
});

</script>

</head>
<body>
<div class="text">
    
</div>
<div class="temp">
    
</div>
</body>
</html>