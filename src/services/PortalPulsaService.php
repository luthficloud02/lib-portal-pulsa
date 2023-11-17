<?php

namespace Growinc\LibPortalPulsa\Services;

use Growinc\LibPortalPulsa\Traits\HttpClient;

class PortalPulsaService implements PortalPulsaServiceInterface
{
    use HttpClient;


    public function checkSaldo()
    {
        $resp = $this->makeRequest('post', '', [], [
            'inquiry' => 'S'
        ]);

        return $resp;
    }
}
