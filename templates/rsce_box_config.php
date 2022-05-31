<?php

return array(
    'label' => array('box', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'number' => array(
            'label' => array('Anzahl', 'Beschreibung...'),
            'inputType' => 'select',
            'options' => array(
                '1',
                '2',
                '3',
                '4',
                '5'
            )
        ),
        'name' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'image' => array(
            'label' => array('Titelbild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'url' => array(
            'label' => array('Link', 'Beschreibung...'),
            'inputType' => 'url',
        ),
        'text' => array(
            'label' => array('Text', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
         'name1' => array(
            'label' => array('Name1', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'image1' => array(
            'label' => array('Bild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'url1' => array(
            'label' => array('Link', 'Beschreibung...'),
            'inputType' => 'url',
        ),
        'text1' => array(
            'label' => array('Reference', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'name2' => array(
            'label' => array('Name2', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'image2' => array(
            'label' => array('Bild1', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'url2' => array(
            'label' => array('Link', 'Beschreibung...'),
            'inputType' => 'url',
        ),
        'text2' => array(
            'label' => array('Text2', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'name3' => array(
            'label' => array('Name3', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'image3' => array(
            'label' => array('Bild2', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'url3' => array(
            'label' => array('Link', 'Beschreibung...'),
            'inputType' => 'url',
        ),
        'text3' => array(
            'label' => array('Text3', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'name4' => array(
            'label' => array('Name4', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'image4' => array(
            'label' => array('Bild3', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'url4' => array(
            'label' => array('Link', 'Beschreibung...'),
            'inputType' => 'url',
        ),
        'text4' => array(
            'label' => array('Text4', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        
    ),
);
