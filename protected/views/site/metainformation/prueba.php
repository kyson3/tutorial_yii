<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->pageTitle = "Это вид теста";

Yii::app()->clientScript->registerMetaTag(
        'Это описание проверки слуха',
        'description'
        );

Yii::app()->clientScript->registerMetaTag(
        'Estas, son, las, palabras, clave Это, слова, ключевые',
        'keywords'
        );

Yii::app()->clientScript->registerMetaTag(
        'All',
        'robots'
        );


Yii::app()->clientScript->registerScriptFile (
        Yii::app()->request->baseUrl."/assets/be00318a/",
        0
        );

Yii::app()->clientScript->registerCssFile (
        Yii::app()->request->baseUrl."/css/",
        0
        );
