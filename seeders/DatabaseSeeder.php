<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
        
        DB::table('countries')->delete();

        $countries = [
            ['name' => 'افغانستان'],
            ['name' => 'جزایر آلند'],
            ['name' => 'آلبانی'],
            ['name' => 'الجزایر'],
            ['name' => 'ساموای آمریکا'],
            ['name' => 'آندورا'],
            ['name' => 'آنگولا'],
            ['name' => 'آنگویلا'],
            ['name' => 'جنوبگان'],
            ['name' => 'آنتیگوا و باربودا'],
            ['name' => 'آرژانتین'],
            ['name' => 'ارمنستان'],
            ['name' => 'آروبا'],
            ['name' => 'استرالیا'],
            ['name' => 'اتریش'],
            ['name' => 'جمهوری آذربایجان'],
            ['name' => 'باهاما'],
            ['name' => 'بحرین'],
            ['name' => 'بنگلادش'],
            ['name' => 'باربادوس'],
            ['name' => 'بلاروس'],
            ['name' => 'بلژیک'],
            ['name' => 'بلیز'],
            ['name' => 'بنین'],
            ['name' => 'برمودا'],
            ['name' => 'پادشاهی بوتان'],
            ['name' => 'بولیوی'],
            ['name' => 'بوسنی و هرزگوین'],
            ['name' => 'بوتسوانا'],
            ['name' => 'جزیره بووه'],
            ['name' => 'برزیل'],
            ['name' => 'قلمرو اقیانوس هند بر'],
            ['name' => 'برونئی'],
            ['name' => 'بلغارستان'],
            ['name' => 'بورکینافاسو'],
            ['name' => 'بوروندی'],
            ['name' => 'کامبوج'],
            ['name' => 'کامرون'],
            ['name' => 'کانادا'],
            ['name' => 'کیپ ورد'],
            ['name' => 'جزایر کیمن'],
            ['name' => 'جمهوری آفریقای مرکزی'],
            ['name' => 'چاد'],
            ['name' => 'شیلی'],
            ['name' => 'چین'],
            ['name' => 'جزیره کریسمس'],
            ['name' => 'جزایر کوکوس'],
            ['name' => 'کلمبیا'],
            ['name' => 'کومور'],
            ['name' => 'جمهوری کنگو'],
            ['name' => 'جمهوری دموکراتیک کنگ'],
            ['name' => 'جزایر کوک'],
            ['name' => 'کاستاریکا'],
            ['name' => 'ساحل عاج'],
            ['name' => 'کرواسی'],
            ['name' => 'کوبا'],
            ['name' => 'قبرس'],
            ['name' => 'جمهوری چک'],
            ['name' => 'دانمارک'],
            ['name' => 'جیبوتی'],
            ['name' => 'دومینیکا'],
            ['name' => 'جمهوری دومینیکن'],
            ['name' => 'اکوادور'],
            ['name' => 'مصر'],
            ['name' => 'السالوادور'],
            ['name' => 'گینه استوایی'],
            ['name' => 'اریتره'],
            ['name' => 'استونی'],
            ['name' => 'اتیوپی'],
            ['name' => 'جزایر فالکند'],
            ['name' => 'جزایر فارو'],
            ['name' => 'فیجی'],
            ['name' => 'فنلاند'],
            ['name' => 'فرانسه'],
            ['name' => 'گویان فرانسه'],
            ['name' => 'پولی‌نزی فرانسه'],
            ['name' => 'سرزمین‌های قطب جنوب '],
            ['name' => 'گابون'],
            ['name' => 'گامبیا'],
            ['name' => 'گرجستان'],
            ['name' => 'آلمان'],
            ['name' => 'غنا'],
            ['name' => 'جبل طارق'],
            ['name' => 'یونان'],
            ['name' => 'گرینلند'],
            ['name' => 'گرنادا'],
            ['name' => 'جزیره گوادلوپ'],
            ['name' => 'گوآم'],
            ['name' => 'گواتمالا'],
            ['name' => 'گرنزی'],
            ['name' => 'گینه'],
            ['name' => 'گینه بیسائو'],
            ['name' => 'گویان'],
            ['name' => 'هائیتی'],
            ['name' => 'جزیره هرد و جزایر مک'],
            ['name' => 'واتیکان'],
            ['name' => 'هندوراس'],
            ['name' => 'هنگ کنگ'],
            ['name' => 'مجارستان'],
            ['name' => 'ایسلند'],
            ['name' => 'هند'],
            ['name' => 'اندونزی'],
            ['name' => 'ایران'],
            ['name' => 'عراق'],
            ['name' => 'جمهوری ایرلند'],
            ['name' => 'جزیره من'],
            ['name' => 'اسرائیل'],
            ['name' => 'ایتالیا'],
            ['name' => 'جامائیکا'],
            ['name' => 'ژاپن'],
            ['name' => 'جرسی'],
            ['name' => 'اردن'],
            ['name' => 'قزاقستان'],
            ['name' => 'کنیا'],
            ['name' => 'کیریباتی'],
            ['name' => 'کره شمالی'],
            ['name' => 'کره جنوبی'],
            ['name' => 'کویت'],
            ['name' => 'قرقیزستان'],
            ['name' => 'لائوس'],
            ['name' => 'لتونی'],
            ['name' => 'لبنان'],
            ['name' => 'لسوتو'],
            ['name' => 'لیبریا'],
            ['name' => 'لیختن‌اشتاین'],
            ['name' => 'لیتوانی'],
            ['name' => 'لوکزامبورگ'],
            ['name' => 'ماکائو'],
            ['name' => 'مقدونیه'],
            ['name' => 'ماداگاسکار'],
            ['name' => 'مالاوی'],
            ['name' => 'مالزی'],
            ['name' => 'مالدیو'],
            ['name' => 'مالی'],
            ['name' => 'مالت'],
            ['name' => 'جزایر مارشال'],
            ['name' => 'مارتینیک'],
            ['name' => 'موریتانی'],
            ['name' => 'موریس'],
            ['name' => 'مایوت'],
            ['name' => 'مکزیک'],
            ['name' => 'ایالات فدرال میکرونز'],
            ['name' => 'مولداوی'],
            ['name' => 'موناکو'],
            ['name' => 'مغولستان'],
            ['name' => 'مونته‌نگرو'],
            ['name' => 'مونتسرات'],
            ['name' => 'مراکش'],
            ['name' => 'موزامبیک'],
            ['name' => 'میانمار'],
            ['name' => 'نامیبیا'],
            ['name' => 'نائورو'],
            ['name' => 'نپال'],
            ['name' => 'هلند'],
            ['name' => 'آنتیل هلند'],
            ['name' => 'کالدونیای جدید'],
            ['name' => 'نیوزیلند'],
            ['name' => 'نیکاراگوئه'],
            ['name' => 'نیجر'],
            ['name' => 'نیجریه'],
            ['name' => 'نیووی'],
            ['name' => 'جزیره نورفولک'],
            ['name' => 'جزایر ماریانای شمالی'],
            ['name' => 'نروژ'],
            ['name' => 'عمان'],
            ['name' => 'پاکستان'],
            ['name' => 'پالائو'],
            ['name' => 'فلسطین'],
            ['name' => 'پاناما'],
            ['name' => 'پاپوآ گینه نو'],
            ['name' => 'پاراگوئه'],
            ['name' => 'پرو'],
            ['name' => 'فیلیپین'],
            ['name' => 'جزایر پیت‌کرن'],
            ['name' => 'لهستان'],
            ['name' => 'پرتغال'],
            ['name' => 'پورتوریکو'],
            ['name' => 'قطر'],
            ['name' => 'رئونیون'],
            ['name' => 'رومانی'],
            ['name' => 'روسیه'],
            ['name' => 'رواندا'],
            ['name' => 'سنت بارثلمی'],
            ['name' => 'سینت هلینا'],
            ['name' => 'سنت کیتس و نویس'],
            ['name' => 'سنت لوسیا'],
            ['name' => 'سنت مارتین'],
            ['name' => 'سنت پیر و ماژلان'],
            ['name' => 'سنت وینسنت و گرنادین'],
            ['name' => 'ساموآ'],
            ['name' => 'سن مارینو'],
            ['name' => 'سائوتومه و پرنسیپ'],
            ['name' => 'عربستان سعودی'],
            ['name' => 'سنگال'],
            ['name' => 'صربستان'],
            ['name' => 'سیشل'],
            ['name' => 'سیرالئون'],
            ['name' => 'سنگاپور'],
            ['name' => 'اسلواکی'],
            ['name' => 'اسلوونی'],
            ['name' => 'جزایر سلیمان'],
            ['name' => 'سومالی'],
            ['name' => 'آفریقای جنوبی'],
            ['name' => 'جورجیای جنوبی و جزای'],
            ['name' => 'اسپانیا'],
            ['name' => 'سری‌لانکا'],
            ['name' => 'سودان'],
            ['name' => 'سورینام'],
            ['name' => 'سوالبارد و یان ماین'],
            ['name' => 'سوازیلند'],
            ['name' => 'سوئد'],
            ['name' => 'سوئیس'],
            ['name' => 'سوریه'],
            ['name' => 'تاجیکستان'],
            ['name' => 'تانزانیا'],
            ['name' => 'تایلند'],
            ['name' => 'تیمور شرقی'],
            ['name' => 'توگو'],
            ['name' => 'توکلائو'],
            ['name' => 'تونگا'],
            ['name' => 'ترینیداد و توباگو'],
            ['name' => 'تونس'],
            ['name' => 'ترکیه'],
            ['name' => 'ترکمنستان'],
            ['name' => 'جزایر تورکس و کایکوس'],
            ['name' => 'تووالو'],
            ['name' => 'اوگاندا'],
            ['name' => 'اوکراین'],
            ['name' => 'امارات متحده عربی'],
            ['name' => 'بریتانیا'],
            ['name' => 'ایالات متحده آمریکا'],
            ['name' => 'جزایر کوچک حاشیه‌ای '],
            ['name' => 'اروگوئه'],
            ['name' => 'ازبکستان'],
            ['name' => 'وانواتو'],
            ['name' => 'ونزوئلا'],
            ['name' => 'ویتنام'],
            ['name' => 'جزایر ویرجین انگلستا'],
            ['name' => 'جزایر ویرجین ایالات '],
            ['name' => 'والیس و فوتونا'],
            ['name' => 'صحرای غربی'],
            ['name' => 'یمن'],
            ['name' => 'زامبیا'],
            ['name' => 'زیمبابوه']
        ];

        DB::table('countries')->insert($countries);

        DB::table('cities')->delete();

        $cities = [
            [
                "id" => 1,
                "name" => "اسکو",
                "province_id" => 1
            ],
            [
                "id" => 2,
                "name" => "اهر",
                "province_id" => 1
            ],
            [
                "id" => 3,
                "name" => "ایلخچی",
                "province_id" => 1
            ],
            [
                "id" => 4,
                "name" => "آبش احمد",
                "province_id" => 1
            ],
            [
                "id" => 5,
                "name" => "آذرشهر",
                "province_id" => 1
            ],
            [
                "id" => 6,
                "name" => "آقکند",
                "province_id" => 1
            ],
            [
                "id" => 7,
                "name" => "باسمنج",
                "province_id" => 1
            ],
            [
                "id" => 8,
                "name" => "بخشایش",
                "province_id" => 1
            ],
            [
                "id" => 9,
                "name" => "بستان آباد",
                "province_id" => 1
            ],
            [
                "id" => 10,
                "name" => "بناب",
                "province_id" => 1
            ],
            [
                "id" => 11,
                "name" => "بناب جدید",
                "province_id" => 1
            ],
            [
                "id" => 12,
                "name" => "تبریز",
                "province_id" => 1
            ],
            [
                "id" => 13,
                "name" => "ترک",
                "province_id" => 1
            ],
            [
                "id" => 14,
                "name" => "ترکمانچای",
                "province_id" => 1
            ],
            [
                "id" => 15,
                "name" => "تسوج",
                "province_id" => 1
            ],
            [
                "id" => 16,
                "name" => "تیکمه داش",
                "province_id" => 1
            ],
            [
                "id" => 17,
                "name" => "جلفا",
                "province_id" => 1
            ],
            [
                "id" => 18,
                "name" => "خاروانا",
                "province_id" => 1
            ],
            [
                "id" => 19,
                "name" => "خامنه",
                "province_id" => 1
            ],
            [
                "id" => 20,
                "name" => "خراجو",
                "province_id" => 1
            ],
            [
                "id" => 21,
                "name" => "خسروشهر",
                "province_id" => 1
            ],
            [
                "id" => 22,
                "name" => "خضرلو",
                "province_id" => 1
            ],
            [
                "id" => 23,
                "name" => "خمارلو",
                "province_id" => 1
            ],
            [
                "id" => 24,
                "name" => "خواجه",
                "province_id" => 1
            ],
            [
                "id" => 25,
                "name" => "دوزدوزان",
                "province_id" => 1
            ],
            [
                "id" => 26,
                "name" => "زرنق",
                "province_id" => 1
            ],
            [
                "id" => 27,
                "name" => "زنوز",
                "province_id" => 1
            ],
            [
                "id" => 28,
                "name" => "سراب",
                "province_id" => 1
            ],
            [
                "id" => 29,
                "name" => "سردرود",
                "province_id" => 1
            ],
            [
                "id" => 30,
                "name" => "سهند",
                "province_id" => 1
            ],
            [
                "id" => 31,
                "name" => "سیس",
                "province_id" => 1
            ],
            [
                "id" => 32,
                "name" => "سیه رود",
                "province_id" => 1
            ],
            [
                "id" => 33,
                "name" => "شبستر",
                "province_id" => 1
            ],
            [
                "id" => 34,
                "name" => "شربیان",
                "province_id" => 1
            ],
            [
                "id" => 35,
                "name" => "شرفخانه",
                "province_id" => 1
            ],
            [
                "id" => 36,
                "name" => "شندآباد",
                "province_id" => 1
            ],
            [
                "id" => 37,
                "name" => "صوفیان",
                "province_id" => 1
            ],
            [
                "id" => 38,
                "name" => "عجب شیر",
                "province_id" => 1
            ],
            [
                "id" => 39,
                "name" => "قره آغاج",
                "province_id" => 1
            ],
            [
                "id" => 40,
                "name" => "کشکسرای",
                "province_id" => 1
            ],
            [
                "id" => 41,
                "name" => "کلوانق",
                "province_id" => 1
            ],
            [
                "id" => 42,
                "name" => "کلیبر",
                "province_id" => 1
            ],
            [
                "id" => 43,
                "name" => "کوزه کنان",
                "province_id" => 1
            ],
            [
                "id" => 44,
                "name" => "گوگان",
                "province_id" => 1
            ],
            [
                "id" => 45,
                "name" => "لیلان",
                "province_id" => 1
            ],
            [
                "id" => 46,
                "name" => "مراغه",
                "province_id" => 1
            ],
            [
                "id" => 47,
                "name" => "مرند",
                "province_id" => 1
            ],
            [
                "id" => 48,
                "name" => "ملکان",
                "province_id" => 1
            ],
            [
                "id" => 49,
                "name" => "ملک کیان",
                "province_id" => 1
            ],
            [
                "id" => 50,
                "name" => "ممقان",
                "province_id" => 1
            ],
            [
                "id" => 51,
                "name" => "مهربان",
                "province_id" => 1
            ],
            [
                "id" => 52,
                "name" => "میانه",
                "province_id" => 1
            ],
            [
                "id" => 53,
                "name" => "نظرکهریزی",
                "province_id" => 1
            ],
            [
                "id" => 54,
                "name" => "هادی شهر",
                "province_id" => 1
            ],
            [
                "id" => 55,
                "name" => "هرگلان",
                "province_id" => 1
            ],
            [
                "id" => 56,
                "name" => "هریس",
                "province_id" => 1
            ],
            [
                "id" => 57,
                "name" => "هشترود",
                "province_id" => 1
            ],
            [
                "id" => 58,
                "name" => "هوراند",
                "province_id" => 1
            ],
            [
                "id" => 59,
                "name" => "وایقان",
                "province_id" => 1
            ],
            [
                "id" => 60,
                "name" => "ورزقان",
                "province_id" => 1
            ],
            [
                "id" => 61,
                "name" => "یامچی",
                "province_id" => 1
            ],
            [
                "id" => 62,
                "name" => "ارومیه",
                "province_id" => 2
            ],
            [
                "id" => 63,
                "name" => "اشنویه",
                "province_id" => 2
            ],
            [
                "id" => 64,
                "name" => "ایواوغلی",
                "province_id" => 2
            ],
            [
                "id" => 65,
                "name" => "آواجیق",
                "province_id" => 2
            ],
            [
                "id" => 66,
                "name" => "باروق",
                "province_id" => 2
            ],
            [
                "id" => 67,
                "name" => "بازرگان",
                "province_id" => 2
            ],
            [
                "id" => 68,
                "name" => "بوکان",
                "province_id" => 2
            ],
            [
                "id" => 69,
                "name" => "پلدشت",
                "province_id" => 2
            ],
            [
                "id" => 70,
                "name" => "پیرانشهر",
                "province_id" => 2
            ],
            [
                "id" => 71,
                "name" => "تازه شهر",
                "province_id" => 2
            ],
            [
                "id" => 72,
                "name" => "تکاب",
                "province_id" => 2
            ],
            [
                "id" => 73,
                "name" => "چهاربرج",
                "province_id" => 2
            ],
            [
                "id" => 74,
                "name" => "خوی",
                "province_id" => 2
            ],
            [
                "id" => 75,
                "name" => "دیزج دیز",
                "province_id" => 2
            ],
            [
                "id" => 76,
                "name" => "ربط",
                "province_id" => 2
            ],
            [
                "id" => 77,
                "name" => "سردشت",
                "province_id" => 2
            ],
            [
                "id" => 78,
                "name" => "سرو",
                "province_id" => 2
            ],
            [
                "id" => 79,
                "name" => "سلماس",
                "province_id" => 2
            ],
            [
                "id" => 80,
                "name" => "سیلوانه",
                "province_id" => 2
            ],
            [
                "id" => 81,
                "name" => "سیمینه",
                "province_id" => 2
            ],
            [
                "id" => 82,
                "name" => "سیه چشمه",
                "province_id" => 2
            ],
            [
                "id" => 83,
                "name" => "شاهین دژ",
                "province_id" => 2
            ],
            [
                "id" => 84,
                "name" => "شوط",
                "province_id" => 2
            ],
            [
                "id" => 85,
                "name" => "فیرورق",
                "province_id" => 2
            ],
            [
                "id" => 86,
                "name" => "قره ضیاءالدین",
                "province_id" => 2
            ],
            [
                "id" => 87,
                "name" => "قطور",
                "province_id" => 2
            ],
            [
                "id" => 88,
                "name" => "قوشچی",
                "province_id" => 2
            ],
            [
                "id" => 89,
                "name" => "کشاورز",
                "province_id" => 2
            ],
            [
                "id" => 90,
                "name" => "گردکشانه",
                "province_id" => 2
            ],
            [
                "id" => 91,
                "name" => "ماکو",
                "province_id" => 2
            ],
            [
                "id" => 92,
                "name" => "محمدیار",
                "province_id" => 2
            ],
            [
                "id" => 93,
                "name" => "محمودآباد",
                "province_id" => 2
            ],
            [
                "id" => 94,
                "name" => "مهاباد",
                "province_id" => 2
            ],
            [
                "id" => 95,
                "name" => "میاندوآب",
                "province_id" => 2
            ],
            [
                "id" => 96,
                "name" => "میرآباد",
                "province_id" => 2
            ],
            [
                "id" => 97,
                "name" => "نالوس",
                "province_id" => 2
            ],
            [
                "id" => 98,
                "name" => "نقده",
                "province_id" => 2
            ],
            [
                "id" => 99,
                "name" => "نوشین",
                "province_id" => 2
            ],
            [
                "id" => 100,
                "name" => "اردبیل",
                "province_id" => 3
            ],
            [
                "id" => 101,
                "name" => "اصلاندوز",
                "province_id" => 3
            ],
            [
                "id" => 102,
                "name" => "آبی بیگلو",
                "province_id" => 3
            ],
            [
                "id" => 103,
                "name" => "بیله سوار",
                "province_id" => 3
            ],
            [
                "id" => 104,
                "name" => "پارس آباد",
                "province_id" => 3
            ],
            [
                "id" => 105,
                "name" => "تازه کند",
                "province_id" => 3
            ],
            [
                "id" => 106,
                "name" => "تازه کندانگوت",
                "province_id" => 3
            ],
            [
                "id" => 107,
                "name" => "جعفرآباد",
                "province_id" => 3
            ],
            [
                "id" => 108,
                "name" => "خلخال",
                "province_id" => 3
            ],
            [
                "id" => 109,
                "name" => "رضی",
                "province_id" => 3
            ],
            [
                "id" => 110,
                "name" => "سرعین",
                "province_id" => 3
            ],
            [
                "id" => 111,
                "name" => "عنبران",
                "province_id" => 3
            ],
            [
                "id" => 112,
                "name" => "فخرآباد",
                "province_id" => 3
            ],
            [
                "id" => 113,
                "name" => "کلور",
                "province_id" => 3
            ],
            [
                "id" => 114,
                "name" => "کوراییم",
                "province_id" => 3
            ],
            [
                "id" => 115,
                "name" => "گرمی",
                "province_id" => 3
            ],
            [
                "id" => 116,
                "name" => "گیوی",
                "province_id" => 3
            ],
            [
                "id" => 117,
                "name" => "لاهرود",
                "province_id" => 3
            ],
            [
                "id" => 118,
                "name" => "مشگین شهر",
                "province_id" => 3
            ],
            [
                "id" => 119,
                "name" => "نمین",
                "province_id" => 3
            ],
            [
                "id" => 120,
                "name" => "نیر",
                "province_id" => 3
            ],
            [
                "id" => 121,
                "name" => "هشتجین",
                "province_id" => 3
            ],
            [
                "id" => 122,
                "name" => "هیر",
                "province_id" => 3
            ],
            [
                "id" => 123,
                "name" => "ابریشم",
                "province_id" => 4
            ],
            [
                "id" => 124,
                "name" => "ابوزیدآباد",
                "province_id" => 4
            ],
            [
                "id" => 125,
                "name" => "اردستان",
                "province_id" => 4
            ],
            [
                "id" => 126,
                "name" => "اژیه",
                "province_id" => 4
            ],
            [
                "id" => 127,
                "name" => "اصفهان",
                "province_id" => 4
            ],
            [
                "id" => 128,
                "name" => "افوس",
                "province_id" => 4
            ],
            [
                "id" => 129,
                "name" => "انارک",
                "province_id" => 4
            ],
            [
                "id" => 130,
                "name" => "ایمانشهر",
                "province_id" => 4
            ],
            [
                "id" => 131,
                "name" => "آران وبیدگل",
                "province_id" => 4
            ],
            [
                "id" => 132,
                "name" => "بادرود",
                "province_id" => 4
            ],
            [
                "id" => 133,
                "name" => "باغ بهادران",
                "province_id" => 4
            ],
            [
                "id" => 134,
                "name" => "بافران",
                "province_id" => 4
            ],
            [
                "id" => 135,
                "name" => "برزک",
                "province_id" => 4
            ],
            [
                "id" => 136,
                "name" => "برف انبار",
                "province_id" => 4
            ],
            [
                "id" => 137,
                "name" => "بهاران شهر",
                "province_id" => 4
            ],
            [
                "id" => 138,
                "name" => "بهارستان",
                "province_id" => 4
            ],
            [
                "id" => 139,
                "name" => "بوئین و میاندشت",
                "province_id" => 4
            ],
            [
                "id" => 140,
                "name" => "پیربکران",
                "province_id" => 4
            ],
            [
                "id" => 141,
                "name" => "تودشک",
                "province_id" => 4
            ],
            [
                "id" => 142,
                "name" => "تیران",
                "province_id" => 4
            ],
            [
                "id" => 143,
                "name" => "جندق",
                "province_id" => 4
            ],
            [
                "id" => 144,
                "name" => "جوزدان",
                "province_id" => 4
            ],
            [
                "id" => 145,
                "name" => "جوشقان و کامو",
                "province_id" => 4
            ],
            [
                "id" => 146,
                "name" => "چادگان",
                "province_id" => 4
            ],
            [
                "id" => 147,
                "name" => "چرمهین",
                "province_id" => 4
            ],
            [
                "id" => 148,
                "name" => "چمگردان",
                "province_id" => 4
            ],
            [
                "id" => 149,
                "name" => "حبیب آباد",
                "province_id" => 4
            ],
            [
                "id" => 150,
                "name" => "حسن آباد",
                "province_id" => 4
            ],
            [
                "id" => 151,
                "name" => "حنا",
                "province_id" => 4
            ],
            [
                "id" => 152,
                "name" => "خالدآباد",
                "province_id" => 4
            ],
            [
                "id" => 153,
                "name" => "خمینی شهر",
                "province_id" => 4
            ],
            [
                "id" => 154,
                "name" => "خوانسار",
                "province_id" => 4
            ],
            [
                "id" => 155,
                "name" => "خور",
                "province_id" => 4
            ],
            [
                "id" => 157,
                "name" => "خورزوق",
                "province_id" => 4
            ],
            [
                "id" => 158,
                "name" => "داران",
                "province_id" => 4
            ],
            [
                "id" => 159,
                "name" => "دامنه",
                "province_id" => 4
            ],
            [
                "id" => 160,
                "name" => "درچه",
                "province_id" => 4
            ],
            [
                "id" => 161,
                "name" => "دستگرد",
                "province_id" => 4
            ],
            [
                "id" => 162,
                "name" => "دهاقان",
                "province_id" => 4
            ],
            [
                "id" => 163,
                "name" => "دهق",
                "province_id" => 4
            ],
            [
                "id" => 164,
                "name" => "دولت آباد",
                "province_id" => 4
            ],
            [
                "id" => 165,
                "name" => "دیزیچه",
                "province_id" => 4
            ],
            [
                "id" => 166,
                "name" => "رزوه",
                "province_id" => 4
            ],
            [
                "id" => 167,
                "name" => "رضوانشهر",
                "province_id" => 4
            ],
            [
                "id" => 168,
                "name" => "زاینده رود",
                "province_id" => 4
            ],
            [
                "id" => 169,
                "name" => "زرین شهر",
                "province_id" => 4
            ],
            [
                "id" => 170,
                "name" => "زواره",
                "province_id" => 4
            ],
            [
                "id" => 171,
                "name" => "زیباشهر",
                "province_id" => 4
            ],
            [
                "id" => 172,
                "name" => "سده لنجان",
                "province_id" => 4
            ],
            [
                "id" => 173,
                "name" => "سفیدشهر",
                "province_id" => 4
            ],
            [
                "id" => 174,
                "name" => "سگزی",
                "province_id" => 4
            ],
            [
                "id" => 175,
                "name" => "سمیرم",
                "province_id" => 4
            ],
            [
                "id" => 176,
                "name" => "شاهین شهر",
                "province_id" => 4
            ],
            [
                "id" => 177,
                "name" => "شهرضا",
                "province_id" => 4
            ],
            [
                "id" => 178,
                "name" => "طالخونچه",
                "province_id" => 4
            ],
            [
                "id" => 179,
                "name" => "عسگران",
                "province_id" => 4
            ],
            [
                "id" => 180,
                "name" => "علویجه",
                "province_id" => 4
            ],
            [
                "id" => 181,
                "name" => "فرخی",
                "province_id" => 4
            ],
            [
                "id" => 182,
                "name" => "فریدونشهر",
                "province_id" => 4
            ],
            [
                "id" => 183,
                "name" => "فلاورجان",
                "province_id" => 4
            ],
            [
                "id" => 184,
                "name" => "فولادشهر",
                "province_id" => 4
            ],
            [
                "id" => 185,
                "name" => "قمصر",
                "province_id" => 4
            ],
            [
                "id" => 186,
                "name" => "قهجاورستان",
                "province_id" => 4
            ],
            [
                "id" => 187,
                "name" => "قهدریجان",
                "province_id" => 4
            ],
            [
                "id" => 188,
                "name" => "کاشان",
                "province_id" => 4
            ],
            [
                "id" => 189,
                "name" => "کرکوند",
                "province_id" => 4
            ],
            [
                "id" => 190,
                "name" => "کلیشاد و سودرجان",
                "province_id" => 4
            ],
            [
                "id" => 191,
                "name" => "کمشچه",
                "province_id" => 4
            ],
            [
                "id" => 192,
                "name" => "کمه",
                "province_id" => 4
            ],
            [
                "id" => 193,
                "name" => "کهریزسنگ",
                "province_id" => 4
            ],
            [
                "id" => 194,
                "name" => "کوشک",
                "province_id" => 4
            ],
            [
                "id" => 195,
                "name" => "کوهپایه",
                "province_id" => 4
            ],
            [
                "id" => 196,
                "name" => "گرگاب",
                "province_id" => 4
            ],
            [
                "id" => 197,
                "name" => "گزبرخوار",
                "province_id" => 4
            ],
            [
                "id" => 198,
                "name" => "گلپایگان",
                "province_id" => 4
            ],
            [
                "id" => 199,
                "name" => "گلدشت",
                "province_id" => 4
            ],
            [
                "id" => 200,
                "name" => "گلشهر",
                "province_id" => 4
            ],
            [
                "id" => 201,
                "name" => "گوگد",
                "province_id" => 4
            ],
            [
                "id" => 202,
                "name" => "لای بید",
                "province_id" => 4
            ],
            [
                "id" => 203,
                "name" => "مبارکه",
                "province_id" => 4
            ],
            [
                "id" => 204,
                "name" => "مجلسی",
                "province_id" => 4
            ],
            [
                "id" => 205,
                "name" => "محمدآباد",
                "province_id" => 4
            ],
            [
                "id" => 206,
                "name" => "مشکات",
                "province_id" => 4
            ],
            [
                "id" => 207,
                "name" => "منظریه",
                "province_id" => 4
            ],
            [
                "id" => 208,
                "name" => "مهاباد",
                "province_id" => 4
            ],
            [
                "id" => 209,
                "name" => "میمه",
                "province_id" => 4
            ],
            [
                "id" => 210,
                "name" => "نائین",
                "province_id" => 4
            ],
            [
                "id" => 211,
                "name" => "نجف آباد",
                "province_id" => 4
            ],
            [
                "id" => 212,
                "name" => "نصرآباد",
                "province_id" => 4
            ],
            [
                "id" => 213,
                "name" => "نطنز",
                "province_id" => 4
            ],
            [
                "id" => 214,
                "name" => "نوش آباد",
                "province_id" => 4
            ],
            [
                "id" => 215,
                "name" => "نیاسر",
                "province_id" => 4
            ],
            [
                "id" => 216,
                "name" => "نیک آباد",
                "province_id" => 4
            ],
            [
                "id" => 217,
                "name" => "هرند",
                "province_id" => 4
            ],
            [
                "id" => 218,
                "name" => "ورزنه",
                "province_id" => 4
            ],
            [
                "id" => 219,
                "name" => "ورنامخواست",
                "province_id" => 4
            ],
            [
                "id" => 220,
                "name" => "وزوان",
                "province_id" => 4
            ],
            [
                "id" => 221,
                "name" => "ونک",
                "province_id" => 4
            ],
            [
                "id" => 222,
                "name" => "اسارا",
                "province_id" => 5
            ],
            [
                "id" => 223,
                "name" => "اشتهارد",
                "province_id" => 5
            ],
            [
                "id" => 224,
                "name" => "تنکمان",
                "province_id" => 5
            ],
            [
                "id" => 225,
                "name" => "چهارباغ",
                "province_id" => 5
            ],
            [
                "id" => 226,
                "name" => "سعید آباد",
                "province_id" => 5
            ],
            [
                "id" => 227,
                "name" => "شهر جدید هشتگرد",
                "province_id" => 5
            ],
            [
                "id" => 228,
                "name" => "طالقان",
                "province_id" => 5
            ],
            [
                "id" => 229,
                "name" => "کرج",
                "province_id" => 5
            ],
            [
                "id" => 230,
                "name" => "کمال شهر",
                "province_id" => 5
            ],
            [
                "id" => 231,
                "name" => "کوهسار",
                "province_id" => 5
            ],
            [
                "id" => 232,
                "name" => "گرمدره",
                "province_id" => 5
            ],
            [
                "id" => 233,
                "name" => "ماهدشت",
                "province_id" => 5
            ],
            [
                "id" => 234,
                "name" => "محمدشهر",
                "province_id" => 5
            ],
            [
                "id" => 235,
                "name" => "مشکین دشت",
                "province_id" => 5
            ],
            [
                "id" => 236,
                "name" => "نظرآباد",
                "province_id" => 5
            ],
            [
                "id" => 237,
                "name" => "هشتگرد",
                "province_id" => 5
            ],
            [
                "id" => 238,
                "name" => "ارکواز",
                "province_id" => 6
            ],
            [
                "id" => 239,
                "name" => "ایلام",
                "province_id" => 6
            ],
            [
                "id" => 240,
                "name" => "ایوان",
                "province_id" => 6
            ],
            [
                "id" => 241,
                "name" => "آبدانان",
                "province_id" => 6
            ],
            [
                "id" => 242,
                "name" => "آسمان آباد",
                "province_id" => 6
            ],
            [
                "id" => 243,
                "name" => "بدره",
                "province_id" => 6
            ],
            [
                "id" => 244,
                "name" => "پهله",
                "province_id" => 6
            ],
            [
                "id" => 245,
                "name" => "توحید",
                "province_id" => 6
            ],
            [
                "id" => 246,
                "name" => "چوار",
                "province_id" => 6
            ],
            [
                "id" => 247,
                "name" => "دره شهر",
                "province_id" => 6
            ],
            [
                "id" => 248,
                "name" => "دلگشا",
                "province_id" => 6
            ],
            [
                "id" => 249,
                "name" => "دهلران",
                "province_id" => 6
            ],
            [
                "id" => 250,
                "name" => "زرنه",
                "province_id" => 6
            ],
            [
                "id" => 251,
                "name" => "سراب باغ",
                "province_id" => 6
            ],
            [
                "id" => 252,
                "name" => "سرابله",
                "province_id" => 6
            ],
            [
                "id" => 253,
                "name" => "صالح آباد",
                "province_id" => 6
            ],
            [
                "id" => 254,
                "name" => "لومار",
                "province_id" => 6
            ],
            [
                "id" => 255,
                "name" => "مهران",
                "province_id" => 6
            ],
            [
                "id" => 256,
                "name" => "مورموری",
                "province_id" => 6
            ],
            [
                "id" => 257,
                "name" => "موسیان",
                "province_id" => 6
            ],
            [
                "id" => 258,
                "name" => "میمه",
                "province_id" => 6
            ],
            [
                "id" => 259,
                "name" => "امام حسن",
                "province_id" => 7
            ],
            [
                "id" => 260,
                "name" => "انارستان",
                "province_id" => 7
            ],
            [
                "id" => 261,
                "name" => "اهرم",
                "province_id" => 7
            ],
            [
                "id" => 262,
                "name" => "آب پخش",
                "province_id" => 7
            ],
            [
                "id" => 263,
                "name" => "آبدان",
                "province_id" => 7
            ],
            [
                "id" => 264,
                "name" => "برازجان",
                "province_id" => 7
            ],
            [
                "id" => 265,
                "name" => "بردخون",
                "province_id" => 7
            ],
            [
                "id" => 266,
                "name" => "بندردیر",
                "province_id" => 7
            ],
            [
                "id" => 267,
                "name" => "بندردیلم",
                "province_id" => 7
            ],
            [
                "id" => 268,
                "name" => "بندرریگ",
                "province_id" => 7
            ],
            [
                "id" => 269,
                "name" => "بندرکنگان",
                "province_id" => 7
            ],
            [
                "id" => 270,
                "name" => "بندرگناوه",
                "province_id" => 7
            ],
            [
                "id" => 271,
                "name" => "بنک",
                "province_id" => 7
            ],
            [
                "id" => 272,
                "name" => "بوشهر",
                "province_id" => 7
            ],
            [
                "id" => 273,
                "name" => "تنگ ارم",
                "province_id" => 7
            ],
            [
                "id" => 274,
                "name" => "جم",
                "province_id" => 7
            ],
            [
                "id" => 275,
                "name" => "چغادک",
                "province_id" => 7
            ],
            [
                "id" => 276,
                "name" => "خارک",
                "province_id" => 7
            ],
            [
                "id" => 277,
                "name" => "خورموج",
                "province_id" => 7
            ],
            [
                "id" => 278,
                "name" => "دالکی",
                "province_id" => 7
            ],
            [
                "id" => 279,
                "name" => "دلوار",
                "province_id" => 7
            ],
            [
                "id" => 280,
                "name" => "ریز",
                "province_id" => 7
            ],
            [
                "id" => 281,
                "name" => "سعدآباد",
                "province_id" => 7
            ],
            [
                "id" => 282,
                "name" => "سیراف",
                "province_id" => 7
            ],
            [
                "id" => 283,
                "name" => "شبانکاره",
                "province_id" => 7
            ],
            [
                "id" => 284,
                "name" => "شنبه",
                "province_id" => 7
            ],
            [
                "id" => 285,
                "name" => "عسلویه",
                "province_id" => 7
            ],
            [
                "id" => 286,
                "name" => "کاکی",
                "province_id" => 7
            ],
            [
                "id" => 287,
                "name" => "کلمه",
                "province_id" => 7
            ],
            [
                "id" => 288,
                "name" => "نخل تقی",
                "province_id" => 7
            ],
            [
                "id" => 289,
                "name" => "وحدتیه",
                "province_id" => 7
            ],
            [
                "id" => 290,
                "name" => "ارجمند",
                "province_id" => 8
            ],
            [
                "id" => 291,
                "name" => "اسلامشهر",
                "province_id" => 8
            ],
            [
                "id" => 292,
                "name" => "اندیشه",
                "province_id" => 8
            ],
            [
                "id" => 293,
                "name" => "آبسرد",
                "province_id" => 8
            ],
            [
                "id" => 294,
                "name" => "آبعلی",
                "province_id" => 8
            ],
            [
                "id" => 295,
                "name" => "باغستان",
                "province_id" => 8
            ],
            [
                "id" => 296,
                "name" => "باقرشهر",
                "province_id" => 8
            ],
            [
                "id" => 297,
                "name" => "بومهن",
                "province_id" => 8
            ],
            [
                "id" => 298,
                "name" => "پاکدشت",
                "province_id" => 8
            ],
            [
                "id" => 299,
                "name" => "پردیس",
                "province_id" => 8
            ],
            [
                "id" => 300,
                "name" => "پیشوا",
                "province_id" => 8
            ],
            [
                "id" => 301,
                "name" => "تهران",
                "province_id" => 8
            ],
            [
                "id" => 302,
                "name" => "جوادآباد",
                "province_id" => 8
            ],
            [
                "id" => 303,
                "name" => "چهاردانگه",
                "province_id" => 8
            ],
            [
                "id" => 304,
                "name" => "حسن آباد",
                "province_id" => 8
            ],
            [
                "id" => 305,
                "name" => "دماوند",
                "province_id" => 8
            ],
            [
                "id" => 306,
                "name" => "دیزین",
                "province_id" => 8
            ],
            [
                "id" => 307,
                "name" => "شهر ری",
                "province_id" => 8
            ],
            [
                "id" => 308,
                "name" => "رباط کریم",
                "province_id" => 8
            ],
            [
                "id" => 309,
                "name" => "رودهن",
                "province_id" => 8
            ],
            [
                "id" => 310,
                "name" => "شاهدشهر",
                "province_id" => 8
            ],
            [
                "id" => 311,
                "name" => "شریف آباد",
                "province_id" => 8
            ],
            [
                "id" => 312,
                "name" => "شمشک",
                "province_id" => 8
            ],
            [
                "id" => 313,
                "name" => "شهریار",
                "province_id" => 8
            ],
            [
                "id" => 314,
                "name" => "صالح آباد",
                "province_id" => 8
            ],
            [
                "id" => 315,
                "name" => "صباشهر",
                "province_id" => 8
            ],
            [
                "id" => 316,
                "name" => "صفادشت",
                "province_id" => 8
            ],
            [
                "id" => 317,
                "name" => "فردوسیه",
                "province_id" => 8
            ],
            [
                "id" => 318,
                "name" => "فشم",
                "province_id" => 8
            ],
            [
                "id" => 319,
                "name" => "فیروزکوه",
                "province_id" => 8
            ],
            [
                "id" => 320,
                "name" => "قدس",
                "province_id" => 8
            ],
            [
                "id" => 321,
                "name" => "قرچک",
                "province_id" => 8
            ],
            [
                "id" => 322,
                "name" => "کهریزک",
                "province_id" => 8
            ],
            [
                "id" => 323,
                "name" => "کیلان",
                "province_id" => 8
            ],
            [
                "id" => 324,
                "name" => "گلستان",
                "province_id" => 8
            ],
            [
                "id" => 325,
                "name" => "لواسان",
                "province_id" => 8
            ],
            [
                "id" => 326,
                "name" => "ملارد",
                "province_id" => 8
            ],
            [
                "id" => 327,
                "name" => "میگون",
                "province_id" => 8
            ],
            [
                "id" => 328,
                "name" => "نسیم شهر",
                "province_id" => 8
            ],
            [
                "id" => 329,
                "name" => "نصیرآباد",
                "province_id" => 8
            ],
            [
                "id" => 330,
                "name" => "وحیدیه",
                "province_id" => 8
            ],
            [
                "id" => 331,
                "name" => "ورامین",
                "province_id" => 8
            ],
            [
                "id" => 332,
                "name" => "اردل",
                "province_id" => 9
            ],
            [
                "id" => 333,
                "name" => "آلونی",
                "province_id" => 9
            ],
            [
                "id" => 334,
                "name" => "باباحیدر",
                "province_id" => 9
            ],
            [
                "id" => 335,
                "name" => "بروجن",
                "province_id" => 9
            ],
            [
                "id" => 336,
                "name" => "بلداجی",
                "province_id" => 9
            ],
            [
                "id" => 337,
                "name" => "بن",
                "province_id" => 9
            ],
            [
                "id" => 338,
                "name" => "جونقان",
                "province_id" => 9
            ],
            [
                "id" => 339,
                "name" => "چلگرد",
                "province_id" => 9
            ],
            [
                "id" => 340,
                "name" => "سامان",
                "province_id" => 9
            ],
            [
                "id" => 341,
                "name" => "سفیددشت",
                "province_id" => 9
            ],
            [
                "id" => 342,
                "name" => "سودجان",
                "province_id" => 9
            ],
            [
                "id" => 343,
                "name" => "سورشجان",
                "province_id" => 9
            ],
            [
                "id" => 344,
                "name" => "شلمزار",
                "province_id" => 9
            ],
            [
                "id" => 345,
                "name" => "شهرکرد",
                "province_id" => 9
            ],
            [
                "id" => 346,
                "name" => "طاقانک",
                "province_id" => 9
            ],
            [
                "id" => 347,
                "name" => "فارسان",
                "province_id" => 9
            ],
            [
                "id" => 348,
                "name" => "فرادنبه",
                "province_id" => 9
            ],
            [
                "id" => 349,
                "name" => "فرخ شهر",
                "province_id" => 9
            ],
            [
                "id" => 350,
                "name" => "کیان",
                "province_id" => 9
            ],
            [
                "id" => 351,
                "name" => "گندمان",
                "province_id" => 9
            ],
            [
                "id" => 352,
                "name" => "گهرو",
                "province_id" => 9
            ],
            [
                "id" => 353,
                "name" => "لردگان",
                "province_id" => 9
            ],
            [
                "id" => 354,
                "name" => "مال خلیفه",
                "province_id" => 9
            ],
            [
                "id" => 355,
                "name" => "ناغان",
                "province_id" => 9
            ],
            [
                "id" => 356,
                "name" => "نافچ",
                "province_id" => 9
            ],
            [
                "id" => 357,
                "name" => "نقنه",
                "province_id" => 9
            ],
            [
                "id" => 358,
                "name" => "هفشجان",
                "province_id" => 9
            ],
            [
                "id" => 359,
                "name" => "ارسک",
                "province_id" => 10
            ],
            [
                "id" => 360,
                "name" => "اسدیه",
                "province_id" => 10
            ],
            [
                "id" => 361,
                "name" => "اسفدن",
                "province_id" => 10
            ],
            [
                "id" => 362,
                "name" => "اسلامیه",
                "province_id" => 10
            ],
            [
                "id" => 363,
                "name" => "آرین شهر",
                "province_id" => 10
            ],
            [
                "id" => 364,
                "name" => "آیسک",
                "province_id" => 10
            ],
            [
                "id" => 365,
                "name" => "بشرویه",
                "province_id" => 10
            ],
            [
                "id" => 366,
                "name" => "بیرجند",
                "province_id" => 10
            ],
            [
                "id" => 367,
                "name" => "حاجی آباد",
                "province_id" => 10
            ],
            [
                "id" => 368,
                "name" => "خضری دشت بیاض",
                "province_id" => 10
            ],
            [
                "id" => 369,
                "name" => "خوسف",
                "province_id" => 10
            ],
            [
                "id" => 370,
                "name" => "زهان",
                "province_id" => 10
            ],
            [
                "id" => 371,
                "name" => "سرایان",
                "province_id" => 10
            ],
            [
                "id" => 372,
                "name" => "سربیشه",
                "province_id" => 10
            ],
            [
                "id" => 373,
                "name" => "سه قلعه",
                "province_id" => 10
            ],
            [
                "id" => 374,
                "name" => "شوسف",
                "province_id" => 10
            ],
            [
                "id" => 375,
                "name" => "طبس ",
                "province_id" => 10
            ],
            [
                "id" => 376,
                "name" => "فردوس",
                "province_id" => 10
            ],
            [
                "id" => 377,
                "name" => "قاین",
                "province_id" => 10
            ],
            [
                "id" => 378,
                "name" => "قهستان",
                "province_id" => 10
            ],
            [
                "id" => 379,
                "name" => "محمدشهر",
                "province_id" => 10
            ],
            [
                "id" => 380,
                "name" => "مود",
                "province_id" => 10
            ],
            [
                "id" => 381,
                "name" => "نهبندان",
                "province_id" => 10
            ],
            [
                "id" => 382,
                "name" => "نیمبلوک",
                "province_id" => 10
            ],
            [
                "id" => 383,
                "name" => "احمدآباد صولت",
                "province_id" => 11
            ],
            [
                "id" => 384,
                "name" => "انابد",
                "province_id" => 11
            ],
            [
                "id" => 385,
                "name" => "باجگیران",
                "province_id" => 11
            ],
            [
                "id" => 386,
                "name" => "باخرز",
                "province_id" => 11
            ],
            [
                "id" => 387,
                "name" => "بار",
                "province_id" => 11
            ],
            [
                "id" => 388,
                "name" => "بایگ",
                "province_id" => 11
            ],
            [
                "id" => 389,
                "name" => "بجستان",
                "province_id" => 11
            ],
            [
                "id" => 390,
                "name" => "بردسکن",
                "province_id" => 11
            ],
            [
                "id" => 391,
                "name" => "بیدخت",
                "province_id" => 11
            ],
            [
                "id" => 392,
                "name" => "تایباد",
                "province_id" => 11
            ],
            [
                "id" => 393,
                "name" => "تربت جام",
                "province_id" => 11
            ],
            [
                "id" => 394,
                "name" => "تربت حیدریه",
                "province_id" => 11
            ],
            [
                "id" => 395,
                "name" => "جغتای",
                "province_id" => 11
            ],
            [
                "id" => 396,
                "name" => "جنگل",
                "province_id" => 11
            ],
            [
                "id" => 397,
                "name" => "چاپشلو",
                "province_id" => 11
            ],
            [
                "id" => 398,
                "name" => "چکنه",
                "province_id" => 11
            ],
            [
                "id" => 399,
                "name" => "چناران",
                "province_id" => 11
            ],
            [
                "id" => 400,
                "name" => "خرو",
                "province_id" => 11
            ],
            [
                "id" => 401,
                "name" => "خلیل آباد",
                "province_id" => 11
            ],
            [
                "id" => 402,
                "name" => "خواف",
                "province_id" => 11
            ],
            [
                "id" => 403,
                "name" => "داورزن",
                "province_id" => 11
            ],
            [
                "id" => 404,
                "name" => "درگز",
                "province_id" => 11
            ],
            [
                "id" => 405,
                "name" => "در رود",
                "province_id" => 11
            ],
            [
                "id" => 406,
                "name" => "دولت آباد",
                "province_id" => 11
            ],
            [
                "id" => 407,
                "name" => "رباط سنگ",
                "province_id" => 11
            ],
            [
                "id" => 408,
                "name" => "رشتخوار",
                "province_id" => 11
            ],
            [
                "id" => 409,
                "name" => "رضویه",
                "province_id" => 11
            ],
            [
                "id" => 410,
                "name" => "روداب",
                "province_id" => 11
            ],
            [
                "id" => 411,
                "name" => "ریوش",
                "province_id" => 11
            ],
            [
                "id" => 412,
                "name" => "سبزوار",
                "province_id" => 11
            ],
            [
                "id" => 413,
                "name" => "سرخس",
                "province_id" => 11
            ],
            [
                "id" => 414,
                "name" => "سفیدسنگ",
                "province_id" => 11
            ],
            [
                "id" => 415,
                "name" => "سلامی",
                "province_id" => 11
            ],
            [
                "id" => 416,
                "name" => "سلطان آباد",
                "province_id" => 11
            ],
            [
                "id" => 417,
                "name" => "سنگان",
                "province_id" => 11
            ],
            [
                "id" => 418,
                "name" => "شادمهر",
                "province_id" => 11
            ],
            [
                "id" => 419,
                "name" => "شاندیز",
                "province_id" => 11
            ],
            [
                "id" => 420,
                "name" => "ششتمد",
                "province_id" => 11
            ],
            [
                "id" => 421,
                "name" => "شهرآباد",
                "province_id" => 11
            ],
            [
                "id" => 422,
                "name" => "شهرزو",
                "province_id" => 11
            ],
            [
                "id" => 423,
                "name" => "صالح آباد",
                "province_id" => 11
            ],
            [
                "id" => 424,
                "name" => "طرقبه",
                "province_id" => 11
            ],
            [
                "id" => 425,
                "name" => "عشق آباد",
                "province_id" => 11
            ],
            [
                "id" => 426,
                "name" => "فرهادگرد",
                "province_id" => 11
            ],
            [
                "id" => 427,
                "name" => "فریمان",
                "province_id" => 11
            ],
            [
                "id" => 428,
                "name" => "فیروزه",
                "province_id" => 11
            ],
            [
                "id" => 429,
                "name" => "فیض آباد",
                "province_id" => 11
            ],
            [
                "id" => 430,
                "name" => "قاسم آباد",
                "province_id" => 11
            ],
            [
                "id" => 431,
                "name" => "قدمگاه",
                "province_id" => 11
            ],
            [
                "id" => 432,
                "name" => "قلندرآباد",
                "province_id" => 11
            ],
            [
                "id" => 433,
                "name" => "قوچان",
                "province_id" => 11
            ],
            [
                "id" => 434,
                "name" => "کاخک",
                "province_id" => 11
            ],
            [
                "id" => 435,
                "name" => "کاریز",
                "province_id" => 11
            ],
            [
                "id" => 436,
                "name" => "کاشمر",
                "province_id" => 11
            ],
            [
                "id" => 437,
                "name" => "کدکن",
                "province_id" => 11
            ],
            [
                "id" => 438,
                "name" => "کلات",
                "province_id" => 11
            ],
            [
                "id" => 439,
                "name" => "کندر",
                "province_id" => 11
            ],
            [
                "id" => 440,
                "name" => "گلمکان",
                "province_id" => 11
            ],
            [
                "id" => 441,
                "name" => "گناباد",
                "province_id" => 11
            ],
            [
                "id" => 442,
                "name" => "لطف آباد",
                "province_id" => 11
            ],
            [
                "id" => 443,
                "name" => "مزدآوند",
                "province_id" => 11
            ],
            [
                "id" => 444,
                "name" => "مشهد",
                "province_id" => 11
            ],
            [
                "id" => 445,
                "name" => "ملک آباد",
                "province_id" => 11
            ],
            [
                "id" => 446,
                "name" => "نشتیفان",
                "province_id" => 11
            ],
            [
                "id" => 447,
                "name" => "نصرآباد",
                "province_id" => 11
            ],
            [
                "id" => 448,
                "name" => "نقاب",
                "province_id" => 11
            ],
            [
                "id" => 449,
                "name" => "نوخندان",
                "province_id" => 11
            ],
            [
                "id" => 450,
                "name" => "نیشابور",
                "province_id" => 11
            ],
            [
                "id" => 451,
                "name" => "نیل شهر",
                "province_id" => 11
            ],
            [
                "id" => 452,
                "name" => "همت آباد",
                "province_id" => 11
            ],
            [
                "id" => 453,
                "name" => "یونسی",
                "province_id" => 11
            ],
            [
                "id" => 454,
                "name" => "اسفراین",
                "province_id" => 12
            ],
            [
                "id" => 455,
                "name" => "ایور",
                "province_id" => 12
            ],
            [
                "id" => 456,
                "name" => "آشخانه",
                "province_id" => 12
            ],
            [
                "id" => 457,
                "name" => "بجنورد",
                "province_id" => 12
            ],
            [
                "id" => 458,
                "name" => "پیش قلعه",
                "province_id" => 12
            ],
            [
                "id" => 459,
                "name" => "تیتکانلو",
                "province_id" => 12
            ],
            [
                "id" => 460,
                "name" => "جاجرم",
                "province_id" => 12
            ],
            [
                "id" => 461,
                "name" => "حصارگرمخان",
                "province_id" => 12
            ],
            [
                "id" => 462,
                "name" => "درق",
                "province_id" => 12
            ],
            [
                "id" => 463,
                "name" => "راز",
                "province_id" => 12
            ],
            [
                "id" => 464,
                "name" => "سنخواست",
                "province_id" => 12
            ],
            [
                "id" => 465,
                "name" => "شوقان",
                "province_id" => 12
            ],
            [
                "id" => 466,
                "name" => "شیروان",
                "province_id" => 12
            ],
            [
                "id" => 467,
                "name" => "صفی آباد",
                "province_id" => 12
            ],
            [
                "id" => 468,
                "name" => "فاروج",
                "province_id" => 12
            ],
            [
                "id" => 469,
                "name" => "قاضی",
                "province_id" => 12
            ],
            [
                "id" => 470,
                "name" => "گرمه",
                "province_id" => 12
            ],
            [
                "id" => 471,
                "name" => "لوجلی",
                "province_id" => 12
            ],
            [
                "id" => 472,
                "name" => "اروندکنار",
                "province_id" => 13
            ],
            [
                "id" => 473,
                "name" => "الوان",
                "province_id" => 13
            ],
            [
                "id" => 474,
                "name" => "امیدیه",
                "province_id" => 13
            ],
            [
                "id" => 475,
                "name" => "اندیمشک",
                "province_id" => 13
            ],
            [
                "id" => 476,
                "name" => "اهواز",
                "province_id" => 13
            ],
            [
                "id" => 477,
                "name" => "ایذه",
                "province_id" => 13
            ],
            [
                "id" => 478,
                "name" => "آبادان",
                "province_id" => 13
            ],
            [
                "id" => 479,
                "name" => "آغاجاری",
                "province_id" => 13
            ],
            [
                "id" => 480,
                "name" => "باغ ملک",
                "province_id" => 13
            ],
            [
                "id" => 481,
                "name" => "بستان",
                "province_id" => 13
            ],
            [
                "id" => 482,
                "name" => "بندرامام خمینی",
                "province_id" => 13
            ],
            [
                "id" => 483,
                "name" => "بندرماهشهر",
                "province_id" => 13
            ],
            [
                "id" => 484,
                "name" => "بهبهان",
                "province_id" => 13
            ],
            [
                "id" => 485,
                "name" => "ترکالکی",
                "province_id" => 13
            ],
            [
                "id" => 486,
                "name" => "جایزان",
                "province_id" => 13
            ],
            [
                "id" => 487,
                "name" => "چمران",
                "province_id" => 13
            ],
            [
                "id" => 488,
                "name" => "چویبده",
                "province_id" => 13
            ],
            [
                "id" => 489,
                "name" => "حر",
                "province_id" => 13
            ],
            [
                "id" => 490,
                "name" => "حسینیه",
                "province_id" => 13
            ],
            [
                "id" => 491,
                "name" => "حمزه",
                "province_id" => 13
            ],
            [
                "id" => 492,
                "name" => "حمیدیه",
                "province_id" => 13
            ],
            [
                "id" => 493,
                "name" => "خرمشهر",
                "province_id" => 13
            ],
            [
                "id" => 494,
                "name" => "دارخوین",
                "province_id" => 13
            ],
            [
                "id" => 495,
                "name" => "دزآب",
                "province_id" => 13
            ],
            [
                "id" => 496,
                "name" => "دزفول",
                "province_id" => 13
            ],
            [
                "id" => 497,
                "name" => "دهدز",
                "province_id" => 13
            ],
            [
                "id" => 498,
                "name" => "رامشیر",
                "province_id" => 13
            ],
            [
                "id" => 499,
                "name" => "رامهرمز",
                "province_id" => 13
            ],
            [
                "id" => 500,
                "name" => "رفیع",
                "province_id" => 13
            ],
            [
                "id" => 501,
                "name" => "زهره",
                "province_id" => 13
            ],
            [
                "id" => 502,
                "name" => "سالند",
                "province_id" => 13
            ],
            [
                "id" => 503,
                "name" => "سردشت",
                "province_id" => 13
            ],
            [
                "id" => 504,
                "name" => "سوسنگرد",
                "province_id" => 13
            ],
            [
                "id" => 505,
                "name" => "شادگان",
                "province_id" => 13
            ],
            [
                "id" => 506,
                "name" => "شاوور",
                "province_id" => 13
            ],
            [
                "id" => 507,
                "name" => "شرافت",
                "province_id" => 13
            ],
            [
                "id" => 508,
                "name" => "شوش",
                "province_id" => 13
            ],
            [
                "id" => 509,
                "name" => "شوشتر",
                "province_id" => 13
            ],
            [
                "id" => 510,
                "name" => "شیبان",
                "province_id" => 13
            ],
            [
                "id" => 511,
                "name" => "صالح شهر",
                "province_id" => 13
            ],
            [
                "id" => 512,
                "name" => "صفی آباد",
                "province_id" => 13
            ],
            [
                "id" => 513,
                "name" => "صیدون",
                "province_id" => 13
            ],
            [
                "id" => 514,
                "name" => "قلعه تل",
                "province_id" => 13
            ],
            [
                "id" => 515,
                "name" => "قلعه خواجه",
                "province_id" => 13
            ],
            [
                "id" => 516,
                "name" => "گتوند",
                "province_id" => 13
            ],
            [
                "id" => 517,
                "name" => "لالی",
                "province_id" => 13
            ],
            [
                "id" => 518,
                "name" => "مسجدسلیمان",
                "province_id" => 13
            ],
            [
                "id" => 520,
                "name" => "ملاثانی",
                "province_id" => 13
            ],
            [
                "id" => 521,
                "name" => "میانرود",
                "province_id" => 13
            ],
            [
                "id" => 522,
                "name" => "مینوشهر",
                "province_id" => 13
            ],
            [
                "id" => 523,
                "name" => "هفتگل",
                "province_id" => 13
            ],
            [
                "id" => 524,
                "name" => "هندیجان",
                "province_id" => 13
            ],
            [
                "id" => 525,
                "name" => "هویزه",
                "province_id" => 13
            ],
            [
                "id" => 526,
                "name" => "ویس",
                "province_id" => 13
            ],
            [
                "id" => 527,
                "name" => "ابهر",
                "province_id" => 14
            ],
            [
                "id" => 528,
                "name" => "ارمغان خانه",
                "province_id" => 14
            ],
            [
                "id" => 529,
                "name" => "آب بر",
                "province_id" => 14
            ],
            [
                "id" => 530,
                "name" => "چورزق",
                "province_id" => 14
            ],
            [
                "id" => 531,
                "name" => "حلب",
                "province_id" => 14
            ],
            [
                "id" => 532,
                "name" => "خرمدره",
                "province_id" => 14
            ],
            [
                "id" => 533,
                "name" => "دندی",
                "province_id" => 14
            ],
            [
                "id" => 534,
                "name" => "زرین آباد",
                "province_id" => 14
            ],
            [
                "id" => 535,
                "name" => "زرین رود",
                "province_id" => 14
            ],
            [
                "id" => 536,
                "name" => "زنجان",
                "province_id" => 14
            ],
            [
                "id" => 537,
                "name" => "سجاس",
                "province_id" => 14
            ],
            [
                "id" => 538,
                "name" => "سلطانیه",
                "province_id" => 14
            ],
            [
                "id" => 539,
                "name" => "سهرورد",
                "province_id" => 14
            ],
            [
                "id" => 540,
                "name" => "صائین قلعه",
                "province_id" => 14
            ],
            [
                "id" => 541,
                "name" => "قیدار",
                "province_id" => 14
            ],
            [
                "id" => 542,
                "name" => "گرماب",
                "province_id" => 14
            ],
            [
                "id" => 543,
                "name" => "ماه نشان",
                "province_id" => 14
            ],
            [
                "id" => 544,
                "name" => "هیدج",
                "province_id" => 14
            ],
            [
                "id" => 545,
                "name" => "امیریه",
                "province_id" => 15
            ],
            [
                "id" => 546,
                "name" => "ایوانکی",
                "province_id" => 15
            ],
            [
                "id" => 547,
                "name" => "آرادان",
                "province_id" => 15
            ],
            [
                "id" => 548,
                "name" => "بسطام",
                "province_id" => 15
            ],
            [
                "id" => 549,
                "name" => "بیارجمند",
                "province_id" => 15
            ],
            [
                "id" => 550,
                "name" => "دامغان",
                "province_id" => 15
            ],
            [
                "id" => 551,
                "name" => "درجزین",
                "province_id" => 15
            ],
            [
                "id" => 552,
                "name" => "دیباج",
                "province_id" => 15
            ],
            [
                "id" => 553,
                "name" => "سرخه",
                "province_id" => 15
            ],
            [
                "id" => 554,
                "name" => "سمنان",
                "province_id" => 15
            ],
            [
                "id" => 555,
                "name" => "شاهرود",
                "province_id" => 15
            ],
            [
                "id" => 556,
                "name" => "شهمیرزاد",
                "province_id" => 15
            ],
            [
                "id" => 557,
                "name" => "کلاته خیج",
                "province_id" => 15
            ],
            [
                "id" => 558,
                "name" => "گرمسار",
                "province_id" => 15
            ],
            [
                "id" => 559,
                "name" => "مجن",
                "province_id" => 15
            ],
            [
                "id" => 560,
                "name" => "مهدی شهر",
                "province_id" => 15
            ],
            [
                "id" => 561,
                "name" => "میامی",
                "province_id" => 15
            ],
            [
                "id" => 562,
                "name" => "ادیمی",
                "province_id" => 16
            ],
            [
                "id" => 563,
                "name" => "اسپکه",
                "province_id" => 16
            ],
            [
                "id" => 564,
                "name" => "ایرانشهر",
                "province_id" => 16
            ],
            [
                "id" => 565,
                "name" => "بزمان",
                "province_id" => 16
            ],
            [
                "id" => 566,
                "name" => "بمپور",
                "province_id" => 16
            ],
            [
                "id" => 567,
                "name" => "بنت",
                "province_id" => 16
            ],
            [
                "id" => 568,
                "name" => "بنجار",
                "province_id" => 16
            ],
            [
                "id" => 569,
                "name" => "پیشین",
                "province_id" => 16
            ],
            [
                "id" => 570,
                "name" => "جالق",
                "province_id" => 16
            ],
            [
                "id" => 571,
                "name" => "چابهار",
                "province_id" => 16
            ],
            [
                "id" => 572,
                "name" => "خاش",
                "province_id" => 16
            ],
            [
                "id" => 573,
                "name" => "دوست محمد",
                "province_id" => 16
            ],
            [
                "id" => 574,
                "name" => "راسک",
                "province_id" => 16
            ],
            [
                "id" => 575,
                "name" => "زابل",
                "province_id" => 16
            ],
            [
                "id" => 576,
                "name" => "زابلی",
                "province_id" => 16
            ],
            [
                "id" => 577,
                "name" => "زاهدان",
                "province_id" => 16
            ],
            [
                "id" => 578,
                "name" => "زهک",
                "province_id" => 16
            ],
            [
                "id" => 579,
                "name" => "سراوان",
                "province_id" => 16
            ],
            [
                "id" => 580,
                "name" => "سرباز",
                "province_id" => 16
            ],
            [
                "id" => 581,
                "name" => "سوران",
                "province_id" => 16
            ],
            [
                "id" => 582,
                "name" => "سیرکان",
                "province_id" => 16
            ],
            [
                "id" => 583,
                "name" => "علی اکبر",
                "province_id" => 16
            ],
            [
                "id" => 584,
                "name" => "فنوج",
                "province_id" => 16
            ],
            [
                "id" => 585,
                "name" => "قصرقند",
                "province_id" => 16
            ],
            [
                "id" => 586,
                "name" => "کنارک",
                "province_id" => 16
            ],
            [
                "id" => 587,
                "name" => "گشت",
                "province_id" => 16
            ],
            [
                "id" => 588,
                "name" => "گلمورتی",
                "province_id" => 16
            ],
            [
                "id" => 589,
                "name" => "محمدان",
                "province_id" => 16
            ],
            [
                "id" => 590,
                "name" => "محمدآباد",
                "province_id" => 16
            ],
            [
                "id" => 591,
                "name" => "محمدی",
                "province_id" => 16
            ],
            [
                "id" => 592,
                "name" => "میرجاوه",
                "province_id" => 16
            ],
            [
                "id" => 593,
                "name" => "نصرت آباد",
                "province_id" => 16
            ],
            [
                "id" => 594,
                "name" => "نگور",
                "province_id" => 16
            ],
            [
                "id" => 595,
                "name" => "نوک آباد",
                "province_id" => 16
            ],
            [
                "id" => 596,
                "name" => "نیک شهر",
                "province_id" => 16
            ],
            [
                "id" => 597,
                "name" => "هیدوچ",
                "province_id" => 16
            ],
            [
                "id" => 598,
                "name" => "اردکان",
                "province_id" => 17
            ],
            [
                "id" => 599,
                "name" => "ارسنجان",
                "province_id" => 17
            ],
            [
                "id" => 600,
                "name" => "استهبان",
                "province_id" => 17
            ],
            [
                "id" => 601,
                "name" => "اشکنان",
                "province_id" => 17
            ],
            [
                "id" => 602,
                "name" => "افزر",
                "province_id" => 17
            ],
            [
                "id" => 603,
                "name" => "اقلید",
                "province_id" => 17
            ],
            [
                "id" => 604,
                "name" => "امام شهر",
                "province_id" => 17
            ],
            [
                "id" => 605,
                "name" => "اهل",
                "province_id" => 17
            ],
            [
                "id" => 606,
                "name" => "اوز",
                "province_id" => 17
            ],
            [
                "id" => 607,
                "name" => "ایج",
                "province_id" => 17
            ],
            [
                "id" => 608,
                "name" => "ایزدخواست",
                "province_id" => 17
            ],
            [
                "id" => 609,
                "name" => "آباده",
                "province_id" => 17
            ],
            [
                "id" => 610,
                "name" => "آباده طشک",
                "province_id" => 17
            ],
            [
                "id" => 611,
                "name" => "باب انار",
                "province_id" => 17
            ],
            [
                "id" => 612,
                "name" => "بالاده",
                "province_id" => 17
            ],
            [
                "id" => 613,
                "name" => "بنارویه",
                "province_id" => 17
            ],
            [
                "id" => 614,
                "name" => "بهمن",
                "province_id" => 17
            ],
            [
                "id" => 615,
                "name" => "بوانات",
                "province_id" => 17
            ],
            [
                "id" => 616,
                "name" => "بیرم",
                "province_id" => 17
            ],
            [
                "id" => 617,
                "name" => "بیضا",
                "province_id" => 17
            ],
            [
                "id" => 618,
                "name" => "جنت شهر",
                "province_id" => 17
            ],
            [
                "id" => 619,
                "name" => "جهرم",
                "province_id" => 17
            ],
            [
                "id" => 620,
                "name" => "جویم",
                "province_id" => 17
            ],
            [
                "id" => 621,
                "name" => "زرین دشت",
                "province_id" => 17
            ],
            [
                "id" => 622,
                "name" => "حسن آباد",
                "province_id" => 17
            ],
            [
                "id" => 623,
                "name" => "خان زنیان",
                "province_id" => 17
            ],
            [
                "id" => 624,
                "name" => "خاوران",
                "province_id" => 17
            ],
            [
                "id" => 625,
                "name" => "خرامه",
                "province_id" => 17
            ],
            [
                "id" => 626,
                "name" => "خشت",
                "province_id" => 17
            ],
            [
                "id" => 627,
                "name" => "خنج",
                "province_id" => 17
            ],
            [
                "id" => 628,
                "name" => "خور",
                "province_id" => 17
            ],
            [
                "id" => 629,
                "name" => "داراب",
                "province_id" => 17
            ],
            [
                "id" => 630,
                "name" => "داریان",
                "province_id" => 17
            ],
            [
                "id" => 631,
                "name" => "دبیران",
                "province_id" => 17
            ],
            [
                "id" => 632,
                "name" => "دژکرد",
                "province_id" => 17
            ],
            [
                "id" => 633,
                "name" => "دهرم",
                "province_id" => 17
            ],
            [
                "id" => 634,
                "name" => "دوبرجی",
                "province_id" => 17
            ],
            [
                "id" => 635,
                "name" => "رامجرد",
                "province_id" => 17
            ],
            [
                "id" => 636,
                "name" => "رونیز",
                "province_id" => 17
            ],
            [
                "id" => 637,
                "name" => "زاهدشهر",
                "province_id" => 17
            ],
            [
                "id" => 638,
                "name" => "زرقان",
                "province_id" => 17
            ],
            [
                "id" => 639,
                "name" => "سده",
                "province_id" => 17
            ],
            [
                "id" => 640,
                "name" => "سروستان",
                "province_id" => 17
            ],
            [
                "id" => 641,
                "name" => "سعادت شهر",
                "province_id" => 17
            ],
            [
                "id" => 642,
                "name" => "سورمق",
                "province_id" => 17
            ],
            [
                "id" => 643,
                "name" => "سیدان",
                "province_id" => 17
            ],
            [
                "id" => 644,
                "name" => "ششده",
                "province_id" => 17
            ],
            [
                "id" => 645,
                "name" => "شهرپیر",
                "province_id" => 17
            ],
            [
                "id" => 646,
                "name" => "شهرصدرا",
                "province_id" => 17
            ],
            [
                "id" => 647,
                "name" => "شیراز",
                "province_id" => 17
            ],
            [
                "id" => 648,
                "name" => "صغاد",
                "province_id" => 17
            ],
            [
                "id" => 649,
                "name" => "صفاشهر",
                "province_id" => 17
            ],
            [
                "id" => 650,
                "name" => "علامرودشت",
                "province_id" => 17
            ],
            [
                "id" => 651,
                "name" => "فدامی",
                "province_id" => 17
            ],
            [
                "id" => 652,
                "name" => "فراشبند",
                "province_id" => 17
            ],
            [
                "id" => 653,
                "name" => "فسا",
                "province_id" => 17
            ],
            [
                "id" => 654,
                "name" => "فیروزآباد",
                "province_id" => 17
            ],
            [
                "id" => 655,
                "name" => "قائمیه",
                "province_id" => 17
            ],
            [
                "id" => 656,
                "name" => "قادرآباد",
                "province_id" => 17
            ],
            [
                "id" => 657,
                "name" => "قطب آباد",
                "province_id" => 17
            ],
            [
                "id" => 658,
                "name" => "قطرویه",
                "province_id" => 17
            ],
            [
                "id" => 659,
                "name" => "قیر",
                "province_id" => 17
            ],
            [
                "id" => 660,
                "name" => "کارزین (فتح آباد)",
                "province_id" => 17
            ],
            [
                "id" => 661,
                "name" => "کازرون",
                "province_id" => 17
            ],
            [
                "id" => 662,
                "name" => "کامفیروز",
                "province_id" => 17
            ],
            [
                "id" => 663,
                "name" => "کره ای",
                "province_id" => 17
            ],
            [
                "id" => 664,
                "name" => "کنارتخته",
                "province_id" => 17
            ],
            [
                "id" => 665,
                "name" => "کوار",
                "province_id" => 17
            ],
            [
                "id" => 666,
                "name" => "گراش",
                "province_id" => 17
            ],
            [
                "id" => 667,
                "name" => "گله دار",
                "province_id" => 17
            ],
            [
                "id" => 668,
                "name" => "لار",
                "province_id" => 17
            ],
            [
                "id" => 669,
                "name" => "لامرد",
                "province_id" => 17
            ],
            [
                "id" => 670,
                "name" => "لپویی",
                "province_id" => 17
            ],
            [
                "id" => 671,
                "name" => "لطیفی",
                "province_id" => 17
            ],
            [
                "id" => 672,
                "name" => "مبارک آباددیز",
                "province_id" => 17
            ],
            [
                "id" => 673,
                "name" => "مرودشت",
                "province_id" => 17
            ],
            [
                "id" => 674,
                "name" => "مشکان",
                "province_id" => 17
            ],
            [
                "id" => 675,
                "name" => "مصیری",
                "province_id" => 17
            ],
            [
                "id" => 676,
                "name" => "مهر",
                "province_id" => 17
            ],
            [
                "id" => 677,
                "name" => "میمند",
                "province_id" => 17
            ],
            [
                "id" => 678,
                "name" => "نوبندگان",
                "province_id" => 17
            ],
            [
                "id" => 679,
                "name" => "نوجین",
                "province_id" => 17
            ],
            [
                "id" => 680,
                "name" => "نودان",
                "province_id" => 17
            ],
            [
                "id" => 681,
                "name" => "نورآباد",
                "province_id" => 17
            ],
            [
                "id" => 682,
                "name" => "نی ریز",
                "province_id" => 17
            ],
            [
                "id" => 683,
                "name" => "وراوی",
                "province_id" => 17
            ],
            [
                "id" => 684,
                "name" => "ارداق",
                "province_id" => 18
            ],
            [
                "id" => 685,
                "name" => "اسفرورین",
                "province_id" => 18
            ],
            [
                "id" => 686,
                "name" => "اقبالیه",
                "province_id" => 18
            ],
            [
                "id" => 687,
                "name" => "الوند",
                "province_id" => 18
            ],
            [
                "id" => 688,
                "name" => "آبگرم",
                "province_id" => 18
            ],
            [
                "id" => 689,
                "name" => "آبیک",
                "province_id" => 18
            ],
            [
                "id" => 690,
                "name" => "آوج",
                "province_id" => 18
            ],
            [
                "id" => 691,
                "name" => "بوئین زهرا",
                "province_id" => 18
            ],
            [
                "id" => 692,
                "name" => "بیدستان",
                "province_id" => 18
            ],
            [
                "id" => 693,
                "name" => "تاکستان",
                "province_id" => 18
            ],
            [
                "id" => 694,
                "name" => "خاکعلی",
                "province_id" => 18
            ],
            [
                "id" => 695,
                "name" => "خرمدشت",
                "province_id" => 18
            ],
            [
                "id" => 696,
                "name" => "دانسفهان",
                "province_id" => 18
            ],
            [
                "id" => 697,
                "name" => "رازمیان",
                "province_id" => 18
            ],
            [
                "id" => 698,
                "name" => "سگزآباد",
                "province_id" => 18
            ],
            [
                "id" => 699,
                "name" => "سیردان",
                "province_id" => 18
            ],
            [
                "id" => 700,
                "name" => "شال",
                "province_id" => 18
            ],
            [
                "id" => 701,
                "name" => "شریفیه",
                "province_id" => 18
            ],
            [
                "id" => 702,
                "name" => "ضیاآباد",
                "province_id" => 18
            ],
            [
                "id" => 703,
                "name" => "قزوین",
                "province_id" => 18
            ],
            [
                "id" => 704,
                "name" => "کوهین",
                "province_id" => 18
            ],
            [
                "id" => 705,
                "name" => "محمدیه",
                "province_id" => 18
            ],
            [
                "id" => 706,
                "name" => "محمودآباد نمونه",
                "province_id" => 18
            ],
            [
                "id" => 707,
                "name" => "معلم کلایه",
                "province_id" => 18
            ],
            [
                "id" => 708,
                "name" => "نرجه",
                "province_id" => 18
            ],
            [
                "id" => 709,
                "name" => "جعفریه",
                "province_id" => 19
            ],
            [
                "id" => 710,
                "name" => "دستجرد",
                "province_id" => 19
            ],
            [
                "id" => 711,
                "name" => "سلفچگان",
                "province_id" => 19
            ],
            [
                "id" => 712,
                "name" => "قم",
                "province_id" => 19
            ],
            [
                "id" => 713,
                "name" => "قنوات",
                "province_id" => 19
            ],
            [
                "id" => 714,
                "name" => "کهک",
                "province_id" => 19
            ],
            [
                "id" => 715,
                "name" => "آرمرده",
                "province_id" => 20
            ],
            [
                "id" => 716,
                "name" => "بابارشانی",
                "province_id" => 20
            ],
            [
                "id" => 717,
                "name" => "بانه",
                "province_id" => 20
            ],
            [
                "id" => 718,
                "name" => "بلبان آباد",
                "province_id" => 20
            ],
            [
                "id" => 719,
                "name" => "بوئین سفلی",
                "province_id" => 20
            ],
            [
                "id" => 720,
                "name" => "بیجار",
                "province_id" => 20
            ],
            [
                "id" => 721,
                "name" => "چناره",
                "province_id" => 20
            ],
            [
                "id" => 722,
                "name" => "دزج",
                "province_id" => 20
            ],
            [
                "id" => 723,
                "name" => "دلبران",
                "province_id" => 20
            ],
            [
                "id" => 724,
                "name" => "دهگلان",
                "province_id" => 20
            ],
            [
                "id" => 725,
                "name" => "دیواندره",
                "province_id" => 20
            ],
            [
                "id" => 726,
                "name" => "زرینه",
                "province_id" => 20
            ],
            [
                "id" => 727,
                "name" => "سروآباد",
                "province_id" => 20
            ],
            [
                "id" => 728,
                "name" => "سریش آباد",
                "province_id" => 20
            ],
            [
                "id" => 729,
                "name" => "سقز",
                "province_id" => 20
            ],
            [
                "id" => 730,
                "name" => "سنندج",
                "province_id" => 20
            ],
            [
                "id" => 731,
                "name" => "شویشه",
                "province_id" => 20
            ],
            [
                "id" => 732,
                "name" => "صاحب",
                "province_id" => 20
            ],
            [
                "id" => 733,
                "name" => "قروه",
                "province_id" => 20
            ],
            [
                "id" => 734,
                "name" => "کامیاران",
                "province_id" => 20
            ],
            [
                "id" => 735,
                "name" => "کانی دینار",
                "province_id" => 20
            ],
            [
                "id" => 736,
                "name" => "کانی سور",
                "province_id" => 20
            ],
            [
                "id" => 737,
                "name" => "مریوان",
                "province_id" => 20
            ],
            [
                "id" => 738,
                "name" => "موچش",
                "province_id" => 20
            ],
            [
                "id" => 739,
                "name" => "یاسوکند",
                "province_id" => 20
            ],
            [
                "id" => 740,
                "name" => "اختیارآباد",
                "province_id" => 21
            ],
            [
                "id" => 741,
                "name" => "ارزوئیه",
                "province_id" => 21
            ],
            [
                "id" => 742,
                "name" => "امین شهر",
                "province_id" => 21
            ],
            [
                "id" => 743,
                "name" => "انار",
                "province_id" => 21
            ],
            [
                "id" => 744,
                "name" => "اندوهجرد",
                "province_id" => 21
            ],
            [
                "id" => 745,
                "name" => "باغین",
                "province_id" => 21
            ],
            [
                "id" => 746,
                "name" => "بافت",
                "province_id" => 21
            ],
            [
                "id" => 747,
                "name" => "بردسیر",
                "province_id" => 21
            ],
            [
                "id" => 748,
                "name" => "بروات",
                "province_id" => 21
            ],
            [
                "id" => 749,
                "name" => "بزنجان",
                "province_id" => 21
            ],
            [
                "id" => 750,
                "name" => "بم",
                "province_id" => 21
            ],
            [
                "id" => 751,
                "name" => "بهرمان",
                "province_id" => 21
            ],
            [
                "id" => 752,
                "name" => "پاریز",
                "province_id" => 21
            ],
            [
                "id" => 753,
                "name" => "جبالبارز",
                "province_id" => 21
            ],
            [
                "id" => 754,
                "name" => "جوپار",
                "province_id" => 21
            ],
            [
                "id" => 755,
                "name" => "جوزم",
                "province_id" => 21
            ],
            [
                "id" => 756,
                "name" => "جیرفت",
                "province_id" => 21
            ],
            [
                "id" => 757,
                "name" => "چترود",
                "province_id" => 21
            ],
            [
                "id" => 758,
                "name" => "خاتون آباد",
                "province_id" => 21
            ],
            [
                "id" => 759,
                "name" => "خانوک",
                "province_id" => 21
            ],
            [
                "id" => 760,
                "name" => "خورسند",
                "province_id" => 21
            ],
            [
                "id" => 761,
                "name" => "درب بهشت",
                "province_id" => 21
            ],
            [
                "id" => 762,
                "name" => "دهج",
                "province_id" => 21
            ],
            [
                "id" => 763,
                "name" => "رابر",
                "province_id" => 21
            ],
            [
                "id" => 764,
                "name" => "راور",
                "province_id" => 21
            ],
            [
                "id" => 765,
                "name" => "راین",
                "province_id" => 21
            ],
            [
                "id" => 766,
                "name" => "رفسنجان",
                "province_id" => 21
            ],
            [
                "id" => 767,
                "name" => "رودبار",
                "province_id" => 21
            ],
            [
                "id" => 768,
                "name" => "ریحان شهر",
                "province_id" => 21
            ],
            [
                "id" => 769,
                "name" => "زرند",
                "province_id" => 21
            ],
            [
                "id" => 770,
                "name" => "زنگی آباد",
                "province_id" => 21
            ],
            [
                "id" => 771,
                "name" => "زیدآباد",
                "province_id" => 21
            ],
            [
                "id" => 772,
                "name" => "سیرجان",
                "province_id" => 21
            ],
            [
                "id" => 773,
                "name" => "شهداد",
                "province_id" => 21
            ],
            [
                "id" => 774,
                "name" => "شهربابک",
                "province_id" => 21
            ],
            [
                "id" => 775,
                "name" => "صفائیه",
                "province_id" => 21
            ],
            [
                "id" => 776,
                "name" => "عنبرآباد",
                "province_id" => 21
            ],
            [
                "id" => 777,
                "name" => "فاریاب",
                "province_id" => 21
            ],
            [
                "id" => 778,
                "name" => "فهرج",
                "province_id" => 21
            ],
            [
                "id" => 779,
                "name" => "قلعه گنج",
                "province_id" => 21
            ],
            [
                "id" => 780,
                "name" => "کاظم آباد",
                "province_id" => 21
            ],
            [
                "id" => 781,
                "name" => "کرمان",
                "province_id" => 21
            ],
            [
                "id" => 782,
                "name" => "کشکوئیه",
                "province_id" => 21
            ],
            [
                "id" => 783,
                "name" => "کهنوج",
                "province_id" => 21
            ],
            [
                "id" => 784,
                "name" => "کوهبنان",
                "province_id" => 21
            ],
            [
                "id" => 785,
                "name" => "کیانشهر",
                "province_id" => 21
            ],
            [
                "id" => 786,
                "name" => "گلباف",
                "province_id" => 21
            ],
            [
                "id" => 787,
                "name" => "گلزار",
                "province_id" => 21
            ],
            [
                "id" => 788,
                "name" => "لاله زار",
                "province_id" => 21
            ],
            [
                "id" => 789,
                "name" => "ماهان",
                "province_id" => 21
            ],
            [
                "id" => 790,
                "name" => "محمدآباد",
                "province_id" => 21
            ],
            [
                "id" => 791,
                "name" => "محی آباد",
                "province_id" => 21
            ],
            [
                "id" => 792,
                "name" => "مردهک",
                "province_id" => 21
            ],
            [
                "id" => 793,
                "name" => "مس سرچشمه",
                "province_id" => 21
            ],
            [
                "id" => 794,
                "name" => "منوجان",
                "province_id" => 21
            ],
            [
                "id" => 795,
                "name" => "نجف شهر",
                "province_id" => 21
            ],
            [
                "id" => 796,
                "name" => "نرماشیر",
                "province_id" => 21
            ],
            [
                "id" => 797,
                "name" => "نظام شهر",
                "province_id" => 21
            ],
            [
                "id" => 798,
                "name" => "نگار",
                "province_id" => 21
            ],
            [
                "id" => 799,
                "name" => "نودژ",
                "province_id" => 21
            ],
            [
                "id" => 800,
                "name" => "هجدک",
                "province_id" => 21
            ],
            [
                "id" => 801,
                "name" => "یزدان شهر",
                "province_id" => 21
            ],
            [
                "id" => 802,
                "name" => "ازگله",
                "province_id" => 22
            ],
            [
                "id" => 803,
                "name" => "اسلام آباد غرب",
                "province_id" => 22
            ],
            [
                "id" => 804,
                "name" => "باینگان",
                "province_id" => 22
            ],
            [
                "id" => 805,
                "name" => "بیستون",
                "province_id" => 22
            ],
            [
                "id" => 806,
                "name" => "پاوه",
                "province_id" => 22
            ],
            [
                "id" => 807,
                "name" => "تازه آباد",
                "province_id" => 22
            ],
            [
                "id" => 808,
                "name" => "جوان رود",
                "province_id" => 22
            ],
            [
                "id" => 809,
                "name" => "حمیل",
                "province_id" => 22
            ],
            [
                "id" => 810,
                "name" => "ماهیدشت",
                "province_id" => 22
            ],
            [
                "id" => 811,
                "name" => "روانسر",
                "province_id" => 22
            ],
            [
                "id" => 812,
                "name" => "سرپل ذهاب",
                "province_id" => 22
            ],
            [
                "id" => 813,
                "name" => "سرمست",
                "province_id" => 22
            ],
            [
                "id" => 814,
                "name" => "سطر",
                "province_id" => 22
            ],
            [
                "id" => 815,
                "name" => "سنقر",
                "province_id" => 22
            ],
            [
                "id" => 816,
                "name" => "سومار",
                "province_id" => 22
            ],
            [
                "id" => 817,
                "name" => "شاهو",
                "province_id" => 22
            ],
            [
                "id" => 818,
                "name" => "صحنه",
                "province_id" => 22
            ],
            [
                "id" => 819,
                "name" => "قصرشیرین",
                "province_id" => 22
            ],
            [
                "id" => 820,
                "name" => "کرمانشاه",
                "province_id" => 22
            ],
            [
                "id" => 821,
                "name" => "کرندغرب",
                "province_id" => 22
            ],
            [
                "id" => 822,
                "name" => "کنگاور",
                "province_id" => 22
            ],
            [
                "id" => 823,
                "name" => "کوزران",
                "province_id" => 22
            ],
            [
                "id" => 824,
                "name" => "گهواره",
                "province_id" => 22
            ],
            [
                "id" => 825,
                "name" => "گیلانغرب",
                "province_id" => 22
            ],
            [
                "id" => 826,
                "name" => "میان راهان",
                "province_id" => 22
            ],
            [
                "id" => 827,
                "name" => "نودشه",
                "province_id" => 22
            ],
            [
                "id" => 828,
                "name" => "نوسود",
                "province_id" => 22
            ],
            [
                "id" => 829,
                "name" => "هرسین",
                "province_id" => 22
            ],
            [
                "id" => 830,
                "name" => "هلشی",
                "province_id" => 22
            ],
            [
                "id" => 831,
                "name" => "باشت",
                "province_id" => 23
            ],
            [
                "id" => 832,
                "name" => "پاتاوه",
                "province_id" => 23
            ],
            [
                "id" => 833,
                "name" => "چرام",
                "province_id" => 23
            ],
            [
                "id" => 834,
                "name" => "چیتاب",
                "province_id" => 23
            ],
            [
                "id" => 835,
                "name" => "دهدشت",
                "province_id" => 23
            ],
            [
                "id" => 836,
                "name" => "دوگنبدان",
                "province_id" => 23
            ],
            [
                "id" => 837,
                "name" => "دیشموک",
                "province_id" => 23
            ],
            [
                "id" => 838,
                "name" => "سوق",
                "province_id" => 23
            ],
            [
                "id" => 839,
                "name" => "سی سخت",
                "province_id" => 23
            ],
            [
                "id" => 840,
                "name" => "قلعه رئیسی",
                "province_id" => 23
            ],
            [
                "id" => 841,
                "name" => "گراب سفلی",
                "province_id" => 23
            ],
            [
                "id" => 842,
                "name" => "لنده",
                "province_id" => 23
            ],
            [
                "id" => 843,
                "name" => "لیکک",
                "province_id" => 23
            ],
            [
                "id" => 844,
                "name" => "مادوان",
                "province_id" => 23
            ],
            [
                "id" => 845,
                "name" => "مارگون",
                "province_id" => 23
            ],
            [
                "id" => 846,
                "name" => "یاسوج",
                "province_id" => 23
            ],
            [
                "id" => 847,
                "name" => "انبارآلوم",
                "province_id" => 24
            ],
            [
                "id" => 848,
                "name" => "اینچه برون",
                "province_id" => 24
            ],
            [
                "id" => 849,
                "name" => "آزادشهر",
                "province_id" => 24
            ],
            [
                "id" => 850,
                "name" => "آق قلا",
                "province_id" => 24
            ],
            [
                "id" => 851,
                "name" => "بندرترکمن",
                "province_id" => 24
            ],
            [
                "id" => 852,
                "name" => "بندرگز",
                "province_id" => 24
            ],
            [
                "id" => 853,
                "name" => "جلین",
                "province_id" => 24
            ],
            [
                "id" => 854,
                "name" => "خان ببین",
                "province_id" => 24
            ],
            [
                "id" => 855,
                "name" => "دلند",
                "province_id" => 24
            ],
            [
                "id" => 856,
                "name" => "رامیان",
                "province_id" => 24
            ],
            [
                "id" => 857,
                "name" => "سرخنکلاته",
                "province_id" => 24
            ],
            [
                "id" => 858,
                "name" => "سیمین شهر",
                "province_id" => 24
            ],
            [
                "id" => 859,
                "name" => "علی آباد کتول",
                "province_id" => 24
            ],
            [
                "id" => 860,
                "name" => "فاضل آباد",
                "province_id" => 24
            ],
            [
                "id" => 861,
                "name" => "کردکوی",
                "province_id" => 24
            ],
            [
                "id" => 862,
                "name" => "کلاله",
                "province_id" => 24
            ],
            [
                "id" => 863,
                "name" => "گالیکش",
                "province_id" => 24
            ],
            [
                "id" => 864,
                "name" => "گرگان",
                "province_id" => 24
            ],
            [
                "id" => 865,
                "name" => "گمیش تپه",
                "province_id" => 24
            ],
            [
                "id" => 866,
                "name" => "گنبدکاووس",
                "province_id" => 24
            ],
            [
                "id" => 867,
                "name" => "مراوه",
                "province_id" => 24
            ],
            [
                "id" => 868,
                "name" => "مینودشت",
                "province_id" => 24
            ],
            [
                "id" => 869,
                "name" => "نگین شهر",
                "province_id" => 24
            ],
            [
                "id" => 870,
                "name" => "نوده خاندوز",
                "province_id" => 24
            ],
            [
                "id" => 871,
                "name" => "نوکنده",
                "province_id" => 24
            ],
            [
                "id" => 872,
                "name" => "ازنا",
                "province_id" => 25
            ],
            [
                "id" => 873,
                "name" => "اشترینان",
                "province_id" => 25
            ],
            [
                "id" => 874,
                "name" => "الشتر",
                "province_id" => 25
            ],
            [
                "id" => 875,
                "name" => "الیگودرز",
                "province_id" => 25
            ],
            [
                "id" => 876,
                "name" => "بروجرد",
                "province_id" => 25
            ],
            [
                "id" => 877,
                "name" => "پلدختر",
                "province_id" => 25
            ],
            [
                "id" => 878,
                "name" => "چالانچولان",
                "province_id" => 25
            ],
            [
                "id" => 879,
                "name" => "چغلوندی",
                "province_id" => 25
            ],
            [
                "id" => 880,
                "name" => "چقابل",
                "province_id" => 25
            ],
            [
                "id" => 881,
                "name" => "خرم آباد",
                "province_id" => 25
            ],
            [
                "id" => 882,
                "name" => "درب گنبد",
                "province_id" => 25
            ],
            [
                "id" => 883,
                "name" => "دورود",
                "province_id" => 25
            ],
            [
                "id" => 884,
                "name" => "زاغه",
                "province_id" => 25
            ],
            [
                "id" => 885,
                "name" => "سپیددشت",
                "province_id" => 25
            ],
            [
                "id" => 886,
                "name" => "سراب دوره",
                "province_id" => 25
            ],
            [
                "id" => 887,
                "name" => "فیروزآباد",
                "province_id" => 25
            ],
            [
                "id" => 888,
                "name" => "کونانی",
                "province_id" => 25
            ],
            [
                "id" => 889,
                "name" => "کوهدشت",
                "province_id" => 25
            ],
            [
                "id" => 890,
                "name" => "گراب",
                "province_id" => 25
            ],
            [
                "id" => 891,
                "name" => "معمولان",
                "province_id" => 25
            ],
            [
                "id" => 892,
                "name" => "مومن آباد",
                "province_id" => 25
            ],
            [
                "id" => 893,
                "name" => "نورآباد",
                "province_id" => 25
            ],
            [
                "id" => 894,
                "name" => "ویسیان",
                "province_id" => 25
            ],
            [
                "id" => 895,
                "name" => "احمدسرگوراب",
                "province_id" => 26
            ],
            [
                "id" => 896,
                "name" => "اسالم",
                "province_id" => 26
            ],
            [
                "id" => 897,
                "name" => "اطاقور",
                "province_id" => 26
            ],
            [
                "id" => 898,
                "name" => "املش",
                "province_id" => 26
            ],
            [
                "id" => 899,
                "name" => "آستارا",
                "province_id" => 26
            ],
            [
                "id" => 900,
                "name" => "آستانه اشرفیه",
                "province_id" => 26
            ],
            [
                "id" => 901,
                "name" => "بازار جمعه",
                "province_id" => 26
            ],
            [
                "id" => 902,
                "name" => "بره سر",
                "province_id" => 26
            ],
            [
                "id" => 903,
                "name" => "بندرانزلی",
                "province_id" => 26
            ],
            [
                "id" => 906,
                "name" => "پره سر",
                "province_id" => 26
            ],
            [
                "id" => 907,
                "name" => "تالش",
                "province_id" => 26
            ],
            [
                "id" => 908,
                "name" => "توتکابن",
                "province_id" => 26
            ],
            [
                "id" => 909,
                "name" => "جیرنده",
                "province_id" => 26
            ],
            [
                "id" => 910,
                "name" => "چابکسر",
                "province_id" => 26
            ],
            [
                "id" => 911,
                "name" => "چاف و چمخاله",
                "province_id" => 26
            ],
            [
                "id" => 912,
                "name" => "چوبر",
                "province_id" => 26
            ],
            [
                "id" => 913,
                "name" => "حویق",
                "province_id" => 26
            ],
            [
                "id" => 914,
                "name" => "خشکبیجار",
                "province_id" => 26
            ],
            [
                "id" => 915,
                "name" => "خمام",
                "province_id" => 26
            ],
            [
                "id" => 916,
                "name" => "دیلمان",
                "province_id" => 26
            ],
            [
                "id" => 917,
                "name" => "رانکوه",
                "province_id" => 26
            ],
            [
                "id" => 918,
                "name" => "رحیم آباد",
                "province_id" => 26
            ],
            [
                "id" => 919,
                "name" => "رستم آباد",
                "province_id" => 26
            ],
            [
                "id" => 920,
                "name" => "رشت",
                "province_id" => 26
            ],
            [
                "id" => 921,
                "name" => "رضوانشهر",
                "province_id" => 26
            ],
            [
                "id" => 922,
                "name" => "رودبار",
                "province_id" => 26
            ],
            [
                "id" => 923,
                "name" => "رودبنه",
                "province_id" => 26
            ],
            [
                "id" => 924,
                "name" => "رودسر",
                "province_id" => 26
            ],
            [
                "id" => 925,
                "name" => "سنگر",
                "province_id" => 26
            ],
            [
                "id" => 926,
                "name" => "سیاهکل",
                "province_id" => 26
            ],
            [
                "id" => 927,
                "name" => "شفت",
                "province_id" => 26
            ],
            [
                "id" => 928,
                "name" => "شلمان",
                "province_id" => 26
            ],
            [
                "id" => 929,
                "name" => "صومعه سرا",
                "province_id" => 26
            ],
            [
                "id" => 930,
                "name" => "فومن",
                "province_id" => 26
            ],
            [
                "id" => 931,
                "name" => "کلاچای",
                "province_id" => 26
            ],
            [
                "id" => 932,
                "name" => "کوچصفهان",
                "province_id" => 26
            ],
            [
                "id" => 933,
                "name" => "کومله",
                "province_id" => 26
            ],
            [
                "id" => 934,
                "name" => "کیاشهر",
                "province_id" => 26
            ],
            [
                "id" => 935,
                "name" => "گوراب زرمیخ",
                "province_id" => 26
            ],
            [
                "id" => 936,
                "name" => "لاهیجان",
                "province_id" => 26
            ],
            [
                "id" => 937,
                "name" => "لشت نشا",
                "province_id" => 26
            ],
            [
                "id" => 938,
                "name" => "لنگرود",
                "province_id" => 26
            ],
            [
                "id" => 939,
                "name" => "لوشان",
                "province_id" => 26
            ],
            [
                "id" => 940,
                "name" => "لولمان",
                "province_id" => 26
            ],
            [
                "id" => 941,
                "name" => "لوندویل",
                "province_id" => 26
            ],
            [
                "id" => 942,
                "name" => "لیسار",
                "province_id" => 26
            ],
            [
                "id" => 943,
                "name" => "ماسال",
                "province_id" => 26
            ],
            [
                "id" => 944,
                "name" => "ماسوله",
                "province_id" => 26
            ],
            [
                "id" => 945,
                "name" => "مرجقل",
                "province_id" => 26
            ],
            [
                "id" => 946,
                "name" => "منجیل",
                "province_id" => 26
            ],
            [
                "id" => 947,
                "name" => "واجارگاه",
                "province_id" => 26
            ],
            [
                "id" => 948,
                "name" => "امیرکلا",
                "province_id" => 27
            ],
            [
                "id" => 949,
                "name" => "ایزدشهر",
                "province_id" => 27
            ],
            [
                "id" => 950,
                "name" => "آلاشت",
                "province_id" => 27
            ],
            [
                "id" => 951,
                "name" => "آمل",
                "province_id" => 27
            ],
            [
                "id" => 952,
                "name" => "بابل",
                "province_id" => 27
            ],
            [
                "id" => 953,
                "name" => "بابلسر",
                "province_id" => 27
            ],
            [
                "id" => 954,
                "name" => "بلده",
                "province_id" => 27
            ],
            [
                "id" => 955,
                "name" => "بهشهر",
                "province_id" => 27
            ],
            [
                "id" => 956,
                "name" => "بهنمیر",
                "province_id" => 27
            ],
            [
                "id" => 957,
                "name" => "پل سفید",
                "province_id" => 27
            ],
            [
                "id" => 958,
                "name" => "تنکابن",
                "province_id" => 27
            ],
            [
                "id" => 959,
                "name" => "جویبار",
                "province_id" => 27
            ],
            [
                "id" => 960,
                "name" => "چالوس",
                "province_id" => 27
            ],
            [
                "id" => 961,
                "name" => "چمستان",
                "province_id" => 27
            ],
            [
                "id" => 962,
                "name" => "خرم آباد",
                "province_id" => 27
            ],
            [
                "id" => 963,
                "name" => "خلیل شهر",
                "province_id" => 27
            ],
            [
                "id" => 964,
                "name" => "خوش رودپی",
                "province_id" => 27
            ],
            [
                "id" => 965,
                "name" => "دابودشت",
                "province_id" => 27
            ],
            [
                "id" => 966,
                "name" => "رامسر",
                "province_id" => 27
            ],
            [
                "id" => 967,
                "name" => "رستمکلا",
                "province_id" => 27
            ],
            [
                "id" => 968,
                "name" => "رویان",
                "province_id" => 27
            ],
            [
                "id" => 969,
                "name" => "رینه",
                "province_id" => 27
            ],
            [
                "id" => 970,
                "name" => "زرگرمحله",
                "province_id" => 27
            ],
            [
                "id" => 971,
                "name" => "زیرآب",
                "province_id" => 27
            ],
            [
                "id" => 972,
                "name" => "ساری",
                "province_id" => 27
            ],
            [
                "id" => 973,
                "name" => "سرخرود",
                "province_id" => 27
            ],
            [
                "id" => 974,
                "name" => "سلمان شهر",
                "province_id" => 27
            ],
            [
                "id" => 975,
                "name" => "سورک",
                "province_id" => 27
            ],
            [
                "id" => 976,
                "name" => "شیرگاه",
                "province_id" => 27
            ],
            [
                "id" => 977,
                "name" => "شیرود",
                "province_id" => 27
            ],
            [
                "id" => 978,
                "name" => "عباس آباد",
                "province_id" => 27
            ],
            [
                "id" => 979,
                "name" => "فریدونکنار",
                "province_id" => 27
            ],
            [
                "id" => 980,
                "name" => "فریم",
                "province_id" => 27
            ],
            [
                "id" => 981,
                "name" => "قائم شهر",
                "province_id" => 27
            ],
            [
                "id" => 982,
                "name" => "کتالم",
                "province_id" => 27
            ],
            [
                "id" => 983,
                "name" => "کلارآباد",
                "province_id" => 27
            ],
            [
                "id" => 984,
                "name" => "کلاردشت",
                "province_id" => 27
            ],
            [
                "id" => 985,
                "name" => "کله بست",
                "province_id" => 27
            ],
            [
                "id" => 986,
                "name" => "کوهی خیل",
                "province_id" => 27
            ],
            [
                "id" => 987,
                "name" => "کیاسر",
                "province_id" => 27
            ],
            [
                "id" => 988,
                "name" => "کیاکلا",
                "province_id" => 27
            ],
            [
                "id" => 989,
                "name" => "گتاب",
                "province_id" => 27
            ],
            [
                "id" => 990,
                "name" => "گزنک",
                "province_id" => 27
            ],
            [
                "id" => 991,
                "name" => "گلوگاه",
                "province_id" => 27
            ],
            [
                "id" => 992,
                "name" => "محمودآباد",
                "province_id" => 27
            ],
            [
                "id" => 993,
                "name" => "مرزن آباد",
                "province_id" => 27
            ],
            [
                "id" => 994,
                "name" => "مرزیکلا",
                "province_id" => 27
            ],
            [
                "id" => 995,
                "name" => "نشتارود",
                "province_id" => 27
            ],
            [
                "id" => 996,
                "name" => "نکا",
                "province_id" => 27
            ],
            [
                "id" => 997,
                "name" => "نور",
                "province_id" => 27
            ],
            [
                "id" => 998,
                "name" => "نوشهر",
                "province_id" => 27
            ],
            [
                "id" => 999,
                "name" => "اراک",
                "province_id" => 28
            ],
            [
                "id" => 1000,
                "name" => "آستانه",
                "province_id" => 28
            ],
            [
                "id" => 1001,
                "name" => "آشتیان",
                "province_id" => 28
            ],
            [
                "id" => 1002,
                "name" => "پرندک",
                "province_id" => 28
            ],
            [
                "id" => 1003,
                "name" => "تفرش",
                "province_id" => 28
            ],
            [
                "id" => 1004,
                "name" => "توره",
                "province_id" => 28
            ],
            [
                "id" => 1005,
                "name" => "جاورسیان",
                "province_id" => 28
            ],
            [
                "id" => 1006,
                "name" => "خشکرود",
                "province_id" => 28
            ],
            [
                "id" => 1007,
                "name" => "خمین",
                "province_id" => 28
            ],
            [
                "id" => 1008,
                "name" => "خنداب",
                "province_id" => 28
            ],
            [
                "id" => 1009,
                "name" => "داودآباد",
                "province_id" => 28
            ],
            [
                "id" => 1010,
                "name" => "دلیجان",
                "province_id" => 28
            ],
            [
                "id" => 1011,
                "name" => "رازقان",
                "province_id" => 28
            ],
            [
                "id" => 1012,
                "name" => "زاویه",
                "province_id" => 28
            ],
            [
                "id" => 1013,
                "name" => "ساروق",
                "province_id" => 28
            ],
            [
                "id" => 1014,
                "name" => "ساوه",
                "province_id" => 28
            ],
            [
                "id" => 1015,
                "name" => "سنجان",
                "province_id" => 28
            ],
            [
                "id" => 1016,
                "name" => "شازند",
                "province_id" => 28
            ],
            [
                "id" => 1017,
                "name" => "غرق آباد",
                "province_id" => 28
            ],
            [
                "id" => 1018,
                "name" => "فرمهین",
                "province_id" => 28
            ],
            [
                "id" => 1019,
                "name" => "قورچی باشی",
                "province_id" => 28
            ],
            [
                "id" => 1020,
                "name" => "کرهرود",
                "province_id" => 28
            ],
            [
                "id" => 1021,
                "name" => "کمیجان",
                "province_id" => 28
            ],
            [
                "id" => 1022,
                "name" => "مامونیه",
                "province_id" => 28
            ],
            [
                "id" => 1023,
                "name" => "محلات",
                "province_id" => 28
            ],
            [
                "id" => 1024,
                "name" => "مهاجران",
                "province_id" => 28
            ],
            [
                "id" => 1025,
                "name" => "میلاجرد",
                "province_id" => 28
            ],
            [
                "id" => 1026,
                "name" => "نراق",
                "province_id" => 28
            ],
            [
                "id" => 1027,
                "name" => "نوبران",
                "province_id" => 28
            ],
            [
                "id" => 1028,
                "name" => "نیمور",
                "province_id" => 28
            ],
            [
                "id" => 1029,
                "name" => "هندودر",
                "province_id" => 28
            ],
            [
                "id" => 1030,
                "name" => "ابوموسی",
                "province_id" => 29
            ],
            [
                "id" => 1031,
                "name" => "بستک",
                "province_id" => 29
            ],
            [
                "id" => 1032,
                "name" => "بندرجاسک",
                "province_id" => 29
            ],
            [
                "id" => 1033,
                "name" => "بندرچارک",
                "province_id" => 29
            ],
            [
                "id" => 1034,
                "name" => "بندرخمیر",
                "province_id" => 29
            ],
            [
                "id" => 1035,
                "name" => "بندرعباس",
                "province_id" => 29
            ],
            [
                "id" => 1036,
                "name" => "بندرلنگه",
                "province_id" => 29
            ],
            [
                "id" => 1037,
                "name" => "بیکا",
                "province_id" => 29
            ],
            [
                "id" => 1038,
                "name" => "پارسیان",
                "province_id" => 29
            ],
            [
                "id" => 1039,
                "name" => "تخت",
                "province_id" => 29
            ],
            [
                "id" => 1040,
                "name" => "جناح",
                "province_id" => 29
            ],
            [
                "id" => 1041,
                "name" => "حاجی آباد",
                "province_id" => 29
            ],
            [
                "id" => 1042,
                "name" => "درگهان",
                "province_id" => 29
            ],
            [
                "id" => 1043,
                "name" => "دهبارز",
                "province_id" => 29
            ],
            [
                "id" => 1044,
                "name" => "رویدر",
                "province_id" => 29
            ],
            [
                "id" => 1045,
                "name" => "زیارتعلی",
                "province_id" => 29
            ],
            [
                "id" => 1046,
                "name" => "سردشت",
                "province_id" => 29
            ],
            [
                "id" => 1047,
                "name" => "سندرک",
                "province_id" => 29
            ],
            [
                "id" => 1048,
                "name" => "سوزا",
                "province_id" => 29
            ],
            [
                "id" => 1049,
                "name" => "سیریک",
                "province_id" => 29
            ],
            [
                "id" => 1050,
                "name" => "فارغان",
                "province_id" => 29
            ],
            [
                "id" => 1051,
                "name" => "فین",
                "province_id" => 29
            ],
            [
                "id" => 1052,
                "name" => "قشم",
                "province_id" => 29
            ],
            [
                "id" => 1053,
                "name" => "قلعه قاضی",
                "province_id" => 29
            ],
            [
                "id" => 1054,
                "name" => "کنگ",
                "province_id" => 29
            ],
            [
                "id" => 1055,
                "name" => "کوشکنار",
                "province_id" => 29
            ],
            [
                "id" => 1056,
                "name" => "کیش",
                "province_id" => 29
            ],
            [
                "id" => 1057,
                "name" => "گوهران",
                "province_id" => 29
            ],
            [
                "id" => 1058,
                "name" => "میناب",
                "province_id" => 29
            ],
            [
                "id" => 1059,
                "name" => "هرمز",
                "province_id" => 29
            ],
            [
                "id" => 1060,
                "name" => "هشتبندی",
                "province_id" => 29
            ],
            [
                "id" => 1061,
                "name" => "ازندریان",
                "province_id" => 30
            ],
            [
                "id" => 1062,
                "name" => "اسدآباد",
                "province_id" => 30
            ],
            [
                "id" => 1063,
                "name" => "برزول",
                "province_id" => 30
            ],
            [
                "id" => 1064,
                "name" => "بهار",
                "province_id" => 30
            ],
            [
                "id" => 1065,
                "name" => "تویسرکان",
                "province_id" => 30
            ],
            [
                "id" => 1066,
                "name" => "جورقان",
                "province_id" => 30
            ],
            [
                "id" => 1067,
                "name" => "جوکار",
                "province_id" => 30
            ],
            [
                "id" => 1068,
                "name" => "دمق",
                "province_id" => 30
            ],
            [
                "id" => 1069,
                "name" => "رزن",
                "province_id" => 30
            ],
            [
                "id" => 1070,
                "name" => "زنگنه",
                "province_id" => 30
            ],
            [
                "id" => 1071,
                "name" => "سامن",
                "province_id" => 30
            ],
            [
                "id" => 1072,
                "name" => "سرکان",
                "province_id" => 30
            ],
            [
                "id" => 1073,
                "name" => "شیرین سو",
                "province_id" => 30
            ],
            [
                "id" => 1074,
                "name" => "صالح آباد",
                "province_id" => 30
            ],
            [
                "id" => 1075,
                "name" => "فامنین",
                "province_id" => 30
            ],
            [
                "id" => 1076,
                "name" => "فرسفج",
                "province_id" => 30
            ],
            [
                "id" => 1077,
                "name" => "فیروزان",
                "province_id" => 30
            ],
            [
                "id" => 1078,
                "name" => "قروه درجزین",
                "province_id" => 30
            ],
            [
                "id" => 1079,
                "name" => "قهاوند",
                "province_id" => 30
            ],
            [
                "id" => 1080,
                "name" => "کبودر آهنگ",
                "province_id" => 30
            ],
            [
                "id" => 1081,
                "name" => "گل تپه",
                "province_id" => 30
            ],
            [
                "id" => 1082,
                "name" => "گیان",
                "province_id" => 30
            ],
            [
                "id" => 1083,
                "name" => "لالجین",
                "province_id" => 30
            ],
            [
                "id" => 1084,
                "name" => "مریانج",
                "province_id" => 30
            ],
            [
                "id" => 1085,
                "name" => "ملایر",
                "province_id" => 30
            ],
            [
                "id" => 1086,
                "name" => "نهاوند",
                "province_id" => 30
            ],
            [
                "id" => 1087,
                "name" => "همدان",
                "province_id" => 30
            ],
            [
                "id" => 1088,
                "name" => "ابرکوه",
                "province_id" => 31
            ],
            [
                "id" => 1089,
                "name" => "احمدآباد",
                "province_id" => 31
            ],
            [
                "id" => 1090,
                "name" => "اردکان",
                "province_id" => 31
            ],
            [
                "id" => 1091,
                "name" => "اشکذر",
                "province_id" => 31
            ],
            [
                "id" => 1092,
                "name" => "بافق",
                "province_id" => 31
            ],
            [
                "id" => 1093,
                "name" => "بفروئیه",
                "province_id" => 31
            ],
            [
                "id" => 1094,
                "name" => "بهاباد",
                "province_id" => 31
            ],
            [
                "id" => 1095,
                "name" => "تفت",
                "province_id" => 31
            ],
            [
                "id" => 1096,
                "name" => "حمیدیا",
                "province_id" => 31
            ],
            [
                "id" => 1097,
                "name" => "خضرآباد",
                "province_id" => 31
            ],
            [
                "id" => 1098,
                "name" => "دیهوک",
                "province_id" => 31
            ],
            [
                "id" => 1099,
                "name" => "زارچ",
                "province_id" => 31
            ],
            [
                "id" => 1100,
                "name" => "شاهدیه",
                "province_id" => 31
            ],
            [
                "id" => 1101,
                "name" => "طبس",
                "province_id" => 31
            ],
            [
                "id" => 1103,
                "name" => "عقدا",
                "province_id" => 31
            ],
            [
                "id" => 1104,
                "name" => "مروست",
                "province_id" => 31
            ],
            [
                "id" => 1105,
                "name" => "مهردشت",
                "province_id" => 31
            ],
            [
                "id" => 1106,
                "name" => "مهریز",
                "province_id" => 31
            ],
            [
                "id" => 1107,
                "name" => "میبد",
                "province_id" => 31
            ],
            [
                "id" => 1108,
                "name" => "ندوشن",
                "province_id" => 31
            ],
            [
                "id" => 1109,
                "name" => "نیر",
                "province_id" => 31
            ],
            [
                "id" => 1110,
                "name" => "هرات",
                "province_id" => 31
            ],
            [
                "id" => 1111,
                "name" => "یزد",
                "province_id" => 31
            ],
            [
                "id" => 1116,
                "name" => "پرند",
                "province_id" => 8
            ],
            [
                "id" => 1117,
                "name" => "فردیس",
                "province_id" => 5
            ],
            [
                "id" => 1118,
                "name" => "مارلیک",
                "province_id" => 5
            ],
            [
                "id" => 1119,
                "name" => "سادات شهر",
                "province_id" => 27
            ],
            [
                "id" => 1121,
                "name" => "زیباکنار",
                "province_id" => 26
            ],
            [
                "id" => 1135,
                "name" => "کردان",
                "province_id" => 5
            ],
            [
                "id" => 1137,
                "name" => "ساوجبلاغ",
                "province_id" => 5
            ],
            [
                "id" => 1138,
                "name" => "تهران دشت",
                "province_id" => 5
            ],
            [
                "id" => 1150,
                "name" => "گلبهار",
                "province_id" => 11
            ],
            [
                "id" => 1153,
                "name" => "قیامدشت",
                "province_id" => 8
            ],
            [
                "id" => 1155,
                "name" => "بینالود",
                "province_id" => 11
            ],
            [
                "id" => 1159,
                "name" => "پیربازار",
                "province_id" => 26
            ],
            [
                "id" => 1160,
                "name" => "رضوانشهر",
                "province_id" => 31
            ]
        ];

        DB::table('cities')->insert($cities);

        DB::table('provinces')->delete();

        $provinces = [
            [
                "id" => 1,
                "name" => "آذربایجان شرقی",
            ],
            [
                "id" => 2,
                "name" => "آذربایجان غربی",
            ],
            [
                "id" => 3,
                "name" => "اردبیل",
            ],
            [
                "id" => 4,
                "name" => "اصفهان",
            ],
            [
                "id" => 5,
                "name" => "البرز",
            ],
            [
                "id" => 6,
                "name" => "ایلام",
            ],
            [
                "id" => 7,
                "name" => "بوشهر",
            ],
            [
                "id" => 8,
                "name" => "تهران",
            ],
            [
                "id" => 9,
                "name" => "چهارمحال و بختیاری",
            ],
            [
                "id" => 10,
                "name" => "خراسان جنوبی",
            ],
            [
                "id" => 11,
                "name" => "خراسان رضوی",
            ],
            [
                "id" => 12,
                "name" => "خراسان شمالی",
            ],
            [
                "id" => 13,
                "name" => "خوزستان",
            ],
            [
                "id" => 14,
                "name" => "زنجان",
            ],
            [
                "id" => 15,
                "name" => "سمنان",
            ],
            [
                "id" => 16,
                "name" => "سیستان و بلوچستان",
            ],
            [
                "id" => 17,
                "name" => "فارس",
            ],
            [
                "id" => 18,
                "name" => "قزوین",
            ],
            [
                "id" => 19,
                "name" => "قم",
            ],
            [
                "id" => 20,
                "name" => "کردستان",
            ],
            [
                "id" => 21,
                "name" => "کرمان",
            ],
            [
                "id" => 22,
                "name" => "کرمانشاه",
            ],
            [
                "id" => 23,
                "name" => "کهگیلویه و بویراحمد",
            ],
            [
                "id" => 24,
                "name" => "گلستان",
            ],
            [
                "id" => 25,
                "name" => "لرستان",
            ],
            [
                "id" => 26,
                "name" => "گیلان",
            ],
            [
                "id" => 27,
                "name" => "مازندران",
            ],
            [
                "id" => 28,
                "name" => "مرکزی",
            ],
            [
                "id" => 29,
                "name" => "هرمزگان",
            ],
            [
                "id" => 30,
                "name" => "همدان",
            ],
            [
                "id" => 31,
                "name" => "یزد",
            ]
        ];

        DB::table('provinces')->insert($provinces);


    }
}
