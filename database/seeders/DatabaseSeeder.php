<?php

namespace Database\Seeders;

use App\Models\TahunAkademik;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $tahunAkademikData = [
            ['tahun' => '2022/2023', 'ganjil_genap' => 'ganjil'],
            ['tahun' => '2022/2023', 'ganjil_genap' => 'genap'],
            ['tahun' => '2023/2024', 'ganjil_genap' => 'ganjil'],
            ['tahun' => '2023/2024', 'ganjil_genap' => 'genap'],
            ['tahun' => '2024/2025', 'ganjil_genap' => 'ganjil'],
            ['tahun' => '2024/2025', 'ganjil_genap' => 'genap'],
        ];

        DB::table('tahun_akademik')->insert($tahunAkademikData);

        // Get Tahun Akademik IDs
        $tahunAkademikIds = TahunAkademik::pluck('id_tahun_akademik')->toArray();
        for ($i = 1; $i <= 10; $i++) {
            $nim = '22010' . str_pad($i, 2, '0', STR_PAD_LEFT);
            $mahasiswa = Mahasiswa::create([
                'nim' => $nim,
                'nama_mahasiswa' => 'Mahasiswa ' . $i,
                'no_hp' => '081234567' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'alamat' => 'Jl. Pendidikan No. ' . $i,
                'tahun_masuk' => $tahunAkademikIds[array_rand($tahunAkademikIds)],
                'status_aktif' => true,
            ]);

            // Create User for Mahasiswa
            User::create([
                'username' => $mahasiswa->nim,
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
            ]);
        }

        // Seeding 10 Dosen
        for ($i = 1; $i <= 10; $i++) {
            $nidn = '10203040' . str_pad($i, 2, '0', STR_PAD_LEFT);
            $dosen = Dosen::create([
                'nidn' => $nidn,
                'nama_dosen' => 'Dosen ' . $i,
                'jabatan_fungsional' => 'Lektor ' . ($i % 3 == 0 ? 'Kepala' : 'Madya'),
                'no_serdos' => 'SER' . rand(10000, 99999),
            ]);

            // Create User for Dosen
            User::create([
                'username' => $dosen->nidn,
                'role' => 'dosen',
                'password' => Hash::make('123'),
            ]);
        }

        // Seeding 1 Admin
        $admin = Admin::create([
            'nip' => '197805162002121001',
            'nama_admin' => 'Admin Utama',
        ]);

        // Create User for Admin
        User::create([
            'username' => $admin->nip,
            'role' => 'admin',
            'password' => Hash::make('123'),
        ]);

    }
}
