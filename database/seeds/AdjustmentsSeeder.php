<?php

use Illuminate\Database\Seeder;

class AdjustmentsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('adjustments')->delete();

        \DB::table('adjustments')->insert(array (
            0 =>
            array (
                'amount' => 100000000.0,
                'amount1' => 100000000.0,
                'chartaccount' => '1',
                'chartaccount1' => '2',
                'date' => '2022-08-09',
                'description' => 'testing',
                'MainAccount' => '6',
                'MainAccount1' => '10',
                'subaccount' => '1',
                'subaccount1' => '3',
            ),
            1 =>
            array (
                'amount' => 100000000.0,
                'amount1' => 100000000.0,
                'chartaccount' => '5',
                'chartaccount1' => '4',
                'date' => '2022-08-09',
                'description' => 'testing',
                'MainAccount' => '2',
                'MainAccount1' => '11',
                'subaccount' => '4',
                'subaccount1' => '5',
            ),
        ));


    }
}
