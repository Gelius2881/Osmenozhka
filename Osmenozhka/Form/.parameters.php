<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = Array(
        'PARAMETERS'=> array(
            'USER'=>array(
                "PARENT" => "BASE",
                'NAME' => GetMessage('OSM_USER'),
                'TYPE' => 'CHECKBOX',
                
            ),

            'PHONE'=>array(
                "PARENT" => "BASE",
                'NAME' => GetMessage('OSM_PHONE'),
                'TYPE' => 'CHECKBOX',
                
            ),

            'EMAIL'=>array(
                "PARENT" => "BASE",
                'NAME' => GetMessage('OSM_EMAIL'),
                'TYPE' => 'CHECKBOX',
                
            ),

            'COMMENTS'=>array(
                "PARENT" => "BASE",
                'NAME' => GetMessage('OSM_COMMENTS'),
                'TYPE' => 'CHECKBOX',
                
            ),
            

            
        )
    );
?>