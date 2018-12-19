<?php

namespace TPHST\Observers;

use TPHST\Service;

class ServiceObserver
{
    public function creating(Service $service)
    {  
        $service->slug = str_slug($service->name);
    }
}
