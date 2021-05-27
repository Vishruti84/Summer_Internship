<style>
*{
    text-align:center;
    font-size:17px;
}
    h2{
        text-align:center;
        color:#111;
        font-size:20px;
        font-weight:600;
        font-family:verdana;
    }
    

</style>
<?php
    echo "<h2>This is the php code for SWITCH statement to check the validity of your Age to Cast Vote:-</h2>";
echo "<br><br><br>";
    $age = 20;
    switch ($age) {
        case '15':
            echo "You are not eligible to cast vote.";
            break;
        case '18':
            echo "You are  eligible to cast vote.";
            break;
         case '20':
            echo "You are above 18 and eligible to cast vote.";
            break;
        
        default:
            echo "Wait for few years to turn 18";
            break;
    }
?>
<br><br>
<?php
    echo "<h2>This is the php code for SWITCH statement to check the validity of your Age to Cast Vote under 15:-</h2>";
echo "<br><br><br>";
    $age = 14;
    switch ($age) {
        case '14':
            echo "You are not eligible to cast vote.";
            break;
        case '19':
            echo "You are  eligible to cast vote.";
            break;
         case '20':
            echo "You are above 18 and eligible to cast vote.";
            break;
        
        default:
            echo "Wait for few years to turn 18";
            break;
    }
?>