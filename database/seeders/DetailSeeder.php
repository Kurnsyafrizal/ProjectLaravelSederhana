<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\details;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        details::create([
            'book_id' => '1',
            'author' => ' J.K. Rowling',
            'publisher' => ' Bloomsbury ',
            'book_year' => '2020',
            'description' => 'Harry Potter adalah seri tujuh novel fantasi yang dikarang oleh penulis Inggris J. K. Rowling. Novel ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts. Inti cerita dalam novel-novel ini berpusat pada upaya Harry untuk mengalahkan penyihir hitam jahat bernama Lord Voldemort, yang berambisi untuk menjadi makhluk abadi, menaklukkan dunia sihir, menguasai orang-orang nonpenyihir, dan membinasakan siapapun yang menghalangi jalannya, terutama Harry Potter.'
        ]);

        details::create([
            'book_id' => '2',
            'author' => 'Raditya Dika',
            'publisher' => 'Bantam Dell Publishing',
            'book_year' => 1988,
        'description' => 'A Brief History of Time berusaha menjelaskan berbagai hal dalam kosmologi, termasuk Ledakan Besar, lubang hitam, dan kerucut cahaya, untuk pembaca awam. Tujuan utamanya adalah memberi tinjauan tentang subjek ini sekaligus menjelaskan beberapa rumus matematika rumit (tidak lazim untuk buku sains populer). Edisi tahun 1996 dan selanjutnya membahas kemungkinan perjalanan waktu dan lubang cacing dan mengungkap kemungkinan memiliki alam semesta tanpa singularitas kuantum pada awal waktu.'
        ]);

        details::create([
            'book_id' => '3',
            'author' => 'Rosyana',
            'publisher' => 'Andi',
            'book_year' => 2020,
        'description' => 'Buku ini ditujukan untuk pembaca dari kalangan mahasiswa, dosen, maupun masyarakat umum. Buku ini dapat membantu pembaca dalam mempelajari konsep dan proses membangun sebuah aplikasi mobile yang menggunakan Firebase dengan Android Studio, dan untuk mempermudah dalam memahami materi dari Firebase terutama bagi yang belum pernah mengenal Firebase. Oleh karena itu, buku ini dapat digunakan sebagai bahan untuk belajar mandiri mengenai Firebase, bagi para calon peminat bidang cloud seperti Firebase dan aplikasi mobile dengan Android.'
        ]);

        details::create([
            'book_id' => '4',
            'author' => 'Yuniar Supardi',
            'publisher' => 'Elex Media',
            'book_year' => 2019,
            'description' => 'Buku dengan judul “Semua Bisa Menjadi Programmer Laravel Basic” ini merupakan buku dasar dalam mempelajari framework PHP dengan Laravel yang saat ini sedang populer. Dengan buku ini, tandanya Anda sudah belajar sampai tingkat menengah. Akan dibahas pula kelebihan dari script server programming dengan Laravel, serta materi lengkap dari dasar hingga menengah. Keunggulan buku ini adalah dapat memandu Anda membuat program web dengan Laravel dengan database MySQL dengan pembahasan yang mudah dan sistematis sehingga Anda tidak akan kesulitan mempelajarinya. Buku ini dibagi menjadi 30 bab, disusun secara sistematis dari program yang sederhana hingga database sehingga memudahkan Anda menjadi programmer dengan Laravel. Dengan mengacu beberapa buku penulis yang best seller maka terciptalah buku ini. Dalam buku ini, penulis juga membahas proses instalasi XAMPP di dalam Lampiran. Buku ini juga dapat dipakai oleh praktisi pendidikan, karyawan, dan mahasiswa.'
        ]);


        details::create([
            'book_id' => '5',
            'author' => 'Carol S. Dweck',
            'publisher' => 'Bentara Aksara',
            'book_year' => 2018,
            'description' => 'Paparan tentang kesuksesan dalam buku ini sangat mendasar dan langka. Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisi praktis. Namun, buku ini justru mengajak Anda menggarap inti masalah kesuksesan: pikiran. Tak hanya itu, buku ini mengontraskan dengan apik tokoh-tokoh dunia—di bidang musik, sastra, sains, olahraga, dan bisnis—yang berpola pikir tetap (ﬁxed mindset) dan berpola pikir tumbuh (growth mindset). Ternyata, tokoh yang berpola pikir tumbuh lebih mampu mempertahankan kesuksesan dan kegembiraan hidup. Hal ini dikarenakan mereka lebih menekankan proses belajar dan peran ikhtiar daripada mengandalkan bakat dan kecerdasan.'
        ]);

        details::create([
            'book_id' => '6',
            'author' => 'NidhalGuess',
            'publisher' => 'Qof Media Kreativa',
            'book_year' => 2020,
        'description' => 'Bagi Nidhal Guessoum, kurangnya literasi sains modern di kalangan umat Islam saat ini, seperti meminum pil pahit, manakala ada yang memiliki pandangan keras bahwa Islam tak pernah memiliki hubungan masalah dengan sains modern, dan yang memiliki hubungan masalah sains ada dalam dunia Barat, karena pihak Gereja pernah mencurigai sains Galileo. Diakui atau tidak, kenyataan sejarah sains Barat memang demikian dan hari ini mampu memperbaiki.'
        ]);

        details::create([
            'book_id' => '7',
            'author' => 'Yuniar Supardi',
            'publisher' => 'Elex Media',
            'book_year' => 2020,
            'description' => 'Buku dengan Judul Semua Bisa Menjadi Programmer JavaScript & Node.js ini merupakan buku yang akan memandu Anda belajar JavaScript dari dasar hingga program tampilan GUI JavaScript. Dalam buku ini juga Anda dipandu bagaimana membuat program web dengan database MySQL dan SQLite pada Node.js. Topik yang dibahas dalam buku ini mencakup: - Sekilas JavaScript & Node.js - Komponen Program JavaScript - Objek GUI JavaScript - Kejadian (Event) JavaScript - Marquee dan Frame JavaScript - Node.js - NPM Node.js - Modul Node.js - Modul Http - Modul File System - Modul Url - Form Node.js - Upload File Node.js - CRUD MySQL Pada Node.js - SQLite Pada Node.js - dan Lain-lain.'
        ]);



        details::create([
            'book_id' => '8',
            'author' => 'Carol S. Dweck',
            'publisher' => 'Bentara Aksara',
            'book_year' => 2019,
        'description' => 'Buku hasil riset selama 30 tahun ini menyoroti cara orang berpikir dan bertindak—mengapa mereka kadang berjalan/bekerja dengan baik dan kadang pula berperilaku yang merugikan dan merusak diri sendiri. Dengan lugas dan sistematis, Prof. Dweck menyibak pola-pola motivasi adaptif dan maladaptif tersebut. Prof. Dweck secara tangkas dan bernas mengemukakan dua kerangka kerja orang-orang (entitas vs inkremental) yang menentukan dua tujuan mereka (kinerja vs pembelajaran); mengajarkan Anda cara terbaik merespons kegagalan (pelatihan ulang atribusi) serta bagaimana menggeser mindset merasa berharga jika sukses dan terpuruk saat gagal (nilai diri kontingen) ke mindset produktif dan konstruktif (harga diri inkremental). Dan masih banyak lagi'
        ]);


        details::create([
            'book_id' => '9',
            'author' => 'M. Anugrah Arifin',
            'publisher' => 'Deep Publish',
            'book_year' => 2018,
            'description' => 'Buku hasil riset selama 30 tahun ini menyoroti cara orang berpikir dan bertindak—mengapa mereka kadang berjalan/bekerja dengan baik dan kadang pula berperilaku yang merugikan dan merusak diri sendiri. Dengan lugas dan sistematis, Prof. Dweck menyibak pola-pola motivasi adaptif dan maladaptif tersebut. Prof. Dweck secara tangkas dan bernas mengemukakan dua kerangka kerja orang-orang (entitas vs inkremental) yang menentukan dua tujuan mereka (kinerja vs pembelajaran); mengajarkan Anda cara terbaik merespons kegagalan (pelatihan ulang atribusi) serta bagaimana menggeser mindset merasa berharga jika sukses dan terpuruk saat gagal (nilai diri kontingen) ke mindset produktif dan konstruktif (harga diri inkremental). Dan masih banyak lagi'
        ]);


        details::create([
            'book_id' => '10',
            'author' => 'Alvi Syahrin',
            'publisher' => 'GagasMedia',
            'book_year' => 2020,
            'description' => 'Jika Kita Tak Pernah Jadi Apa-Apa akan menemanimu selama perjalanan. Buku ini untukmu yang khawatir tentang masa depan. Tenang saja, kau tidak sedang diburu waktu. Bacalah tiap lembarnya dengan penuh kesadaran bahwa hidup adalah tentang sebaik-baiknya berusaha, jatuh lalu bangun lagi, dan tidak berhenti percaya bahwa segala perjuanganmu tidak akan sia-sia. Bukankah sebaiknya apa-apa yang fana tidak selayaknya membuatmu kecewa?.'
        ]);

    }

}
