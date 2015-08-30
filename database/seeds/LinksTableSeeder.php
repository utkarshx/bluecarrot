<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct() {
        $this->hashType = DB::table('content_types')->where('name', 'Links')->first()->id;
    }
    public function run()
    {
        //
        $linkCategoryId = DB::table('content_types')->where('name', 'Links')->first()->id;

        $videoCategoryId = DB::table('content_types')->where('name', 'Videos')->first()->id;
        $gameCategoryId = DB::table('content_types')->where('name', 'Games')->first()->id;
        $pdfCategoryId = DB::table('content_types')->where('name', 'PDF')->first()->id;

        /*$this->runOneIteration('description1', 'http://laravel.com/docs/5.1/queries', $linkCategoryId);*/
        $this->runOneIteration('Re-Create the Currency', 'https://rbi.org.in/FinancialEducation/Games.aspx?DivRs10', $linkCategoryId);
        $this->runOneIteration('Challenge on the road as you steer your way to financial stability', 'http://www.practicalmoneyskills.com/games/road_trip/road_trip.swf', $gameCategoryId);
        $this->runOneIteration('Ed Bank', 'http://www.practicalmoneyskills.com/games/ed_bank/ed_bank.swf', $gameCategoryId);
        $this->runOneIteration('Countdown to retirement', 'http://www.practicalmoneyskills.com/games/countdown/countdown.swf', $gameCategoryId);
        $this->runOneIteration('Money Metropolis', 'http://www.practicalmoneyskills.com/games/moneymetropolis/MoneySkills.swf', $gameCategoryId);
        $this->runOneIteration('Peter Pigs', 'http://www.practicalmoneyskills.com/games/peterpigs/Pig.swf', $gameCategoryId);
        $this->runOneIteration('Monopoly', 'http://www.hasbro.com/common/assets/Flash/Board/dad288661c4311ddbd0b0800200c9a66/d43910115056900b1016fded3497ee10/D46807D15056900B1046D26799484CA4.swf', $gameCategoryId);
        $this->runOneIteration('Celebrity calamity', 'http://financialentertainment.org/sites/all/files/flash/celebritycalamity/playStage.swf', $gameCategoryId);
        $this->runOneIteration('Bite Club', 'http://financialentertainment.org/sites/all/files/flash/biteclub/Shell.swf', $gameCategoryId);
        /*$this->runOneIteration('description1', 'https://www.youtube.com/embed/DHI1jMfiEk4', $videoCategoryId);*/

        $this->runOneIteration('Raju and the Money Tree', 'https://rbi.org.in/commonman/Upload/english/Content/PDFs/English_Comics_1.pdf', $pdfCategoryId);
        $this->runOneIteration('Money Kumar and the Monetary Policy', 'https://rbi.org.in/commonman/Upload/english/Content/PDFs/MoneyKumarComic.pdf', $pdfCategoryId);
        $this->runOneIteration('The Old Man Monetary', 'https://www.rbi.org.in/financialeducation/content/82252.pdf', $pdfCategoryId);
        $this->runOneIteration('Raju and the Sky Ladder', 'https://www.rbi.org.in/financialeducation/content/83248.pdf', $pdfCategoryId);
        $this->runOneIteration('Raju and the Magical Goat', 'https://www.rbi.org.in/financialeducation/content/89712.pdf', $pdfCategoryId);
        $this->runOneIteration('Money Kumar and Caring for your Currency', 'https://www.rbi.org.in/financialeducation/content/MKCC.pdf', $pdfCategoryId);
        $this->runOneIteration('Raju and the Friendly ATM', 'https://rbi.org.in/FinancialEducation/content/ATM_English%20Final.pdf', $pdfCategoryId);
        $this->runOneIteration('Raju and the Debit Card', 'https://rbi.org.in/FinancialEducation/content/RDebit%20Card_E_F.pdf', $pdfCategoryId);

    }

    public function runOneIteration($description, $url, $linkTypeId, $tags=[]){
        $hashId = DB::table('hashes')->insertGetId([
            'content_type_id'=>$this->hashType
        ]);

        $linkId = DB::table('links')->insertGetId([
            'url'=>$url,
            'description'=>$description,
            'hash_id'=>$hashId,
            'link_type'=>$linkTypeId
        ]);

        foreach($tags as $tag) {
            $tagId = DB::table('tags')->where('name', 'like', $tag)->value('id');
            if(is_null($tagId)) {
                $tagId = DB::table('tags')->insertGetId(['name'=>$tag]);
            }

            DB::table('tags_map')
                ->insert([
                    'hash_id'=>$hashId,
                    'tag_id'=>$tagId
                ]);
        }

        DB::table('hashes')->where('id', $hashId)->update(['content_id'=> $linkId]);
    }
}