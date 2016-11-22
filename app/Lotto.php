<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_lotto';

    /**
    *    The default primary key for this
    *   model
    *
    *
    */
    protected $primaryKey = 'ID';

    public $timestamps = false;

    public static function fetchActiveLottos(){
        return \DB::table('site_lotto')->select('*')->where('is_active', '=', '1')->get();
    }

    public static function fetchMegaSenaLottoWinners(){

        $megaWonAmt = 0;
        $sql = \DB::table("users_lotto")->select('*')->where('lotto_cat', '=', '1')->where('checked', '=', '1')->get();
        foreach ($sql as $value) {
            $winCheck = explode(',', $value->jackpot);
            if( $winCheck[0] >= 3 )
                $megaWonAmt += intval( str_replace(',','', $value->jackpot) );
        }

        return array(
                'totalAmountWon'    =>  $megaWonAmt,
                'totalWinners'      =>  count($sql)
            );

    }

    public static function fetchEuroMillionsLottoWinners(){

        $wonAmt = 0;
        $sql = \DB::table("users_lotto")->select('*')->where('lotto_cat', '=', '2')->where('checked', '=', '1')->get();
        
        foreach ($sql as $value) {
            $winCheck = explode(',', $value->jackpot);
            if( $winCheck[0] >= 3 )
                $wonAmt += intval( str_replace(',','', $value->jackpot) );
        }

        return array(
                'totalAmountWon'    =>  $wonAmt,
                'totalWinners'      =>  count($sql)
            );

    }

    public static function fetchPowerBallLottoWinners(){

        $wonAmt = 0;
        $sql = \DB::table("users_lotto")->select('*')->where('lotto_cat', '=', '3')->where('checked', '=', '1')->get();
        foreach ($sql as $value) {
            $winCheck = explode(',', $value->jackpot);
            if( $winCheck[0] >= 3 )
                $wonAmt += intval( str_replace(',','', $value->jackpot) );
        }

        return array(
                'totalAmountWon'    =>  $wonAmt,
                'totalWinners'      =>  count($sql)
            );

    }

    /* fetch stats for lottos */
        // #1 megasena

    public static function fetchMegaSenaStats(){

        $mostCommonNums = \DB::table('mega_sena_common_nums')->select('*')->where('number', '!=', "0")->get();
        $leastCommonNums = \DB::table('mega_sena_least_common_nums')->select('*')->where('number', '!=', "0")->get();
        $mostOverdueNums = \DB::table('mega_sena_most_overdue')->select('*')->where('number', '!=', "0")->get();
        $mostCommonPairsNums = \DB::table('mega_sena_most_common_pairs')->select('*')->where('number', '!=', "0")->get();
        $mostCommonTripletsNums = \DB::table('mega_sena_most_common_triplets')->select('*')->where('number', '!=', "0")->get();
        $mostCommonQuadrupletsNums = \DB::table('mega_sena_most_common_quadruplets')->select('*')->where('number', '!=', "0")->get();
        
        return array(
            'most_common_nums'              =>      $mostCommonNums,
            'least_common_nums'             =>      $leastCommonNums,
            'most_overdue_nums'             =>      $mostOverdueNums,
            'most_common_pairs'             =>      $mostCommonPairsNums,
            'most_common_triplets'          =>      $mostCommonTripletsNums,
            'most_common_quadruplets'       =>      $mostCommonQuadrupletsNums        
        );
    }

    public static function fetchPowerBallStats(){

        $mostCommonNums = \DB::table('power_ball_common_nums')->select('*')->where('number', '!=', "0")->get();
        $leastCommonNums = \DB::table('power_ball_least_common_nums')->select('*')->where('number', '!=', "0")->get();
        $mostOverdueNums = \DB::table('power_ball_most_overdue')->select('*')->where('number', '!=', "0")->get();
        $mostCommonPairsNums = \DB::table('power_ball_most_common_pairs')->select('*')->where('number', '!=', "0")->get();
        $mostCommonTripletsNums = \DB::table('power_ball_most_common_triplets')->select('*')->where('number', '!=', "0")->get();
        $mostCommonQuadrupletsNums = \DB::table('power_ball_most_common_quadruplets')->select('*')->where('number', '!=', "0")->get();
        
        return array(
            'most_common_nums'              =>      $mostCommonNums,
            'least_common_nums'             =>      $leastCommonNums,
            'most_overdue_nums'             =>      $mostOverdueNums,
            'most_common_pairs'             =>      $mostCommonPairsNums,
            'most_common_triplets'          =>      $mostCommonTripletsNums,
            'most_common_quadruplets'       =>      $mostCommonQuadrupletsNums        
        );
    }

    public static function fetchAllActiveLottoUsers(){
        $sqlForMega = \DB::table('users_lotto')->select('DISTINCT(user_id)')->where('lotto_cat', '=', '1')->count();
        $sqlForEuro = \DB::table('users_lotto')->select('DISTINCT(user_id)')->where('lotto_cat', '=', '2')->count();
        $sqlForPower = \DB::table('users_lotto')->select('DISTINCT(user_id)')->where('lotto_cat', '=', '3')->count();
        return array(
                'mega'  =>  $sqlForMega,
                'euro'  =>  $sqlForEuro,
                'power' =>  $sqlForPower
        );
    }
}