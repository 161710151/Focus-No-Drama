<?php

use Illuminate\Database\Seeder;
use App\kategori;
use App\post;
class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample kategori
        $kategori1 = kategori::create(['name'=>'Mohammad Fauzil Adhim']);
        // Sample post
        $post1 = post::create(['title'=>'Kupinang Engkau dengan Hamdalah',
        'content'=>'adjabdja', 'kategori_id'=>$kategori1->id]);

    }
}
