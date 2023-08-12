<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Building;
use App\Models\Room;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Rent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        { {
            }
        }
        // \Ap{{ p\Mo }}dels\User::factory()->create([
        //    {{  'na }}me' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'super admin',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'dosen',
        ]);

        Role::create([
            'name' => 'ketua organisasi',
        ]);

        Role::create([
            'name' => 'ketua UKM',
        ]);

        Role::create([
            'name' => 'mahasiswa',
        ]);


        User::create([
            'name' => 'novi',
            'email' => 'noviyntdp@gmail.com',
            'password' => bcrypt('novi'),
            'nim' => '210323010',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'vanisa',
            'email' => 'vanisa_ica@lpkia.ac.id',
            'password' => bcrypt('vanisa'),
            'nim' => '122001',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'tuti sulastri',
            'email' => 'tutis@lpkia.ac.id',
            'password' => bcrypt('tuti'),
            'nim' => '0417086302',
            'role_id' => 3,
        ]);


        Faculty::create([
            'code' => 'FTID',
            'name' => 'Fakultas Teknologi Informasi dan Digital',
        ]);

        Building::create([
            'code' => 'LPKIA',
            'name' => 'LPKIA',
            'faculty_id' => 1,
        ]);

        Room::create([
            'code' => 'Co-Working',
            'name' => 'Ruang Co-Working',
            'floor' => 1,
            'status' => false,
            'capacity' => 50,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Co-Working',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'GSG',
            'name' => 'Gedung Serba Guna',
            'floor' => 1,
            'status' => false,
            'capacity' => 100,
            'type' => 'Gedung Serba Guna',
            'description' => 'Ruangan untuk kegiatan',
            'building_id' => 1,
        ]);

        Room::create([
            'code' => '102',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1,
        ]);

        Room::create([
            'code' => '103',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '104',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '105',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '106',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 15,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '109',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 15,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '110',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);


        Room::create([
            'code' => '111',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '112',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '113',
            'name' => 'Ruang Kelas',
            'floor' => 1,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '201',
            'name' => 'Ruang Kelas',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '202',
            'name' => 'Ruang Kelas',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '203',
            'name' => 'Ruang Kelas',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '204',
            'name' => 'Ruang Kelas',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '205',
            'name' => 'Ruang Kelas',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => '206',
            'name' => 'Ruang Kelas',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Ruang Kelas',
            'description' => 'Ruangan Kelas',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 01',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 02',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 03',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 04',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 05',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 06',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 07',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        Room::create([
            'code' => 'Labkom 08',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);


        Room::create([
            'code' => 'Labkom 09',
            'name' => 'LabKom',
            'floor' => 3,
            'status' => false,
            'capacity' => 30,
            'type' => 'Lab',
            'description' => 'Lab Komputer',
            'building_id' => 1
        ]);

        
    }
}
