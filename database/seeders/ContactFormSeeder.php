<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use Faker\Factory;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Sequence;


class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ContactForm::factory(10)->create();
    }
}
