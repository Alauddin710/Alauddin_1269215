<?php
$coutries = array("Bangladesh" => "Dhaka", "Pakistan" => "Islamabad", "India" => "Dilli", "Bhutan" => "Khathmondu", "Bangladesh" => "Dhaka");

// asort($coutries); // valu anusare sort kore
// echo "<pre>";
// print_r($coutries);

?>

<table border="1">
    <tr>
        <th>Country name</th>
        <th>Capital name</th>
    </tr>
    <?php

    foreach ($coutries as $country => $capital) { ?>
        <tr>
            <td><?php echo $country  ?></td>
            <td><?php echo $capital ?></td>
        </tr>
    <?php

    }
    ?>
</table>

<?php

// $countries = ["Bangladesh"=>"Dhaka","India"=>"Delhi","Pakistan"=>"Lahore","Srilanka"=>"Colombo","Syria"=>"Damascus"];

$countries["Bangladesh"] = array("Dhaka", "Padma");

$countries["India"] = array("Delhi", "Tista");



echo "<table border='1'; width='300'>

    <tr>

    <th>Country Name</th>

    <th>Capital</th>

    <th>River</th>

    </tr>";



// asort($countries);

foreach ($countries as $country => $capital) {

    echo "<tr>

            <td>$country</td>";

    foreach ($capital as $co) {

        echo "<td>$co</td>";
    }

    echo "</tr>";
}



echo "</table>";





?>