<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Position;
use App\Models\Category;
use App\Models\Driver;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::insert(
        //     [
        //         'name' => 'первая',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'name' => 'вторая',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'name' => 'третья',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );

        // Position::insert(
            // [
            //     'name' => 'Менеджер',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'name' => 'Директор',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'name' => 'Разработчик',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ]
        // );

        // Driver::insert(
            // [
            //     'name' => 'Андрей',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'name' => 'Марк',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'name' => 'Николай',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
        // );

        // Car::insert([
        //     [
        //         'name' => 'Toyota Camry',
        //         'category_id' => 1,
        //         'driver_id' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'name' => 'BMW X5',
        //         'category_id' => 3,
        //         'driver_id' => 2,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'name' => 'Kia Spectra',
        //         'category_id' => 4,
        //         'driver_id' => 3,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        // ]);

        // User::insert(
            // [
            //     'name' => 'Дмитрий',
            //     'email' => 'Dmitry@yandex.ru',
            //     'password' => bcrypt('123456'),
            //     'position_id' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'name' => 'Сергей',
            //     'email' => 'Sergey@yandex.ru',
            //     'password' => bcrypt('123456'),
            //     'position_id' => 2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'name' => 'Алексей',
            //     'email' => 'Aleksey@yandex.ru',
            //     'password' => bcrypt('123456'),
            //     'position_id' => 3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ]
        // );

        // $manager = Position::where('name', 'Менеджер')->first();
        // $director = Position::where('name', 'Директор')->first();
        // $developer = Position::where('name', 'Разработчик')->first();

        // $cat1 = Category::where('name', 'первая')->first();
        // $cat2 = Category::where('name', 'вторая')->first();
        // $cat3 = Category::where('name', 'третья')->first();

        // $manager->categories()->attach([$cat1->id]);
        // $director->categories()->attach([$cat2->id]);
        // $developer->categories()->attach([$cat3->id]);
    }
}
