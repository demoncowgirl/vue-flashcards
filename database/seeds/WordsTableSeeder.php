<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        <?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
          'nor_word' => 'uke',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'week',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'år',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'year',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'i morgen',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'tomorrow',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'langt',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'far',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'liten',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'small',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'vakker',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'beautiful',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'vanskelig',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'difficult',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'enkelt',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'easy',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
        DB::table('words')->insert([
          'nor_word' => 'stor',
          'nor_sentence' => 'Norsk setning går her.',
          'eng_word' => 'big',
          'eng_sentence' => 'English sentence here.',
          'pile_id' => 1
        ]);
      }
    }
  }
}
