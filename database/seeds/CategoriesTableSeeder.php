<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['number' => 301, 'name' => '巧克力'],
            ['number' => 302, 'name' => '糖果/口香糖'],
            ['number' => 303, 'name' => '糖果'],
            ['number' => 304, 'name' => '進口餅乾'],
            ['number' => 305, 'name' => '進口餅乾'],
            ['number' => 306, 'name' => '國產餅乾'],
            ['number' => 307, 'name' => '國產餅乾'],
            ['number' => 308, 'name' => '國產餅乾'],
            ['number' => 309, 'name' => '國產餅乾'],
            ['number' => 310, 'name' => '茶/穀物/保健食品'],
            ['number' => 311, 'name' => '即溶/調和/研磨咖啡'],
            ['number' => 312, 'name' => '果醬/奶粉'],
            ['number' => 313, 'name' => '乳品/果汁/機能飲品'],
            ['number' => 314, 'name' => '乾果'],
            ['number' => 315, 'name' => '海鮮'],
            ['number' => 316, 'name' => '肉乾/豆干/果凍'],
            ['number' => 317, 'name' => '蜜餞'],
            ['number' => 318, 'name' => '海苔'],
            ['number' => 319, 'name' => '調味/醬料'],
            ['number' => 320, 'name' => '調味/調理粉'],
            ['number' => 321, 'name' => '調理包/米'],
            ['number' => 322, 'name' => '罐頭'],
            ['number' => 323, 'name' => '麵食'],
            ['number' => 324, 'name' => '體重計'],
            ['number' => 325, 'name' => '免洗褲/居家護理'],
            ['number' => 326, 'name' => '鞋墊'],
            ['number' => 327, 'name' => '牙刷'],
            ['number' => 328, 'name' => '牙間刷'],
            ['number' => 329, 'name' => '牙線/牙籤/棉花棒'],
            ['number' => 330, 'name' => '香氛袋'],
            ['number' => 331, 'name' => '液體/芳香劑'],
            ['number' => 332, 'name' => '殺蟲劑/驅蟲劑'],
            ['number' => 333, 'name' => '防潮除濕/清潔用品'],
            ['number' => 334, 'name' => '柔軟精'],
            ['number' => 335, 'name' => '洗衣粉'],
            ['number' => 336, 'name' => '洗衣精'],
            ['number' => 337, 'name' => '洗潔精/洗碗精'],
            ['number' => 338, 'name' => '玻璃/廚浴'],
            ['number' => 339, 'name' => '曬衣用品'],
            ['number' => 340, 'name' => '曬衣用品/洗衣用品'],
            ['number' => 341, 'name' => '洗衣袋'],
            ['number' => 342, 'name' => '收納防塵/小型收納'],
            ['number' => 343, 'name' => '垃圾袋'],
            ['number' => 344, 'name' => '塑膠手套'],
            ['number' => 345, 'name' => '菜瓜布/抹布'],
            ['number' => 346, 'name' => '飯碗/各式鍋類'],
            ['number' => 347, 'name' => '保溫瓶/便當盒'],
            ['number' => 348, 'name' => '玻璃/瓷器/滴水籃'],
            ['number' => 349, 'name' => '調理五金用具'],
            ['number' => 350, 'name' => '保鮮盒/塵封罐'],
            ['number' => 351, 'name' => '保鮮膜/砧板'],
            ['number' => 352, 'name' => '水杯/免洗餐具'],
            ['number' => 353, 'name' => '隨身水壺/冷水壺'],
            ['number' => 354, 'name' => '進口小百貨'],
            ['number' => 355, 'name' => '進口小百貨'],
            ['number' => 356, 'name' => '進口小百貨'],
            ['number' => 357, 'name' => '濕紙巾 衛生棉/條'],
            ['number' => 358, 'name' => '衛生棉/條 衛生護墊'],
            ['number' => 359, 'name' => '衛生棉/條 衛生護墊'],
            ['number' => 360, 'name' => '面盆水杓'],
            ['number' => 361, 'name' => '浴帽 洗澡巾'],
            ['number' => 362, 'name' => '掛勾類 DIY工具'],
            ['number' => 363, 'name' => '通訊電話/檯燈'],
            ['number' => 364, 'name' => '電子鍋'],
            ['number' => 365, 'name' => '電烤箱'],
            ['number' => 366, 'name' => '吹風機 燈泡'],
            ['number' => 367, 'name' => '浴巾'],
            ['number' => 368, 'name' => '童巾方巾'],
            ['number' => 369, 'name' => '毛巾'],
            ['number' => 370, 'name' => '室內拖鞋'],
            ['number' => 371, 'name' => '室內拖鞋'],
            ['number' => 372, 'name' => '室外拖鞋'],
            ['number' => 373, 'name' => '室外拖鞋'],
            ['number' => 374, 'name' => '頸枕 寢具'],
            ['number' => 375, 'name' => '坐墊'],
            ['number' => 376, 'name' => '地墊'],
            ['number' => 377, 'name' => '後背包'],
            ['number' => 378, 'name' => '後背包'],
            ['number' => 379, 'name' => '後背包'],
            ['number' => 380, 'name' => '腰包/萬用包'],
            ['number' => 381, 'name' => '中性包/公事包'],
            ['number' => 382, 'name' => '中性包/公事包'],
            ['number' => 383, 'name' => '淑女包'],
            ['number' => 384, 'name' => '淑女包'],
            ['number' => 385, 'name' => 'PVC系列'],
            ['number' => 386, 'name' => '零錢包'],
            ['number' => 387, 'name' => '皮夾'],
            ['number' => 388, 'name' => '旅遊配件'],
        ];

        DB::table('categories')->truncate();

        foreach ($items as $item) {
            \App\Category::create($item);
        }
    }
}
