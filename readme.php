<?php
/*  
*   Ketentuan Pengerjaan:
    -   Boleh melakukan searching di internet.
    -   Boleh menggunakan bahasa pemrograman apapun, asalkan mencapai output yang diminta (kecuali untuk MySQL).
    -   Setiap tes dikerjakan pada file berbeda, kecuali untuk nomor 9 dan 10, boleh digabung.
    -   Dilarang bekerja sama dengan peserta lainnya. Apabila terindikasi adanya kecurangan atau kerja sama antar peserta, maka sanksi untuk pihak terkait akan diputuskan secara sepihak dari ITK.
    -   Dilarang melakukan plagiasi antar sesama peserta.
    -   Waktu pengerjaan tidak lebih dari waktu yang ditentukan.
*/

/*  
*   Note:
    Selain output, yang dinilai juga kualitas kode dan proses pengerjaan.
*/

/*  loop, data structure, condition, formatting
    0.  Tuliskan "hello institut teknologi kalimantan" menggunakan bahasa pemrograman yang kalian gunakan.
        Syarat:
        -   Proper case, ex: Hello Institut Teknologi Kalimantan
        -   Tambahkan tanda seru "!" dibelakang 
        -   Tidak menghilangkan tanda ""
        Output:
        "Hello Institut Teknologi Kalimantan!"
*/

/*  
*   1.  "Hello ITK"
        Pecahkan kalimat diatas kedalam array.
        Syarat:
        -   Hanya huruf H, I, T, dan K
        -   Lowercase/huruf kecil
        -   Diurutkan berdasarkan abjad
        Output: 
        ['h', 'i', 'k', 't']


*   2.  Perhatikan array berikut:
        Ex 1:
        $arrayTest = ['H', 'e', 'l', 'l', 'o']
        Output = ['o', 'l', 'l', 'e', 'H']

        Ex 2:
        $arrayTest = ['I', 'T', 'K']
        Output = ['K', 'T', 'I']

        Buatlah algoritma pemograman untuk menguji kedua VARIABEL arrayTest dan menghasilkan output pada contoh di atas.
        Syarat: 
        -   Tidak diperbolehkan menggunakan METHOD SORTING seperti reverse, sort dari suatu bahasa pemrograman.
        -   Tidak diperbolehkan menggunakan extra/tambahan array baru.
*/

/* Array untuk soal nomor 3 - 6
*   Seorang pegawai di ITK memiliki data presensi sebagai berikut.
*   $testArray = [
        '2022-02-06 06:00:00',
        '2022-02-06 12:00:00',
        '2022-02-07 08:00:00',
        '2022-02-07 15:00:00',
        '2022-02-08 08:00:00',
        '2022-02-08 15:30:00',
        '2022-02-09 07:30:00',
        '2022-02-09 15:30:00',
        '2022-02-10 06:30:00',
        '2022-02-10 14:00:00',
        '2022-02-11 07:45:15',
        '2022-02-11 16:00:00',
        '2022-02-12 07:45:15',
        '2022-02-12 15:30:00',
        '2022-02-13 07:15:30',
        '2022-02-13 15:30:00',
    ];

*   3.  Buat array baru dengan pembagian check-in dan checkout.
        Contoh Output:
        [
            [
                'check_in' =>  '2022-02-07 08:30:00',
            ],
            [
                'check_out' => '2022-02-07 15:30:00'
            ],
            [
                'check_in' =>  '2022-02-07 08:00:00'
            ],
            [
                'check_out' => '2022-02-07 15:00:00'
            ],
            dst..
        ]
        Syarat: 
        -   Output tidak boleh diketik ulang secara manual.
        -   Jam check-in, di atas jam 07:00 dan di bawah jam 09:00.
        -   Jam check-out, di atas atau sama dengan jam 15:00.
        -   Jam yang tidak memenuhi syarat, tidak boleh ikut ke dalam array.
*/

/*
*   4.  Group array dari jawaban soal nomor 3 sesuai tanggalnya.
        Lalu, tambahkan atribut total_jam_kerja_harian berdasarkan jarak antara jam check-in dan check-out.
        Contoh Output:
        [
            '2022-02-11' => [
                'check_in' => '08:00:00',
                'check_out' => '16:00:00',
                'total_jam_kerja_harian' => '08:00:00'
            ], 
            '2022-02-12' => [
                'check_in' => '08:00:00',
                'check_out' => '16:00:00',
                'total_jam_kerja_harian' => '08:00:00'
            ], 
            dst...
        ]
        Syarat:
        -   Pertahankan syarat nomor 3
        -   Format total_jam_kerja_harian, check_in, checkout -> jam:menit:detik.
        -   Group berdasarkan tanggal, format tahun-bulan-tanggal.
*/

/*
*   5.  Buat array baru berdasarkan array dari jawaban soal nomor 4.
        Contoh Output:
        [
            'data' => [
                '2022-02-11' => [
                    'check_in' => '08:00:00',
                    'check_out' => '16:00:00',
                    'total_jam_kerja_harian' => '08:00:00'
                ], 
                '2022-02-12' => [
                    'check_in' => '08:00:00',
                    'check_out' => '16:00:00',
                    'total_jam_kerja_harian' => '08:00:00'
                ], 
                dst..
            ],
            'total_seluruh_jam_kerja' => '78:30:15',
            'total_terlambat' => '05:20:00',
            'jumlah_presensi_tidak_valid' => 1,
        ]
        Syarat:
        -   Pertahankan syarat nomor 4
        -   Hitung total seluruh jam kerja dari total jam kerja harian.
        -   Pegawai dinyatakan terlambat apabila jam check_in diatas jam 07.30. Hitung juga total seluruh keterlambatanya.
            Contoh: 
            jam check_in = 07.45, keterlambatan = 00:15:00.
            Format -> jam:menit:detik
        -   Hitung jumlah presensi yang tidak valid, diambil dari presensi yang tidak memenuhi syarat pada soal nomor 2.
        -   Urutkan tanggal di dalam data berdasarkan tanggal yang terkecil.

*/

/*  join, select, aggregate function (sum, count)
*   Buat database serta tabel pada MySQL dengan ketentuan dibawah untuk menjawab soal nomor 6-10.
    Export database dengan nama itk.sql

    Tabel mahasiswa
        |      nim       |          nama           |       tempat_tinggal    |
        |   1118123085   |       Achmad Fadhil     |       Balikpapan       |
        |   1119124086   |       Alvin Fauzi       |       Balikpapan       |
        |   1120123087   |       Danu Fajar        |       Balikpapan       |
    
    Tabel prodi
        |   id     |        nama         |  
        |   123    |   Sistem Informasi  |
        |   124    |    Informatika      |

    Tabel mata_kuliah
        |   id     |            nama         |      prodi_id    |
        |   188    |        Pemrograman      |       123        |
        |   199    |        Algoritma        |       124        |
        |   200    |        Matematika       |       124        |

    Tabel frs
        |   id   |          nim           |      mata_kuliah_id   |
        |   1    |        1118123085      |           188         |
        |   2    |        1118123085      |           199         |
        |   3    |        1119124086      |           199         |
        |   4    |        1120123087      |           188         |
        |   5    |        1120123087      |           200         |

*/

/*  6.  Buat query SQL (MySQL) untuk menghasilkan daftar mata kuliah beserta prodinya.
        Contoh  Output:
            _____________________________________________
            |   mata_kuliah      |       prodi          |
            ---------------------------------------------
            |    Pemrograman     |   Sistem Informasi   |
            |     Algoritma      |    Informatika       |
            dst...
        Syarat:
        -   Perintah SQL disimpan dalam format .txt
*/

/*  7.  Buat query SQL (MySQL) untuk menghasilkan data jumlah mahasiswa untuk setiap mata kuliah seperti berikut.
        Contoh Output:
            ___________________________________________________
            |   mata_kuliah      |       jumlah_mahasiswa     |
            ---------------------------------------------------
            |    Pemrograman     |             2             |
            |     Algoritma      |             1             |
            dst...
        Syarat:
        -   Perintah SQL disimpan dalam format .txt
*/


/*  8.  Buat query SQL (MySQL) untuk menghasilkan daftar mahasiswa beserta prodi dan data frsnya.
        Output:
            ___________________________________________________________________
            |   nama     |            prodi           |         frs           |
            ------------------------------------------------------------------
            |   Fadhil   |     Sistem Informasi       |      Pemrograman      |
            |   Fadhil   |     Sistem Informasi       |      Algoritma        |
            dst...
        .
        Syarat:
        -   Semua data mahasiswa
        -   Nama mahasiswa hanya menggunakan nama belakang. 
            Contoh: Achmad Fadhil = Fadhil.
        -   Prodi diambil berdasarkan nim mahasiswa.
        -   Perintah SQL disimpan dalam format .txt
*/

/*  display data, html, css
*   9.  Kombinasikan query pada soal nomor 8 dengan bahasa pemrograman, untuk menampilkan output seperti dibawah jika dijalankan:
        Output:
        [
            'data' => [
                        'nama' => 'Fadhil',
                        'prodi' => 'Sistem Informasi',
                        'frs' => [
                            'Pemrograman', 
                            'Algoritma'
                        ],
                    ],
                    dst...
            'total => 3
        ]
        Syarat:
        -   Pertahankan syarat nomor 8.
        -   Data dapat berupa object atau array.
*/

/*  10. Tampilkan data yang diperoleh pada nomor 9.
        Syarat:
        -   Pertahankan syarat no 9.
        -   Tampilkan data tersebut menggunakan html dan pure css (desain semenarik mungkin).
        -   Tidak boleh menggunakan framework css seperti bootstrap, bulma, materialize, dll.
        -   Tambahkan biodata anda. 
        -   Minimal responsive pada tampilan mobile (Bonus).
*/

/*
*   Ketentuan pengumpulan:
    -   Jadikan 1 folder dengan rapi/terstruktur (seluruh file code, sql, html, css, dll).
    -   Format nama folder: nama_programmer_itk
        Contoh:
            -   Fadhil_programmer_itk
                    tes1.php
                    tes2.js
                    tes3
                        - laravel project
                    .
                    tes6.txt
                    .
                    tes9_10
                        - index.html
                        - index.css
                        - index.php
    -   Pastikan semua soal yang dikerjakan bisa dijalankan dengan baik.
    -   Berikan panduan untuk menjalankan program yang dibuat untuk mempercepat proses pemeriksaan.
    -   Upload ke 1 repository github, pastikan bisa diakses public (nama repo dibebaskan).
    -   Jika tidak bisa mengupload ke github, zip folder lalu upload ke google drive.
    -   Link file github ataupun drive diberikan ke private chat zoom.
/*