<?php
    $confusao = array("Madrid", 
                        "Camaroes", 
                        "Londres" => array("
                                        Big Ben", 
                                        "London Eye",
                                        2016 => "Olimpiadas"
                                    ), 
                        42 => "Paris", 
                        "amarelo" => array("
                                        Brasil", 
                                        "Africa" => "Camaroes", 
                                        "Jamaica",
                                        "Colombia" => array(
                                                        "Shakira", 
                                                        "Barranquilha", 
                                                        "Cafe",
                                                    )
                                        )
                    );

    echo($confusao["Londres"][0]); //Big Ben
    echo($confusao["amarelo"]["Africa"]);  //Camaroes
    echo($confusao["amarelo"]["Colombia"][0]);  //Shakira
