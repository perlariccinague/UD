<?php

return array(
    'label' => array('Exponat2', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'name' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'titleImage' => array(
            'label' => array('Titelbild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'header' => array(
            'label' => array('Headerbild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'scale' => array(
            'label' => array('Maßstab', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'height' => array(
            'label' => array('Höhe', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'space' => array(
            'label' => array('Nettogrundfläche', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'weight' => array(
            'label' => array('Gewicht', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'name1' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'titleImage1' => array(
            'label' => array('Titelbild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'header1' => array(
            'label' => array('Headerbild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'points' => array(
            'label' => array('Hängepunkte', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'time' => array(
            'label' => array('Aufbauzeit', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'timeNew' => array(
            'label' => array('Abbauzeit', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'team' => array(
            'label' => array('Aufbauteam', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'helper' => array(
            'label' => array('Hilfskräfte zum Ent-/Beladen', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'helperNew' => array(
            'label' => array('Hilfskräfte zum Auf-/Abbau', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'power' => array(
            'label' => array('Strom Lampen 16 A Schuko, 220/230 V 50/60 Hz', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'powerNew' => array(
            'label' => array('Strom Hazer 16 A Schuko, 220/230 V 50/60 Hz', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'name2' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'text' => array(
            'label' => array('Text', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'name3' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'text1' => array(
            'label' => array('Text', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'name4' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'text2' => array(
            'label' => array('Text', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'name5' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'titleImage2' => array(
            'label' => array('Titelbild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),

        'rigging' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'Rigging'
            )
        ),
        'static' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'Prüfstatik'
            )
        ),
        'forklift' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'Sattelzug'
            )
        ),
        'truck' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'Gabelstapler'
            )
        ),
        'truckNew' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'Gabelverlängerung für Gabelstapler (mind. 2,0 m)'
            )
        ),
        'lift' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'Hubsteiger oder Lift'
            )
        ),
    ),
);
