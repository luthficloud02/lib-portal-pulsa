<?php

namespace LuthfiCloud02\LibPortalPulsa\Traits;

use GuzzleHttp\Client;

trait HttpClient
{
    /**
     * Send a request to any service
     * @return string
     */
    public function makeRequest($method, $requestUrl, $queryParams = [], $formParams = [], $headers = [], $hasFile = false)
    {
        $client = new Client([
            'base_uri' => config('portal-pulsa.url', 'https://portalpulsa.com/api/connect/'),
            'headers' => [
                'portal-userid' => config('portal-pulsa.user_id'),
                'portal-key' => config('portal-pulsa.key'),
                'portal-secret' => config('portal-pulsa.secret'),
            ]
        ]);

        $bodyType = 'form_params';

        if ($hasFile) {
            $bodyType = 'multipart';
            $multipart = [];
            foreach ($formParams as $name => $contents) {
                $multipart[] = [
                    'name' => $name,
                    'contents' => $contents
                ];
            }
        }

        $response = $client->request($method, $requestUrl, [
            'query' => $queryParams,
            $bodyType => $hasFile ? $multipart : $formParams,
            'headers' => $headers,
        ]);

        $response = $response->getBody()->getContents();

        return $response;
    }
}
