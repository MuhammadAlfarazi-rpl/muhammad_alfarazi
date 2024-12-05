<?php

    // array_merge()
    $club1 = ["United", "Liverpool", "Arsenal"];
    $club2 = ["Real", "Barca", "Atletico"];
    $champion = array_merge($club1, $club2);
    print_r($champion);

    // array_push()
    $ore = ["Iron", "Gold"];
    array_push($ore, "Diamond");
    print_r($ore);

    // in_array()
    $alphabet = ["A", "B", "C", "D", "E"];
    if (in_array("C", $alphabet)) {
        echo "Ada C di alphabet";
    }

?>