<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Ambil data currencies dari table currencies
        $currenciesData = \Illuminate\Support\Facades\DB::table('currencies')->get()->map(function ($item) {
            return [
                'code' => $item->code,
                'name' => $item->name,
                'icon' => $item->icon,
                'network' => $item->network,
            ];
        })->toArray();

        // 2. Ambil kategori pertama
        $category = \Illuminate\Support\Facades\DB::table('categories')->first();

        // 3. Ambil wallet pertama
        $wallet = \Illuminate\Support\Facades\DB::table('wallets')->first();

        if ($category && $wallet) {
            \Illuminate\Support\Facades\DB::table('contents')->updateOrInsert(
                ['name' => 'Earnbitmoon'],
                [
                    'logo' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/32196.png',
                    'headline' => '💸 Free crypto - Instant withdraw!',
                    'category_id' => $category->id,
                    'badges' => json_encode(['TOP']),
                    'highlight' => 'Claim up to $2 every 5 minutes',
                    'features' => json_encode([
                        "Level up & increase your reward",
                        "View PTC ads & earn free crypto",
                        "Surveys and Offerwalls",
                        "Earn more with account upgrade",
                        "Min. withdraw: $0.20 (Instant)",
                        "FaucetPay and Payeer supported, You must complete at least 30",
                        "faucet claims, before being able to withdraw your funds!"
                    ]),
                    'currencies' => json_encode($currenciesData), // Dinamis dari tabel currencies
                    'wallet_id' => $wallet->id,
                    'link' => 'https://earnbitmoon.club/?ref=423418',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
