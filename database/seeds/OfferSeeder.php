<?php

use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Offer::class)->create([
            'company_id' => 1,
            'code' => '1234',
            'contact' => 'abcd',
            'email' => 'abcd@sda.com',
            'phone' => '22765435',
            'cell_phone' => '0987654665',
            'contract_type' => 'Familiar',
            'position' => 'abcd',
            'broad_field' => 'abcd',
            'specific_field' => 'abcd',
            'training_hours' => 'abcd',
            'experience_time' => 'abcd',
            'remuneration' => 'abcd',
            'working_day' => 'abcd',
            'number_jobs' => 'abcd',
            'start_date' => '2020-07-17',
            'finish_date' => '2020-07-20',
            'activities' => 'docente',
            'aditional_information' => 'ninguna',
            'city' => 'Quito',
            'province' =>'Pichincha',
        ]);

        factory(App\Offer::class, 100)->create();

    }
}
