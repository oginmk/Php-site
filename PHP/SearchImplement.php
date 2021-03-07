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
    array(
        "count" => 0,
        'developer_name' => array(),
        "parent_id" => '0',
        'category_id' => '1',
        "category_value" => "FrontEnd",

        array(
            "count" => 0,
            'developer_name' => array(),
            "category_id" => '1',
            "parent_id" => '1',
            "category_value" => "Angular",
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '1',
                "parent_id" => '11',
                "category_value" => "AngularJS",
            ),
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '2',
                "parent_id" => '11',
                "category_value" => "Angular2",
            )
        ),
        array(
            "count" => 0,
            'developer_name' => array(),
            "parent_id" => '1',
            'category_id' => '2',
            "category_value" => "React",
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '1',
                "parent_id" => '12',
                "category_value" => "reactNative",
            )
        ),
        array(
            "count" => 0,
            'developer_name' => array(),
            "category_id" => '3',
            "parent_id" => '1',
            "category_value" => "Vue",
        )
    ),
    array(
        "count" => 0,
        'developer_name' => array(),
        "category_id" => '2',
        "parent_id" => '0',
        "category_value" => "BackEnd",
        array(
            "count" => 0,
            'developer_name' => array(),
            "category_id" => '1',
            "parent_id" => '2',
            "category_value" => "PHP",
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '1',
                "parent_id" => '21',
                "category_value" => "Symfony",
                array(
                    "count" => 0,
                    'developer_name' => array(),
                    "category_id" => '1',
                    "parent_id" => '211',
                    "category_value" => "Silex",
                )
            ),
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '2',
                "parent_id" => '21',
                "category_value" => "Laravel",
                array(
                    "count" => 0,
                    'developer_name' => array(),
                    "category_id" => '1',
                    "parent_id" => '212',
                    "category_value" => "Lumen",
                )
            ),
        ),
        array(
            "count" => 0,
            'developer_name' => array(),
            "category_id" => '2',
            "parent_id" => '2',
            "category_value" => "NodeJS",
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '1',
                "parent_id" => '22',
                "category_value" => "Express",
            ),
            array(
                "count" => 0,
                'developer_name' => array(),
                "category_id" => '2',
                "parent_id" => '22',
                "category_value" => "NestJS",
            )
        )
    )
);

foreach ($data as $temp) {
    $kategorija = $temp[4];
    $imae = $temp[1];
    $kategorija = intval($kategorija);
    changeCount($rows, $kategorija, $imae);
}
foreach ($data as $temp) {
    echo '<pre>';
    var_export($temp[4]);
    echo '</pre>';
}

$_SESSION['vardrump'] = $rows;
header('location: ../Homepage.php?search=yes');