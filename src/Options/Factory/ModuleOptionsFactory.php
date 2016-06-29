<?php

namespace Cityware\Bootstrap\Options\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Cityware\Bootstrap\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $config = $serviceLocator->get('Config');
        $options = $config['twbbundle'];
        return new ModuleOptions($options);
    }

}
