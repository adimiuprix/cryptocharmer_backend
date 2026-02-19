<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Currency;
use App\Models\Category;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Ambil semua IDs dari currencies
        $currencyIds = Currency::all()->pluck('id')->toArray();

        // 2. Ambil kategori pertama
        $category = Category::first();

        // 3. Ambil wallet pertama
        $wallet = Wallet::first();

        if ($category && $wallet) {
            $content = Content::updateOrCreate(
                ['name' => 'Earnbitmoon'],
                [
                    'logo' => '32196.png',
                    'headline' => '💸 Free crypto - Instant withdraw!',
                    'category_id' => $category->id,
                    'badges' => ['TOP'],
                    'highlight' => 'Claim up to $2 every 5 minutes',
                    'features' => [
                        "Level up & increase your reward",
                        "View PTC ads & earn free crypto",
                        "Surveys and Offerwalls",
                        "Earn more with account upgrade",
                        "Min. withdraw: $0.20 (Instant)",
                        "FaucetPay and Payeer supported, You must complete at least 30",
                        "faucet claims, before being able to withdraw your funds!"
                    ],
                    'wallet_id' => $wallet->id,
                    'link' => 'https://earnbitmoon.club/?ref=423418',
                ]
            );

            // 4. Sinkronkan currencies ke pivot table
            $content->currencies()->sync($currencyIds);
        }
    }
}
