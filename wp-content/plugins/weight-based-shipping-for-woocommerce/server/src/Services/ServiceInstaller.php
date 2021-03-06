<?php
namespace Wbs\Services;

use LogicException;
use Wbs\Services\Interfaces\IService;
use Wbs\Services\Interfaces\IServiceReady;


class ServiceInstaller
{
    public function installIfReady(IService $service)
    {
        $serviceId = $this->serviceId($service);

        if (isset($this->services[$serviceId])) {
            throw new LogicException("Service #{$serviceId} is already installed");
        }

        if ($service instanceof IServiceReady) {
            if (!$service->ready()) {
                return;
            }
        }

        $service->install();

        $this->services[$serviceId] = $service;
    }


    private $services = array();

    private function serviceId(IService $service)
    {
        return get_class($service);
    }
}