<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Loader;


$arrCeventRes = [];
$arrCeventTypes = Array(
    Array(
        "TYPE_ID" => "OSM_FORM",
        "LID"     => "ru",
        'EVENT_NAME' => 'OSM_FORM',
        'NAME' => GetMessage('OSM_NAME_FORM'),
        'DESCRIPTION' => '
                  #EMAIL_TO# E-mail
                  #NAME# Имя 
                  #PHONE# Телефон
                  #COMMENTS# Комментарий',
        ),
);
$arrCeventTemplates = Array(
    'OSM_FORM' => Array(
        'ACTIVE'=> 'Y',
        'EVENT_NAME' => 'OSM_FORM',
        "LID"     => "ru",
        'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
        'EMAIL_TO' => '#DEFAULT_EMAIL_FROM#',
        'SUBJECT' => 'Новое сообщение OSM_FORM',
        'BODY_TYPE' => 'html',
        'MESSAGE' => '
            <!doctype html>
            <html lang="ru">
            <head>
            <meta charset="utf-8">
            <title>Поступил новое сообщение OSM_FORM </title>
            </head>
            <body>
            <h2>Добрый день!</h2>
            
            <p>Новое сообщение.</p>
            
            <p>Имя: #NAME#</p>
            <p>Email: #OSM_EMAIL#</p>
            <p>Телефон: #PHONE#</p>
            <p>Комментарий:</p>
            
            #COMMENTS#
            
            
            </body>
            </html>',
),);


$et = new CEventType;
foreach($arrCeventTypes as $arrCeventType){
    $res = $et->Add($arrCeventType); 
    if(!$res){
        echo $et->LAST_ERROR;
    }
    else{
        $arrCeventRes[ADDITIONAL_FIELD] = $arrCeventType['EVENT_NAME'];
    }   
}



	$arr["ACTIVE"] = "Y";
    $arr["EVENT_NAME"] = "OSM_FORM";
    $arr["LID"] = 's1';
    $arr["LANGUAGE_ID"] = 'ru';
    $arr["EMAIL_FROM"] = "#DEFAULT_EMAIL_FROM#";
    $arr["EMAIL_TO"] = "#DEFAULT_EMAIL_FROM#";
    $arr["BCC"] = "#BCC#";
    $arr["SUBJECT"] = "Поступил новое сообщение OSM_FORM";
    $arr["BODY_TYPE"] = "html";
    $arr['ADDITIONAL_FIELD'] = "
    array(
        'NAME'  =>  'COMMENTS',
        'VALUE' =>  '#COMMENTS#'
    ),
    ";
    $arr["MESSAGE"] = '
    <!doctype html>
            <html lang="ru">
            <head>
            <meta charset="utf-8">
            <title>Поступил новое сообщение OSM_FORM </title>
            </head>
            <body>
            <h2>Добрый день!</h2>
            
            <p>Новое сообщение.</p>
            
            <p>Имя: #NAME#</p>
            <p>Email: #OSM_EMAIL#</p>
            <p>Телефон: #PHONE#</p>
            <p>Комментарий:</p>
            
            #COMMENTS#
            
            
            </body>
            </html>
    
    ';
        $emess = new CEventMessage;
        
        if(!$res){
			echo $res->LAST_ERROR;
		}
		else{
            $emess_res = $emess->Add($arr);
			echo 'Шаблон создан '.$emess_res.'<br />';
            
		}
        



$this->IncludeComponentTemplate();
?>