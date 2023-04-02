<?
$arUrlRewrite = array(
    array(
        'CONDITION' => '#^/(.*)/.*#', // Обработка детальной страницы
        'RULE' => 'ELEMENT_CODE=$1',
        'ID' => 'bitrix:news',
        'PATH' => '/detail.php',
        'SORT' => 100,
    ),
    array (
        'CONDITION' => '#^/#', // Обработка главной страницы раздела
        'RULE' => '',
        'ID' => 'bitrix:news',
        'PATH' => '/index.php',
        'SORT' => 100,
    ),
);