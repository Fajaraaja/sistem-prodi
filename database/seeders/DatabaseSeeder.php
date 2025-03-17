<?php

namespace Database\Seeders;

use App\Models\TahunAkademik;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i = 1; $i <= 10; $i++) {
            $nim = '22010' . str_pad($i, 2, '0', STR_PAD_LEFT);
            $mahasiswa = Mahasiswa::create([
                'nim' => $nim,
                'nama_mahasiswa' => 'Mahasiswa ' . $i,
                'no_hp' => '081234567' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'alamat' => 'Jl. Pendidikan No. ' . $i,
                'angkatan' => rand(2020, 2024),
                'status_aktif' => true,
            ]);

            // Create User for Mahasiswa
            User::create([
                'username' => $mahasiswa->nim,
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'id_mahasiswa' => $mahasiswa->id_mahasiswa,
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
                'id_dosen' => $dosen->id_dosen,
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
            'id_admin' => $admin->id_admin,
        ]);

        $tahunAkademik = [
            '2022/2023',
            '2023/2024',
            '2024/2025',
        ];

        foreach ($tahunAkademik as $tahun) {
            TahunAkademik::create([
                'tahun' => $tahun,
                'ganjil_genap' => 'ganjil',
            ]);

            TahunAkademik::create([
                'tahun' => $tahun,
                'ganjil_genap' => 'genap',
            ]);
        }
    }
}
