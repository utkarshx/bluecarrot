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


        $this->runOneIteration('Re-Create the Currency',
            'https://rbi.org.in/FinancialEducation/Games.aspx?DivRs10',
            $linkCategoryId,
            'CurrencyPiece.PNG',
            'Piece of Notes to be joined'
            );

        $this->runOneIteration(
            'Challenge on the road as you steer your way to financial stability',
            'http://www.practicalmoneyskills.com/games/road_trip/road_trip.swf',
            $gameCategoryId,
            'RoadTrip.png',
            'Take a trip on road with saving mindset');

        $this->runOneIteration('Ed Bank',
            'http://www.practicalmoneyskills.com/games/ed_bank/ed_bank.swf',
            $gameCategoryId,
            'edsBank.PNG',
            'Go to Ed\'s Bank and do some saving');

        $this->runOneIteration('Countdown to retirement',
            'http://www.practicalmoneyskills.com/games/countdown/countdown.swf',
            $gameCategoryId,
            'countdownToRetirement.PNG',
            'Save sufficient for Retirement');

        $this->runOneIteration('Money Metropolis',
            'http://www.practicalmoneyskills.com/games/moneymetropolis/MoneySkills.swf',
            $gameCategoryId,
            'moneyMetropolis.PNG',
            'Live with saving habits');

        /*$this->runOneIteration('Peter Pigs',
            'http://www.practicalmoneyskills.com/games/peterpigs/Pig.swf',
            $gameCategoryId);*/

        $this->runOneIteration('Monopoly',
            'http://www.hasbro.com/common/assets/Flash/Board/dad288661c4311ddbd0b0800200c9a66/d43910115056900b1016fded3497ee10/D46807D15056900B1046D26799484CA4.swf',
            $gameCategoryId,
            'monopoly.PNG',
            'Trade to become Rich');

        $this->runOneIteration('Celebrity calamity',
            'http://financialentertainment.org/sites/all/files/flash/celebritycalamity/playStage.swf',
            $gameCategoryId,
            'celebrityCalamity.PNG',
            'Manage Celebrity\' Money');

        $this->runOneIteration('Bite Club',
            'http://financialentertainment.org/sites/all/files/flash/biteclub/Shell.swf',
            $gameCategoryId,
            'biteClub.PNG',
            'Work on a \"Bite Club\" and save money');


        $this->runOneIteration('Raju and the Money Tree',
            'https://rbi.org.in/commonman/Upload/english/Content/PDFs/English_Comics_1.pdf',
            $pdfCategoryId,
            'RajuAndTheMoneyTree.PNG',
            'Raju and the Money Tree');

        $this->runOneIteration('Money Kumar and the Monetary Policy',
            'https://rbi.org.in/commonman/Upload/english/Content/PDFs/MoneyKumarComic.pdf',
            $pdfCategoryId,
            'MoneyKumarandMonetaryPolicy.PNG',
            'Money Kumar and the Monetary Policy');

        $this->runOneIteration('The Old Man Monetary',
            'https://www.rbi.org.in/financialeducation/content/82252.pdf',
            $pdfCategoryId,
            'TheOldManMonetary.PNG',
            'The Old Man Monetary');

        $this->runOneIteration('Raju and the Sky Ladder',
            'https://www.rbi.org.in/financialeducation/content/83248.pdf',
            $pdfCategoryId,
            'RajuAndTheSkyladder.PNG',
            'Raju and the Sky Ladder');

        $this->runOneIteration('Raju and the Magical Goat',
            'https://www.rbi.org.in/financialeducation/content/89712.pdf',
            $pdfCategoryId,
            'RajuAndTheMagicalGoat.PNG',
            'Raju and the Magical Goat');

        $this->runOneIteration('Money Kumar and Caring for your Currency',
            'https://www.rbi.org.in/financialeducation/content/MKCC.pdf',
            $pdfCategoryId,
            'MoneyManAndCaringYourCurrency.PNG',
            'Money Kumar and Caring for your Currency');

        $this->runOneIteration('Raju and the Friendly ATM',
            'https://rbi.org.in/FinancialEducation/content/ATM_English%20Final.pdf',
            $pdfCategoryId,
            'RajuAndTheFriendlyAtm.PNG',
            'Raju and the Debit Card');

        $this->runOneIteration('Raju and the Debit Card',
            'https://rbi.org.in/FinancialEducation/content/RDebit%20Card_E_F.pdf',
            $pdfCategoryId,
            'RajuAndTheDebitCard.PNG',
            'Raju and the Debit Card');


        $this->runOneIteration('Pradhan Mantri Jan Dhan Yojna',
            'https://www.youtube.com/embed/6dLcaFeCiFk',
            $videoCategoryId);

        $this->runOneIteration('Kalpvriksh',
            'https://www.youtube.com/embed/bcpJAtIDxQI',
            $videoCategoryId);

        $this->runOneIteration('Indian Banking Association',
            'https://www.youtube.com/embed/5-AIJdXnxg4',
            $videoCategoryId);

        $this->runOneIteration('Indian Banking Association',
            'https://www.youtube.com/embed/tNfIkwbZ3_g',
            $videoCategoryId);

        $this->runOneIteration('Rupay Debit Card & Over Draft',
            'https://www.youtube.com/embed/vQB7GNE_rQQ',
            $videoCategoryId);

        $this->runOneIteration('Insurance & Pension',
            'https://www.youtube.com/embed/-WwuPwIrMjQ',
            $videoCategoryId);

        $this->runOneIteration('Micro ATM & Mobile banking',
            'https://www.youtube.com/embed/cuZdP9mn6VM',
            $videoCategoryId);


    }

    public function runOneIteration($description, $url, $linkTypeId, $imageName=null, $imageText=null, $tags=[]){
        $hashId = DB::table('hashes')->insertGetId([
            'content_type_id'=>$this->hashType
        ]);

        $linkId = DB::table('links')->insertGetId([
            'url'=>$url,
            'description'=>$description,
            'hash_id'=>$hashId,
            'link_type'=>$linkTypeId,
            'image_name'=>$imageName,
            'image_text'=>$imageText
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