<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'nama'=>'Mukenah',
                'harga'=>'150000',
                'kategori'=>'barang',
                'deskripsi'=>'Mukenah dengan bahan nyaman dipakai',
                'galeri'=>'https://i.pinimg.com/originals/c5/22/f0/c522f0e98fedee2dffe1ab99ac21147f.jpg'
                ],
                [
                'nama'=>'Sepatu Haji/Umroh Wanita',
                'harga'=>'90000',
                'kategori'=>'barang',
                'deskripsi'=>'Sepatu wanita yang nyaman dipakai ',
                'galeri'=>'https://1.bp.blogspot.com/-Svs-xTkWXOU/TqvVvJH6gPI/AAAAAAAAAJg/Cx5JXkrlTak/s1600/4.jpg'
                ],
                [
                'nama'=>'Baju Ihram Wanita',
                'harga'=>'190000',
                'kategori'=>'barang',
                'deskripsi'=>'Baju ihram wanita nyaman dipakai',
                'galeri'=>'https://3.bp.blogspot.com/-yF3TeOldYEo/TqvUXvhpPhI/AAAAAAAAAGo/iH_8YyOJ3KE/s1600/1.jpg'
                ]
        ]);
    }
}
