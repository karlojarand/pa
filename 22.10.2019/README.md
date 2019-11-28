Päeva teemad

Algarvud - tehted algarvudega

Tabel- tabelite tegemine

function tableRow($colNumber){
    echo '<tr>';
    for($col = 1; $col <= $colNumber; $col++){
        echo '<td style="background: '.randomColor().'">';
        echo 'cell';
        echo '</td>';