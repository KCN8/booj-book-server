<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Echo Wife',
            'author' => 'Sarah Gailey',
            'image' => 'https://m.media-amazon.com/images/I/41of2uZcDFL.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Echo-Wife-Sarah-Gailey-ebook/dp/B07WPNG138/ref=sr_1_1?dchild=1&keywords=The+Echo+Wife&qid=1614897970&s=books&sr=1-1',
            'genre_id' => 1
        ]);

        Book::create([
            'title' => 'The Project',
            'author' => 'Courtney Summers',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/41xWEzHIVAL._SX322_BO1,204,203,200_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Project-Novel-Courtney-Summers/dp/1250105730/ref=sr_1_1?dchild=1&keywords=the+project&qid=1614898078&s=books&sr=1-1',
            'genre_id' => 1
        ]);

        Book::create([
            'title' => 'Dune',
            'author' => 'Frank Herbert',
            'image' => 'https://m.media-amazon.com/images/I/51f3UPrSPSL.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Dune-Chronicles-Frank-Herbert-1996-06-01/dp/B01JNWFH8U/ref=sr_1_10?dchild=1&keywords=dune&qid=1614898467&s=books&sr=1-10',
            'genre_id' => 2
        ]);

        Book::create([
            'title' => 'Foundation',
            'author' => 'Isaac Asimov',
            'image' => 'https://m.media-amazon.com/images/I/61QIQo4laPL.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Foundation-Isaac-Asimov-audiobook/dp/B003IF37TK/ref=sr_1_1?dchild=1&keywords=foundation&qid=1614898298&s=audible&sr=1-1',
            'genre_id' => 2
        ]);

        Book::create([
            'title' => 'The Name of the Wind: Kingkiller Chronicle, Book 1',
            'author' => 'Patrick Rothfuss',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51em3xUxHOL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Name-Wind-Anniversary-Kingkiller-Chronicle/dp/0756413710/ref=sr_1_2?dchild=1&keywords=name+of+the+wind&qid=1614898645&s=books&sr=1-2',
            'genre_id' => 3
        ]);

        Book::create([
            'title' => 'The Lies of Locke Lamora',
            'author' => 'Scott Lynch',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51g5duftP2L._SX242_BO1,204,203,200_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Locke-Lamora-LAMORA-Market-Paperback/dp/B00QPH9FEE/ref=sr_1_6?crid=RNRY39X24Y2N&dchild=1&keywords=lies+of+locke+lamora&qid=1614898743&s=books&sprefix=Lies+of+%2Cstripbooks%2C278&sr=1-6',
            'genre_id' => 3
        ]);

        Book::create([
            'title' => 'The Pragmatic Programmer: From Journeyman to Master',
            'author' => 'David Thomas',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/41as+WafrFL._SX396_BO1,204,203,200_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Pragmatic-Programmer-Journeyman-Master/dp/020161622X/ref=sr_1_2?crid=1Y5GMUW0XQIPP&dchild=1&keywords=pragmatic+programmer&qid=1614899094&s=books&sprefix=pragma%2Cstripbooks%2C195&sr=1-2',
            'genre_id' => 4
        ]);

        Book::create([
            'title' => 'Algorithms to Live By: The Computer Science of Human Decision',
            'author' => 'Brian Christian',
            'image' => 'https://m.media-amazon.com/images/I/51HiU+5mTwL.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/dp/B01D24NAL6/ref=s9_acsd_obs_hd_bw_b5_c2_x_5_i?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-11&pf_rd_r=Q3ZYVGYTDZK10S0ED38Z&pf_rd_t=101&pf_rd_p=160dba65-6d6f-55dc-80b6-a205a0b325c4&pf_rd_i=5',
            'genre_id' => 4
        ]);

        Book::create([
            'title' => 'If I Die in a Combat Zone: Box Me Up and Ship Me Home',
            'author' => 'Tim OBrien',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Ppr6u7BpL._SX322_BO1,204,203,200_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/If-Die-Combat-Zone-Ship/dp/0767904435/ref=sr_1_1?crid=979KQI4NFCR6&dchild=1&keywords=if+i+die+in+a+combat+zone+tim+o%27brien&qid=1614899707&sprefix=if+i+die+in%2Caudible%2C213&sr=8-1',
            'genre_id' => 5
        ]);

        Book::create([
            'title' => 'The Devil in the White City: Murder, Magic, and Madness at the Fair That Changed America',
            'author' => 'Erik Larson',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51cdhA7uj0L._SX314_BO1,204,203,200_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Devil-White-City-Madness-Changed/dp/0375725601/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1614899786&sr=8-1',
            'genre_id' => 5
        ]);

        Book::create([
            'title' => 'The Phoenix Project (A Novel About IT, DevOps, and Helping Your Business Win)',
            'author' => 'Gene Kim',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51bAF5pdyeL._SX332_BO1,204,203,200_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Phoenix-Project-DevOps-Helping-Business/dp/1942788290/ref=sr_1_3?dchild=1&keywords=The+Phoenix+Project%3A+A+Novel+About+IT%2C+DevOps%2C+and+Helping+Your+Business+Win&qid=1614900007&sr=8-3',
            'genre_id' => 6
        ]);

        Book::create([
            'title' => 'The Power of Habit: Why We Do What We Do in Life and Business',
            'author' => 'Charles Duhigg',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51UKFWWvqHL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit quaerat, placeat nobis eligendi ratione assumenda laborum obcaecati perferendis! Unde enim cum, dolor ut perspiciatis voluptatem nemo. Fugit, necessitatibus quisquam?',
            'link' => 'https://www.amazon.com/Power-Habit-What-Life-Business/dp/081298160X/ref=sr_1_1?crid=167A5PJ6ELV7X&keywords=the+power+of+habit&qid=1614900137&sprefix=the+power+of+ha%2Caps%2C217&sr=8-1',
            'genre_id' => 6
        ]);
    }
}
