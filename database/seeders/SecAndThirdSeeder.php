<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecAndThirdSeeder extends Seeder
{
    public function run()
    {
        DB::table('arabic_second_third')->insert([
            [
                'question' => 'عند حذف المقطع الصوتي الأول من كلمة (سعيد) تنتج كلمة جديدة ذات معنى هي:',
                'correct_answer' => 'عيد'
            ],
            [
                'question' => 'ضع المقطع الصوتي (لَ) بدلاً من المقطع الصوتي (جَ) في كلمة (جَمَع) لتكون كلمة جديدة ذات معنى:',
                'correct_answer' => 'لمع'
            ],
            [
                'question' => 'ضع دائرة حول الكلمة التي تحتوي مداً بالياء:',
                'correct_answer' => 'جميل'
            ],
            [
                'question' => 'ضع دائرة حول كلمة (عَلَََمَ).',
                'correct_answer' => 'عَلَََمَ'
            ],
            [
                'question' => 'ضع دائرة حول الكلمة التي تبدأ باللام الشمسية في الجملة الآتية: العنب فاكهتي المُفضَّلة في فصل الصيف.',
                'correct_answer' => 'العنب'
            ],
            [
                'question' => 'ضع دائرة حول كلمة (لَبَن).',
                'correct_answer' => 'لَبَنُ'
            ],
            [
                'question' => 'ضع دائرة حول كلمة (سَحَبَ).',
                'correct_answer' => 'سَحَبَ'
            ],
            [
                'question' => 'ضع دائرة حول كلمة (عَمِلَتْ).',
                'correct_answer' => 'عَمِلَتْ'
            ],
            [
                'question' => 'ضع دائرة حول التحليل الصحيح لكلمة (اِسْتَنْشَقَ).',
                'correct_answer' => 'اِسْ تَـ نْـ شَـ قَ'
            ],
            [
                'question' => 'حدد معنى الكلمة التي تحتها خط: الْتَهَمَ الأَسَدُ اللَّحْمَ.',
                'correct_answer' => 'أَكَلَ'
            ],
            [
                'question' => 'حدد معنى الكلمة التي تحتها خط: عَبَرَ مُحَمَّدُ الشَّارِعَ.',
                'correct_answer' => 'قَطَعَ'
            ],
            [
                'question' => 'حدد معنى الكلمة التي تحتها خط: غَيَّرَتْ عَجَلَةَ الدَّرَّاجَةِ.',
                'correct_answer' => 'إِطَار'
            ],
            [
                'question' => 'حدد معنى الكلمة التي تحتها خط: كُنْتُ في عَجَلَةٍ مِنْ أَمْرِي.',
                'correct_answer' => 'سُرْعَة'
            ],
            [
                'question' => 'ضع دائرة حول الكلمة المختلفة.',
                'correct_answer' => 'ثِمَار'
            ],
            [
                'question' => 'اختر ثلاث كلمات مرتبطة بكلمة (رَمَضَان).',
                'correct_answer' => json_encode(['صِيَام', 'زَكَاة', 'هِلَال'])
            ],
            [
                'question' => 'أكمل الجملة الآتية بوصف مناسب: تناولت فطورًا _______ في الصباح.',
                'correct_answer' => 'لَذِيذًا'
            ],
            [
                'question' => 'ماذا أقول لمن عاد من السَّفر؟',
                'correct_answer' => 'الحمد لله على السلامة'
            ],
            [
                'question' => 'ما هي القصةُ الأجملُ التي تَمثّلها الشجرةُ؟',
                'correct_answer' => 'القصصُ عن صناعة القوارب'
            ],
            [
                'question' => 'ماذا تمثّلُ الأوراقُ في الشجرة؟',
                'correct_answer' => 'كُتُبٌ صغيرةٌ'
            ],
            [
                'question' => 'اذكر كلمةً تعبرُ عن شجرةِ الكُتُبِ.',
                'correct_answer' => 'تصنعُ القوارب'
            ]
        ]);
    }
}
