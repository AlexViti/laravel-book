<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books= [
            [
                'title' => 'Ciao',
                'author' => 'ciao',
                'year' =>  '2001-12-10'
            ],
            [
                'title' => 'Divina commedia',
                'author' => 'Dante Alighieri',
                'year' =>  '2001-12-10'
            ],
            [
                'title' => 'wtrbw',
                'author' => 'ciao come',
                'year' =>  '2001-12-10'
            ],
            [
                'title' => 'hello',
                'author' => 'topolino',
                'year' =>  '2001-12-10'
            ],
            [
                'title' => 'pippo',
                'author' => 'pluto',
                'year' =>  '2001-12-10'
            ],
            [
                'title' => 'superman',
                'author' => 'batman',
                'year' =>  '2001-12-10'
            ],
            [
                'title' => 'qui quo',
                'author' => 'qua',
                'year' => '2001-12-10'
            ]
        ];
        foreach($books as $book) {
            $book = new Book($book);
            $book->save();
        }

    }
}
