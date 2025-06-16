<?php

namespace Database\Seeders;

use App\Models\tugas;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class isi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $isi = [
  
            [
                'topic_id'            => '4.1',
                'judul'               => 'My Profesional Profile',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '1',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/1.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],
            [
                'topic_id'            => '4.2',
                'judul'               => 'Traditional Culture in My Place ',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '2',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/2.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],
            [
                'topic_id'            => '4.3',
                'judul'               => 'Job Hunting',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '3',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/3.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],
            [
                'topic_id'            => '4.4',
                'judul'               => 'Job Interview Preparation ',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '4',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/4.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],
            [
                'topic_id'            => '4.5',
                'judul'               => 'The things I do to develop myself',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '5',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/5.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],
            [
                'topic_id'            => '4.6',
                'judul'               => 'How do I see myself in the next 5 years ',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '6',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/6.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],
            [
                'topic_id'            => '4.7',
                'judul'               => 'My Job Description',
                'dosen'               => '-',
                'semester'            => '4',
                'topic'               => '7',
                'tgl_upload'          => '2024-01-31',
                'isi'                 => '/s4/7.png',
                'vokab'               => '/s4/vokab/1-7page2.png'
            ],

        ];
        foreach($isi as $key => $val){
            tugas::create($val);
        }
    }
}
