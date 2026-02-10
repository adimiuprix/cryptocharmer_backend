<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'code' => 'BTC',
                'name' => 'Bitcoin',
                'icon' => 'btc.svg',
                'network' => 'Bitcoin'
            ],
            [
                'code' => 'LTC',
                'name' => 'Litecoin',
                'icon' => 'ltc.svg',
                'network' => 'Litecoin'
            ],
            [
                'code' => 'TRX',
                'name' => 'Tron',
                'icon' => 'trx.svg',
                'network' => 'TRC20'
            ],
            [
                'code' => 'BNB',
                'name' => 'Binance Coin',
                'icon' => 'bnb.svg',
                'network' => 'BEP20'
            ],
            [
                'code' => 'DOGE',
                'name' => 'Dogecoin',
                'icon' => 'doge.svg',
                'network' => 'Dogecoin'
            ]
        ];

        foreach ($currencies as $currency) {
            \Illuminate\Support\Facades\DB::table('currencies')->updateOrInsert(
                ['code' => $currency['code']],
                [
                    'name' => $currency['name'],
                    'icon' => $currency['icon'],
                    'network' => $currency['network'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
