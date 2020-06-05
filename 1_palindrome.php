<?php 

$string = "afoolishconsistencyisthehobgoblinoflittlemindsadoredbylittlestatesmenandphilosophersanddivineswithconsistencyagreatsoulhassimplynothingtodohemayaswellconcernhimselfwithhisshadowonthewallspeakwhatyouthinknowinhardwordsandtomorrowspeakwhattomorrowthinksinhardwordsagainthoughitcontradicteverythingyousaidtodayahsoyoushallbesuretobemisunderstoodisitsobadthentobemisunderstoodpythagoraswasmisunderstoodandsocratesandjesusandlutherandcopernicusandgalileoandnewtonandeverypureandwisespiritthatevertookfleshtobegreatistobemisunderstood";

$split = str_split($string);

$result = false;

for ($i = 0; $i <= count($split); $i++) {
    $count = $i;
    for ($h = 0; $h <= count($split); $h++) {
        $s = substr($string, $count, -$h);
        $r = strrev($s);
        
        if ( $s && $r && $s == $r && strlen($s) > 2) {                        
            $result = strlen($r) > strlen($result) ? $r : $result;            
        }        
    }
    $count++;   
}

echo "Maior palindromo é: $result \n";

