<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Meningkatkan Pengalaman Pelanggan',
                'content' => 'Artikel ini membahas strategi untuk meningkatkan pengalaman pelanggan dalam bisnis digital.'
            ],
            [
                'title' => 'Framework Manajemen Pengalaman',
                'content' => 'Framework ini membantu perusahaan dalam merancang interaksi pelanggan yang efektif.'
            ],
            [
                'title' => 'Pentingnya Emosi dalam Hubungan Pelanggan',
                'content' => 'Hubungan emosional dengan pelanggan dapat meningkatkan loyalitas dan retensi.'
            ],
            [
                'title' => 'Transformasi Digital dan Pelanggan',
                'content' => 'Transformasi digital mempengaruhi cara perusahaan berinteraksi dengan pelanggan.'
            ],
            [
                'title' => 'Mengukur Kualitas Pengalaman Pelanggan',
                'content' => 'Metode dan alat untuk mengukur kualitas pengalaman pelanggan secara akurat.'
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
