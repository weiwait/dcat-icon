<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Weiwait\DcatIcon\Models\WeiwaitIcon;

class WeiwaitIconTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('weiwait_icons')->updateOrInsert(
            ['name' => 'icon-svg-love',],
            ['icon' => '<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="492"><path d="M799.5904 927.232H232.448c-62.0544 0-112.3328-50.7392-112.3328-113.408V206.592c0-62.6176 50.2784-113.408 112.3328-113.408h485.4784c9.4208 0 18.432 3.7376 25.1392 10.3936l158.1056 156.672a36.4544 36.4544 0 0 1 10.752 25.856v527.7184c0 62.6176-50.2784 113.408-112.3328 113.408z" fill="#FFAC3E" p-id="493"></path><path d="M620.3392 450.816H411.6992c-54.7328 0-99.1232-44.3904-99.1232-99.1232V93.184h406.8864v258.4576c0 54.784-44.3904 99.1744-99.1232 99.1744z" fill="#FF7C0E" p-id="494"></path><path d="M602.9312 361.6256H490.3936c-22.6304 0-40.96-18.3296-40.96-40.96s18.3296-40.96 40.96-40.96h112.5888c22.6304 0 40.96 18.3296 40.96 40.96s-18.3808 40.96-41.0112 40.96z" fill="#FFFFFF" p-id="495"></path></svg>']
        );

        \DB::table('weiwait_icons')->updateOrInsert(
            ['name' => 'icon-svg-edit'],
            ['icon' => '<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="521"><path d="M749.3632 948.8896H210.688c-73.5232 0-133.12-59.5968-133.12-133.12V276.3776c0-73.5232 59.5968-133.12 133.12-133.12h538.6752c73.5232 0 133.12 59.5968 133.12 133.12v539.3408c0 73.5744-59.5968 133.1712-133.12 133.1712z" fill="#F85F69" p-id="522"></path><path d="M566.8352 593.6128l-123.136 44.032c-31.8976 11.4176-52.3264-9.8304-40.5504-42.0864l43.52-119.6544c3.584-9.8816 9.9328-19.712 18.1248-28.1088l336.6912-353.6384c21.9136-22.528 46.1824-24.32 60.5696-10.3424l78.6944 76.544c14.3872 13.9776 13.3632 38.4512-8.5504 60.9792l-335.7696 352.7168c-8.8064 8.9088-19.2 15.8208-29.5936 19.5584z" fill="#F85F69" p-id="523"></path><path d="M755.0976 143.36L464.7424 447.744c-8.192 8.3968-14.4896 18.2272-18.1248 28.1088l-43.52 119.6544c-11.7248 32.3072 8.704 53.504 40.5504 42.0864l123.136-44.032c10.4448-3.7376 20.8384-10.5984 29.5936-19.6096l285.952-299.8784c-0.2048-70.912-56.7296-128.6144-127.232-130.7136z" fill="#F33B3D" p-id="524"></path><path d="M640.5632 790.7328H319.488c-19.8144 0-35.84-16.0256-35.84-35.84s16.0256-35.84 35.84-35.84h321.0752c19.8144 0 35.84 16.0256 35.84 35.84s-16.0256 35.84-35.84 35.84z" fill="#FFFFFF" p-id="525"></path></svg>']
        );


        \DB::table('weiwait_icons')->updateOrInsert(
            ['name' => 'icon-svg-print'],
            ['icon' => '<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="535"><path d="M809.3696 302.0288H215.552V204.6464c0-73.5232 59.5968-133.12 133.12-133.12h327.5776c73.5232 0 133.12 59.5968 133.12 133.12v97.3824z" fill="#95C9FC" p-id="536"></path><path d="M864.1536 717.3632H160.768c-50.8928 0-92.16-41.2672-92.16-92.16V430.0288c0-73.5232 59.5968-133.12 133.12-133.12h621.4656c73.5232 0 133.12 59.5968 133.12 133.12v195.1744c0 50.8928-41.2672 92.16-92.16 92.16z" fill="#80B7F9" p-id="537"></path><path d="M726.9376 949.0432H297.9328c-45.2608 0-81.92-36.6592-81.92-81.92v-211.3536c0-45.2608 36.6592-81.92 81.92-81.92h429.0048c45.2608 0 81.92 36.6592 81.92 81.92v211.3536c0 45.2608-36.6592 81.92-81.92 81.92z" fill="#80B7F9" p-id="538"></path><path d="M808.8576 717.3632v-61.5936c0-45.2608-36.6592-81.92-81.92-81.92H297.9328c-45.2608 0-81.92 36.6592-81.92 81.92v61.5936h592.8448z" fill="#3E8BF8" p-id="539"></path><path d="M797.7984 464.2304h-102.1952c-22.6304 0-40.96-18.3296-40.96-40.96s18.3296-40.96 40.96-40.96h102.1952c22.6304 0 40.96 18.3296 40.96 40.96s-18.3296 40.96-40.96 40.96zM604.9792 831.0272h-271.36c-22.6304 0-40.96-18.3296-40.96-40.96s18.3296-40.96 40.96-40.96h271.4112c22.6304 0 40.96 18.3296 40.96 40.96s-18.3808 40.96-41.0112 40.96z" fill="#FFFFFF" p-id="540"></path></svg>']
        );

        WeiwaitIcon::generatingIcons();
    }
}
