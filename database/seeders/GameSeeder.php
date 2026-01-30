<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GameVersion;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user yang sudah ada untuk created_by
        

        // Data game yang akan dibuat
        $games = [
                [
                    'title' => 'Flappy Bird Clone',
                    'description' => 'A simple Flappy Bird game clone built with HTML5 and Canvas',
                    'created_by' => 1,
                ],
                [
                    'title' => 'Snake Game',
                    'description' => 'Classic Snake game implementation with smooth controls',
                    'created_by' => 1,
                ],
                [
                    'title' => 'Puzzle Master',
                    'description' => 'Fun and addictive puzzle game with multiple levels',
                    'created_by' => 2,
                ],
                [
                    'title' => 'Space Shooter',
                    'description' => 'Shoot enemies and dodge obstacles in this space shooter game',
                    'created_by' => 2,
                ],
                [
                    'title' => 'Memory Match',
                    'description' => 'Test your memory by matching pairs of cards',
                    'created_by' => 3,
                ],
                [
                    'title' => 'Pac-Man Quest',
                    'description' => 'Navigate through mazes and collect all pellets to win',
                    'created_by' => 3,
                ],
                [
                    'title' => 'Brick Breaker',
                    'description' => 'Break bricks with a ball and paddle, classic arcade action',
                    'created_by' => 4,
                ],
                [
                    'title' => 'Tetris Unlimited',
                    'description' => 'Stack falling blocks and complete rows to score points',
                    'created_by' => 4,
                ],
                [
                    'title' => 'Dino Runner',
                    'description' => 'Jump over obstacles as a running dinosaur in a desert',
                    'created_by' => 5,
                ],
                [
                    'title' => 'Whack-A-Mole',
                    'description' => 'Click on moles as fast as you can to earn points',
                    'created_by' => 5,
                ],
                [
                    'title' => 'Gem Quest',
                    'description' => 'Match three gems to clear the board and complete levels',
                    'created_by' => 6,
                ],
                [
                    'title' => 'Tower Defense Pro',
                    'description' => 'Build towers to defend against waves of enemies',
                    'created_by' => 6,
                ],
        ];

        foreach ($games as $gameData) {
            // Create slug dari title
            $slug = Str::slug($gameData['title']);

            // Create game
            $game = Game::create([
                'title' => $gameData['title'],
                'slug' => $slug,
                'description' => $gameData['description'],
                'created_by' => $gameData['created_by'],
            ]);

            // Create game version
            GameVersion::create([
                'game_id' => $game->id,
                'version' => '1',
                'storage_path' => '/games/'. $slug . '/1/',
            ]);

            // Buat nested folder untuk game
            $folderPath = public_path('games/' . $slug . '/1');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, 0755, true);
            }
        }
    }
}
