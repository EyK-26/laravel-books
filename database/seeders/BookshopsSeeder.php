<?php

namespace Database\Seeders;

use App\Models\Bookshop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class BookshopsSeeder extends Seeder
{
    public function run(): void
    {
        $bookshops = [
            'Prague' => [
                'Knihy Dobrovský',
                'Kosmas',
                'Neoluxor'
            ],

            'London' => [
                'Blackwell\'s',
                'Daunt Books',
                'Foyles',
                'John Smith & Son',
                'W H Smith',
                'Waterstones',
                'The Works'
            ],

            'New York' => [
                'Amazon Books',
                'Anderson\'s Bookshops',
                'Barnes & Noble',
                'Bookmans',
                'Books-A-Million',
                'Books, Inc.',
                'Deseret Book, also operates Seagull Book',
                'Follett\'s',
                'Half Price Books',
                'Hudson News',
                'Joseph-Beth Booksellers',
                'Kinokuniya',
                'Mardel Christian Stores',
                'Powell\'s Books',
                'Schuler Books & Music',
                'Tattered Cover'
            ]

        ];
        DB::table("bookshops")->truncate();

        foreach ($bookshops as $key => $shop) {
            foreach ($shop as $value) {
                $shop = new Bookshop;
                $shop->city = $key;
                $shop->name = $value;
                $shop->save();
            }
        }
    }
}
