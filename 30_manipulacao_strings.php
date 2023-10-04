<?php


date_default_timezone_set('America/Sao_Paulo');
echo  'o ano atual:' .  date('Y') . '<br>';
echo  'o mes atual:' .  date('m') . '<br>';
echo  'o dia atual:' .  date('d') . '<br>';
echo  'a data atual:' .  date('d/m/Y') . '<br>';
echo  'a data atual:' .  date('Y/m/d') . '<br>';
echo  'a hora atual:' .  date('h') . '<br>';
echo  'o minuto atual:' .  date('i') . '<br>';
echo  'o segundo atual:' .  date('s') . '<br>';
echo  'a hora atual:' .  date('h:i:s') . '<br>';
echo  'Timezone'  . date_default_timezone_get() . '<br>';