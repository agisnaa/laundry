<?php

namespace Tests\Feature;

use App\Models\DataPesanan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PesananTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function dapat_membuat_data_pesanan()
    {
        $data = [
            'nama' => 'Agisna',
            'noHp' => '087654321',
            'total_berat' => 4,
            'total_harga' => 20000,
            'status' => 'Selesai'
        ];
        $pesanan = DataPesanan::create($data);
        $this->assertDatabaseHas('data_pesanans', $data);
    }
}
