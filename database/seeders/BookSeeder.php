<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'The Lord of the Rings',
            'author' => 'J. R. R. Tolkien',
            'publisher' => 'Allen & Unwin',
            'year' => '1954',
            'isbn' => '978-0-04-823993-3',
            'cover' => 'http://ecx.images-amazon.com/images/I/516GyHY9p6L.jpg',
            'description' => 'The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, intended to be Earth at some distant time in the past, the story began as a sequel to Tolkien\'s 1937 children\'s book The Hobbit, but eventually developed into a much larger work.',
            'category' => 'fantasy'
        ]);
    }
}