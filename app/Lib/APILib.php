<?php

namespace App\Lib;

use GuzzleHttp\Client;

class APILib
{
    function checkFile($file)
    {
        $client = new Client();
        $virus_api_key = env('virus_total_api_key');

        // $response = $client->request('POST', 'https://www.virustotal.com/vtapi/v2/file/scan', [
        //     'headers' => [
        //         'x-apikey' => $virus_api_key,
        //         'file' => $file,
        //         'accept' => 'application/json',
        //         'content-type' => 'multipart/form-data',
        //     ],
        // ]);

        $response = $client->post('https://www.virustotal.com/vtapi/v2/file/scan', [
            'multipart' => [
                [
                    'name' => 'apikey',
                    'contents' => $virus_api_key,
                ],
                [
                    'name' => 'file',
                    'contents' => fopen($file, 'r'),
                ],
            ],
        ]);
        $var = json_decode($response->getBody());
        dd($var);
    }
}
