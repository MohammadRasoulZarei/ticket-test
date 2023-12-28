<style>
    body {
        margin-bottom: 200px;
    }

    .line {
        width: 80%;
        display: block;
        margin: 5px auto;
        padding: 5px;
        border-radius: 5px;
        font-family: monospace;
    }

    .s {
        background-color: #f7f7f7;
    }

    .b {
        background-color: #D8E9FF;
    }

    .r {
        background-color: #f7e5d1;
    }

    .g {
        background-color: #d9f2d9;
    }

    .xdebug-var-dump {
        margin: 0;
    }

    .arrName, .arrMember {
        font-weight: bold;
        display: inline-block;
        background-color: #a4cedd;
        padding: 3px;
        border-radius: 5px;
        text-align: center;
        min-width: 30px;
    }

    .arrMember {
        background-color: #fff !important;
        margin: 3px 3px;
        padding: 3px 7px !important;
    }

    span.u {
        color: #ccc;
    }
</style>

<?php
// common php functions

$e=0;
function e($var,$colorClass='',$title="")
{
    global $e;
    if ($e==0){
        $colorClass='s';
        $e++;
    }else{
        $e=0;
        $colorClass='g';
    }
    if ($var == false) {
        echo "<span class='line {$colorClass}'>$title";
        var_dump($var);
        echo "</span>";
        return;
    }
    if (is_array($var)) {
        echo "<pre class='line " . $colorClass . "'>$title";
        print_r($var);
        echo "</pre>";
    } else {
        echo "<span class='line {$colorClass}'>$title" . $var . "</span>";
    }
}



function printResultsTable($result)
{
    printf("<br><b>>> %d rows returned, each row has %d fields : </b>\n", $result->num_rows, $result->field_count);
    echo "<table>";
    echo "<tr style='font-weight: bold;background-color: #eee;'>";
    $fields = $result->fetch_fields();
    for ($i = 0; $i < sizeof($fields); $i++) {
        echo "<th style='padding: 2px 7px'>{$fields[$i]->name}</th>";
    }
    echo "</tr>";
    while ($row = $result->fetch_array(2)) { // fetch_object() , fetch_assoc()
        echo "<tr style='background-color: #f7f7f7;'>";
        foreach ($row as $val) {
            echo "<td style='padding: 2px 7px'>$val</td>";
        }
        echo "</tr>" . PHP_EOL;
    }
    echo "</table>";
}


