<?php

namespace LuthfiCloud02\LibPortalPulsa\Services;

use LuthfiCloud02\LibPortalPulsa\Constants\PortalProduct;
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

    public function checkPrice(PortalProduct $product)
    {
        $resp = $this->makeRequest('post', '', [
            'inqury' => 'HARGA',
            'code' => $product,
        ]);

        return $resp;
    }

    public function checkStatus(string $transaksiId)
    {
        $resp = $this->makeRequest('post', '', [
            'inqury' => 'HARGA',
            'trxid_api' => $transaksiId,
        ]);

        return $resp;
    }

    public function purchasePulsa()
    {
        
    }
}
