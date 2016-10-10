<?php
$pattern = '/Ver\[([-+0-9A-Fa-f]+)\]\s.*DNA\[([0-9A-Fa-f]+)\]\s.*Elapsed\[([-0-9]+)\]\s.*LW\[([0-9]+)\]\s.*HW\[([0-9]+)\]\s.*DH\[([.0-9]+)%\]\s.*GHS5m\[([-.0-9]+)\]\s.*DH5m\[([-.0-9]+)%\]\s.*Temp\[([-0-9]+)\]\s.*Fan\[([0-9]+)\]\s.*Vol\[([.0-9]+)\]\s.*Freq\[([.0-9]+)\]\s.*PG\[([0-9]+)\]\s.*Led\[(0|1)\]/';
$a = "Ver[411501-08e45110] DNA[01377b0bef3773f4] Elapsed[1648] MW[38792 38986 38392 39074 39022 33703 38652 38965 38742 38625] LW[381271] MH[136 188 189 1 401 5 1 0 1 2] HW[924] DH[0.242%] GHS5m[1084.57] DH5m[0.636%] MDH5m[0.922% 2.070% 1.336% 0.091% 2.154% 0.337% 0.013% 0.000% 0.000% 0.000%] Temp[42] Fan[1950] Vol[0.8125] MVol[0.7875 0.7750 0.7875 0.7750 0.7875 0.7750 0.7750 0.7750 0.7750 0.7750] Freq[25.27] PG[1023] Led[0]";
$matches = array();
if (preg_match($pattern, $a, $matches))
	var_dump($matches);
	echo "Success.";