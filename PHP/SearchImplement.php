<?php
session_start();
require 'Functions.php';
/*
 * Main Categories:  Frontend = 1 , BackEnd = 2
 *
 *Front End ->
 *  Angular(11) ->
 *      AngularJS = 111
 *      Angular 2 = 112;
 *  React(12) ->
 *      ReactNative = 121;
 *  Vue (13)->;
 *
 *Back End ->
 *  PHP (21) ->
 *      Symfony(211) ->
 *          Silex : 2111
 *      Laravel(212) ->
 *          Lumen : 2121
 *  Node (22) ->
 *      Express(221)->
 *
 *      NestJS (222)->
 *
 * */
$data = $_SESSION['data'];
$rows = array(
    1 => array(
        "count" => 0,
        "parent_id" => '0',
        "category_value" => "FrontEnd",
        11 => array(
            "count" => 0,
            "category_id" => '11',
            "parent_id" => '1',
            "category_value" => "Angular",
        111=>    array(
                "count" => 0,
                "category_id" => '111',
                "parent_id" => '11',
                "category_value" => "AngularJS",
            ),
        112=>    array(
                "count" => 0,
                "category_id" => '112',
                "parent_id" => '11',
                "category_value" => "Angular2 ",
            )
        ),
        12 => array(
            "count" => 0,
            "parent_id" => '1',
            "category_value" => "React",
        121 => array(
                "count" => 0,
                "category_id" => '121',
                "parent_id" => '12',
                "category_value" => "reactNative",
            )
        ),
        13 =>array(
            "count" => 0,
            "category_id" => '13',
            "parent_id" => '1',
            "category_value" => "Vue",
        )
    ),
    2 => array(
        "count" => 0,
        "category_id" => '2',
        "parent_id" => '0',
        "category_value" => "BackEnd",
        21 => array(
            "count" => 0,
            "category_id" => '21',
            "parent_id" => '2',
            "category_value" => "PHP",
            211 =>array(
                "count" => 0,
                "category_id" => '211',
                "parent_id" => '21',
                "category_value" => "Symfony",
                array(
                    "count" => 0,
                    "category_id" => '2111',
                    "parent_id" => '211',
                    "category_value" => "Silex",
                )
            ),
            array(
                "count" => 0,
                "category_id" => '212',
                "parent_id" => '21',
                "category_value" => "Laravel",
                array(
                    "count" => 0,
                    "category_id" => '2121',
                    "parent_id" => '212',
                    "category_value" => "Lumen",
                )
            ),
        ),
        array(
            "count" => 0,
            "category_id" => '22',
            "parent_id" => '2',
            "category_value" => "NodeJS",
            array(
                "count" => 0,
                "category_id" => '221',
                "parent_id" => '22',
                "category_value" => "Express",
            ),
            array(
                "count" => 0,
                "category_id" => '222',
                "parent_id" => '22',
                "category_value" => "NestJS",
            )
        )
    )
);
foreach ($data as $temp) {
    $kategorija = $temp[4];
    $kategorija = intval($kategorija);
    changeCount($rows,$kategorija);
}
foreach ($data as $temp){
    echo '<pre>';
    var_export($temp[4]);
    echo '</pre>';
}

//$_SESSION['vardrump'] = $rows;
//header('location: ../Homepage.php?search=yes');