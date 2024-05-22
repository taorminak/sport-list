<?php

namespace Database\Factories;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sport::class;

    /**
     * Array to keep track of sports.
     *
     * @var array
     */
    protected static $sports = ["Soccer", "Basketball", "Tennis", "Golf", "Hockey"];

    /**
     * Index to keep track of the current sport.
     *
     * @var int
     */
    protected static $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sport = static::$sports[static::$index++];
        static::$index = static::$index % count(static::$sports); 


        return [
            'name' => $sport,
        ];
    }
}

