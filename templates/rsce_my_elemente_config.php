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
        'images_hoch' => array(
            'label' => array('Bilder Hoch', ''),
            'inputType' => 'fileTree',
            'eval' => array(
                'multiple' => true,
                'fieldType' => 'checkbox',
                'filesOnly' => true,
                'extensions' => 'jpg,jpeg,png,gif,svg',
            ),
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
        'text' => array(
            'label' => array('Optional', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'text1' => array(
            'label' => array('Anmerkung/Hinweise', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'text2' => array(
            'label' => array('Transportkisten/Cases', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
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
        'images' => array(
            'label' => array('Bilder', ''),
            'inputType' => 'fileTree',
            'eval' => array(
                'multiple' => true,
                'fieldType' => 'checkbox',
                'filesOnly' => true,
                'extensions' => 'jpg,jpeg,png,gif,svg',
            ),
        ),

    ),
);
