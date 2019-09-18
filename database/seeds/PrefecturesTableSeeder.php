<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['name' => '北海道', 'roman' => 'hokkaido'],
            ['name' => '青森県', 'roman' => 'aomori'],
            ['name' => '岩手県', 'roman' => 'iwate'],
            ['name' => '宮城県', 'roman' => 'miyagi'],
            ['name' => '秋田県', 'roman' => 'akita'],
            ['name' => '山形県', 'roman' => 'yamagata'],
            ['name' => '福島県', 'roman' => 'fukushima'],
            ['name' => '茨城県', 'roman' => 'ibaraki'],
            ['name' => '栃木県', 'roman' => 'tochigi'],
            ['name' => '群馬県', 'roman' => 'gunma'],
            ['name' => '埼玉県', 'roman' => 'saitama'],
            ['name' => '千葉県', 'roman' => 'chiba'],
            ['name' => '東京都', 'roman' => 'tokyo'],
            ['name' => '神奈川県', 'roman' => 'kanagawa'],
            ['name' => '新潟県', 'roman' => 'niigata'],
            ['name' => '富山県', 'roman' => 'toyama'],
            ['name' => '石川県', 'roman' => 'ishikawa'],
            ['name' => '福井県', 'roman' => 'fukui'],
            ['name' => '山梨県', 'roman' => 'yamanashi'],
            ['name' => '長野県', 'roman' => 'nagano'],
            ['name' => '岐阜県', 'roman' => 'gifu'],
            ['name' => '静岡県', 'roman' => 'shizuoka'],
            ['name' => '愛知県', 'roman' => 'aichi'],
            ['name' => '三重県', 'roman' => 'mie'],
            ['name' => '滋賀県', 'roman' => 'shiga'],
            ['name' => '京都府', 'roman' => 'kyoto'],
            ['name' => '大阪府', 'roman' => 'osaka'],
            ['name' => '兵庫県', 'roman' => 'hyogo'],
            ['name' => '奈良県', 'roman' => 'nara'],
            ['name' => '和歌山県', 'roman' => 'wakayama'],
            ['name' => '鳥取県', 'roman' => 'tottori'],
            ['name' => '島根県', 'roman' => 'shimane'],
            ['name' => '岡山県', 'roman' => 'okayama'],
            ['name' => '広島県', 'roman' => 'hiroshima'],
            ['name' => '山口県', 'roman' => 'yamaguchi'],
            ['name' => '徳島県', 'roman' => 'tokushima'],
            ['name' => '香川県', 'roman' => 'kagawa'],
            ['name' => '愛媛県', 'roman' => 'ehime'],
            ['name' => '高知県', 'roman' => 'kochi'],
            ['name' => '福岡県', 'roman' => 'fukuoka'],
            ['name' => '佐賀県', 'roman' => 'saga'],
            ['name' => '長崎県', 'roman' => 'nagasaki'],
            ['name' => '熊本県', 'roman' => 'kumamoto'],
            ['name' => '大分県', 'roman' => 'oita'],
            ['name' => '宮崎県', 'roman' => 'miyazaki'],
            ['name' => '鹿児島県', 'roman' => 'kagoshima'],
            ['name' => '沖縄県', 'roman' => 'okinawa'],
        ]);
    }
}
