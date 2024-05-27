<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $table = 'coffees';

    // Jika tabel tidak menggunakan timestamps, tambahkan baris berikut:
    public $timestamps = false;

    // Jika Anda ingin mengizinkan pengisian massal untuk kolom tertentu
    protected $fillable = [
        'Ice_Coffee_ori',
        'Americano',
        'Ice_Coffee_Hazel',
        'Ice_Kopi_Vanilla',
        'Ice_Kopi_Gula_Aren',
        'Ice_Kopi_Banana',
        'Ice_Cappucino',
        'Ice_Vanila_Latte',
        'v_drip',
        'Tubruk_Susu',
        'Kopi_Coklat',
        'Kopi_Susu',
        'Kopi_Tutup_Susu',
        'Hot_Cappucino',
        'Hot_Vanila_Latte',
        'Espresso',
        'Double_Espresso',
        'Kopi_Hitam',
        'Kopi_Tubruk',
        'KSTG',
        'Kopi_Tutup',
        'Kopi_Espresso_Susu',
    ];
}
