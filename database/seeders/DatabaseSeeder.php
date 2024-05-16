<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Food;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jekabs',
            'email' => 'God@gmail.com',
            'password' => bcrypt('password'),
            'usertype' => 'admin',
        ]);
        Food::factory()->create([
            'name' => 'Indian Chicken Curry',
            'short_description' => 'This is a simple recipe for Chicken Curry.',
            'description' => 'Chicken curry from the Indian subcontinent typically features chicken stewed in a tomato-based sauce seasoned with aromatic spices. This recipe, like many others, calls for curry powder (a spice blend made with coriander, turmeric, cumin, and chili powder).',
            'ingredients' => '1 tablespoon olive oil, 1 onion, chopped, 2 cloves garlic, minced, 1 (14.5 ounce) can diced tomatoes, 1 tablespoon curry powder, 1 teaspoon ground cinnamon, 1 teaspoon paprika, 1 bay leaf, 1/2 teaspoon grated fresh ginger root, 1/2 teaspoon white sugar, 4 skinless, boneless chicken breast halves, salt to taste, 1 tablespoon cornstarch, 1 cup frozen green peas, 1/2 cup plain yogurt',
            'recipe' => 'Heat olive oil in a skillet over medium heat; cook and stir onion and garlic until onion is soft and translucent, about 5 minutes. Add tomatoes, curry powder, cinnamon, paprika, bay leaf, ginger, and sugar. Bring to a boil, reduce heat to low, and simmer sauce for 10 minutes. Add chicken, salt, and water to sauce and bring to a boil. Reduce heat to low, cover the skillet, and simmer until chicken is no longer pink in the center and the juices run clear, about 15 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C). Mix cornstarch and water together in a small bowl; stir into the sauce. Add peas and yogurt. Bring sauce to a simmer and cook, stirring constantly, until thickened and peas are heated through, about 5 minutes. Remove bay leaf before serving.',
            'image'=> 'https://www.allrecipes.com/thmb/FL-xnyAllLyHcKdkjUZkotVlHR8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/46822-indian-chicken-curry-ii-DDMFS-4x3-39160aaa95674ee395b9d4609e3b0988.jpg',
        ]);
    }
}
