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
                'MainAccount' => '9',
                'MainAccount1' => '10',
                'subaccount' => '2',
                'subaccount1' => '3',
            ),
            1 =>
            array (
                'amount' => 100000000.0,
                'amount1' => 100000000.0,
                'chartaccount' => '3',
                'chartaccount1' => '4',
                'date' => '2022-08-09',
                'description' => 'testing',
                'MainAccount' => '11',
                'MainAccount1' => '12',
                'subaccount' => '2',
                'subaccount1' => '3',
            ),
        ));


    }
}
