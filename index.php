<html>
    <head>
        <title>Dia <?php echo date('d');?></title>
        <meta http-equiv="refresh" content="30">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <script>
    function clockRotate(){
    var getMinHand=document.querySelector("#min");
    var getSecHand=document.querySelector("#sec");
    var getHrHand=document.querySelector("#hr");

    var getDate=new Date();
    var getSecond=getDate.getSeconds() /60;
    var getMinute=getDate.getMinutes()/60;
    var getHour=getDate.getHours()/12;

    getSecHand.style.transform="rotate(" + (getSecond*360) + "deg)";
    getMinHand.style.transform="rotate(" + (getMinute*360) + "deg)";
    getHrHand.style.transform="rotate(" + (getHour*360) + "deg)";
    document.querySelector(".reading").innerHTML=getDate.getSeconds();
    
    setTimeout(clockRotate , 1000);
}
window.onload = clockRotate
   </script>
    <body>
        <h1>Estamos em <?php echo date('Y');?></h1>
        <p>
            Agora são <?php echo date('H'); ?> horas e <?php echo date('i'); ?> minutos.
        </p>
        <?php
            $t = date('H');
            if ($t <= "12") {
              echo "Bom Dia";
            } elseif ($t < "18") {
              echo "Boa tarde";
            } else {
              echo "Boa noite";
            }
        ?>
        <div class="clock">
            <div class="clock-container">
                <div class="reading"></div>
                <div class="clock-hand" id="sec"><div class="second"></div></div>
                <div class="clock-hand" id="min"><div class="minute"></div></div>
                <div class="clock-hand" id="hr"><div class="hour"></div></div>
            </div>
        </div>
    </body>
</html> 