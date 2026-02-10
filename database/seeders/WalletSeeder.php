<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wallets = [
            [
                'provider' => 'Binance',
                'is_supported' => true,
            ],
            [
                'provider' => 'FaucetPay',
                'is_supported' => true,
            ],
        ];

        foreach ($wallets as $wallet) {
            \Illuminate\Support\Facades\DB::table('wallets')->updateOrInsert(
                ['provider' => $wallet['provider']],
                [
                    'is_supported' => $wallet['is_supported'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
