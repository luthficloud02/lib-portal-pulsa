<?php

namespace LuthfiCloud02\LibPortalPulsa\Services;

use LuthfiCloud02\LibPortalPulsa\Constants\PortalProduct;

interface PortalPulsaServiceInterface
{

    public function checkSaldo();

    public function checkPrice(PortalProduct $product);

    public function checkStatus(string $transaksiId);

    public function purchasePulsa();
}
