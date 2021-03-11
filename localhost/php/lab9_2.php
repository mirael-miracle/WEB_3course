<?php 
// День недели по-русски
function getDayUkr(){
    $days = array(
        'Недiля', 'Понедiлок', 'Вiвторок', 'Середа',
        'Четвер', 'П`ятниця', 'Субота'
    );
    return $days[(date('w'))];
}
echo "Сьогоднi - ".getDayUkr();
 ?>
