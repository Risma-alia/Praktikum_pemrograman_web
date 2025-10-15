Pertanyaan dan jawaban README :
1. Mengapa memilih konfigurasi col- tertentu untuk tiap breakpoint?
JAWAB : Karena konfigurasi col-12, col-sm-6, col-md-4 col-lg-3 diterapkan untuk menjamin responsivitas taat letak (grid postingan).pendekatan ini memastikan agar tampilan tetap optimal di berbagai perangkat:
> Ponsel : Tampilan 1 kolom penuh (col-12) agar gambar jelas
> Tablet/Layar Sedang: Tampil 2 hingga 3 kolom (col-sm-6, col-md-4).
> Desktop/Layar Besar: Tampil 4 kolom (col-lg-3) untuk memanfaatkan ruang layar lebar.

2. Bagaimana kamu memastikann tombol follow/edit profile tetap mudah di jangkau di mobbile? jelaskan pendekatannya
JAWAB : Pendekatannya adalah Mobile-First Design dengan menggunakan utilitas tampilan Bootstrap:
> Tombol khusus mobile menggunakan class d-block d-md-none agar hanya muncul di layar kecil.
> Tombol diberi lebar penuh (w-100) agar mudah diakses/ditekan dengan jari pada layar handphone.

3. Jika postingan bertambah jadi 50, apa potensi masalah dan bagaimana solusi gridmu mengatasinya?
JAWAB : Potensi Masalah: Halaman akan menjadi sangat panjang, memicu waktu loading gambar yang lebih lama, dan membutuhkan scrolling yang intensif dari pengguna.
Solusi Grid: Sistem grid Bootstrap tetap mampu menjaga kerapian tampilan. Namun, untuk menjaga performa dan user experience, disarankan untuk menambahkan fitur Pagination atau Infinite Scroll agar tidak semua 50 postingan dimuat secara bersamaan.