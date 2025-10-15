Pertanyaan dan jawaban README :
1. Jelaskan keputusan grid-cols/gap di tiap breakpoint—kenapa begitu?
JAWAB : Karena Kami memilih susunan kolom (grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4) agar tampilan feed responsif dan selalu rapi:
> Ponsel (Kecil): 1 kolom (grid-cols-1). Ini membuat foto terlihat besar dan jelas di layar sempit.
> Tablet (Sedang): 3 kolom (md:grid-cols-3). Tiga kolom adalah standar yang ideal untuk tata letak di tablet.
> Desktop (Besar): 4 kolom (lg:grid-cols-4). Empat kolom memanfaatkan layar lebar agar informasi profil terlihat seimbang dengan banyaknya postingan.
Jarak antar foto (gap) dibuat kecil (gap-2) agar foto-foto terlihat menyatu seperti di aplikasi aslinya.

2. Bagaimana kamu memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout yang muncul di mobile?
JAWAB : Yaitu dengan Mengubah Susunan Menggunakan flex flex-col md:flex-row. Secara default (di mobile), elemen ditumpuk vertikal (flex-col). Elemen baru akan berjejer horizontal (flex-row) hanya ketika layarnya sudah sebesar tablet ke atas dan Menyelaraskan Konten Menggunakan text-center md:text-left dan items-center md:items-start. Di mobile, semua konten (foto dan teks) dibuat rata tengah (lebih enak dilihat saat vertikal). Penyelarasan ini berubah menjadi rata kiri setelah layarnya membesar.

3. Jelaskan trade-off antara memakai banyak utility classes vs membuat component CSS tersendiri.
JAWAB :Keuntungannya adalah kecepatan. Kami bisa melakukan styling sangat cepat karena semua class tersedia langsung di HTML, tanpa perlu berpindah-pindah file CSS.Kerugiannya adalah kode HTML menjadi sangat panjang, penuh dengan class (disebut HTML bloat), sehingga sulit dibaca dan dipelihara.
Sebaliknya, jika kami membuat component CSS tersendiri, kode HTML akan tetap bersih dan ringkas. Namun, hal ini akan memperlambat proses styling awal karena kami harus mendefinisikan aturan baru di file CSS setiap kali ada style yang sama diulang.
> Kesimpulan: Untuk proyek kecil, utility classes menghemat waktu. Untuk proyek besar, disarankan menggunakan component CSS atau fitur @apply di Tailwind untuk menjaga kode tetap bersih dan mudah dikelola.