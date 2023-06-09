<?php

namespace Database\Factories;

use App\Models\produit;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class produitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
   /*  protected $model = produit::class; */

    public function definition()
    {
       /*  $name=$this->faker->realText($maxNbChars = 50, $indexSize = 2);
        return [
            'name' => $name,
            'slug' =>Str::slug($name),
            'prix' => $this->faker->latitude($min = 0, $max = 200),
            'pourcentage' => $this->faker->latitude($min = -90, $max = -10),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),   
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),       
    
        ]; */
    }
}
