<?php

namespace Cityware\Bootstrap\Form\View\Helper\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Cityware\Bootstrap\Form\View\Helper\TwbBundleFormElement;

/**
 * Factory to inject the ModuleOptions hard dependency
 */
class FormElementFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $options = $serviceLocator->getServiceLocator()->get('Cityware\Bootstrap\Options\ModuleOptions');
        return new TwbBundleFormElement($options);
    }

}
