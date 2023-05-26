<?php

namespace Database\Seeders;

use App\Models\userData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usersdata =  [
            [
                'fullname' => 'Charles Gamboa',
                'age' => 21,
                'yearandsection' => 'BSIT-3B'
            ],
            [
                'fullname'=> 'Gene Carlo Sigua',
                'age' => 21,
                'yearandsection' => 'BSIT-3B'
            
            ],
            [
                'fullname'=> 'Steven Villan',
                'age' => 21,
                'yearandsection' => 'BSIT-3B'
            ],
            [
                'fullname' => 'Gerome Gomez',
                'age' => 21,
                'yearandsection' => 'BSIT-3B']
        ];
        
        foreach($usersdata as $keys => $value){
            userData::create($value);
            
        }
        
    }
}
