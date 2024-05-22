<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MatchEvent;
use App\Models\Sport;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soccer>
 */
class MatchEventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MatchEvent::class;

    /**
     * Array to keep track of matches.
     *
     * @var array
     */
    protected static $matches = [
        [
            'match_name' => 'Barcelona vs Real Madrid',
            'match_start_date' => '2024-05-20',
            'score' => "2-4",
            'sport' => 'Soccer',
        ],
        [
            'match_name' => 'Los Angeles Lakers vs Brooklyn Nets',
            'match_start_date' => '2024-05-21',
            'score' => "1-5",
            'sport' => 'Basketball',
        ],
        [
            'match_name' => 'Wimbledon Final',
            'match_start_date' => '2024-07-14',
            'score' => '6-4',
            'sport' => 'Tennis',
        ],
        [
            'match_name' => 'Masters Tournament',
            'match_start_date' => '2024-04-11',
            'score' => "3-6",
            'sport' => 'Golf',
        ],
        [
            'match_name' => 'Stanley Cup Final',
            'match_start_date' => '2024-06-10',
            'score' => '3-2',
            'sport' => 'Hockey',
        ],
        [
            'match_name' => 'Manchester City vs Liverpool',
            'match_start_date' => '2024-05-22',
            'score' => "2-1",
            'sport' => 'Soccer',
        ],
        [
            'match_name' => 'Golden State Warriors vs Miami Heat',
            'match_start_date' => '2024-05-23',
            'score' => "2-0",
            'sport' => 'Basketball',
        ],
        [
            'match_name' => 'French Open Final',
            'match_start_date' => '2024-06-09',
            'score' => '6-3',
            'sport' => 'Tennis',
        ],
        [
            'match_name' => 'U.S. Open',
            'match_start_date' => '2024-06-20',
            'score' => '3-1',
            'sport' => 'Golf',
        ],
        [
            'match_name' => 'World Championship Final',
            'match_start_date' => '2024-05-19',
            'score' => '2-3',
            'sport' => 'Hockey',
        ],
        // Add more matches as needed...
    ];
    

    /**
     * Index to keep track of the current match.
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
        $match = static::$matches[static::$index++];
        static::$index = static::$index % count(static::$matches);

        $sportName = $match['sport'];
    $sportId = Sport::where('name', $sportName)->value('id');


        return array_merge($match, [
            'sport_id' => $sportId,
        ]);
    }
}