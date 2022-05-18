<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoanDetails;


class LoanDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanDetails::create([
            'num_of_payment' => '7',
            'first_payment_date' => '2018-06-29',
            'last_payment_date' => '2019-05-29',
            'loan_amount' => '1550.00',
        ]);
        LoanDetails::create([
            'num_of_payment' => '17',
            'first_payment_date' => '2017-11-09',
            'last_payment_date' => '2019-03-09',
            'loan_amount' => '1800.01',
        ]);
    }
}
