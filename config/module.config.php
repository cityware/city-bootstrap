<?php

return array(
    'bootstrap' => array (
        'ignoredViewHelpers' => array (
            'file',
            'checkbox',
            'radio',
            'submit',
            'multi_checkbox',
            'static',
            'button',
            'reset'
        ),
        'type_map' => array(),
        'class_map' => array(),
    ),
    'service_manager' => array (
        'factories' => array (
            'Cityware\Bootstrap\Options\ModuleOptions' => 'Cityware\Bootstrap\Options\Factory\ModuleOptionsFactory'
        )
    ),
    'view_helpers' => array (
        'invokables' => array (
            //Alert
            'alert' => 'Cityware\Bootstrap\View\HelperAlert',
            //Badge
            'badge' => 'Cityware\Bootstrap\View\HelperBadge',
            //Button group
            'buttonGroup' => 'Cityware\Bootstrap\View\HelperButtonGroup',
            //DropDown
            'dropDown' => 'Cityware\Bootstrap\View\HelperDropDown',
            //Form
            'form' => 'Cityware\Bootstrap\Form\View\HelperForm',
            'formButton' => 'Cityware\Bootstrap\Form\View\HelperFormButton',
            'formSubmit' => 'Cityware\Bootstrap\Form\View\HelperFormButton',
            'formCheckbox' => 'Cityware\Bootstrap\Form\View\HelperFormCheckbox',
            'formCollection' => 'Cityware\Bootstrap\Form\View\HelperFormCollection',
            'formElementErrors' => 'Cityware\Bootstrap\Form\View\HelperFormElementErrors',
            'formMultiCheckbox' => 'Cityware\Bootstrap\Form\View\HelperFormMultiCheckbox',
            'formRadio' => 'Cityware\Bootstrap\Form\View\HelperFormRadio',
            'formRow' => 'Cityware\Bootstrap\Form\View\HelperFormRow',
            'formStatic' => 'Cityware\Bootstrap\Form\View\HelperFormStatic',
            //Form Errors
            'formErrors' => 'Cityware\Bootstrap\Form\View\HelperFormErrors',
            //Glyphicon
            'glyphicon' => 'Cityware\Bootstrap\View\HelperGlyphicon',
            //FontAwesome
            'fontAwesome' => 'Cityware\Bootstrap\View\HelperFontAwesome',
            //Label
            'label' => 'Cityware\Bootstrap\View\HelperLabel'
        ),
        'factories' => array (
            'formElement' => 'Cityware\Bootstrap\Form\View\Helper\FactoryFormElementFactory',
        )
    ),
);
