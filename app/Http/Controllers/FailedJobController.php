<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FailedJobController extends Controller
{
    public function generate(Request $request)
    {
        $failedJobData = [
            'connection' => 'test',
            'queue' => 'tet',
            'payload' => $request->post('job'),
            'exception' => 'asd'
        ];

        $jsonPayload = json_decode($failedJobData['payload']);
        if (empty($jsonPayload) || !property_exists($jsonPayload,'data') || !property_exists($jsonPayload->data,'command')) {
            dd('please paste your payload of the failed_jobs');
        }

        $data = unserialize($jsonPayload->data->command);
        if ($request->post('exportType') === 'dd') {
            dd($data);
        } elseif ($request->post('exportType') === 'print_r') {
            print_r($data);
        }
    }
}
