<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = \App\Models\Company::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'logo' => 'logos/' . $this->faker->image('public/storage/logos', 640, 480, null, false),
            'vat_number' => $this->faker->numerify('###########'), // 11 numeri
        ];
    }
}
