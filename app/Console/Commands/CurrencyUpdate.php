<?php

namespace App\Console\Commands;

use App\Models\Currency;
use App\Models\Setting;
use Illuminate\Console\Command;

class CurrencyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:currency-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command For Currency Update Daily';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currencySymbol = Setting::first();
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => "https://v6.exchangerate-api.com/v6/c11309facc298b5f9e64542f/latest/$currencySymbol->currency",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYndhYmFuay5teS5pZFwvYXBpXC9sb2dpbiIsImlhdCI6MTcwNDk1Nzg1MiwiZXhwIjoxNzA0OTYxNDUyLCJuYmYiOjE3MDQ5NTc4NTIsImp0aSI6InBxZ1BmN0xxbW1EYmRGem4iLCJzdWIiOjE2ODQsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.3cMFa97YvERrSh2bRWVhvNrce2KmWUJ6FjKGL69VoNE'
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        $responseData = json_decode($response);
        if ($responseData->result == "success") {
            foreach ($responseData->conversion_rates as $key => $value) {
                $registerCurrency = new Currency;
                $registerCurrency->currency_name = $key;
                $registerCurrency->exchange_rate = $value;
                $registerCurrency->save();
            }
        }

    }
}
