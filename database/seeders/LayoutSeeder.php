<?php

namespace Database\Seeders;

use App\Models\Layout;
use Illuminate\Database\Seeder;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layout::create([
            'nom' => 'default',
            'tag' => 'x-guest-layout'

        ]);
        Layout::create([
            'nom' => 'downloadable page',
            'tag' => 'x-downloadable-page'
        ]);
    }
}
