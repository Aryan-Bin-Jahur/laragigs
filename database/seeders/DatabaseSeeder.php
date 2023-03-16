<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       \App\Models\User::factory(10)->create();
       Listing::factory(5)->create();

  // Listing::create([
  //   'title'=>'Laravel Senior Developer',
  //   'tags'=>'laravel,javascript',
  //   'company'=>'Acme Corp',
  //   'location'=>'Boston,MA',
  //   'email'=>'email@gamil.com',
  //   'website'=>'https://www.acme.com',
  //   'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab similique eum id reprehenderit est omnis assumenda enim quos, voluptate officia fugiat numquam sequi impedit, sint ad eos expedita provident.'

  // ]);
  // Listing::create([
  //   'title'=>'Fullstack Developer',
  //   'tags'=>'laravel,javascript',
  //   'company'=>'Acme Corp',
  //   'location'=>'Boston,MA',
  //   'email'=>'email@gamil.com',
  //   'website'=>'https://www.acme.com',
  //   'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab similique eum id reprehenderit est omnis assumenda enim quos, voluptate officia fugiat numquam sequi impedit, sint ad eos expedita provident.'

  // ]);
    }
}
