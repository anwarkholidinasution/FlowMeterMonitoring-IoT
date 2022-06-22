<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;

class SensorController extends Controller
{
    public function getMqtt()
    {
        // pcntl_async_signals(true);
        $mqtt = MQTT::connection();
        $mqtt->subscribe('/sensor/testflow1', function (string $topic, string $message){
            $sen = new Sensor();
            $sen->suhu = $message;
            $sen->topic = $topic;
            $sen->save();
        });
        $mqtt->loop(true);
        $mqtt->disconnect();
    }

    public function getData()
    {
        $flowrate = Sensor::latest()->take(10)->get()->pluck('suhu');

        return view('chart', [
            'flowrate' => $flowrate[0]
        ]);
    }
}
