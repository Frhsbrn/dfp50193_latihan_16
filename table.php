<table>
    <tr style="background: red; color: white">
        <td><b>PROGRAM</b></td>
        <td><b>KELAYAKAN</b></td>
    </tr>
<?php
foreach ($example as $poli => $value){
    echo "<th colspan=2>$poli</th>";
    echo "<tr>";
    foreach ($value as $course =>$test){
        echo "<td rowspan=2>$course</td>";
        
        foreach($test as $kelayakan){
            echo "<td>$kelayakan</td>";
            echo "<tr>";
            
        }
        echo '</td>';
        echo "</tr>";
    }
    echo '</tr>';
    
}
?>
</table>