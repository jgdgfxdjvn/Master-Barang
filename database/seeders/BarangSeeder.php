<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
 /**
 * Run the database seeds.
 */
 public function run(): void
 {
 DB::table('barang')->insert([
 [
 'name' => 'tisu',
 'description' => 'tisupaseo',
 'harga' => 8000,
 'satuan_id' => 1
 ],
 ]);
 }
}
