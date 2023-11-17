<?php

namespace LuthfiCloud02\LibPortalPulsa\Services;

use LuthfiCloud02\LibPortalPulsa\Traits\HttpClient;

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
