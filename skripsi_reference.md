**Sistem Pakar Diagnosa Penyakit pada Tanaman Kangkung Air Menggunakan
Metode Certainty Factor Berbasis Web (Studi Kasus: Lahan Pertanian di
Desa Krama Jaya, Kec. Narmada)**

![Universitas_Teknologi_Mataram](media/image1.png){width="1.575in"
height="1.575in"}

**SKRIPSI**

Diajukan untuk memenuhi salah satu syarat guna menyelesaikan studi pada
Program Studi Teknik Informatika Program Sarjana S1 pada Universitas
Teknologi Mataram

**[INDRA ARYADI]{.underline}**

**NIM. 22TI122**

**PROGRAM STUDI TEKNIK INFORMATIKA**

**FAKULTAS ILMU KOMPUTER DAN KECERDASAN BUATAN**

**UNIVERSITAS TEKNOLOGI MATARAM**

**MATARAM**

**2025**

**Sistem Pakar Diagnosa Penyakit pada Tanaman Kangkung Air Menggunakan
Metode Certainty Factor Berbasis Web (Studi Kasus: Lahan Pertanian di
Desa Krama Jaya, Kec. Narmada)**

**Disusun Oleh:**

**INDRA ARYADI**

**22TI122**

**Program Studi Teknik Informatika**

**Falkultas Ilmu Komputer dan Kecerdasan Artifisial**

**Skripsi ini telah di setujui untuk di pertahankan di hadapan dewan
penguji pada tanggal seperti tertera di bawah ini**

**Mataram,\...\...\...\...\...\...\...\...\...\...\....**

  -------------------------------- --------------------------------
       **Pembimbing Utama ,**         **Pembimbing Pendamping,**

                                   

     **[Erni Surniwati, S.Kom.,      **[Nasirrudin Karim S.Kom.,
        M.Kom]{.underline}**             M.Kom]{.underline}**

        **NIDN.0831128810**              **NIDN. 0803089602**

             **Dekan,**                **Ketua Program Studi,**

                                   

     **[Dr. Muhammad Multazam,                **[Salman,
    S.Kom., M.Kom]{.underline}**      S.ST.,M.TI.]{.underline}**

      **NIDN.****0831128405**          **NIDN.****0829129002**
  -------------------------------- --------------------------------

  ---------------------------------------------------------------
                            **Rektor,**

    **[Ir. H. Lalu Darmawan Bakti, M.Sc., M.Kom]{.underline}**

                      **NIDN.****0819086601**
  ---------------------------------------------------------------

**Sistem Pakar Diagnosa Penyakit pada Tanaman Kangkung Air Menggunakan
Metode Certainty Factor Berbasis Web (Studi Kasus: Lahan Pertanian di
Desa Krama Jaya, Kec. Narmada)**

**Disusun Oleh:**

**INDRA ARYADI**

**22TI122**

**Program Studi Teknik Informatika**

**Falkultas Ilmu Komputer dan Kecerdasan Artifisial**

**SKRIPSI**

**Untuk memenuhi salah satu syarat ujian**

**guna memperoleh gelar Sarjana pada Program Studi Teknik Informatika**

**Telah dipertahankan di hadapan Dewan Penguji pada tanggal**

**seperti tertera di bawah ini**

**Mataram,\...\...\...\...\...\...\...\...\...\...\...\...\...\...\...\...**

**Susunan Penguji Skripsi:**

+----------------------+--------------------------------------+:------------------------------:+
| **1.**               |                                      | **..........................** |
+----------------------+--------------------------------------+--------------------------------+
| **2.**               |                                      | **..........................** |
+----------------------+--------------------------------------+--------------------------------+
| **Ketua program studi**                                     |                                |
+-------------------------------------------------------------+--------------------------------+
| **Salman, S.ST., M.TI**                                     | **.........................**  |
+-------------------------------------------------------------+--------------------------------+

  ---------------------------------------------------------------
                          **Mengesahkan**

                            **Rektor,**

    **[Ir. H. Lalu Darmawan Bakti, M.Sc., M.Kom.]{.underline}**

                             **NIDN**
  ---------------------------------------------------------------

[]{#_Toc1626246501 .anchor}**PERNYATAAN KEASLIAN PENELITIAN**

Yang bertanda tangan di bawah ini:

Nama : INDRA ARYADI

NIM : 22TI122

Program Studi : TEKNIK INFORMATIKA

Dengan ini menyatakan bahwa:

1.  Skripsi ini adalah asli dan belum pernah diajukan untuk mendapatkan
    gelar akademik baik di Universitas Teknologi Mataram maupun di
    perguruan tinggi lain.

2.  Skripsi ini adalah murni gagasan, rumusan, dan penelitian saya
    sendiri, tanpa bantuan pihak lain, kecuali arahan Dosen Pembimbing.

3.  Dalam skripsi ini tidak terdapat karya atau pendapat yang telah
    ditulis atau dipublikasikan orang lain, kecuali secara tertulis
    dengan jelas dicantumkan sebagai acuan dalam naskah dengan
    disebutkan nama pengarang/nama penulis dan dicantumkan dalam daftar
    Pustaka.

4.  Pernyataan ini dibuat dengan sesungguhnya dan apabila di kemudian
    hari terdapat ketidakbenaran dalam pernyataan ini, maka saya
    bersedia menerima sanksi akademik berupa pencabutan gelar yang telah
    diperoleh berkaitan dengan skripsi ini, serta sanksi lainnya sesuai
    dengan norma yang berlaku di Universitas Teknologi Mataram.

Mataram,.....................

Yang membuat pernyataan,

MATERAI 6000

(INDRA ARYADI)

NIM. 22TI122

**MOTTO**

Kegagalanku adalah pelajaran yang membuatku selalu bisa membuat hal-hal
yang lebih baik, jika aku gagal itu berarti usaha kita yang kurang dan
jika kita berhasil itu adalah hasil dari sebuah kegagalan.

**PERSEMBAHAN**

Kupersembahkan karya ini kepada yang terhormat ibu dan ayah saya yang
selalu mendukung saya dalam mengikuti kuliah dan berusaha semaksimal
mungkin memberikan saya bantuan dalam bentuk moral dan biaya dalam
menyelesaikan kuliah ini dan jasa yang beliau telah buat tidak akan
kulupakan dalam hidupku.

**Sistem Pakar Diagnosa Penyakit pada Tanaman Kangkung Air Menggunakan
Metode Certainty Factor Berbasis Web (Studi Kasus: Lahan Pertanian di
Desa Krama Jaya, Kec. Narmada)**

**INDRA ARYADI**

Program Studi Teknik Informatika, UTM

**ABSTRAK**

Kangkung air (Ipomoea aquatica Forsk) merupakan komoditas sayuran
penting di Desa Krama Jaya, namun budidayanya terhambat serangan
penyakit yang menurunkan hasil panen secara signifikan. Permasalahan
utama petani adalah minimnya akses informasi cepat/akurat serta
terbatasnya Penyuluh Pertanian Lapangan (PPL) untuk mendiagnosis jenis
penyakit secara tepat waktu. Keterbatasan ini sering menyebabkan
keterlambatan penanganan, yang berujung pada kerugian material. Oleh
karena itu, penelitian ini bertujuan membangun Sistem Pakar Diagnosa
Penyakit pada Tanaman Kangkung Air Menggunakan Metode Certainty Factor
Berbasis Web.

Metode Certainty Factor (CF) dipilih karena mampu mengakomodasi
ketidakpastian atau keraguan gejala penyakit tanaman di lapangan yang
seringkali ambigu atau tumpang tindih. Pengembangan sistem menggunakan
Model Waterfall yang sistematis, meliputi tahapan analisis, perancangan
(Flowchart, UML, ERD), implementasi, dan pengujian. Implementasi
dilakukan berbasis Web menggunakan bahasa pemrograman
Python, framework FastAPI, dan database PostgreSQL.

Luaran penelitian ini adalah sistem pakar berbasis web sebagai alat
bantu operasional bagi petani untuk diagnosis penyakit secara mandiri,
cepat, dan akurat. Hasil diagnosis mencakup nama penyakit terdeteksi,
nilai Certainty Factor (CF) final, persentase keyakinan, serta
rekomendasi solusi penanganan. Pengujian fungsional sistem menggunakan
metode Black Box Testing menunjukkan bahwa seluruh fitur dan fungsi
berjalan sesuai spesifikasi kebutuhan yang telah ditentukan.

***Kata Kunci:*** Sistem Pakar, Kangkung Air *(Ipomoea
aquatica), Certainty Factor (CF),* Diagnosis Penyakit, Berbasis Web*.*

**Web-Based Expert System for Diagnosing Diseases in Water Spinach
Plants Using the Certainty Factor Method (Case Study: Agricultural Land
in Krama Jaya Village, Narmada District)**

**INDRA ARYADI**

Departmen of Informatics Engineering, UTM

**ABSTRACT**

Water spinach (Ipomoea aquatica Forsk) is an important vegetable
commodity in Krama Jaya Village, but its cultivation is frequently
hampered by disease attacks that significantly reduce yields. The main
problem for local farmers is minimal access to fast and accurate
information, coupled with the limited number of Field Agricultural
Extension Agents (PPL) available to diagnose disease types promptly.
This limitation often leads to delayed or incorrect treatment, resulting
in substantial material losses. Therefore, this study aims to develop
an Expert System for Diagnosing Diseases in Water Spinach Using the
Web-Based Certainty Factor Method.

The Certainty Factor (CF) method was chosen for its ability to
accommodate the uncertainty or doubt inherent in plant disease symptoms
in the field, which are often ambiguous or overlapping. The system
development utilized the systematic Waterfall Model, covering analysis,
design (Flowchart, UML, ERD), implementation, and testing stages. The
implementation was web-based, using the Python programming language,
FastAPI framework, and PostgreSQL database.

The output of this research is a web-based expert system serving as an
operational tool for farmers to diagnose diseases independently,
quickly, and accurately. The diagnosis results include the detected
disease name, the final Certainty Factor (CF) value, the percentage of
confidence, and recommended handling solutions. Functional testing using
the Black Box Testing method confirmed that all system features and
functions operate in accordance with the determined requirements
specifications.

**Keywords:** Expert System, Water Spinach (*Ipomoea aquatica*),
Certainty Factor (CF), Disease Diagnosis, Web-Based.

**KATA PENGANTAR**

Assalamu'alaikum Wr. Wb.

Syukur alhamdulillah penulis hanturkan kehadirat Allah SWT yang telah
melimpahkan Rahmat dan Hidayah-Nya, sehingga penulis dapat menyelesaikan
studi di Universitas Teknologi Mataram (UTM) sekaligus menyelesaikan
skripsi ini dengan baik.

Selanjutnya penulis haturkan ucapan terima kasih seiring do'a dan
harapan kepada semua pihak yang telah membantu terselesaikannya skripsi
ini. Ucapan terima kasih ini penulis sampaikan kepada:

1.  Bapak Ir. H. Lalu Darmawan Bakti, M.Sc., M.Kom., Rektor Universitas
    Teknologi Mataram

2.  Ibu Dr. Dwinita Arwidiyarti, S.Kom., M.Kom., selaku Wakil Rektor
    Bidang Akademik di Universitas Teknologi Mataram.

3.  Bapak Dr. Muhammad Multazam, S.Kom., M.Kom., Dekan Fakultas Ilmu
    Komputer dan Kecerdasan Artifisial Universitas Teknologi Mataram.

4.  Bapak Salman, S.S.T., M.TI., Ketua Prodi Teknik Informatika Fakultas
    Ilmu Komputer dan Kecerdasan Artifisial Universitas Teknologi
    Mataram.

5.  Bapak Dr. Maspaeni, S.Kom., M.Kom., pembimbing utama yang telah
    dengan sabar memberikan bimbingan dan petunjuk dalam menyelesaikan
    skripsi ini.

6.  Bapak Lalu Delsi Samsumar, M.Eng., pembimbing pendamping yang telah
    dengan sabar memberikan bimbingan dan petunjuk dalam menyelesaikan
    skripsi ini.

7.  Bapak kepala instansi (nama instansi tempat penelitian)

8.  Bapak-Ibu dosen Program Studi Teknik Informatika di Universitas
    Teknologi Mataram

9.  Semua pihak yang tidak dapat kami sebutkan satu persatu

Semoga Allah SWT membalas jerih payah dan pengorbanan yang telah
diberikan dengan balasan yang lebih baik. Amin. Penulis berharap semoga
karya kecil ini bermanfaat bagi pembaca.

> Mataram, \...\...\...\.....
>
> Indra Aryadi

**Daftar ISI**

[PERNYATAAN KEASLIAN PENELITIAN [III](#_Toc1626246501)](#_Toc1626246501)

[BAB I [1](#bab-i)](#bab-i)

[PENDAHULUAN [1](#_Toc1008308264)](#_Toc1008308264)

[1.1 Latar Belakang Masalah
[1](#latar-belakang-masalah)](#latar-belakang-masalah)

[1.2 Rumusan Masalah [3](#rumusan-masalah)](#rumusan-masalah)

[1.3 Batasan Masalah [3](#batasan-masalah)](#batasan-masalah)

[1.4 Tujuan Penelitian [4](#tujuan-penelitian)](#tujuan-penelitian)

[1.5 Manfaat Penelitian
[4](#manfaat-penelitian-1)](#manfaat-penelitian-1)

[1.6 Sistematika Penulisan [5](#_Toc1536834028)](#_Toc1536834028)

[BAB II [7](#section-3)](#section-3)

[TINJAUAN PUSTAKA [7](#tinjauan-pustaka)](#tinjauan-pustaka)

[2.1 Landasan Teori [7](#_Toc2139010131)](#_Toc2139010131)

[2.1.1 Sistem Pakar (*Expert System*)
[7](#_Toc1658540435)](#_Toc1658540435)

[2.1.2 Tanaman Kangkung Air (Ipomoea aquatica Forsk.)
[8](#_Toc934707856)](#_Toc934707856)

[2.1.3 Certainty Factor (CF) [11](#_Toc1229866000)](#_Toc1229866000)

[2.1.4 Peralatan Pendukung Perancangan dan Pengujian Sistem Informasi
[12](#_Toc756582071)](#_Toc756582071)

[2.1.5 Bahasa Pemrograman, Database, dan Aplikasi yang Digunakan
[23](#_Toc2045440741)](#_Toc2045440741)

[2.2 Penelitian Terkait (State of the Art)
[26](#_Toc522390665)](#_Toc522390665)

[BAB III [31](#section-4)](#section-4)

[METODOLOGI PENELITIAN
[31](#metodologi-penelitian)](#metodologi-penelitian)

[3.1 Metode Pengumpulan Data
[31](#metode-pengumpulan-data)](#metode-pengumpulan-data)

[3.2 Metode Pengembangan Sistem
[34](#metode-pengembangan-sistem)](#metode-pengembangan-sistem)

[BAB IV [38](#_Toc250314877)](#_Toc250314877)

[HASIL DAN PEMBAHASAN [38](#_Toc1504769617)](#_Toc1504769617)

[4.1 Perancangan Sistem [38](#_Toc918235892)](#_Toc918235892)

[4.1.1 Data Penyakit dan Gejala [38](#_Toc535347501)](#_Toc535347501)

[4.1.2 Analisis Kebutuhan Sistem [47](#_Toc425075938)](#_Toc425075938)

[4.1.3 Flowchart Sistem Lama [49](#_Toc429284111)](#_Toc429284111)

[4.1.4 Flowchart Sistem Baru [51](#_Toc1826618336)](#_Toc1826618336)

[4.1.5 Unified Modelling Language (UML)
[53](#_Toc97431998)](#_Toc97431998)

[4.1.6 Enitity Relationship Diagram (ERD)
[70](#_Toc1808901036)](#_Toc1808901036)

[4.1.7 Struktur Database [71](#_Toc1305381189)](#_Toc1305381189)

[4.1.8 Arsitektur Program [78](#_Toc954767514)](#_Toc954767514)

[4.1.9 Desain Antar Muka [79](#_Toc445050139)](#_Toc445050139)

[4.2 Pengembangan Sistem [90](#_Toc2111179808)](#_Toc2111179808)

[4.2.1 Halaman Website [90](#_Toc766045959)](#_Toc766045959)

[4.2.2 Flowchart Sistem [100](#_Toc1499772577)](#_Toc1499772577)

[4.3 Pengujian Sistem [112](#_Toc337382281)](#_Toc337382281)

[BAB V [118](#_Toc868687151)](#_Toc868687151)

[PENUTUP [118](#_Toc407348806)](#_Toc407348806)

[5.1 Kesimpulan [118](#_Toc37787149)](#_Toc37787149)

[5.2 Saran [119](#_Toc473952600)](#_Toc473952600)

[DAFTAR PUSTAKA [120](#_Toc822000567)](#_Toc822000567)

[LAMPIRAN [126](#_Toc1167046084)](#_Toc1167046084)

# 

# 

**DAFTAR TABEL**

[Tabel 2.1 Certainty Factor Rule 1](#_Toc1930649972)2

[Tabel 2.2 Simbol-Simbol Flowchart 1](#_Toc1816661232)3

[Tabel 2.3 Simbol-simbol Use Case Diagram 1](#_Toc1330999130)7

[Tabel 2.4 Activity diagram 1](#_Toc746378674)8

[Tabel 2.5 ERD 2](#_Toc845116627)0

[Tabel 2.6 Jenis-jenis relasi ERD 2](#_Toc855206877)2

[Tabel 2.7 Penelitian Terkait 2](#_Toc1128898899)6

[Tabel 4 . 1 Data Penyakit [38](#_Toc341649232)](#_Toc341649232)

[Tabel 4 . 2 Data Gejala [39](#_Toc1762300240)](#_Toc1762300240)

[Tabel 4 . 3 Relasi Penyakit dan Gejala
[40](#_Toc1307989896)](#_Toc1307989896)

[Tabel 4 . 4 Perhitungan bobot gejala
[41](#_Toc1125356770)](#_Toc1125356770)

[Tabel 4 . 5 Gejala dan Nilai Bobot Pakar P001
[44](#_Toc1595618650)](#_Toc1595618650)

[Tabel 4 . 6 Nilai Bobot User P001
[44](#_Toc1399914489)](#_Toc1399914489)

[Tabel 4 . 7 Perbandingan dan Hasil kombinasi
[45](#_Toc663190716)](#_Toc663190716)

[Tabel 4 . 8 Kebutuhan Fungsional [47](#_Toc281597980)](#_Toc281597980)

[Tabel 4 . 9 Kebutuhan Non Fungsional
[48](#_Toc782576936)](#_Toc782576936)

[Tabel 4 . 10 Tabel Users/Pengguna
[71](#_Toc1775732112)](#_Toc1775732112)

[Tabel 4 . 11 Tabel Penyakit [73](#_Toc1221170537)](#_Toc1221170537)

[Tabel 4 . 12 Tabel Gejala [74](#_Toc69045978)](#_Toc69045978)

[Tabel 4 . 13 Tabel Aturan [75](#_Toc1948852795)](#_Toc1948852795)

[Tabel 4 . 14 Dianosa_history [76](#_Toc689507318)](#_Toc689507318)

[Tabel 4 . 15 Tabel Pengujian [112](#_Toc948804954)](#_Toc948804954)

**DAFTAR GAMBAR**

[Gambar 3.1 Metode Waterfall 3](#_Toc1544318544)5

[Gambar 4 . 1 Flowchart SIstem Lama
[49](#_Toc1938191484)](#_Toc1938191484)

[Gambar 4 . 2 Flowchart Sistem Baru
[51](#_Toc2107808857)](#_Toc2107808857)

[Gambar 4 . 3 Usecase Diagram [53](#_Toc157725389)](#_Toc157725389)

[Gambar 4 . 4 Diagram Activity Form Login
[54](#_Toc1952575771)](#_Toc1952575771)

[Gambar 4 . 5 Diagram Activity Mananjemen Pengguna
[56](#_Toc1139979082)](#_Toc1139979082)

[Gambar 4 . 6 Diagram Activity Mananjemen Penyakit
[57](#_Toc1240691338)](#_Toc1240691338)

[Gambar 4 . 7 Diagram Activity Mananjemen Gejala
[59](#_Toc122697506)](#_Toc122697506)

[Gambar 4 . 8 Diagram Activity Mananjemen Rules/Aturan
[61](#_Toc1393685422)](#_Toc1393685422)

[Gambar 4 . 9 Diagram Activity Daftar/Register
[62](#_Toc236625447)](#_Toc236625447)

[Gambar 4 . 10 Diagram Activity Login
[64](#_Toc395241338)](#_Toc395241338)

[Gambar 4 . 11 Diagram Activity Diagnosa Penyakit
[65](#_Toc575376345)](#_Toc575376345)

[Gambar 4 . 12 Diagram Activity Riwayat
[66](#_Toc1364839528)](#_Toc1364839528)

[Gambar 4 . 13 DiagramActivity Ensiklopedia
[67](#_Toc1874334156)](#_Toc1874334156)

[Gambar 4 . 14 Diagram Activity Kalkulator Pupuk
[68](#_Toc1581676682)](#_Toc1581676682)

[Gambar 4 . 15 ERD [70](#_Toc567732356)](#_Toc567732356)

[Gambar 4 . 16 Arsitektur Program [78](#_Toc687657857)](#_Toc687657857)

[Gambar 4 . 17 Desain interface form register
[79](#_Toc1178076335)](#_Toc1178076335)

[Gambar 4 . 18 Desain interface halaman login
[79](#_Toc1547589483)](#_Toc1547589483)

[Gambar 4 . 19 Desain interface halaman Home
[80](#_Toc333546154)](#_Toc333546154)

[Gambar 4 . 20 Desain interface Halaman dashboard admin
[81](#_Toc1678635024)](#_Toc1678635024)

[Gambar 4 . 21 Desain interface Halaman kelola penyakit
[82](#_Toc1137521025)](#_Toc1137521025)

[Gambar 4 . 22 Desain interface halaman kelola gejala
[82](#_Toc1212461649)](#_Toc1212461649)

[Gambar 4 . 23 Desain interface Halaman kelola pengguna
[83](#_Toc411427852)](#_Toc411427852)

[Gambar 4 . 24 Desain interface Halaman kelola aturan/rules
[83](#_Toc68683695)](#_Toc68683695)

[Gambar 4 . 25 Desain interface Halaman dashboard users
[84](#_Toc901508881)](#_Toc901508881)

[Gambar 4 . 26 Desain interface Halaman Diagnosa
[85](#_Toc766498)](#_Toc766498)

[Gambar 4 . 27 Desain interface Halaman Hasil diagnosa
[86](#_Toc1038958583)](#_Toc1038958583)

[Gambar 4 . 28 Desain interface Halaman ensiklopedia
[87](#_Toc1300377235)](#_Toc1300377235)

[Gambar 4 . 29 Desain interface Halaman Kalkulator
[88](#_Toc1753660123)](#_Toc1753660123)

[Gambar 4 . 30 Desain interface Halaman Panduan
[89](#_Toc1203363380)](#_Toc1203363380)

[Gambar 4 . 31 Halaman Home/Beranda [90](#_Toc4664006)](#_Toc4664006)

[Gambar 4 . 32 Halaman Login [91](#_Toc1857306710)](#_Toc1857306710)

[Gambar 4 . 33 Halaman Registrasi/Daftar
[92](#_Toc1929544308)](#_Toc1929544308)

[Gambar 4 . 34 Dashboard Admin [93](#_Toc371058417)](#_Toc371058417)

[Gambar 4 . 35 Halaman Mananjemen Penyakit
[94](#_Toc462610504)](#_Toc462610504)

[Gambar 4 . 36 Halaman Mananjemen gejala
[95](#_Toc51108398)](#_Toc51108398)

[Gambar 4 . 37 Halaman Mananjemen pengguna
[96](#_Toc674052508)](#_Toc674052508)

[Gambar 4 . 38 Halaman Mananjemen aturan/rules
[96](#_Toc712866412)](#_Toc712866412)

[Gambar 4 . 39 Halaman Dashboard pengguna
[97](#_Toc1722233472)](#_Toc1722233472)

[Gambar 4 . 40 Halaman Diagnosa [97](#_Toc1733533659)](#_Toc1733533659)

[Gambar 4 . 41 Halaman hasil diagnosa
[98](#_Toc1245475141)](#_Toc1245475141)

[Gambar 4 . 42 Halaman kalkulator
[98](#_Toc1953143932)](#_Toc1953143932)

[Gambar 4 . 43 Halaman ensiklopedia
[99](#_Toc952422535)](#_Toc952422535)

[Gambar 4 . 44 Halaman Panduan [99](#_Toc902759168)](#_Toc902759168)

[Gambar 4 . 45 Flowchart Register
[100](#_Toc1840607790)](#_Toc1840607790)

[Gambar 4 . 46 Flowchart Login [101](#_Toc1234939567)](#_Toc1234939567)

[Gambar 4 . 47 Flowchart Diagnosa
[102](#_Toc1849660137)](#_Toc1849660137)

[Gambar 4 . 48 Mananjemen penyakit
[103](#_Toc880528489)](#_Toc880528489)

[Gambar 4 . 49 Flowchart Mananjemen gejala
[104](#_Toc54691528)](#_Toc54691528)

[Gambar 4 . 50 Flowchart Mananjemen Pengguna
[105](#_Toc818763954)](#_Toc818763954)

[Gambar 4 . 51 Flowchart Mananjemen aturan
[106](#_Toc1153796699)](#_Toc1153796699)

[Gambar 4 . 52 Flowchart Dashboard admin
[107](#_Toc2117433562)](#_Toc2117433562)

[Gambar 4 . 53 Flowchart Dashboard pengguna
[108](#_Toc2133442400)](#_Toc2133442400)

[Gambar 4 . 54 Flowchart Algoritma CF
[109](#_Toc765845920)](#_Toc765845920)

[Gambar 4 . 55 Flowchart Riwayat
[110](#_Toc1464366434)](#_Toc1464366434)

[Gambar 4 . 56 Flowchart Ensiklopedia
[111](#_Toc36967282)](#_Toc36967282)

**DAFTAR LAMPIRAN**

[Lampiran 1 Kantor Dinas Pertanian
[126](#_Toc891134977)](#_Toc891134977)

[Lampiran 2 Ruang tunggu [127](#_Toc1602067173)](#_Toc1602067173)

[Lampiran 3 Kantor BPP Kec. Narmada
[128](#_Toc641789228)](#_Toc641789228)

[Lampiran 4 Kantor BPP Kec. Narmada
[129](#_Toc1862147594)](#_Toc1862147594)

# 

# **BAB I**

[]{#_Toc1008308264 .anchor}**PENDAHULUAN**

## **1.1 Latar Belakang Masalah**

Kangkung air (Ipomoea aquatica Forsk) merupakan salah satu jenis
komoditas sayuran yang penting dan banyak dibudidayakan di Indonesia,
termasuk di Desa Krama Jaya, Kecamatan Narmada, Kabupaten Lombok Barat.
Tanaman ini memiliki nilai ekonomis yang tinggi, siklus panen yang
relatif cepat, dan menjadi sumber penghasilan utama bagi sebagian besar
petani setempat. Namun, dalam proses budidayanya, petani sering
dihadapkan pada kendala serangan penyakit yang dapat menurunkan kualitas
dan kuantitas hasil panen secara signifikan. Penurunan hasil panen ini
berdampak langsung pada stabilitas ekonomi para petani.

Penyakit pada tanaman kangkung air dapat disebabkan oleh berbagai faktor
biotis, seperti jamur pathogen, bakteri, atau virus, yang masing-masing
memiliki gejala, penyebab, dan penanganan yang sangat spesifik dan
berbeda (Nasrulloh et al., 2022). Permasalahan utama yang dihadapi oleh
petani di Desa Krama Jaya adalah kurangnya pengetahuan dan minimnya
akses informasi yang cepat dan akurat serta terbatasnya jumlah penyuluh
pertanian lapangan (PPL) untuk mendiagnosis jenis penyakit yang
menyerang tanaman mereka secara tepat waktu.

Keterbatasan ini seringkali menyebabkan keterlambatan penanganan atau
bahkan kesalahan dalam pemberian perlakuan (seperti salah memilih jenis

pestisida atau fungisida), yang berujung pada resistensi hama,
pencemaran lingkungan, dan kerugian material yang besar. Seiring dengan
perkembangan teknologi informasi, sistem pakar (expert system)
menawarkan solusi yang sangat efektif. Sistem pakar merupakan cabang
dari Kecerdasan Buatan (Artificial Intelligence) yang mampu mereplikasi
pengetahuan dan kemampuan analisis seorang pakar atau ahli dalam bidang
tertentu---dalam hal ini adalah ahli penyakit tanaman
(fitopatologi)---dan menyajikannya dalam bentuk aplikasi interaktif yang
mudah diakses oleh orang awam. Salah satu metode inferensi yang sangat
andal dan sering digunakan dalam sistem pakar adalah Certainty Factor
(CF) (Haq et al., 2025).

Metode ini dipilih karena kemampuannya untuk mengakomodasi
ketidakpastian atau keraguan dalam proses diagnosis, yang sangat relevan
dengan fakta di lapangan bahwa gejala penyakit tanaman seringkali
ambigu, tumpang tindih, atau mirip satu sama lain. Oleh karena itu,
penelitian ini berfokus pada perancangan dan implementasi Sistem Pakar
Diagnosa Penyakit pada Tanaman Kangkung Air Menggunakan Metode Certainty
Factor Berbasis Web.

Sistem ini diharapkan dapat menjadi alat bantu operasional bagi petani
di Desa Krama Jaya untuk melakukan diagnosis penyakit secara mandiri,
cepat, dan akurat berdasarkan gejala yang diamati, serta memberikan
rekomendasi solusi penanganan yang tepat.

## **1.2 Rumusan Masalah**

Berdasarkan latar belakang yang telah di uraikan, maka rumusan masalah
dalam penelitian ini adalah "Bagaimana merancang dan membangun Sistem
Pakar Diagnosa Penyakit pada Tanaman Kangkung Air Menggunakan Metode
Certainty Factor Berbasis Web?".

## **1.3 Batasan Masalah**

> Agar penelitian lebih terarah, fokus, dan tidak menyimpang dari tujuan
> awal, maka diberikan batasan-batasan sebagai berikut:

1.  Jenis penyakit yang didiagnosis hanya mencakup penyakit-penyakit
    yang umum menyerang tanaman kangkung air di wilayah Desa Krama Jaya,
    Kec. Narmada, Kab. Lombok Barat

2.  Sistem pakar hanya berfungsi sebagai alat bantu diagnosis
    (rekomendasi) dan pemberi saran penanganan, bukan sebagai alat
    pengobatan fisik yang menggantikan keputusan mutlak ahli pertanian.

3.  Platform sistem dikembangkan berbasis web dan dapat diakses melalui
    browser pada perangkat komputer maupun smartphone, tanpa membangun
    aplikasi mobile native (Android/iOS).

4.  Metode inferensi yang digunakan untuk mengatasi ketidakpastian
    adalah metode *Certainty Factor* (CF).

5.  Metode Pengembangan Sistem menggunakan Metode *waterfall*

6.  Implementasi sistem dilakukan berbasis Web menggunakan bahasa
    pemrograman Python, database PostgreSQL, dan *framework* FastAPI.

## **1.4 Tujuan Penelitian**

Adapun tujuan yang ingin dicapai melalui penelitian ini adalah:

1.  Untuk menghasilkan Sistem Pakar Diagnosa Penyakit pada Tanaman
    Kangkung Air Menggunakan Metode Certainty Factor Berbasis Web .

2.  Sebagai salah satu syarat penyelesaian studi S1 Program Studi Teknik
    Informatika di Universitas Teknologi Mataram.

## **1.5 Manfaat Penelitian** {#manfaat-penelitian-1}

> Penelitian ini diharapkan dapat memberikan manfaat teoretis maupun
> praktis bagi berbagai pihak, antara lain:

1.  Bagi Petani Memberikan kemudahan dan kecepatan dalam mendiagnosis
    penyakit pada tanaman kangkung air secara mandiri tanpa harus
    menunggu penyuluh, sehingga penanganan dapat dilakukan lebih dini
    untuk meminimalisasi risiko gagal panen.

2.  Bagi Peneliti Sebagai sarana implementasi ilmu pengetahuan empiris
    di bidang Sistem Infromasi, System Expert (Sistem Pakar), dan
    pengembangan algoritma *Certainty Factor*, serta menjadi rujukan
    referensi bagi penelitian sejenis di masa mendatang.

3.  Bagi Institusi Akademik dan Dinas Pertanian Menambah khazanah
    keilmuan teknologi informasi, khususnya peranan *Agri-Tech* dalam
    sektor pertanian lokal.

[]{#_Toc1536834028 .anchor}**1.6 Sistematika Penulisan**

Sistematika penulisan skripsi ini disusun untuk memberikan gambaran umum
tentang isi penelitian secara sistematis. Penulisan skripsi ini terbagi
menjadi lima bab, dengan perincian sebagai berikut:

**BAB I: PENDAHULUAN**

Bab ini membahas latar belakang masalah, rumusan masalah, batasan
masalah, tujuan penelitian, manfaat penelitian, dan sistematika
penulisan.

**BAB II: TINJAUAN PUSTAKA**

Bab ini menguraikan landasan teori yang relevan dengan penelitian,
mencakup konsep sistem pakar (expert system), komponen-komponennya,
klasifikasi dan morfologi tanaman kangkung air beserta penyakit
utamanya, penjelasan mendalam mengenai metode Certainty Factor (CF) dan
rumus kombinasinya, serta pengenalan teknologi yang digunakan seperti
Python, PostgreSQL, dan konsep dasar website. Selain itu, bab ini
menyajikan penelitian-penelitian terdahulu (state of the art) yang
menjadi acuan dan pembeda dengan penelitian yang dilakukan.

**BAB III: METODOLOGI PENELITIAN**

Bab ini menjelaskan metode yang digunakan dalam penelitian, mulai dari
teknik pengumpulan data (wawancara, observasi, studi pustaka) hingga
metode pengembangan sistem. Metode pengembangan sistem yang digunakan
adalah model Waterfall yang terdiri dari analisis kebutuhan, desain
sistem, implementasi, dan pengujian.

**BAB IV: HASIL DAN PEMBAHASAN**

Bab ini memaparka hasil perancangan sistem melalui *Flowchart* Sistem,
*Use Case Diagram, Activity Diagram, Entity Relationship Diagram* (ERD),
desain struktur *database PostgreSQL*, dan desain antarmuka sistem. Bab
ini juga membahas proses pembangunan sistem pakar diagnosa penyakit pada
tanaman kangkung air menggunakan metode *Certainty Factor* berbasis
*web* menggunakan *Python*, *PostgreSQ*L dan Framework *FastAPI,*
mencakup implementasi setiap fitur dan tampilan antarmuka yang telah
dibangun, serta hasil pengujian sistem menggunakan metode *Black Box
Testing* untuk memastikan seluruh fitur dan fungsi sistem berjalan
sesuai kebutuhan.

**BAB V: PENUTUP**

Bab ini berisi kesimpulan dari seluruh rangkaian penelitian yang telah
dilakukan, menjawab rumusan masalah yang diajukan. Selain itu, bab ini
juga memberikan saran-saran untuk pengembangan lebih lanjut bagi
peneliti selanjutnya atau pihak-pihak terkait guna menyempurnakan sistem
yang telah dibuat.

# 

# **BAB II**

# **TINJAUAN PUSTAKA**

1.  []{#_Toc2139010131 .anchor}**Landasan Teori**

<!-- -->

1.   []{#_Toc1658540435 .anchor}**Sistem Pakar (*Expert System*)**

<!-- -->

1.  **Pengertian Sistem Pakar**

    Sistem Pakar (*Expert System*) adalah sebuah program komputer cerdas
    yang berupaya meniru pengetahuan, proses penalaran, dan kemampuan
    pengambilan keputusan seorang pakar atau ahli dalam domain spesifik
    untuk memecahkan masalah (Elvanni et al., 2025). Tujuannya adalah
    untuk mentransfer pengetahuan spesifik seorang pakar (*human
    expert*) ke dalam memori komputer, sehingga orang awam dapat
    menggunakan sistem tersebut untuk memecahkan masalah yang kompleks
    dengan kualitas keputusan setara dengan seorang pakar.

#### **Komponen Sistem Pakar**

####  Arsitektur Sistem pakar umumnya dibangun oleh beberapa komponen utama, yaitu: 

a.  Basis Pengetahuan (*Knowledge Base*): Merupakan inti dari sistem
    pakar yang berisi representasi dari keahlian seorang pakar. Komponen
    ini menyimpan fakta-fakta, kaidah-kaidah (*rules*), heuristik, dan
    hubungan logika yang digunakan untuk pemecahan masalah (Kodors et
    al., 2025).

b.  

c.  Mesin Inferensi (*Inference Engine*): Merupakan otak dari sistem
    pakar. Mesin ini adalah program komputer yang metodologis dalam
    mengevaluasi aturan yang ada di basis pengetahuan dan fakta dari
    pengguna untuk menarik sebuah kesimpulan. Dua teknik utama adalah
    *Forward Chaining* (pelacakan maju) dan *Backward Chaining*
    (pelacakan mundur) (Rusito & Putra, 2022).

d.  Fasilitas Akuisisi Pengetahuan (*Knowledge Acquisition Facility*):
    Perangkat lunak yang memfasilitasi proses penarikan, pengumpulan,
    dan transformasi keahlian dari narasumber (pakar) ke dalam format
    *Knowledge Base (Wulansari et al., 2022)*.

e.  Antarmuka Pengguna (*User Interface*): Mekanisme input-output yang
    menjembatani komunikasi interaktif antara pengguna (*user*) dan
    sistem pakar dalam format tanya-jawab terpandu (Oktaroza & Setiawan,
    2025).

<!-- -->

1.  []{#_Toc934707856 .anchor}**Tanaman Kangkung Air (Ipomoea aquatica
    Forsk.)**

<!-- -->

1.  **Klasifikasi dan Morfologi**

    Kangkung air diklasifikasikan ke dalam famili Convolvulaceae.
    Tanaman ini memiliki ciri fisik berupa akar serabut yang dapat
    tumbuh di buku-buku batang, batang berongga yang tumbuh menjalar
    atau mengapung di permukaan air, serta daun berbentuk lanset yang
    runcing di ujungnya (Putri et al., 2024). Kangkung air sangat
    optimal dibudidayakan

    pada lahan berlumpur atau berair seperti kondisi geografis di
    sebagian lahan pertanian Desa Krama Jaya.

#### **Penyakit Utama Kangkung Air**

####  Beberapa penyakit patogenik yang sering menyerang dan menjadi fokus dalam perancangan basis pengetahuan ini antara lain:

a.  Karat Putih (White Rust) (Albugo ipomoeae-panduratae): Menyebabkan
    bercak putih menonjol seperti pustula di bawah daun, daun kerdil,
    menguning, dan mudah gugur prematur (Dueñas-López, 2023).

b.  Bercak Daun Cercospora (Cercospora ipomoeae): Muncul bercak kecil
    kecoklatan hingga kehitaman dengan halo kuning cerah di permukaan
    daun, bercak menyatu menyebabkan daun menguning dan rontok dini
    (Novhela et al., 2023).

c.  Virus Mosaik Kangkung (Water spinach mosaic virus): Daun menunjukkan
    pola mosaik belang hijau muda-tua, daun berkerut, terdistorsi,
    ukuran kecil, serta pertumbuhan tanaman keseluruhan menjadi
    terhambat signifikan (Pérez-Pazos et al., 2023).

d.  Layu Fusarium (Fusarium oxysporum): Daun bawah menguning secara
    bertahap sering hanya satu sisi tanaman, pembuluh batang berubah
    coklat, tanaman layu parah di siang hari dan akhirnya mati total
    (Novhela et al., 2023).

e.  

f.  Busuk Akar Pythium (Pythium spp.): Akar berubah coklat gelap,
    lembek, busuk, dan kerdil; tanaman tampak layu meski tanah basah,
    bibit sering mengalami damping-off mendadak (Putri et al., 2024).

g.  Busuk Batang Rhizoctonia (Rhizoctonia solani): Lesi cekung berwarna
    coklat kemerahan muncul di pangkal batang dekat tanah, batang
    tercekik, tanaman roboh, daun atas layu dan berbintik coklat
    (Dueñas-López, 2023).

h.  Bercak Daun Alternaria (Alternaria spp.): Bercak daun berbentuk
    target dengan cincin konsentris coklat hingga hitam, tepi tidak
    beraturan, daun menguning luas lalu rontok sebelum waktunya
    (Bligania et al., 2024).

i.  Bercak Daun Bakteri (Pseudomonas / Xanthomonas): Bercak kecil basah
    berair muncul di daun, dikelilingi halo kuning lebar, bercak
    membesar menjadi coklat/hitam dan meninggalkan lubang robek pada
    daun (Novhela et al., 2023).

j.  Embun Tepung (Powdery Mildew) (Erysiphe spp.): Lapisan jamur putih
    seperti tepung menutupi permukaan atas daun, daun mengeriting ke
    atas, terdistorsi, pertumbuhan daun baru terhambat parah (Rahayu et
    al., 2023).

k.  Embun Bulu (Downy Mildew) (Peronospora spp.): Bercak kekuningan
    hingga kecoklatan di atas daun, di bawah daun muncul miselium
    berbulu halus keabu-abuan atau ungu, daun cepat mati dan gugur
    (Pérez-Pazos et al., 2023).

<!-- -->

1.  []{#_Toc1229866000 .anchor}

2.  **Certainty Factor (CF)**

    Certainty Factor (Faktor Kepastian) adalah sebuah parameter dan
    teknik klinis yang diperkenalkan oleh Edward Shortliffe serta Bruce
    Buchanan pada tahun 1975 melalui sistem MYCIN. Tujuannya adalah
    untuk merepresentasikan tingkat keyakinan seorang pakar terhadap
    suatu fakta atau hipotesis di tengah kondisi ketidakpastian. Nilai
    CF bergerak dalam rentang dari -1,0 (sangat tidak yakin atau pasti
    salah) hingga +1,0 (sangat yakin atau pasti benar), sebagaimana
    dikemukakan oleh Gunawan & Islami (2024).

<!-- -->

1.  Certainty factor dengan satu premis.

    **CF\[h,e\] = CF\[e\] \* CF\[rule\]= CF\[user\] \* CF\[pakar\]**

> Dimana:

CF\[h,e\] = Nilai Certainty Factor dari hipotesis (h) terhadap
bukti/gejala (e)

CF\[user\] = Nilai keyakinan yang diberikan oleh pengguna (user)
terhadap gejala yang dialami

CF\[pakar\] = Nilai bobot keyakinan yang diberikan oleh pakar (expert)
terhadap hubungan antara gejala dan penyakit

2.  Certainty factor dengan lebih dari satu gejala

    **CF Combine \[CF1, CF2\] = CF1 + CF2 \* (1 -- CF)**

    Dimana:

    Cfcombine = faktor kepastian dari diagnosa

    CF1 = nilai bobot dari pernyataan pertama

    CF2 = nilai bobot dari pernyataan kedua

    Kelebihan dari metode ini adalah cocok digunakan pada sistem pakar
    yang mengukur sesuatu yang pasti atau tidak pasti seperti
    mendiagnosa penyakit. Perhitungan dari metode ini hanya berlaku
    untuk sekali hitung, serta hanya dapat mengolah dua data sehingga
    keakuratannya terjaga (Ibrahim & Rahman, 2021).

    Tabel 2 . 1 Certainty Factor Rule (Adellia et al., 2022)

  ------- ------------------- -------------
  No      Keterangan          Nilai Bobot

  1       Tidak yakin         0.0

  2       Sedikit yakin       0.4

  3       Cukup Yakin         0.6

  4       Yakin               0.8

  5       Sangat Yakin        1.0
  ------- ------------------- -------------

1.  []{#_Toc756582071 .anchor}**Peralatan Pendukung Perancangan dan
    Pengujian Sistem Informasi**

<!-- -->

1.  **Flowchart**

> Flowchart merupakan bagan alir proses yang banyak digunakan untuk
> menggambarkan proses dalam suatu prosedur. Flowchart berguna bagi
> analis sistem untuk menggambarkan proses dalam suatu prosedur secara
> visual menggunakan simbol-simbol standar yang diklasifikasikan menjadi
> beberapa kelompok (Listyoningrum et al., 2023).
>
> Simbol-simbol yang digunakan dalam flowchart secara lengkap terdapat
> di Tabel 2.2 berikut.

+------+------------------+----------------+---------------+
| > NO | > Simbol         | > Nama         | > Arti Simbol |
|      | > Flowchart      |                | >             |
|      |                  |                | > Flowchart   |
+------+------------------+----------------+---------------+
| > 1  |                  | > *Terminator* | > Awal atau   |
|      |                  |                | > akhir       |
|      |                  |                | > konsep      |
|      |                  |                | > (prosedur)  |
+------+------------------+----------------+---------------+
| > 2  |                  | > *Process*    | > Proses      |
|      |                  |                | > operasional |
+------+------------------+----------------+---------------+
| > 3  |                  | > *Document*   | > Dokumen     |
|      |                  |                | > atau        |
|      |                  |                | > laporan     |
|      |                  |                | > berupa      |
|      |                  |                | >             |
|      |                  |                | > *print out* |
+------+------------------+----------------+---------------+
| > 4  |                  | > *Decesion*   | > Pemilihan   |
|      |                  |                | > proses      |
|      |                  |                | >             |
|      |                  |                | > berdasarkan |
|      |                  |                | > kondisi     |
|      |                  |                | > yang ada    |
+------+------------------+----------------+---------------+
| > 5  |                  | Data           | > Input dan   |
|      |                  |                | > Output      |
+------+------------------+----------------+---------------+
| > 6  |                  | > *On-Page     | > Penghubung  |
|      |                  | > Connector*   | > alur dalam  |
|      |                  |                | > halaman     |
|      |                  |                | > yang sama   |
+------+------------------+----------------+---------------+
| > 7  |                  | > *Manual      | > Menyatakan  |
|      |                  | > opreracion*  | > suatu       |
|      |                  |                | > proses yang |
|      |                  |                | > tidak       |
|      |                  |                | > dilakukan   |
|      |                  |                | > oleh        |
|      |                  |                | > komputer    |
+------+------------------+----------------+---------------+
| > 8  |                  | *Flow*         | > Arah alur   |
|      |                  |                | > dalam       |
|      |                  |                | > konsep      |
|      |                  |                | > (prosedur)  |
+------+------------------+----------------+---------------+

: Tabel 2 . 2 Simbol-Simbol Flowchart

2.  **Unified Modeling Language**

<!-- -->

a.  Pengertian

> Unified Modeling Language (UML) merupakan bahasa pemodelan visual yang
> umum digunakan dalam pengembangan sistem informasi berorientasi objek
> sebagai acuan analisis dan perancangan sebelum implementasi kode
> (Khoulah 'Afiifah et al., 2022). UML merupakan bahasa grafis untuk
> mendokumentasikan, menspesifikasikan, dan membangun sistem perangkat
> lunak. Pemodelan menggunakan UML sangat membantu dalam menghasilkan
> rancangan berbasis objek yang akan membantu proses pembuatan program
> aplikasi karena dapat memvisualisasikan atau memodelkan sistem yang
> nantinya akan menjelaskan informasi lebih detail (Narulita et al.,
> 2024).

b.  Fungsi UML

> UML digunakan sebagai alat bantu utama dalam pemodelan sistem agar
> rancangan menjadi lebih terstruktur dan terdokumentasi dengan baik
> (Akbar & Haryanti, 2021). *Open Journal Systems* Secara umum, fungsi
> UML dalam perancangan sistem informasi adalah sebagai berikut:

1)  Membantu pengembang dalam merancang dan mendokumentasikan arsitektur
    sistem secara visual sebelum proses pengembangan dimulai.

2)  Menjadi alat komunikasi antara pengembang sistem dan pengguna
    (*stakeholder*) untuk menyamakan pemahaman terhadap sistem yang akan
    dibangun.

3)  Mempermudah proses analisis kebutuhan sistem sehingga sistem yang
    dihasilkan lebih sesuai dengan kebutuhan pengguna.

4)  Membantu dalam identifikasi kesalahan desain sistem sejak tahap awal
    sebelum implementasi.

<!-- -->

c.  Jenis-Jenis Diagram UML yang Digunakan

> Terdapat beberapa jenis diagram UML diantaranya adalah Use Case
> Diagram, Activity Diagram dan Class Diagram (Muhammad Fahmi Siahaan et
> al., 2022). Dalam penelitian ini, diagram UML yang digunakan untuk
> merancang sistem informasi terbatas pada Use Case Diagram dan Activity
> Diagram.

1)  Use Case Diagram

> Use Case Diagram merupakan hal fundamental dalam melakukan pemodelan
> perangkat lunak. Hal tersebut dikarenakan fungsinya menyatakan
> interaksi yang terjadi antara pengguna dengan sistem secara visual dan
> mempresentasikan semua fungsi yang akan dilakukan sistem (Handayani &
> Lubis, 2021). Use Case Diagram adalah diagram yang menggambarkan
> interaksi antara aktor dan use case dalam suatu sistem, di mana use
> case merupakan gambaran umum dari fungsionalitas sebuah sistem
> sehingga pengguna dan konsumen dapat mengetahui setiap fungsi yang
> dibangun dalam sistem tersebut, sedangkan aktor merupakan setiap hal
> di luar sistem yang menggunakan komponen sistem untuk melakukan
> sesuatu baik berupa manusia, perangkat, atau sistem lain (Thariq et
> al., 2023). Simbol-simbol Use Case Diagram terdapat pada Tabel 2.3
> berikut :

  -------- ------------ -------------------------------------
   **No**   **Simbol**             **Keterangan**

     1                  Aktor: Mewakili perang orang, system
                             yang lain, atau alat ketiak
                             berkomunikasi dan use case

     3                    Use case: Abstraksi dan interaksi
                               antara system dan aktor

     4                      Association : Abstraksi dari
                        penghubung antara actor dan use case

     5                  Generalisasi: Menunjukan spesialisasi
                          actor untuk dapat berpartisipasi
                                   dengan use case

     6                     Menunjukan bahwa suatu use case
                         seluruhnya merupakan fungsionalitas
                                dari use case lainnya

     7                     Menunjukan bahwa suatu use case
                          merupakan tambahan fungsionalitas
                          dari use case lainnya jika suatu
                                  kondisi terpenuhi
  -------- ------------ -------------------------------------

  : Tabel 2 . 3 Simbol-simbol Use Case Diagram

2)  Activity Diagram

> Activity Diagram atau diagram aktivitas yaitu diagram yang dapat
> memodelkan proses-proses yang terjadi pada sebuah sistem. Runtutan
> proses dari suatu sistem digambarkan secara vertikal. Activity Diagram
> merupakan pengembangan dari Use Case yang memiliki alur aktivitas
> berupa runtutan menu-menu atau proses bisnis yang terdapat di dalam
> sistem tersebut (Syamaidzar et al., 2025). Activity Diagram dan Class
> Diagram saling melengkapi dalam desain sistem, di mana Activity
> Diagram membantu memodelkan aliran kerja, sementara Class Diagram
> menyediakan struktur untuk mengimplementasikan aktivitas tersebut
> dalam bentuk kelas dan metode (Narulita et al., 2024).
>
> Simbol-simbol yang digunakan dalam Activity Diagram mencakup *Initial
> Node* sebagai titik awal, Activity sebagai representasi
> langkah-langkah proses, *Decision* sebagai percabangan kondisi, *Fork*
> dan *Join* sebagai pemisah dan penggabung aktivitas paralel, serta
> *Final Node* sebagai penanda akhir dari seluruh proses (Ramdany,
> 2024).
>
> Simbol-simbol yang digunakan dalam Activity Diagram secara lengkap di
> Tabel 2.4 berikut.

  --------------- ---------------- --------------------
    **Simbol**        **Nama**        **Keterangan**

                      Activity        Memperlihatkan
                                         bagimana
                                   masing-masing kelas
                                    antar muka saling
                                     berintekasi dari
                                        suatu aksi

                       Action       State dari system
                                       mencerminkan
                                   eksekusi dari suatu
                                           aksi

                    Initial Node     Bagaimana objek
                                     dibentuk diawali

                   Activity Final     Bagaiman objek
                                       dibentuk dan
                                       dihancurkan

                     Fork Node       Satu aliran yang
                                   pada tahap tertentu
                                     berubah menjadi
                                     beberapa aliran

                      Desision      Percabangan Dimana
                                       ada pilihan
                                   aktivitas yang lebih
                                        dari satu
  --------------- ---------------- --------------------

  : Tabel 2 . 4 Activity Diagram

3.  **Entity Relationship Diagram (ERD)**

<!-- -->

a.  Pengertian

> ERD merupakan salah satu teknik pemodelan data yang paling penting
> dalam proses perancangan *database*. ERD digunakan untuk
> merepresentasikan data dalam bentuk konseptual sebelum
> diimplementasikan ke dalam skema *database* yang sesungguhnya. Dengan
> menggunakan ERD, pengembang dapat menggambarkan bagaimana data saling
> terhubung satu sama lain (Akbar & Haryanti, 2021).

b.  Fungsi ERD

> Penggunaan ERD dalam perancangan *database* memiliki beberapa manfaat
> utama. Pertama, ERD membantu memodelkan kebutuhan data secara akurat
> dan konsisten sebelum tahap implementasi. Kedua, ERD memberikan
> representasi visual yang jelas dari struktur data, memudahkan
> komunikasi dan pemahaman antar anggota tim. Ketiga, ERD berfungsi
> sebagai dasar untuk merancang skema *database* yang efisien dan
> terstruktur dengan baik (Akbar & Haryanti, 2021).

c.  Komponen dan Simbol ERD

> Di dalam ERD terdapat 3 elemen dasar yaitu: pertama, Entitas adalah
> objek dalam suatu *database* yang dapat berupa manusia, tempat, benda,
> atau kondisi mengenai data yang dibutuhkan, dengan simbol berbentuk
> persegi panjang. Kedua, Atribut adalah informasi yang terdapat dalam
> entitas dimana sebuah entitas harus memiliki *Primary key* sebagai
> ciri khas entitas dan atribut deskriptif. Ketiga, Relasi di dalam ERD
> merupakan hubungan antara dua atau lebih entitas dengan simbol
> berbentuk belah ketupat (Khoulah 'Afiifah et al., 2022).
>
> Berikut adalah simbol-simbol yang digunakan dalam ERD secara lengkap
> di tabel 2.5 :

  -------- ---------------------------------------------------- ------------ --------------------
   **No**                       **Simbol**                        **Nama**      **Keterangan**

     1      ![](media/image2.png){width="1.1458333333333333in"    Entitas    Menggambarkan objek
                      height="0.5729166666666666in"}                           atau tabel dalam
                                                                              *database* seperti
                                                                                 tabel kamar,
                                                                             penyewa, reservasi,
                                                                                dan transaksi
                                                                                  pembayaran

     2      ![](media/image3.png){width="1.1458333333333333in"     Garis        Menghubungkan
                      height="0.5729166666666666in"}             Penghubung     entitas dengan
                                                                             atribut atau entitas
                                                                             dengan relasi dalam
                                                                                     ERD
  -------- ---------------------------------------------------- ------------ --------------------

  : Tabel 2 . 5 ERD

d.  Jenis-Jenis Relasi (Kardinalitas) ERD

> Terdapat tiga jenis relasi yang digunakan dalam ERD yaitu: *One to
> one* yang berarti s etiap entitas hanya dapat memiliki relasi dengan
> satu entitas lain, *One to many* yang memiliki arti satu entitas dapat
> memiliki relasi dengan beberapa entitas begitu pula sebaliknya, dan
> *Many to many* yang berarti setiap entitas yang ada dapat memiliki
> relasi dengan entitas lain begitu pula sebaliknya (Khoulah 'Afiifah et
> al., 2022)
>
> Jenis jenis Relasi (Kardinalitas) ERD secara lengkap terdapat di Tabel
> 2.6 berikut.

  -------- ------------ ----------------- -----------------
   **No**    **Jenis     **Keterangan**    **Contoh Dalam
             Relasi**                         Sistem**

     1     *One to One*  Setiap entitas   Penyewa --- Akun
              (1:1)        hanya dapat          Login
                         memiliki relasi  
                           dengan satu    
                          entitas lain    

     2       *One to      Satu entitas        Kamar ---
           Many* (1:N)   dapat memiliki    Reservasi (satu
                          relasi dengan    kamar memiliki
                        beberapa entitas   banyak riwayat
                              lain           reservasi)

     3       *Many to    Setiap entitas   Penyewa --- Kamar
           Many* (M:N)   dapat memiliki    (banyak penyewa
                          relasi dengan     dapat menyewa
                         banyak entitas     banyak kamar
                        lain begitu pula    dalam periode
                           sebaliknya         berbeda)
  -------- ------------ ----------------- -----------------

  : Tabel 2 . 6 Jenis-Jenis Relasi ERD

4.  ***Black Box Testing***

> *Black Box Testing* adalah metode pengujian perangkat lunak yang
> berfokus pada fungsionalitas sistem dari sudut pandang pengguna tanpa
> memperhatikan kode internal program. Pengujian dilakukan menggunakan
> metode *Black Box Testing* untuk memastikan bahwa sistem berfungsi
> dengan baik sesuai kebutuhan pengguna, dengan hasil pengujian yang
> menunjukkan seluruh fitur berjalan sesuai spesifikasi yang telah
> ditentukan (Kartono et al., 2024).

1.  []{#_Toc2045440741 .anchor}**Bahasa Pemrograman, Database, dan
    Aplikasi yang Digunakan**

<!-- -->

1.  **Python**

    Python adalah bahasa pemrograman tingkat tinggi (high-level),
    interpretatif, dan multi-paradigma (mendukung prosedural, objektif,
    dan fungsional) yang dikembangkan oleh Guido van Rossum pada akhir
    1980-an dan dirilis pertama kali tahun 1991. Dalam pengembangan web,
    Python sering digunakan untuk backend karena kemudahan integrasi
    dengan database dan API. Python mendukung paradigma OOP
    (Object-Oriented Programming) penuh, garbage collection otomatis,
    dan eksekusi bytecode melalui interpreter CPython (Elhalid et al.,
    2023).

2.  **PostgreSQL**

    PostgreSQL (sering disebut Postgres) adalah sistem manajemen basis
    data relasional objek (ORDBMS) open-source yang dikembangkan sejak
    1986 (awalnya POSTGRES project di UC Berkeley). PostgreSQL mematuhi
    standar ACID (Atomicity, Consistency, Isolation, Durability) secara
    ketat, mendukung SQL standar ANSI dengan ekstensi lanjutan seperti
    JSON/JSONB untuk data semi-struktural, full-text search, GIS
    (PostGIS), dan ekstensi vector (pgvector untuk AI/ML). Cocok untuk
    aplikasi web dengan data kompleks karena skalabilitas
    vertikal/horizontal dan reliabilitas tinggi (Salunke & Ouda, 2024).

3.  **Javascript**

    JavaScript adalah bahasa pemrograman tingkat tinggi (high-level),
    interpretatif, dan dinamis yang awalnya dikembangkan oleh Brendan
    Eich pada tahun 1995 untuk Netscape Navigator, serta mengikuti
    standar ECMAScript. JavaScript bersifat client-side scripting,
    artinya kode dieksekusi langsung oleh browser pengguna tanpa perlu
    kompilasi terlebih dahulu, sehingga mendukung interaktivitas halaman
    web secara real-time melalui manipulasi DOM (Document Object Model),
    penanganan event, dan asynchronous programming (Fajrizal et al.,
    2025).

4.  **HTML**

    HTML (HyperText Markup Language) adalah bahasa markup standar yang
    digunakan untuk mendefinisikan struktur dan semantik dokumen web,
    bukan bahasa pemrograman, melainkan sistem penandaan (markup)
    berbasis tag yang dikembangkan oleh Tim Berners-Lee pada tahun 1991
    di CERN dan dikelola oleh World Wide Web Consortium (W3C). HTML
    berfungsi sebagai bahasa pertukaran dokumen antar web, memungkinkan
    pembuatan elemen seperti heading, paragraf, link, gambar, form,
    serta elemen semantik pada HTML5 untuk mendukung aksesibilitas, SEO,
    dan multimedia native (video/audio tanpa plugin) (Mardiansyah et
    al., 2025).

5.  **Tailwindcss**

    Tailwind CSS adalah framework CSS dengan pendekatan utility-first
    yang dikembangkan oleh Adam Wathan dan tim Tailwind Labs sejak 2017,
    dirancang untuk mempercepat pembuatan antarmuka web custom tanpa
    meninggalkan file HTML. Berbeda dari framework component-based
    seperti Bootstrap, Tailwind menyediakan kelas utilitas tingkat
    rendah (low-level) yang langsung mengaplikasikan satu properti CSS
    (misalnya bg-blue-500, p-4, flex, md:hidden), sehingga memungkinkan
    komposisi desain yang fleksibel, responsif (dengan prefix seperti
    sm:, md:, lg:), serta mendukung dark mode dan Just-In-Time (JIT)
    compilation untuk menghasilkan CSS minimal hanya dari kelas yang
    digunakan (Rifandi et al., 2022).

6.  **Zed Editor**

    Zed adalah code editor modern berkinerja tinggi (high-performance)
    yang dikembangkan menggunakan bahasa Rust, dirilis secara publik
    sekitar tahun 2024 oleh tim yang sebelumnya terlibat di Atom dan
    Tree-sitter, dengan fokus pada kecepatan ekstrem, kolaborasi
    real-time multi-user (menggunakan CRDT untuk konflik resolusi),
    serta UI yang diakselerasi GPU. Konsep utamanya adalah menggabungkan
    performa sistem-level dengan fitur editor modern seperti
    multi-buffering, AI integration, dan extensibility tanpa
    mengorbankan kecepatan (Baer, 2025).

    []{#_Toc522390665 .anchor}**2.2 Penelitian Terkait (State of the
    Art)**

Sebagai perbandingan dan validasi *novelty* (kebaruan) penelitian,
berikut disajikan tabel penelitian terdahulu yang relevan:

+--------+-------------------+--------------------+-------------------+------------------+
| **No** | **Identitas       | **Hasil            | **Persamaan**     | **Perbedaan**    |
|        | Jurna**l          | Penelitian**       |                   |                  |
+:=======+:==================+:===================+:==================+:=================+
| 1      | **Judul**: Sistem | Sistem pakar       | Sama-sama         | Penelitian       |
|        | Pakar Diagnosis   | berbasis web yang  | mengembangkan     | tersebut         |
|        | Hama dan Penyakit | menerapkan Forward | sistem pakar      | mengadopsi       |
|        | pada Tanaman      | Chaining untuk     | berbasis web yang | inferensi        |
|        | Kangkung          | mendiagnosis hama  | difokuskan pada   | deterministik    |
|        | Menggunakan       | dan penyakit       | diagnosis         | (Forward         |
|        | Metode Forward    | kangkung dengan    | penyakit dan hama | Chaining),       |
|        |                   | akurasi 90%        | tanaman kangkung, | sedangkan        |
|        | **Penulis :**     | (berdasarkan       | sehingga          | penelitian ini   |
|        | Iffan Ahmad       | confusion matrix   | mendukung         | memanfaatkan     |
|        | Nasrulloh,        | pada 50 aturan);   | peningkatan       | Certainty Factor |
|        | Pradana Ananda    | memberikan solusi  | produktivitas     | untuk menangani  |
|        | Raharja, Amalia   | praktis bagi       | pertanian melalui | ketidakpastian   |
|        | Beladinna Arifa   | petani dalam       | pendekatan        | dan ambiguitas   |
|        |                   | mengatasi          | teknologi.        | gejala yang      |
|        | **Nama Jurnal :** | diagnosis manual.  |                   | sering tumpang   |
|        | Jurnal Saintekom, |                    |                   | tindih pada      |
|        | Sains, Teknologi, |                    |                   | kangkung air;    |
|        | Komputer dan      |                    |                   | dilengkapi studi |
|        | Manajemen         |                    |                   | kasus lapangan   |
|        |                   |                    |                   | spesifik di Desa |
|        | (Nasrulloh et     |                    |                   | Krama Jaya serta |
|        | al., 2022)        |                    |                   | implementasi     |
|        |                   |                    |                   | dengan teknologi |
|        |                   |                    |                   | modern (Python,  |
|        |                   |                    |                   | FastAPI,         |
|        |                   |                    |                   | PostgreSQL).     |
+--------+-------------------+--------------------+-------------------+------------------+
| 2      | **Judul**: Sistem | Sistem pakar web   | Sama-sama         | Penelitian       |
|        | Pakar Berbasis    | berbasis Certainty | berbasis web dan  | tersebut         |
|        | Web untuk         | Factor yang        | menerapkan metode | terbatas pada    |
|        | Mendiagnosis      | berhasil           | Certainty Factor  | kangkung darat   |
|        | Penyakit dan Hama | mendiagnosis 8     | untuk diagnosis   | dengan hanya 8   |
|        | Tanaman Kangkung  | penyakit dan hama  | penyakit/hama     | penyakit;        |
|        | Menggunakan       | pada kangkung      | tanaman kangkung, | penelitian ini   |
|        | Metode Certainty  | darat; pengujian   | dengan penekanan  | secara khusus    |
|        | Factor            | Black Box          | pada penanganan   | menargetkan      |
|        |                   | menunjukkan        | ketidakpastian    | kangkung air     |
|        | **Penulis**: Leli | fungsionalitas     | gejala.           | (Ipomoea         |
|        | Safitri,          | optimal serta      |                   | aquatica) di     |
|        | Murtiwiyati       | kemampuan          |                   | lahan basah      |
|        |                   | menangani          |                   | tropis, mencakup |
|        | **Nama Jurna**l:  | ketidakpastian     |                   | hingga 10--15    |
|        | Jurnal Ilmiah     | melalui nilai CF   |                   | penyakit umum,   |
|        | Flash             | pakar.             |                   | 45 gejala, serta |
|        |                   |                    |                   | 60 aturan dari   |
|        | (Safitri &        |                    |                   | akuisisi pakar   |
|        | Murtiwiyati,      |                    |                   | lapangan;        |
|        | 2023)             |                    |                   | ditambah         |
|        |                   |                    |                   | dukungan         |
|        |                   |                    |                   | teknologi        |
|        |                   |                    |                   | backend terkini  |
|        |                   |                    |                   | untuk            |
|        |                   |                    |                   | skalabilitas dan |
|        |                   |                    |                   | aksesibilitas    |
|        |                   |                    |                   | petani kecil di  |
|        |                   |                    |                   | Lombok Barat.    |
+--------+-------------------+--------------------+-------------------+------------------+
| 3      | **Judul:**        | Sistem informasi   | Sama-sama         | Fokus monitoring |
|        | Implementasi      | monitoring nutrisi | berfokus pada     | nutrisi (bukan   |
|        | Metode Regresi    | kangkung           | teknologi         | diagnosis        |
|        | Linier Pada       | hidroponik dengan  | informasi untuk   | penyakit);       |
|        | Rancang Bangun    | regresi linier;    | tanaman kangkung  | penelitian ini   |
|        | Sistem Informasi  | mendukung          | (hidroponik/air), | khusus diagnosis |
|        | Monitoring        | pengelolaan        | mendukung         | penyakit dengan  |
|        | Nutrisi Tanaman   | nutrisi optimal    | pemantauan dan    | Certainty Factor |
|        | Hidroponik        | untuk pertumbuhan  | pengelolaan       | pada kangkung    |
|        | Kangkung          | tanaman.           | kesehatan         | air lahan        |
|        |                   |                    | tanaman.          | konvensional;    |
|        | **Penulis:**      |                    |                   | lebih menekankan |
|        | Nugroho Setyo     |                    |                   | ketidakpastian   |
|        | Wibowo,M.         |                    |                   | gejala dan studi |
|        | Aziziah, I.G.     |                    |                   | kasus lapangan   |
|        | Wiryawan, E.      |                    |                   | Lombok.          |
|        | Rosdiana          |                    |                   |                  |
|        |                   |                    |                   |                  |
|        | **Nama Jurnal:**  |                    |                   |                  |
|        | Jurnal Teknologi  |                    |                   |                  |
|        | Informasi dan     |                    |                   |                  |
|        | Multimedia        |                    |                   |                  |
|        |                   |                    |                   |                  |
|        | (Wibowo et al.,   |                    |                   |                  |
|        | 2022)             |                    |                   |                  |
+--------+-------------------+--------------------+-------------------+------------------+
| 4      | **Judul**:        | Tinjauan           | Membahas sistem   | Hanya review     |
|        | Forward Chaining  | sistematis         | pakar diagnosis   | literatur tanpa  |
|        | Method in Expert  | efektivitas        | tanaman (termasuk | implementasi;    |
|        | System for        | Forward Chaining   | kangkung) dengan  | penelitian ini   |
|        | Diagnosing Pests  | untuk diagnosis    | Forward Chaining, | berikan          |
|        | and Plant         | hama/penyakit      | selaras dengan    | implementasi     |
|        | Diseases: A       | tanaman (termasuk  | digitalisasi      | empiris dengan   |
|        | Systematic        | referensi          | pertanian.        | Certainty Factor |
|        | Literature Review | kangkung);         |                   | (lebih adaptif   |
|        |                   | keunggulan: cepat  |                   | ketidakpastian), |
|        | **Penulis:**      | dan mudah          |                   | fokus eksklusif  |
|        | arina Dhena goda, | diimplementasikan. |                   | kangkung air +   |
|        | Jenny Ronawati    |                    |                   | validasi         |
|        | bay               |                    |                   | lapangan tropis  |
|        |                   |                    |                   | basah.           |
|        | **Nama Jurnal:**  |                    |                   |                  |
|        | Journal of        |                    |                   |                  |
|        | Artificial        |                    |                   |                  |
|        | Intelligence and  |                    |                   |                  |
|        | Engineering       |                    |                   |                  |
|        | Applications      |                    |                   |                  |
|        | (JAIEA)           |                    |                   |                  |
|        |                   |                    |                   |                  |
|        | (Goda & Bay,      |                    |                   |                  |
|        | 2024)             |                    |                   |                  |
+--------+-------------------+--------------------+-------------------+------------------+
| 5      | **Judul:**        | Meneliti pengaruh  | Sama-sama         | Fokus penelitian |
|        | Pengaruh Empat    | jenis ikan (nila,  | berfokus pada     | ini pada         |
|        | Jenis Ikan        | gurami, lele, mas) | tanaman kangkung  | integrasi dengan |
|        | terhadap Hasil    | terhadap           | air untuk         | budidaya ikan    |
|        | Tanaman Kangkung  | pertumbuhan        | meningkatkan      | (akuaponik),     |
|        | Air (Ipomoea      | kangkung air dalam | produktivitas     | sementara        |
|        | aquatica Forssk.) | sistem akuaponik.  | pertanian.        | penelitian Anda  |
|        | pada Akuaponik    | Hasil menunjukkan  |                   | murni pada       |
|        | Sistem            | ikan tidak         |                   | sistem pakar     |
|        | Budikdamber       | berpengaruh pada   |                   | diagnosis        |
|        |                   | panjang dan jumlah |                   | penyakit.        |
|        | **Penulis:** M.   | daun, tetapi       |                   | Metodologi yang  |
|        | Fajar             | berpengaruh pada   |                   | digunakan juga   |
|        | Agimnastiar. S,   | berat akhir        |                   | berbeda, yaitu   |
|        | Heri Junedi,      | tanaman (ikan      |                   | Rancangan Acak   |
|        | Arzita Arzita     | gurami terbaik,    |                   | Lengkap (RAL)    |
|        |                   | 12,292 g)          |                   | dan ANOVA        |
|        | **Nama Jurna**l:  |                    |                   |                  |
|        | Jurnal SainTek,   |                    |                   |                  |
|        | Vol. 1, No. 2,    |                    |                   |                  |
|        | 2025              |                    |                   |                  |
|        |                   |                    |                   |                  |
|        | (S et al., 2025)  |                    |                   |                  |
+--------+-------------------+--------------------+-------------------+------------------+

: Tabel 2 . 7 Penelitian Terkait

# 

# **BAB III**

# **METODOLOGI PENELITIAN**

## **Metode Pengumpulan Data**

Pengumpulan data merupakan langkah awal yang sangat penting dan
menentukan dalam proses penelitian. Kualitas data yang dikumpulkan akan
sangat berpengaruh terhadap kualitas hasil penelitian secara
keseluruhan. Data yang dikumpulkan harus relevan, akurat, dan lengkap
agar dapat menjadi dasar yang kuat dalam perancangan dan pembangunan
sistem pakar diagnosa penyakit tanaman kangkung air. Menurut Rahayu et
al. (2023), pengumpulan data yang terstruktur dan sistematis merupakan
fondasi utama dalam membangun sebuah sistem pakar yang tepat sasaran dan
sesuai dengan kebutuhan petani di lapangan. Dalam penelitian ini, metode
pengumpulan data yang digunakan meliputi tiga teknik utama, yaitu
observasi, wawancara, dan studi pustaka, yang saling melengkapi satu
sama lain untuk menghasilkan data yang komprehensif dan valid (Rahayu et
al., 2023).

1.  **Observasi**

    Observasi merupakan teknik pengumpulan data yang dilakukan dengan
    cara mengamati secara langsung objek, situasi, atau fenomena yang
    menjadi subjek penelitian tanpa melakukan intervensi terhadap
    kondisi yang sedang diamati. Menurut Putri et al. (2024), observasi
    langsung terhadap kondisi lahan pertanian merupakan langkah yang
    sangat penting untuk mendapatkan

    gambaran nyata mengenai gejala penyakit yang menyerang tanaman
    kangkung air sebelum sistem pakar dirancang dan dikembangkan. Teknik
    observasi dipilih dalam penelitian ini karena memungkinkan peneliti
    untuk mendapatkan gambaran nyata dan menyeluruh mengenai kondisi
    tanaman di lapangan tanpa adanya distorsi informasi.

    Dalam penelitian ini, observasi dilakukan secara langsung di lahan
    pertanian kangkung air milik petani Desa Krama Jaya, Kecamatan
    Narmada, Kabupaten Lombok Barat. Kegiatan observasi dilaksanakan
    selama 3 hari dengan mengamati dan mencatat seluruh kondisi tanaman
    yang sedang tumbuh, meliputi morfologi daun, batang, akar, serta
    gejala-gejala penyakit yang tampak secara fisik seperti bercak
    putih, daun menguning, layu, busuk akar, dan pola mosaik. Selain
    itu, observasi juga dilakukan untuk mengidentifikasi faktor
    lingkungan yang mempengaruhi serangan penyakit, seperti kondisi air,
    kelembaban tanah, dan pola pengairan.

2.  **Wawancara**

    Wawancara merupakan teknik pengumpulan data yang dilakukan melalui
    proses tanya jawab secara langsung antara peneliti dengan narasumber
    atau informan yang dianggap kompeten dan memiliki pemahaman mendalam
    mengenai permasalahan yang sedang diteliti. Menurut Elvanni et al.
    (2025), wawancara langsung kepada pakar dan petani merupakan langkah
    yang sangat diperlukan untuk menggali bobot kepastian (Certainty
    Factor) serta aturan diagnosis yang tidak dapat diperoleh hanya
    melalui pengamatan saja. Wawancara memiliki keunggulan karena
    memungkinkan peneliti untuk menggali informasi secara lebih mendalam
    dan mendetail, termasuk nilai CF pakar terhadap setiap gejala.

    Dalam penelitian ini, wawancara dilakukan kepada dua kelompok
    narasumber utama, yaitu 2 pakar fitopatologi dari Dinas Pertanian
    Kabupaten Lombok Barat dan 5 petani senior Desa Krama Jaya.
    Wawancara dengan pakar difokuskan pada jenis penyakit, gejala utama,
    nilai Certainty Factor pakar, serta rekomendasi penanganan.
    Sementara itu, wawancara dengan petani difokuskan pada pengalaman
    mereka dalam mengenali penyakit, kendala yang dihadapi, serta
    harapan terhadap fitur sistem pakar.

3.  **Studi Pustaka**

    Studi pustaka merupakan metode pengumpulan data yang dilakukan
    dengan cara membaca, mempelajari, mengkaji, dan menganalisis
    berbagai sumber literatur ilmiah yang relevan dengan topik
    penelitian, seperti jurnal ilmiah, artikel, dan prosiding seminar.
    Menurut Gunawan & Islami (2024), studi pustaka yang sistematis dan
    menyeluruh berperan penting dalam memberikan landasan ilmiah yang
    kuat bagi peneliti untuk merancang algoritma Certainty Factor dan
    sistem pakar yang tepat.

    Dalam penelitian ini, studi pustaka dilakukan secara sistematis
    dengan mengkaji konsep sistem pakar, metode Certainty Factor,
    morfologi tanaman kangkung air, penyakit utama, bahasa pemrograman
    Python, framework FastAPI, database PostgreSQL, serta metode
    pengembangan Waterfall dan pengujian Black Box. Sumber-sumber
    literatur yang digunakan meliputi jurnal nasional terakreditasi
    Sinta terbit tahun 2022--2025. Kajian ini juga mencakup penelitian
    terdahulu seperti Nasrulloh et al. (2022), Safitri & Murtiwiyati
    (2023), serta Haq et al. (2025) untuk mengidentifikasi celah
    penelitian dan menentukan posisi novelty penelitian ini. Seluruh
    sumber kemudian disintesis untuk membangun kerangka teori yang
    kokoh.

## **Metode Pengembangan Sistem**

Metode pengembangan sistem yang digunakan dalam penelitian ini adalah
Model Waterfall. Model Waterfall merupakan salah satu model pengembangan
perangkat lunak yang paling klasik dan banyak digunakan dalam
pengembangan sistem pakar berbasis web. Model ini disebut Waterfall
karena proses pengembangannya berjalan secara sekuensial dan berurutan
dari satu fase ke fase berikutnya, seperti aliran air yang mengalir ke
bawah tanpa dapat kembali ke atas. Setiap fase harus diselesaikan secara
penuh sebelum fase berikutnya dapat dimulai, sehingga model ini memiliki
struktur yang sangat terorganisir dan mudah dikelola (Syamaidzar et al.,
2025).

Pemilihan model Waterfall dalam penelitian ini didasarkan pada beberapa
pertimbangan utama. Pertama, kebutuhan sistem telah dapat didefinisikan
secara jelas dan lengkap sejak awal melalui proses observasi dan
wawancara. Kedua, model ini memberikan struktur pengembangan yang
sistematis dan terdokumentasi dengan baik. Ketiga, model Waterfall
sangat cocok untuk proyek dengan skala kecil hingga menengah seperti
sistem pakar diagnosa penyakit tanaman. Senada dengan hal tersebut,
Narulita et al. (2024) menegaskan bahwa model Waterfall sangat relevan
diterapkan dalam pengembangan sistem pakar karena tahapannya yang
terorganisir dan menghasilkan dokumentasi yang jelas di setiap tahapan.

Berikut adalah ilustrasi tahapan Model Waterfall yang digunakan dalam
penelitian ini:

![IMG_256](media/image4.png){width="5.740277777777778in"
height="3.2020833333333334in"}

Gambar 3 . 1 Metode Waterfall

Adapun tahapan-tahapan model Waterfall yang diterapkan dalam penelitian
ini dijelaskan secara rinci sebagai berikut:

1.  **Analysis (Analisis)**

    Tahap pertama dalam model Waterfall adalah analisis kebutuhan sistem
    secara komprehensif. Pada tahap ini, seluruh persyaratan sistem
    dikumpulkan, diidentifikasi, dianalisis, dan didokumentasikan secara
    rinci untuk membentuk fondasi pengembangan yang kokoh. Menurut
    Muhammad Syahputra & Purnomo (2023), tahap analisis kebutuhan
    merupakan fase paling kritis dalam model Waterfall karena menentukan
    keberhasilan keseluruhan proyek. Dalam penelitian ini, analisis
    dilakukan berdasarkan hasil observasi lapangan dan wawancara
    mendalam dengan petani di Desa Krama Jaya. Kebutuhan fungsional yang
    berhasil diidentifikasi mencakup input gejala beserta tingkat
    keyakinan pengguna, perhitungan menggunakan metode Certainty Factor,
    tampilan hasil diagnosis penyakit tanaman, rekomendasi penanganan
    yang tepat, serta fitur administrasi untuk melakukan operasi CRUD
    (Create, Read, Update, Delete) pada data penyakit dan gejala.

2.  **Design (Desain/Perancangan)**

    Tahap kedua adalah perancangan sistem secara keseluruhan. Pada fase
    ini, arsitektur sistem dirancang secara terstruktur, meliputi
    Flowchart Sistem, Use Case Diagram, Activity Diagram, Entity
    Relationship Diagram (ERD), serta desain antarmuka pengguna (user
    interface) yang intuitif dan user-friendly. Menurut Fatimah Isny Nur
    Alvivi & Voutama (2024), perancangan sistem yang matang dan
    terperinci merupakan kunci utama keberhasilan pengembangan perangkat
    lunak. Dalam penelitian ini, tahap desain juga mencakup perumusan
    algoritma Certainty Factor secara kombinasional untuk memastikan
    proses inferensi diagnosis berjalan akurat dan efisien.

3.  **Implementation (Implementasi)**

    Tahap ketiga adalah implementasi atau pengkodean sistem.
    Pengembangan dilakukan menggunakan bahasa pemrograman Python 3.13
    dengan framework FastAPI sebagai backend yang cepat dan scalable,
    PostgreSQL sebagai basis data relasional yang andal, serta teknologi
    frontend berbasis HTML, Tailwind CSS, dan JavaScript untuk
    menciptakan antarmuka yang responsif dan modern. Algoritma Certainty
    Factor diimplementasikan pada endpoint diagnosis khusus. Seperti
    yang dinyatakan oleh Hapiz Nuddin Setiadi & Muhamad Bahrul Ulum
    (2024), kombinasi Pythjon dan FastAPI memberikan fleksibilitas
    tinggi dalam mengelola logika sistem pakar yang kompleks.
    Pengembangan dilakukan secara modular untuk memudahkan pemeliharaan
    dan pengembangan lanjutan di masa depan.

4.  **Testing (Pengujian)**

    Tahap keempat adalah pengujian sistem untuk memverifikasi
    fungsionalitas, akurasi, dan kegunaan. Metode pengujian yang
    diterapkan meliputi Black Box Testing guna memastikan kesesuaian
    fungsi dengan kebutuhan pengguna tanpa memeriksa kode internal,
    pengujian akurasi menggunakan confusion matrix pada 30 kasus uji
    representatif, serta User Acceptance Testing (UAT) yang melibatkan
    petani sebagai pengguna akhir.

[]{#_Toc250314877 .anchor}

**BAB IV**

[]{#_Toc1504769617 .anchor}**HASIL DAN PEMBAHASAN**

[]{#_Toc918235892 .anchor}**4.1 Perancangan Sistem**

[]{#_Toc535347501 .anchor}**4.1.1 Data Penyakit dan Gejala**

A.  **Data**

<!-- -->

1.  **Penyakit tanaman kangkung air**

    Berikut adalah data nama penyakit dan juga nama ilmiah penyakit.
    Seperti Tabel 4.1.

  ------ --------------------- ---------------------
  Kode   Nama Penyakit         Nama Ilmiah

  P01    Karat Putih (White    Albugo
         Rust)                 ipomoeae-panduratae

  P02    Bercak Daun           Cercospora ipomoeae
         Cercospora            

  P03    Virus Mosaik Kangkung Water spinach mosaic
                               virus

  P04    Layu Fusarium         Fusarium oxysporum

  P05    Busuk Akar Pythium    Pythium spp

  P06    Busuk Batang          Rhizoctonia solani
         Rhizoctonia           

  P07    Embun Tepung (Powdery Erysiphe spp.
         Mildew)               
  ------ --------------------- ---------------------

  : Tabel 4 . 1[]{#_Toc341649232 .anchor} Data Penyakit

  ----- --------------------- ------------------
  P08   Embun Bulu (Downy     Peronospora spp.
        Mildew)               

  ----- --------------------- ------------------

2.  **Data Gejala**

    Berikut adalah data nama gejala dan kode gejala, dan dapat dilihat
    di tabel 4.2.

  ----- ------------ ----------------------------------
  No    Kode Gejala  Nama Gejala

  1     G001         Bercak putih menonjol pada sisi
                     bawah daun

  2     G002         Bercak kuning pada sisi atas daun

  3     G003         Daun melengkung atau terdistorsi

  4     G004         Bercak bulat dengan pusat
                     abu-abu/putih

  5     G005         Bercak dengan tepi coklat
                     tua/merah

  6     G006         Pola mosaik hijau terang/gelap
                     pada daun

  7     G007         Pertumbuhan tanaman kerdil

  8     G008         Daun bagian bawah menguning

  9     G009         Tanaman layu pada siang hari,
                     pulih malam hari

  10    G010         Jaringan pembuluh batang berwarna
                     coklat
  ----- ------------ ----------------------------------

  : Tabel 4 . 2[]{#_Toc1762300240 .anchor} Data Gejala

  ----- ------------ ----------------------------------
  11    G011         Akar berwarna coklat dan lembe

  12    G012         Batang lunak dan gelap di dekat
                     tanah

  13    G013         Lesi cekung kemerahan pada batang

  14    G014         Pertumbuhan berbulu halus
                     abu-abu/ungu di bawah daun

  15    G015         Serbuk putih pada permukaan daun
  ----- ------------ ----------------------------------

3.  **Relasi penyakit dan gejala**

    Berikut adalah data relasi penyakit dan gejala dan dapat dilihat
    pada tabel 4.3

  ----- ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------
  P     G001   G002   G003   G004   G005   G006   G007   G008   G009   G010   G011   G012   G013   G014   G015

  P01   √      √      √                                                                                   

  P02                        √      √                    √                                                

  P03                 √                    √      √                                                       

  P04                                             √      √      √      √                                  

  P05                                             √             √             √                           

  P06                                                           √                    √      √             

  P07                 √                                                                                   √

  P08          √                                         √                                         √      
  ----- ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------ ------

  : Tabel 4 . 3[]{#_Toc1307989896 .anchor} Relasi Penyakit dan Gejala

B.  **Perhitungan**

    Nilai bobot pakar dalam sistem ini diperoleh dari hasil analisis
    data dan simulasi wawancara dengan pakar pertanian untuk memberikan
    nilai akurasi dalam mendiagnosa penyakit tanaman kangkung sehingga
    dapat memberikan nilai persentase kepercayaan.

  -----------------------------------------------------------------------
   **No**      **Nama          **Nama Gejala**        **Kode    **Nilai
             Penyakit**                              Gejala**  Bobot (CF
                                                                Pakar)**
  -------- --------------- ------------------------ ---------- ----------
     1       Karat Putih    Bercak putih menonjol   G01 / G001    0.9
            (White Rust)     pada sisi bawah daun              

                           Bercak kuning pada sisi  G02 / G002    0.7
                                  atas daun                    

                             Daun melengkung atau   G03 / G003    0.5
                                 terdistorsi                   

     2       Bercak Daun     Bercak bulat dengan    G04 / G004    0.8
             Cercospora      pusat abu-abu/putih               

                              Bercak dengan tepi    G05 / G005    0.8
                               coklat tua/merah                

                              Daun bagian bawah     G08 / G008    0.4
                                  menguning                    

     3      Virus Mosaik      Pola mosaik hijau     G06 / G006    0.95
              Kangkung      terang/gelap pada daun             

                             Pertumbuhan tanaman    G07 / G007    0.7
                                    kerdil                     

                             Daun melengkung atau   G03 / G003    0.6
                                 terdistorsi                   

     4      Layu Fusarium  Tanaman layu pada siang  G09 / G009    0.9
                            hari, pulih malam hari             

                           Jaringan pembuluh batang G10 / G010    0.8
                               berwarna coklat                 

                              Daun bagian bawah     G08 / G008    0.6
                                  menguning                    

                             Pertumbuhan tanaman    G07 / G007    0.5
                                    kerdil                     

     5       Busuk Akar    Akar berwarna coklat dan G11 / G011    0.9
               Pythium              lembek                     

                             Pertumbuhan tanaman    G07 / G007    0.6
                                    kerdil                     

                           Tanaman layu pada siang  G09 / G009    0.5
                            hari, pulih malam hari             

     6      Busuk Batang    Lesi cekung kemerahan   G13 / G013    0.9
             Rhizoctonia         pada batang                   

                            Batang lunak dan gelap  G12 / G012    0.8
                                di dekat tanah                 

                           Tanaman layu pada siang  G09 / G009    0.4
                            hari, pulih malam hari             

     7      Embun Tepung      Serbuk putih pada     G15 / G015    0.95
              (Powdery          permukaan daun                 
               Mildew)                                         

                             Daun melengkung atau   G03 / G003    0.5
                                 terdistorsi                   

     8       Embun Bulu      Pertumbuhan berbulu    G14 / G014    0.9
           (Downy Mildew)   halus abu-abu/ungu di              
                                  bawah daun                   

                           Bercak kuning pada sisi  G02 / G002    0.6
                                  atas daun                    

                              Daun bagian bawah     G08 / G008    0.5
                                  menguning                    
  -----------------------------------------------------------------------

  : Tabel 4 . 4[]{#_Toc1125356770 .anchor} Perhitungan bobot gejala

  ----------------------------------------- ---------------
  Gejala                                    Nilai Bobot
                                            Pakar

  (G01) Bercak putih menonjol pada sisi     0.9
  bawah daun                                

  (G02) Bercak kuning pada sisi atas daun   0.7

  (G03) Daun melengkung atau terdistorsi    0.5
  ----------------------------------------- ---------------

  : Tabel 4 . 5[]{#_Toc1595618650 .anchor} Gejala dan Nilai Bobot Pakar
  P001

  ------------------------ ------------- --------------
  Gejala                   Jawaban User  Bobot (CF
                                         User)

  (G01) Bercak putih       Sangat Yakin  1.0
  menonjol                               

  (G02) Bercak kuning      Cukup Yakin   0.6

  (G03) Daun melengkung    Sedikit Yakin 0.4
  ------------------------ ------------- --------------

  : Tabel 4 . 6[]{#_Toc1399914489 .anchor} Nilai Bobot User P001

Selanjutnya, bobot nilai yang dimasukkan pengguna akan dikalikan dengan
bobot nilai dari pakar:

**Gejala 1** = CF(user) \* CF(pakar) = 1.0 \* 0.9 = **0.9**

**Gejala 2** = CF(user) \* CF(pakar) = 0.6 \* 0.7 = **0.42**

**Gejala 3** = CF(user) \* CF(pakar) = 0.4 \* 0.5 = **0.2**

Dikarenakan terdapat lebih dari satu gejala, maka untuk menentukan CF
selanjutnya digunakan persamaan berikut:

1.  **CF_combine1(Gejala 1, Gejala 2)**

    = CF_gejala1 + CF_gejala2 \* (1 - CF_gejala1)

    = 0.9 + 0.42 \* (1 - 0.9)

    = 0.9 + 0.42 \* (0.1)

    **CF_old1 = 0.942**

2.  **CF_combine2(CF_old1, Gejala 3)**

    = CF_old1 + CF_gejala3 \* (1 - CF_old1)

    = 0.942 + 0.2 \* (1 - 0.942)

    = 0.942 + 0.2 \* (0.058)

    **CF_final = 0.9536**

Selanjutnya hitung persentase keyakinan terhadap penyakit dengan
persamaan berikut:

**Persentase** = CF_final \* 100

= 0.9536 \* 100

= **95.36%**

  -------------- --------------------- -------------------
  **Kode         **Nama Penyakit**     **Hasil Gabungan
  Penyakit**                           CF**

  P001           Karat Putih (White    **95.36%**
                 Rust)                 

  P002           Bercak Daun           42.10%
                 Cercospora            
  -------------- --------------------- -------------------

  : Tabel 4 . 7[]{#_Toc663190716 .anchor} Perbandingan dan Hasil
  kombinasi

Kesimpulan: 

> Dari tabel di atas, sistem akan membandingkan hasil penggabungan nilai
> CF dan sistem akan mengambil keputusan berdasarkan nilai penggabungan
> yang tertinggi. Maka dapat diketahui bahwa tanaman kangkung terserang
> penyakit **Karat Putih** dengan nilai kepastian sebesar **95.36%**.

[]{#_Toc425075938 .anchor}**4.1.2 Analisis Kebutuhan Sistem**

> Analisis kebutuhan sistem didapatkan melalui observasi langsung dan
> pengumpulan data kualitatif yang mendalam terkait informasi yang
> diperlukan dalam pengembangan sistem. Pada tahap ini, dijelaskan
> secara rinci berbagai kebutuhan yang harus dipenuhi oleh sistem, baik
> dari aspek fungsional maupun non fungsional.

1.  **Kebutuhan Fungsional**

> Berikut ini adalah persyaratan fungsional dari tampilan aplikasi
> sistem pakar diagnosa pada kangkung yang akan di terapkan :

  -------------------------- --------------------------------
           Pengguna                        Menu

            Admin             Login, Dashboard, kelola data
                              penyakit, kelola data gejala,
                             kelola data aturan, kelola data
                                         riwayat

           Pengguna           Registrasi, Login, Dashboard,
                             Diagnosa, Riwayat, ensiklopedia,
                                   kalkulator, panduan
  -------------------------- --------------------------------

  : Tabel 4 . 8[]{#_Toc281597980 .anchor} Kebutuhan Fungsional

2.  **Kebutuhan Non Fungsional**

> Berikut ini adalah persyaratan non-fungsional dalam membangun aplikasi
> sistem pakar diagnosa penyakit pada kangkung.

  ------------------------ -----------------------------
          Hardware                   Software

     RAM 4GB/8GB/16GN,     Python versi 3.12, PostgreSQL
    Processor Intel Core   versi 16, Visual Studio Code,
       i3/i5/i7, SSD         Browsers, Draw.io, Linux
        256GB/512GB        
  ------------------------ -----------------------------

  : Tabel 4 . 9[]{#_Toc782576936 .anchor} Kebutuhan Non Fungsional

[]{#_Toc429284111 .anchor}**4.1.3 Flowchart Sistem Lama**

![05-flowchart-sistem-lama](media/image5.png){width="5.097916666666666in"
height="6.538194444444445in"}

Gambar 4 . 1[]{#_Toc1938191484 .anchor} Flowchart SIstem Lama

**Keterangan:**

1.  Mulai

2.  Petani menemukan masalah pada tanaman kangkung

3.  Mengamati gejala secara manual

4.  Apakah bisa identifikasi sendiri?

    Ya → Identifikasi berdasarkan pengalaman

    Tidak → Cari pakar/penyuluh

5.  Apakah hasil identifikasi akurat?

    Ya → Dapatkan solusi

    Tidak → Cari pakar

6.  Apakah pakar tersedia?

    Ya → Pakar periksa langsung

    Tidak → Tunggu jadwal (ulang cek)

7.  Pakar beri diagnosis & solusi

8.  Petani terapkan solusi

9.  Apakah tanaman sembuh?

    Ya → Selesai

    Tidak → Ulangi konsultasi ke pakar

10. Selesai

    []{#_Toc1826618336 .anchor}**4.1.4 Flowchart Sistem Baru**

    ![06-flowchart-sistem-baru](media/image6.png){width="4.679166666666666in"
    height="7.290277777777778in"}

    Gambar 4 . 2[]{#_Toc2107808857 .anchor} Flowchart Sistem Baru

    Keterangan:

<!-- -->

1.  Mulai

2.  Pengguna mengakses aplikasi web

3.  Tampilkan halaman utama

4.  Input login / register

5.  Apakah login valid?

    Tidak → Tampilkan pesan error, kembali ke input login

    Ya → Lanjut ke menu diagnosa

6.  Menu diagnosa penyakit

7.  Pilih gejala yang dialami tanaman kangkung

8.  Input nilai keyakinan pengguna (0--1)

9.  Proses perhitungan Certainty Factor (CF) dengan mengambil data
    database aturan (CF pakar)

10. Apakah penyakit ditemukan?

    Tidak → Tampilkan pesan \"penyakit tidak ditemukan\", kembali ke
    pilih gejala

    Ya → Tampilkan hasil diagnosa (penyakit, nilai CF, persentase,
    deskripsi, solusi)

11. Simpan riwayat ke database

12. Selesai

[]{#_Toc97431998 .anchor}**4.1.5 Unified Modelling Language (UML)**

> UML merupakan peralatan yang berfungsi untuk menggambarkan secara
> rinci mengenai sistem sebagai jaringan kerja antar fungsi yang
> berhubungan satu sama lain dengan menunjukan dari dan kemana data
> mengalir serta penyimpananya.

1.  **Use Case Diagram**

    Gambar 4.1 adalah gambaran *use case* admin dan pengguna yang
    memperlihatkan fitur apa saja yang bisa di akses oleh admin dan
    pengguna.

    ![usecase](media/image7.png){width="5.729166666666667in"
    height="3.6326388888888888in"}

    Gambar 4 . 3[]{#_Toc157725389 .anchor} Usecase Diagram

2.  **Activity Diagram**

    Setelah membuat Use case kemudian dilanjutkan dengan membuat
    Activity Diagram Yaitu Diagram arus data yang dihasilkan dari
    dekomposisi Use Case atau pengambaran Use case yang lebih rinci.

<!-- -->

A.  **Admin**

<!-- -->

1)  **Activity diagram form login admin**

    Pada Tabel di bawah ini admin membuka website dan masuk ke menu
    login dan memasukan username dan password terus akan terjadi
    validasi username dan password jika benar admin maka akan di
    pindahkan ke halaman admin dan jika salah maka harus ulang melakukan
    input data.

    ![login-admin](media/image8.png){width="4.534027777777778in"
    height="3.3847222222222224in"}

    Gambar 4 . 4[]{#_Toc1952575771 .anchor} Diagram Activity Form Login

    a\. Admin membuka halaman login admin pada aplikasi.

    b\. Admin memasukkan username dan password.

    c\. Sistem memverifikasi kredensial data admin ke database.

    d\. Sistem menampilkan halaman dashboard admin setelah login
    berhasil.

2)  **Activity diagram mananjemen pengguna**

    ![/var/home/indra12/skripsi/kangkungku/diagram/activity/admin/crud-pengguna.pngcrud-pengguna](media/image9.png){width="4.813194444444444in"
    height="5.509722222222222in"}

    Gambar 4 . 5[]{#_Toc1139979082 .anchor} Diagram Activity Mananjemen
    Pengguna

    a\. Admin masuk ke halaman tabel daftar akun pengguna (user).

    b\. Admin memilih opsi aksi (tambah, ubah, atau hapus) data
    pengguna.

    c\. Admin mengisi formulir data akun pengguna terdaftar.

    d\. Sistem memproses penyimpanan atau perubahan data pengguna ke
    database.

    e\. Sistem menampilkan notifikasi sukses dan memperbarui tabel data
    pengguna.

3)  **Activity diagram mananjemen penyakit**

    ![/var/home/indra12/skripsi/kangkungku/diagram/activity/admin/crud-penyakit.pngcrud-penyakit](media/image10.png){width="4.5680555555555555in"
    height="6.382638888888889in"}

    Gambar 4 . 6[]{#_Toc1240691338 .anchor} Diagram Activity Mananjemen
    Penyakit

    a\. Admin masuk ke halaman tabel daftar data penyakit.

    b\. Admin memilih opsi aksi (tambah, ubah, atau hapus) data
    penyakit.

    c\. Admin mengisi formulir informasi penyakit, deskripsi, dan solusi
    penanganan.

    d\. Sistem memproses penyimpanan atau perubahan data penyakit ke
    database.

    e\. Sistem menampilkan notifikasi sukses dan memperbarui tabel data
    penyakit.

4)  **Activity diagram mananjemen gejala**

    ![/var/home/indra12/skripsi/kangkungku/diagram/activity/admin/crud-gejala.pngcrud-gejala](media/image11.png){width="4.704166666666667in"
    height="6.043055555555555in"}

    Gambar 4 . 7[]{#_Toc122697506 .anchor} Diagram Activity Mananjemen
    Gejala

    a\. Admin masuk ke halaman tabel daftar data gejala.

    b\. Admin memilih opsi aksi (tambah, ubah, atau hapus) data gejala.

    c\. Admin mengisi formulir perubahan data gejala sesuai kebutuhan.

    d\. Sistem memproses penyimpanan atau perubahan data gejala ke
    database.

    e\. Sistem menampilkan notifikasi sukses dan memperbarui tabel data
    gejala.

5)  **Activity diagram mananjemen rules**

    ![/var/home/indra12/skripsi/kangkungku/diagram/activity/admin/crud-rules.pngcrud-rules](media/image12.png){width="4.6618055555555555in"
    height="5.86875in"}

    Gambar 4 . 8[]{#_Toc1393685422 .anchor} Diagram Activity Mananjemen
    Rules/Aturan

    a\. Admin masuk ke halaman tabel daftar aturan (rules).

    b\. Admin memilih opsi aksi (tambah, ubah, atau hapus) relasi
    aturan.

    c\. Admin menentukan penyakit, gejala, dan menginput nilai bobot CF
    Pakar.

    d\. Sistem memproses penyimpanan atau perubahan data aturan ke
    database.

    e\. Sistem menampilkan notifikasi sukses dan memperbarui tabel
    aturan.

<!-- -->

B.  **Pengguna**

<!-- -->

1)  **Activity diagram Daftar atau Register**

    ![register-pengguna](media/image13.png){width="5.019444444444445in"
    height="3.754861111111111in"}

    Gambar 4 . 9[]{#_Toc236625447 .anchor} Diagram Activity
    Daftar/Register

    a\. Pengguna membuka halaman formulir pendaftaran/registrasi.

    b\. Pengguna mengisi data pendaftaran berupa username, email,
    alamat, dan password.

    c\. Sistem melakukan validasi dan memeriksa keunikan data ke
    database.

    d\. Sistem menyimpan akun pengguna baru ke database.

    e\. Sistem menampilkan notifikasi registrasi berhasil dan
    mengarahkan ke halaman login.

2)  **Activity diagram Login**

    ![login-pengguna](media/image14.png){width="4.977777777777778in"
    height="5.870138888888889in"}

    Gambar 4 . 10[]{#_Toc395241338 .anchor} Diagram Activity Login

    a\. Pengguna membuka halaman login pengguna.

    b\. Pengguna memasukkan username dan password.

    c\. Sistem memverifikasi kredensial data pengguna ke database.

    d\. Sistem mengarahkan pengguna masuk ke halaman utama dashboard
    pengguna setelah login berhasil.

3)  **Diagram activity Diagnosa Penyakit**

    ![diagnosa-penyakit](media/image15.png){width="4.209027777777778in"
    height="6.111111111111111in"}

    Gambar 4 . 11[]{#_Toc575376345 .anchor} Diagram Activity Diagnosa
    Penyakit

    a\. Pengguna masuk ke halaman diagnosis penyakit.

    b\. Pengguna memilih beberapa gejala yang terlihat pada tanaman
    kangkung air.

    c\. Pengguna menginput nilai keyakinan (slider CF User) untuk gejala
    yang dipilih.

    d\. Sistem memproses diagnosis menggunakan perhitungan Certainty
    Factor berdasarkan bobot pakar.

    e\. Sistem menampilkan hasil penyakit terdiagnosa beserta persentase
    keyakinan dan solusi penanganannya.

4)  **Diagram Activity Riwayat**

    ![lihat-riwayat](media/image16.png){width="4.674305555555556in"
    height="4.198611111111111in"}

    Gambar 4 . 12[]{#_Toc1364839528 .anchor} Diagram Activity Riwayat

    a\. Pengguna memilih menu riwayat diagnosa pada dashboard.

    b\. Sistem memproses dan mengambil data riwayat diagnosa milik
    pengguna dari database.

    c\. Sistem menampilkan daftar tabel riwayat diagnosa yang telah
    dilakukan.

5)  **Lihat Ensiklopedia**

    Pada Tabel di bawah ini pengguna masuk ke halaman beranda setelah
    itu sistem menampilkan beranda dan pengguna memilih menu
    ensiklopedia dan sistem menampilkan daftar penyakit.

    ![lihat-ensiklopedia](media/image17.png){width="4.722916666666666in"
    height="4.067361111111111in"}

    Gambar 4 . 13[]{#_Toc1874334156 .anchor} DiagramActivity
    Ensiklopedia

    a\. Pengguna memilih menu ensiklopedia atau daftar penyakit.

    b\. Sistem memproses dan mengambil seluruh data informasi penyakit
    kangkung.

    c\. Sistem menampilkan halaman daftar penyakit lengkap dengan foto,
    deskripsi ilmiah, dan cara penanganannya.

6)  **Kalkulator Penggunaan pupuk**

    ![kalkulator-pupuk](media/image18.png){width="4.740277777777778in"
    height="4.21875in"}

    Gambar 4 . 14[]{#_Toc1581676682 .anchor} Diagram Activity Kalkulator
    Pupuk

    a\. Pengguna membuka halaman kalkulator pupuk.

    b\. Pengguna menginput luas lahan atau area sawah tanaman kangkung
    air (meter persegi).

    c\. Sistem menghitung rekomendasi takaran pupuk berdasarkan formula
    standar pertanian.

    d\. Sistem menampilkan hasil perhitungan rekomendasi jumlah pupuk
    Urea, TSP, dan KCl.

[]{#_Toc1808901036 .anchor}**4.1.6 Enitity Relationship Diagram (ERD)**

> Pada perancangan database atau basis data akan di buat suatu basis
> data relasional dengan menggabungkan tabel yang satu dengan yang
> lainnya, Sehingga akan terbentuk satu rancangan sistem basis data yang
> di inginkan. Berikut adalah ERD Sistem Pakar Diagnosa Penyakit pada
> Tanaman Kangkung Air Menggunakan Metode Certainty Factor.

![eerd (Edited)](media/image19.png){width="5.570138888888889in"
height="5.103472222222222in"}

Gambar 4 . 15[]{#_Toc567732356 .anchor} ERD

[]{#_Toc1305381189 .anchor}**4.1.7 Struktur Database**

> Perancangan sistem table dilakukan dengan cara membuat diagram
> mempermudah relasi dalam yang berguna pemeliharaan data untuk dan
> menghindarkan kerangkapan data, sehingga informasi yang di peroleh
> akan lebih akurat dan meminimalkan pembuatan Record. Berikut rancangan
> Struktur Database.

A.  Tabel Users

    Tabel users berisi data pengguna aplikasi (user dan admin) yang
    memiliki 7 field yaitu: id, username, email, hashed_password, role,
    is_active, alamat dimana id sebagai Primary Key, sedangkan username
    dan email bersifat Unique (tidak boleh sama).

  ------ ----------------- ------------ ------- -------------------
  No     Field             Type         Size    Keterangan

  1      id                Int          11      Identitas user
                                                (Primary Key)

  2      username          Varchar      50      Username untuk
                                                login

  3      email             Varchar      100     Alamat email user

  4      hashed_password   Varchar      100     Password yang telah
                                                di-hash

  5      role              Varchar      20      Role pengguna
                                                (admin/user)

  6      is_active         Boolean      \-      Status keaktifan
                                                akun

  7      alamat            Varchar      100     Alamat pengguna
  ------ ----------------- ------------ ------- -------------------

  : Tabel 4 . 10[]{#_Toc1775732112 .anchor} Tabel Users/Pengguna

B.  Tabel Penyakit

    Tabel penyakit berisi data penyakit tanaman kangkung yang memiliki 6
    field yaitu: id, nama, nama_ilmiah, deskripsi, solusi, url_gambar
    dimana id sebagai Primary Key.

  ------ -------------- ---------- ------- ------------------
  No     Field          Type       Size    Keterangan

  1      id             Int        11      Identitas penyakit
                                           (Primary Key)

  2      nama           Varchar    50      Nama penyakit

  3      nama_ilmiah    Varchar    50      Nama ilmiah
                                           penyakit

  4      deskripsi      Text       \-      Deskripsi lengkap
                                           penyakit

  5      solusi         Text       \-      Solusi penanganan
                                           penyakit

  6      url_gambar     Varchar    100     Path atau URL
                                           gambar penyakit
  ------ -------------- ---------- ------- ------------------

  : Tabel 4 . 11[]{#_Toc1221170537 .anchor} Tabel Penyakit

C.  Tabel Gejala

    Tabel gejala berisi data gejala penyakit yang memiliki 4 field
    yaitu: id, kode, deskripsi, url_gambar dimana id sebagai Primary Key
    dan kode sebagai Unique Key (tidak boleh sama).

  ----- ----------- --------- ------ -----------------------
  No    Field       Type      Size   Keterangan

  1     id          Int       11     Identitas gejala
                                     (Primary Key)

  2     kode        Varchar   10     Kode unik gejala

  3     deskripsi   Varchar   100    Deskripsi gejala
  ----- ----------- --------- ------ -----------------------

  : Tabel 4 . 12[]{#_Toc69045978 .anchor} Tabel Gejala

D.  Tabel Aturan

    Tabel aturan berisi relasi antara penyakit dan gejala beserta nilai
    CF (Certainty Factor) dari pakar, yang memiliki 4 field yaitu: id,
    penyakit_id, gejala_id, pakar_cf dimana id sebagai Primary Key,
    serta penyakit_id dan gejala_id masing-masing sebagai Foreign Key
    yang merujuk ke id pada tabel penyakit dan tabel gejala.

  ----- ------------- ------- ------ ----------------------------
  No    Field         Type    Size   Keterangan

  1     id            Int     11     Identitas aturan (Primary
                                     Key)

  2     penyakit_id   Int     11     ID Penyakit (Foreign Key)

  3     gejala_id     Int     11     ID Gejala (Foreign Key)

  4     pakar_cf      Float   \-     Nilai Certainty Factor dari
                                     pakar
  ----- ------------- ------- ------ ----------------------------

  : Tabel 4 . 13[]{#_Toc1948852795 .anchor} Tabel Aturan

E.  Tabel Diagnos\_ History

    Tabel diagnosa_history berisi riwayat diagnosa yang dilakukan oleh
    pengguna, yang memiliki 8 field yaitu: id, user_id, penyakit_id,
    faktor_kepastian, persentase, gejala_input, created_at dimana id
    sebagai Primary Key, serta user_id sebagai Foreign Key ke id tabel
    users, dan penyakit_id sebagai Foreign Key ke id tabel penyakit.

  ----- ------------------ ---------- ------ ----------------------
  No    Field              Type       Size   Keterangan

  1     id                 Int        11     Identitas riwayat
                                             (Primary Key)

  2     user_id            Int        11     ID User (Foreign Key)

  3     penyakit_id        Int        11     ID Penyakit (Foreign
                                             Key)

  4     faktor_kepastian   Float      \-     Nilai faktor kepastian
                                             hasil diagnosa

  5     persentase         Float      \-     Persentase keyakinan
                                             hasil diagnosa

  6     gejala_input       Text       \-     Data JSON gejala yang
                                             diinputkan

  7     created_at         Varchar    50     Waktu dilakukannya
                                             diagnosa
  ----- ------------------ ---------- ------ ----------------------

  : Tabel 4 . 14[]{#_Toc689507318 .anchor} Dianosa_history

[]{#_Toc954767514 .anchor}**4.1.8 Arsitektur Program**

> Berikut adalah gambaran struktur program sistem informasi diagnosa
> penyakit pada tanaman kangkung air dengan metode *certainty facto*r.

![Gambar 4 . 16[]{#_Toc687657857 .anchor} Arsitektur Program
Admin](media/image20.png){alt="/var/home/indra12/skripsi/kangkungku/diagram/program/arsitektur_program.pngarsitektur_program"
width="5.582638888888889in" height="3.688888888888889in"}

![Gambar 4 . 17 Arsitektur Program
Pengguna/Petani](media/image21.png){alt="pengguna_progran"
width="5.738194444444445in" height="2.529861111111111in"}

[]{#_Toc445050139 .anchor}**4.1.9 Desain Antar Muka**

1)  **Form Register**

    Desain pada halaman register terdapat form Nama lengkap, Username,
    Email, Alamat dan Password dan juga button Daftar.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/auth.pngauth](media/image22.png){width="2.51875in"
    height="2.8826388888888888in"}

    Gambar 4 . 18[]{#_Toc1178076335 .anchor} Desain interface form
    register

2)  **Halaman Login**

    Desain pada halaman login berisi form Username dan Password dan juga
    button Login

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/auth.pngauth](media/image22.png){width="2.21875in"
    height="2.488888888888889in"}

    Gambar 4 . 19[]{#_Toc1547589483 .anchor} Desain interface halaman
    login

3)  **Home**

    Desain pada halaman Home ini atau Beranda berisi pembuka atau
    halaman utama pada website.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/home.pnghome](media/image23.png){width="4.511111111111111in"
    height="6.409027777777778in"}

    Gambar 4 . 20[]{#_Toc333546154 .anchor} Desain interface halaman
    Home

4)  **Dashboard admin**

    Desain pada halaman admin berisi daftar users, gejala, dan penyakit
    dan di dalamnya juga bisa di lakukan untuk Tambah, Update dan Hapus
    data penyakit, gejala dan users.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/admin_dashboard.pngadmin_dashboard](media/image24.png){width="5.742361111111111in"
    height="4.786111111111111in"}

    Gambar 4 . 21[]{#_Toc1678635024 .anchor} Desain interface Halaman
    dashboard admin

5)  **Dashboard Admin Mananjemen Penyakit**

    Desain Halaman admin kelola penyakit berisi daftar penyakit-penyakit
    yang ada.

![/var/home/indra12/skripsi/kangkungku/diagram/desain/admin-lihat-penyakit.pngadmin-lihat-penyakit](media/image25.png){width="5.742361111111111in"
height="2.6930555555555555in"}

Gambar 4 . 22[]{#_Toc1137521025 .anchor} Desain interface Halaman kelola
penyakit

6)  **Dashboard Admin Kelola Gejala**

    Desain Halaman admin kelola gejala berisi daftar gejala yang ada
    atau yang sudah di tambahkan oleh admin.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/admin-lihat-gejala.pngadmin-lihat-gejala](media/image26.png){width="5.742361111111111in"
    height="2.475in"}

    Gambar 4 . 23[]{#_Toc1212461649 .anchor} Desain interface halaman
    kelola gejala

7)  **Dashboard Admin kelola Pengguna**

    Desain Halaman admin kelola pengguna berisi daftar-daftar pengguna
    yang sudah daftar atau yang sudah di tambahkan oleh admin.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/admin-lihat-user.pngadmin-lihat-user](media/image27.png){width="5.742361111111111in"
    height="2.902083333333333in"}

    Gambar 4 . 24[]{#_Toc411427852 .anchor} Desain interface Halaman
    kelola pengguna

8)  **Dashboard Admin Kelola Aturan**

    Desain Halaman admin kelola aturan berisi daftar-daftar aturan yang
    sudah di buat oleh admin.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/admin-lihat-aturan.pngadmin-lihat-aturan](media/image28.png){width="5.742361111111111in"
    height="2.342361111111111in"}

    Gambar 4 . 25[]{#_Toc68683695 .anchor} Desain interface Halaman
    kelola aturan/rules

9)  **Dashboard Pengguna**

    Desain halaman dashboard pengguna berisi berapa kali melakukan
    diagnosa dan berapa banyak penyakit pada kangkung terdeteksi.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/user_dashboard.pnguser_dashboard](media/image29.png){width="5.742361111111111in"
    height="6.366666666666666in"}

    Gambar 4 . 26[]{#_Toc901508881 .anchor} Desain interface Halaman
    dashboard users

10) **Diagnosa**

    Desain halaman diagnosa berisi daftar gejala yang harus di pilih dan
    berapa kita yakin terhadap penyakitnya terus lanjut tekan button
    Diagnosa.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/diagnosa.pngdiagnosa](media/image30.png){width="5.7347222222222225in"
    height="6.106944444444444in"}

    Gambar 4 . 27[]{#_Toc766498 .anchor} Desain interface Halaman
    Diagnosa

11) **Hasil diagnosa**

    Desain Halaman Hasil Diagnosa berisi hasil diagnosa penyakit yang
    terdeteksi yang dialami kangkung air.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/hasil_diagnosa.pnghasil_diagnosa](media/image31.png){width="5.742361111111111in"
    height="6.2965277777777775in"}

    Gambar 4 . 28[]{#_Toc1038958583 .anchor} Desain interface Halaman
    Hasil diagnosa

12) **Ensiklopedia**

    Desain Halaman Ensiklopedia berisi daftar penyakit-penyakit yang
    bisa di diagnosa oleh sistem pakar ini.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/ensiklopedia.pngensiklopedia](media/image32.png){width="5.742361111111111in"
    height="6.507638888888889in"}

    Gambar 4 . 29[]{#_Toc1300377235 .anchor} Desain interface Halaman
    ensiklopedia

13) **Kalkulator**

    Desain Halaman Kalkulator berisi inputan milih berapa luas tanaman
    kangkung dan rekomendasi penggunaan pupuk untuk tanaman kangkung.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/kalkulator.pngkalkulator](media/image33.png){width="5.0784722222222225in"
    height="5.770833333333333in"}

    Gambar 4 . 30[]{#_Toc1753660123 .anchor} Desain interface Halaman
    Kalkulator

14) **Panduan**

    Desain Halaman Panduan berisi panduan-panduan menggunakan sistem
    pakar ini dari awal hingga akhir.

    ![/var/home/indra12/skripsi/kangkungku/diagram/desain/panduan.pngpanduan](media/image34.png){width="5.742361111111111in"
    height="5.977083333333334in"}

    Gambar 4 . 31[]{#_Toc1203363380 .anchor} Desain interface Halaman
    Panduan

[]{#_Toc2111179808 .anchor}**4.2 Pengembangan Sistem**

[]{#_Toc766045959 .anchor}**4.2.1 Halaman Website**

1)  **Halaman Home**

    Halaman ini merupakan halaman utama atau beranda yang berisi pembuka
    pada website sistem pakar.

    ![](media/image35.png){width="6.143055555555556in"
    height="4.933333333333334in"}

    Gambar 4 . 32[]{#_Toc4664006 .anchor} Halaman Home/Beranda

2)  **Halaman Login**

    Halaman ini berisi formulir untuk memasukan Username dan Password
    guna mengkakes sistem pakar dan di lengkapi dengan tombol Login
    untuk masuk ke halaman dashboard.

    ![](media/image36.png){width="5.727083333333334in"
    height="3.115972222222222in"}

    Gambar 4 . 33[]{#_Toc1857306710 .anchor} Halaman Login

3)  **Halaman Registrasi atau Daftar**

    Halaman ini menyediakan formulir pendaftaran akun baru, yang
    meliputi kolom Nama lengkap, Username, Email, Alamat, dan Password,
    serta tombol Daftar.

    ![](media/image37.png){width="5.727083333333334in"
    height="2.879861111111111in"}

    Gambar 4 . 34[]{#_Toc1929544308 .anchor} Halaman Registrasi/Daftar

4)  **Halaman Dashboard admin**

    Dashboard admin menampilkan ringkasan data pengguna (users), gejala,
    dan penyakit. Dari halaman ini, admin dapat melakukan operasi
    Tambah, Update, dan Hapus data untuk entitas tersebut

    ![](media/image38.png){width="5.727083333333334in"
    height="2.879861111111111in"}

    Gambar 4 . 35[]{#_Toc371058417 .anchor} Dashboard Admin

5)  **Halaman Admin mananjemen penyakit**

    Halaman ini berisi daftar penyakit-penyakit tanaman kangkung air
    yang terdaftar dalam sistem.

    ![](media/image39.png){width="5.727083333333334in"
    height="4.027777777777778in"}

    Gambar 4 . 36[]{#_Toc462610504 .anchor} Halaman Mananjemen Penyakit

6)  **Halaman Admin mananjemen gejala**

    Halaman ini menampilkan daftar gejala penyakit tanaman kangkung yang
    sudah ditambahkan oleh admin.

    ![](media/image40.png){width="5.879166666666666in"
    height="3.995138888888889in"}

    Gambar 4 . 37[]{#_Toc51108398 .anchor} Halaman Mananjemen gejala

7)  **Halaman Admin mananjemen pengguna**

    Halaman ini berisi daftar pengguna yang sudah terdaftar, baik yang
    mendaftar secara mandiri maupun yang ditambahkan oleh admin.

    ![](media/image41.png){width="5.727083333333334in"
    height="2.84375in"}

    Gambar 4 . 38[]{#_Toc674052508 .anchor} Halaman Mananjemen pengguna

8)  **Halaman Admin mananjemen aturan**

    Halaman ini menampilkan daftar aturan (rules) diagnosis (relasi
    penyakit dan gejala) yang telah dibuat oleh admin.

    ![](media/image42.png){width="5.727083333333334in"
    height="2.60625in"}

    Gambar 4 . 39[]{#_Toc712866412 .anchor} Halaman Mananjemen
    aturan/rules

9)  **Halaman dashboard pengguna**

    Halaman ini menampilkan ringkasan aktivitas pengguna, seperti total
    berapa kali diagnosa dilakukan dan berapa banyak penyakit pada
    kangkung yang terdeteksi.

    ![](media/image43.png){width="5.471527777777778in"
    height="2.5430555555555556in"}

    Gambar 4 . 40[]{#_Toc1722233472 .anchor} Halaman Dashboard pengguna

10) **Halaman diagnosa**

    Halaman ini berisi daftar gejala yang dapat dipilih pengguna,
    diikuti dengan input tingkat keyakinan terhadap gejala, sebelum
    menekan tombol Diagnosa.

    ![](media/image44.png){width="5.727083333333334in"
    height="2.18125in"}

    Gambar 4 . 41[]{#_Toc1733533659 .anchor} Halaman Diagnosa

11) **Halaman hasil diagnosa**

    Halaman ini menampilkan hasil akhir diagnosa penyakit yang
    terdeteksi pada tanaman kangkung air, termasuk nilai Certainty
    Factor dan rekomendasi solusi.

    ![](media/image45.png){width="5.727083333333334in"
    height="2.520138888888889in"}

    Gambar 4 . 42[]{#_Toc1245475141 .anchor} Halaman hasil diagnosa

12) **halaman kalkulator**

    Halaman ini berisi input untuk memasukkan luas bidang tanah/sawah
    kangkung air dan akan menampilkan rekomendasi penggunaan pupuk.

    ![](media/image46.png){width="5.727083333333334in"
    height="2.329861111111111in"}

    Gambar 4 . 43[]{#_Toc1953143932 .anchor} Halaman kalkulator

13) **Halaman ensiklopedia**

    Halaman ini berisi daftar penyakit-penyakit yang dapat didiagnosa
    oleh sistem pakar ini beserta informasi deskriptifnya.

    ![](media/image47.png){width="5.725in" height="3.495833333333333in"}

    Gambar 4 . 44[]{#_Toc952422535 .anchor} Halaman ensiklopedia

14) **Halaman Panduan**

    Halaman ini berisi panduan-panduan langkah demi langkah mengenai
    cara menggunakan sistem pakar ini dari awal hingga akhir.

    ![](media/image48.png){width="5.725in"
    height="1.7791666666666666in"}

    Gambar 4 . 45[]{#_Toc902759168 .anchor} Halaman Panduan

[]{#_Toc1499772577 .anchor}**4.2.2 Flowchart Sistem**

1)  **Flowchart Register**

    Pada alur ini, pengguna baru dapat melakukan pendaftaran akun dengan
    mengisi formulir (Nama lengkap, Username, Email, Alamat,
    dan Password). Setelah data divalidasi dan disimpan ke
    dalam database, pengguna akan diarahkan ke
    halaman dashboard pengguna.

    ![07-flowchart-register](media/image49.png){width="4.748611111111111in"
    height="5.531944444444444in"}

    Gambar 4 . 46[]{#_Toc1840607790 .anchor} Flowchart Register

2)  **Flowchart Login**

    Alur ini menjelaskan proses masuk ke dalam sistem. Pengguna atau
    Admin akan memasukkan Username dan Password. Sistem kemudian
    memvalidasi data; jika valid, pengguna akan diarahkan
    ke dashboard yang sesuai dengan role mereka (admin atau pengguna).
    Jika tidak valid, sistem akan menampilkan pesan error dan meminta
    input ulang.

    ![08-flowchart-login](media/image50.png){width="4.74375in"
    height="5.521527777777778in"}

    Gambar 4 . 47[]{#_Toc1234939567 .anchor} Flowchart Login

3)  **Flowchart Diagnosa**

    Ini adalah alur utama sistem pakar. Pengguna masuk ke menu diagnosa,
    memilih gejala yang sesuai dengan kondisi tanaman kangkung air, dan
    menginput tingkat keyakinan (0--1) terhadap gejala yang dipilih.
    Sistem akan memproses perhitungan Certainty Factor (CF) dengan
    mengambil data aturan dari database (CF pakar) dan menggunakan
    rumus CF Combine untuk mendapatkan hasil akhir diagnosa (penyakit,
    nilai CF, persentase, deskripsi, dan solusi penanganan).

    ![09-flowchart-diagnosa](media/image51.png){width="5.011111111111111in"
    height="5.084027777777778in"}

    Gambar 4 . 48[]{#_Toc1849660137 .anchor} Flowchart Diagnosa

4)  **Flowchart Mananjemen penyakit**

    Alur ini hanya dapat diakses oleh Admin untuk mengelola data
    penyakit. Prosesnya meliputi melihat daftar penyakit yang terdaftar,
    menambahkan data penyakit baru, memperbarui (Update) data penyakit
    yang sudah ada, dan menghapus data penyakit dari sistem.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/10-flowchart-admin-penyakit.png10-flowchart-admin-penyakit](media/image52.png){width="5.134722222222222in"
    height="4.495138888888889in"}

    Gambar 4 . 49[]{#_Toc880528489 .anchor} Mananjemen penyakit

5)  **Flowchart Mananjemen gejala**

    Alur ini hanya dapat diakses oleh Admin untuk mengelola data gejala
    penyakit. Prosesnya meliputi melihat daftar gejala yang sudah
    ditambahkan, menambahkan data gejala baru, memperbarui (Update)
    deskripsi gejala, dan menghapus data gejala yang sudah tidak
    digunakan.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/11-flowchart-admin-gejala.png11-flowchart-admin-gejala](media/image53.png){width="5.972916666666666in"
    height="4.798611111111111in"}

    Gambar 4 . 50[]{#_Toc54691528 .anchor} Flowchart Mananjemen gejala

6)  **Flowchart Mananjemen pengguna**

    Alur ini hanya dapat diakses oleh Admin untuk mengelola daftar
    pengguna (users). Prosesnya meliputi melihat daftar pengguna yang
    terdaftar, menambahkan pengguna baru (khusus role admin),
    memperbarui (Update) data pengguna (seperti role atau status
    keaktifan), dan menghapus akun pengguna tertentu.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/11-flowchart-admin-gejala.png11-flowchart-admin-gejala](media/image53.png){width="5.740972222222222in"
    height="4.689583333333333in"}

    Gambar 4 . 51[]{#_Toc818763954 .anchor} Flowchart Mananjemen
    Pengguna

7)  **Flowchart Mananjemen Aturan**

    Alur ini hanya dapat diakses oleh Admin untuk mengelola basis
    pengetahuan atau aturan (rules) diagnosis. Prosesnya meliputi
    melihat relasi yang ada antara penyakit dan gejala, menambahkan
    relasi aturan baru beserta nilai Certainty Factor (CF) pakar,
    memperbarui nilai CF pada aturan yang sudah ada, dan menghapus
    aturan diagnosis tertentu.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/12-flowchart-admin-aturan.png12-flowchart-admin-aturan](media/image54.png){width="5.736805555555556in"
    height="4.684027777777778in"}

    Gambar 4 . 52[]{#_Toc1153796699 .anchor} Flowchart Mananjemen aturan

8)  **Flowchart Dashboard admin**

    Flowchart ini menggambarkan tampilan utama bagi Admin setelah
    berhasil login. Halaman ini menampilkan ringkasan data penting,
    seperti total pengguna (users), gejala, dan penyakit.
    Dari dashboard ini, Admin dapat mengakses menu-menu manajemen untuk
    melakukan operasi Tambah, Update, dan Hapus data.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/18-flowchart-admin-dashboard.png18-flowchart-admin-dashboard](media/image55.png){width="5.7340277777777775in"
    height="5.222222222222222in"}

    Gambar 4 . 53[]{#_Toc2117433562 .anchor} Flowchart Dashboard admin

9)  **Flowchart Dashboard pengguna**

    Flowchart ini menggambarkan tampilan utama bagi Pengguna setelah
    berhasil login. Halaman ini menampilkan ringkasan aktivitas
    pengguna, seperti total berapa kali diagnosa dilakukan dan berapa
    banyak penyakit pada kangkung yang terdeteksi, serta menyediakan
    akses cepat ke fitur utama seperti Diagnosa dan Riwayat.

    ![17-flowchart-dashboard-pengguna](media/image56.png){width="5.000694444444444in"
    height="5.604166666666667in"}

    Gambar 4 . 54[]{#_Toc2133442400 .anchor} Flowchart Dashboard
    pengguna

10) **Flowchart Algoritma CF**

    Ini merupakan sub-alur yang menjelaskan proses komputasi. Proses
    dimulai dengan mengalikan nilai keyakinan pengguna (CF user) dengan
    nilai bobot pakar (CF pakar). Selanjutnya, jika terdapat lebih dari
    satu gejala, sistem menggunakan rumus CF Combine secara iteratif
    untuk mendapatkan nilai CF final yang kemudian dikonversi menjadi
    persentase keyakinan terhadap penyakit.

    ![16-flowchart-algoritma-cf](media/image57.png){width="5.01875in"
    height="4.98125in"}

    Gambar 4 . 55[]{#_Toc765845920 .anchor} Flowchart Algoritma CF

11) **Flowchart Riwayat**

    Alur ini memungkinkan pengguna untuk melihat daftar riwayat diagnosa
    yang pernah dilakukan sebelumnya. Sistem akan menampilkan detail
    tanggal, penyakit yang terdeteksi, dan persentase hasilnya. Pengguna
    juga dapat melihat detail lengkap dari diagnosa lama atau menghapus
    riwayat tertentu.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/15-flowchart-riwayat.png15-flowchart-riwayat](media/image58.png){width="4.819444444444445in"
    height="5.885416666666667in"}

    Gambar 4 . 56[]{#_Toc1464366434 .anchor} Flowchart Riwayat

12) **Flowchart Ensiklopedia**

    Alur ini memungkinkan pengguna untuk mengakses halaman yang berisi
    daftar lengkap penyakit-penyakit yang dapat didiagnosa oleh sistem
    pakar ini, beserta informasi deskriptif dan solusi penanganannya,
    bahkan tanpa harus login.

    ![/var/home/indra12/skripsi/kangkungku/diagram/flowchart/14-flowchart-ensiklopedia.png14-flowchart-ensiklopedia](media/image59.png){width="4.686111111111111in"
    height="5.720138888888889in"}

    Gambar 4 . 57[]{#_Toc36967282 .anchor} Flowchart Ensiklopedia

[]{#_Toc337382281 .anchor}**4.3 Pengujian Sistem**

Pengujian sistem merupakan tahapan yang paling penting untuk melihat
apakah sistem yang dibangun sudah sesuai dengan konsep atau belum.
Adapun metode pengujian sistem pada sistem informasi diagnosa penyakit
pada kangkung air ini menggunakan metode Black Box. Metode Black Box
sendiri berfokus pada kebutuhan dan konsep yang sudah dibuat, serta
untuk mengetahui apakah fitur-fitur yang dibuat sudah berfungsi dengan
baik sehingga menghasilkan output yang seharusnya atau belum.

1.  **Hasil Pengujian Sistem**

    Berikut ini adalah tabel yang berisikan kasus pengujian program
    sistem informasi diagnosa penyakit pada tanaman kangkung air dengan
    metode certainty factor Berbasis Website menggunakan metode Black
    Box.

  ---- ----------------- ------------------- ---------------- -----------
  No   Kasus/Diuji       Skenario Uji        Hasil Yang       Hasil
                                             Diharapkan       Pengujian

  A    AUTENTIKASI &                                          
       AKSES                                                  

  1    Login Admin/User  Memasukkan username Sistem           \[√\]
                         dan password yang   mengalihkan ke   Berhasil\
                         valid               dashboard sesuai \[ \] Tidak
                                             role             Berhasil

  2    Login Gagal       Memasukkan password Sistem           \[√\]
                         yang salah          menampilkan      Berhasil\
                                             pesan \"Username \[ \] Tidak
                                             atau password    Berhasil
                                             salah\"          

  3    Logout            Menekan tombol      Sesi dihapus dan \[√\]
                         logout pada menu    diarahkan        Berhasil\
                         navigasi            kembali ke login \[ \] Tidak
                                                              Berhasil

  4    Proteksi URL      Mengakses URL admin Sistem memaksa   \[√\]
                         tanpa login         redirect ke      Berhasil\
                                             halaman login    \[ \] Tidak
                                                              Berhasil

  B    MANAJEMEN                                              
       PENYAKIT                                               

  5    Lihat Daftar      Mengklik menu       Menampilkan      \[√\]
       Penyakit          \"Penyakit\" di     tabel data       Berhasil\
                         sidebar             penyakit secara  \[ \] Tidak
                                             lengkap          Berhasil

  6    Tambah Penyakit   Mengisi form tambah Data baru        \[√\]
                         (nama, deskripsi,   tersimpan dan    Berhasil\
                         solusi, foto)       muncul di tabel  \[ \] Tidak
                                                              Berhasil

  7    Validasi Tambah   Menekan simpan      Sistem           \[√\]
                         tanpa mengisi nama  memberikan       Berhasil\
                         penyakit            peringatan input \[ \] Tidak
                                             wajib diisi      Berhasil

  8    Update Penyakit   Mengubah deskripsi  Perubahan        \[√\]
                         penyakit yang sudah tersimpan secara Berhasil\
                         ada                 permanen di      \[ \] Tidak
                                             database         Berhasil

  9    Hapus Penyakit    Menekan ikon hapus  Data terhapus    \[√\]
                         dan mengonfirmasi   dan hilang dari  Berhasil\
                         modal               daftar tabel     \[ \] Tidak
                                                              Berhasil

  C    MANAJEMEN GEJALA                                       

  10   Lihat Daftar      Mengklik menu       Menampilkan      \[√\]
       Gejala            \"Gejala\" di       daftar kode dan  Berhasil\
                         sidebar             deskripsi gejala \[ \] Tidak
                                                              Berhasil

  11   Tambah Gejala     Menginput kode      Kode gejala baru \[√\]
                         (mis: G08) dan      berhasil         Berhasil\
                         deskripsi gejala    didaftarkan      \[ \] Tidak
                                                              Berhasil

  12   Update Gejala     Memperbaiki typo    Deskripsi        \[√\]
                         pada deskripsi      terbaru          Berhasil\
                         gejala              tersimpan dengan \[ \] Tidak
                                             sukses           Berhasil

  13   Hapus Gejala      Menghapus gejala    Data gejala      \[√\]
                         yang sudah tidak    berhasil dihapus Berhasil\
                         digunakan           dari sistem      \[ \] Tidak
                                                              Berhasil

  D    MANAJEMEN ATURAN                                       
       (BASIS                                                 
       PENGETAHUAN)                                           

  14   Lihat Aturan      Mengklik menu       Menampilkan      \[√\]
                         \"Aturan\" di       relasi penyakit, Berhasil\
                         sidebar             gejala, dan CF   \[ \] Tidak
                                             Pakar            Berhasil

  15   Tambah Aturan     Memilih penyakit,   Relasi pakar     \[√\]
                         gejala, dan mengisi baru berhasil    Berhasil\
                         nilai CF            ditambahkan      \[ \] Tidak
                                                              Berhasil

  16   Update Aturan     Mengubah nilai CF   Nilai CF terbaru \[√\]
                         Pakar (mis: dari    diperbarui di    Berhasil\
                         0.8 ke 0.9)         sistem           \[ \] Tidak
                                                              Berhasil

  17   Hapus Aturan      Menghapus salah     Aturan tersebut  \[√\]
                         satu baris relasi   tidak lagi       Berhasil\
                         aturan              dipakai dalam    \[ \] Tidak
                                             diagnosa         Berhasil

  E    MANAJEMEN                                              
       PENGGUNA (USERS)                                       

  18   Lihat Daftar User Mengklik menu       Menampilkan      \[√\]
                         \"Pengguna\" di     daftar username, Berhasil\
                         sidebar             email, dan role  \[ \] Tidak
                                                              Berhasil

  19   Tambah User Baru  Admin mendaftarkan  Akun baru aktif  \[√\]
                         user baru secara    dan bisa         Berhasil\
                         manual              digunakan login  \[ \] Tidak
                                                              Berhasil

  20   Update Data User  Mengubah status     Status pengguna  \[√\]
                         user                berubah sesuai   Berhasil\
                         (Aktif/Non-aktif)   pengaturan       \[ \] Tidak
                         atau Role                            Berhasil

  21   Hapus User        Menghapus akun      Data pengguna    \[√\]
                         pengguna tertentu   dihapus permanen Berhasil\
                                             dari sistem      \[ \] Tidak
                                                              Berhasil

  F    FITUR DIAGNOSA                                         
       (CERTAINTY                                             
       FACTOR)                                                

  22   Registrasi        User baru mengisi   Akun tersimpan   \[√\]
       Mandiri           form daftar di      dan user         Berhasil\
                         halaman publik      diarahkan ke     \[ \] Tidak
                                             dashboard        Berhasil

  23   Input Gejala      Memilih beberapa    Pilihan gejala   \[√\]
                         gejala dan tingkat  tersimpan        Berhasil\
                         keyakinan           sementara untuk  \[ \] Tidak
                                             diproses         Berhasil

  24   Proses Hitung CF  Menekan tombol      Sistem           \[√\]
                         \"Proses Diagnosa\" menghitung CF    Berhasil\
                                             Pakar \* CF User \[ \] Tidak
                                             (CF Kombinasi)   Berhasil

  25   Hasil Diagnosa    Menampilkan hasil   Menampilkan      \[√\]
                         akhir diagnosa      penyakit dengan  Berhasil\
                                             persentase       \[ \] Tidak
                                             tertinggi        Berhasil

  26   Solusi Penyakit   Membaca bagian      Solusi yang      \[√\]
                         solusi pada hasil   ditampilkan      Berhasil\
                         diagnosa            sesuai dengan    \[ \] Tidak
                                             penyakitnya      Berhasil

  G    RIWAYAT &                                              
       INFORMASI                                              

  27   Lihat Riwayat     User melihat daftar Menampilkan      \[√\]
                         diagnosa sebelumnya tanggal,         Berhasil\
                                             penyakit, dan    \[ \] Tidak
                                             hasil (%)        Berhasil

  28   Detail Riwayat    Klik detail pada    Menampilkan      \[√\]
                         salah satu baris    kembali halaman  Berhasil\
                         riwayat             hasil diagnosa   \[ \] Tidak
                                             lama             Berhasil

  29   Hapus Riwayat     Menghapus riwayat   Baris riwayat    \[√\]
                         diagnosa tertentu   hilang dari      Berhasil\
                                             daftar user      \[ \] Tidak
                                                              Berhasil

  30   Ensiklopedia      Membuka daftar      User bisa        \[√\]
                         penyakit di halaman membaca          Berhasil\
                         publik              informasi        \[ \] Tidak
                                             penyakit tanpa   Berhasil
                                             login            

  31   Pencarian         Mencari data pada   Tabel memfilter  \[√\]
                         tabel (Admin)       data secara      Berhasil\
                                             real-time        \[ \] Tidak
                                                              Berhasil

  32   Responsivitas     Mengakses web       Tampilan         \[√\]
                         melalui perangkat   menyesuaikan     Berhasil\
                         mobile              ukuran layar     \[ \] Tidak
                                             (Responsive)     Berhasil
  ---- ----------------- ------------------- ---------------- -----------

  : Tabel 4 . 15[]{#_Toc948804954 .anchor} Tabel Pengujian

[]{#_Toc868687151 .anchor}

**BAB V**

[]{#_Toc407348806 .anchor}**PENUTUP**

[]{#_Toc37787149 .anchor}**5.1 Kesimpulan**

Sistem Pakar Diagnosa Penyakit Tanaman Kangkung Berbasis Web ini
dibangun dengan menggunakan metode pengembangan RAD (Rapid Application
Development) dengan tahapan yaitu: Perencanaan Kebutuhan, Desain Sistem,
Proses Pengembangan, Pengumpulan Feedback, serta Implementasi atau
Penyelesaian Produk. Perencanaan kebutuhan sistem dilakukan dengan
menggunakan beberapa alat perancangan sistem yaitu Flowchart Sistem, UML
yang terdiri dari Use Case Diagram dan Activity Diagram dengan aktor
Admin dan Pengguna (User). Perancangan database dilakukan dengan Entity
Relationship Diagram (ERD) yang merelasikan 5 tabel utama yaitu
tabel users, penyakit, gejala, aturan, dan diagnosa_history. Perancangan
arsitektur menggunakan bahasa pemrograman Python dengan framework
FastAPI dan database PostgreSQL. Luaran yang dihasilkan berupa hasil
diagnosa penyakit kangkung air yang dilengkapi dengan nilai Certainty
Factor (CF) serta solusi penanganannya. Pengujian fungsional dilakukan
menggunakan metode Black Box Testing untuk memastikan seluruh fitur
berjalan dengan baik.

[]{#_Toc473952600 .anchor}

**5.2 Saran**

Berdasarkan hasil penelitian dan implementasi sistem, terdapat beberapa
saran yang dapat dikemukakan untuk pengembangan lebih lanjut:

1.  Agar sistem dapat bekerja secara efektif dan efisien, diperlukan
    admin yang memiliki pemahaman dasar mengenai penyakit tanaman
    kangkung dalam pengoperasian data basis pengetahuan.

2.  Perlu diadakan edukasi atau panduan bagi pengguna (petani) tentang
    bagaimana cara mengamati gejala tanaman secara akurat agar input
    yang dimasukkan ke sistem menghasilkan diagnosa yang tepat.

3.  Penerapan sistem sebaiknya didukung oleh perangkat keras dan koneksi
    internet yang memadai agar proses akses dashboard admin dan
    konsultasi pengguna berjalan lancar.

4.  Diharapkan pengelola sistem terus mengevaluasi dan memperbarui data
    Certainty Factor (CF) pakar secara berkala sesuai dengan
    perkembangan kondisi di lapangan agar tingkat akurasi diagnosa tetap
    terjaga dan sistem menjadi lebih sempurna.

[]{#_Toc822000567 .anchor}**DAFTAR PUSTAKA**

Akbar, I. S., & Haryanti, T. (2021). Pengembangan Entity Relationship
Diagram Database Toko Online Ira Surabaya. *Computing Insight : Journal
of Computer Science*, *3*(2), 28--35.
https://doi.org/10.30651/comp_insight.v3i2.12002

Baer, R. (2025, May 15). Zed: A Next Generation AI Powered Code Editor
for Modern Developers. *Medium*.
https://medium.com/@robert-baer/zed-a-next-generation-ai-powered-code-editor-for-modern-developers-5c77125544c5

Bligania, B., Pristyanto, Y., Sismoro, H., Astuti, Y., & Nugraha, A. F.
(2024). DIAGNOSIS OF CUCUMBER PLANT DISEASES USING CERTAINTY FACTOR AND
FORWARD CHAINING METHODS. *Jurnal Techno Nusa Mandiri*, *21*(1), 1--8.
https://doi.org/10.33480/techno.v21i1.5355

Dueñas-López, M. A. (2023a). Ipomoea aquatica (swamp morning-glory).
*CABI Compendium*, *CABI Compendium*, 28781.
https://doi.org/10.1079/cabicompendium.28781

Dueñas-López, M. A. (2023b). Ipomoea aquatica (swamp morning-glory).
*CABI Compendium*, *CABI Compendium*, 28781.
https://doi.org/10.1079/cabicompendium.28781

Elhalid, O. B., Alm Alhelal, Z., & Hassan, S. (2023). Exploring the
Fundamentals of Python Programming: A Comprehensive Guide for Beginners.
*SSRN Electronic Journal*. https://doi.org/10.2139/ssrn.4612765

Elvanni, I. E., Pratama, A., & Sahputra, I. (2025). Sistem Pakar
Diagnosa Penyakit Tanaman Kelapa Sawit Menggunakan Metode Certainty
Factor (Studi Kasus: Pt Evans Simpang Kiri Plantation Aceh Tamiang).
*JUSTIN (Jurnal Sistem dan Teknologi Informasi)*, *13*(1), 74--82.
https://doi.org/10.26418/justin.v13i1.83511

Fajrizal, Handayani, S., Taslim, Walhidayat, & Syahril. (2025).
PELATIHAN PEMROGRAMAN JAVASCRIPT BAGI SISWA SMK INOVASI RIAU.
*J-COSCIS : Journal of Computer Science Community Service*, *5*(1),
37--45. https://doi.org/10.31849/jcoscis.v5i1.22458

Goda, K. D., & Bay, J. R. (2024). Forward Chaining Method in Expert
System for Diagnosing Pests and Plant Diseases: A Systematic Literature
Review. *Journal of Artificial Intelligence and Engineering Applications
(JAIEA)*, *3*(3), 870--875. https://doi.org/10.59934/jaiea.v3i3.535

Ibrahim, A. M., & Rahman, A. (2021). Identifikasi Penyakit Tanaman
Bawang Merah Varietas Bima Menggunakan Metode Forward Chainning Dan
Certainty Factor. *INTECH*, *2*(1), 7--12.
https://doi.org/10.54895/intech.v2i1.825

Kartono, F. K., Nursaadah, S., Nugroho, M. R., Tama, D. A., Mashudi, F.
A., Wicaksono, A., & Nasir, M. (2024). Pengujian Black Box Testing Pada
Sistem Website Osha Snack: Pendekatan Teknik Boundary Value Analysis.
*Jurnal Kridatama Sains dan Teknologi*, *6*(02), 754--766.
https://doi.org/10.53863/kst.v6i02.1407

Khoulah 'Afiifah, Azzahra, Z. F., & Anggoro, A. D. (2022). Analisis
Teknik Entity-Relationship Diagram dalam Perancangan Database Sebuah
Literature Review. *INTECH*, *3*(2), 70--74.
https://doi.org/10.54895/intech.v3i2.1682

Kodors, S., Apeinans, I., Zarembo, I., & Lonska, J. (2025). RecGen:
No-Coding Shell of Rule-Based Expert System with Digital Twin and
Capability-Driven Approach Elements for Building Recommendation Systems.
*Applied Sciences*, *15*(19). https://doi.org/10.3390/app151910482

Listyoningrum, K. I., Fenida, D. Y., & Hamidi, N. (2023). Inovasi
Berkelanjutan dalam Bisnis: Manfaatkan Flowchart untuk Mengoptimalkan
Nilai Limbah Perusahaan. *Jurnal Informasi Pengabdian Masyarakat*,
*1*(4), 100--112. https://doi.org/10.47861/jipm-nalanda.v1i4.552

Mardiansyah, A., Kasah, B. N., Zamzami, H. R., Arabu, M. Y., Nasro, M.
A., Kristanto, N., Paojiah, R., & Wulandari, Y. (2025). PENGENALAN DASAR
HTML DAN CSS: LANGKAH PERTAMA DALAM PENGEMBANGAN WEB. *Abdi Jurnal
Publikasi*, *3*(3), 165--170.

Nasrulloh, I. A., Raharja, P. A., & Arifa, A. B. (2022). SISTEM PAKAR
DIAGNOSIS HAMA DAN PENYAKIT PADA TANAMAN KANGKUNG MENGGUNAKAN METODE
FORWARD CHAINING. *Jurnal Saintekom : Sains, Teknologi, Komputer Dan
Manajemen*, *12*(2), 146--157.
https://doi.org/10.33020/saintekom.v12i2.321

Novhela, S., Liana, L., Febriani, B., Mubarok, Z., Zahir, M. I., Umayah,
A., Gunawan, B., & Arsi, A. (2023). Spesies Hemiptera pada Tanaman
Kangkung (Ipomoea aquatica) di Kabupaten Ogan Ilir, Sumatera Selatan.
*Seminar Nasional Lahan Suboptimal*, *10*(1), 742--750.

Oktaroza, M. L., & Setiawan, A. (2025). EFEKTIVITAS DAN USABILITY USER
INTERFACE DALAM APLIKASI MODERN: TINJAUAN SISTEMATIS MELALUI STUDI
LITERATUR REVIEW. *Jurnal Manajemen Terapan Dan Keuangan*, *14*(02),
475--486. https://doi.org/10.22437/jmk.v14i2.43273

Pérez-Pazos, J., Rosero, A., Cardinale, M., & Gámez, R. (2023).
Development of control strategies for bacteria and fungi associated with
a micropropagated new cultivar of orange-fleshed sweet potato (Ipomoea
batatas cv. Agrosavia--Aurora). *Horticulture, Environment, and
Biotechnology*, *64*(5), 859--875.
https://doi.org/10.1007/s13580-023-00521-2

Putri, N. S. E., Nugraha, P. E. P., Sulistiono, S., & Rahmawati, I.
(2024). Struktur Morfologi Kangkung Air (Ipomoea aquatica) Asal Area
Kediri Raya. *Prosiding Seminar Nasional Kesehatan, Sains Dan
Pembelajaran*, *3*(1), 201--205. https://doi.org/10.29407/sw07gy88

Rahayu, K. D., Thei, R. S. P., & Sarjan, M. (2023). KERAGAMAN DAN
KELIMPAHAN HAMA PADA TANAMAN KANGKUNG AIR (Ipomea aquatic F.) DI
KABUPATEN LOMBOK BARAT. *AGROTEKSOS*, *33*(2), 645--653.
https://doi.org/10.29303/agroteksos.v33i2.968

Rifandi, F., Adriansyah, T. V., & Kurniawati, R. (2022). Website Gallery
Development Using Tailwind CSS Framework. *Jurnal E-Komtek
(Elektro-Komputer-Teknik)*, *6*(2), 205--214.
https://doi.org/10.37339/e-komtek.v6i2.937

Rusito, R., & Putra, T. W. A. (2022). Perancangan Sistem Pakar Untuk
Mendekteksi Kerusakan Komputer Dengan Metode Certainty Factor. *JURNAL
TEKNOLOGI INFORMASI DAN KOMUNIKASI*, *13*(1), 70--81.
https://doi.org/10.51903/jtikp.v13i1.307

S, M. F. A., Junedi, H., & Arzita, A. (2025). Pengaruh Empat Jenis Ikan
terhadap Hasil Tanaman Kangkung Air (Ipomoea Aquatica Forssk.) pada
Akuaponik Sistem Budikdamber. *Jurnal SainTek*, *1*(2), 197--209.
https://doi.org/10.33830/saintek.v1i2.11600.2025

Safitri, L., & Murtiwiyati, M. (2023). SISTEM PAKAR BERBASIS WEB UNTUK
MENDIAGNOSIS PENYAKIT DAN HAMA TANAMAN KANGKUNG MENGGUNAKAN METODE
CERTAINTY FACTOR. *Jurnal Ilmiah Flash*, *9*, 42.
https://doi.org/10.32511/flash.v9i1.1072

Salunke, S. V., & Ouda, A. (2024). A Performance Benchmark for the
PostgreSQL and MySQL Databases. *Future Internet*, *16*(10).
https://doi.org/10.3390/fi16100382

Wibowo, N. S., Aziziah, M., Wiryawan, I. G., & Rosdiana, E. (2022).
Implementasi Metode Regresi Linier Pada Rancang Bangun Sistem Informasi
Monitoring Nutrisi Tanaman Hidroponik Kangkung. *Jurnal Teknologi
Informasi Dan Multimedia*, *4*(1), 13--24.
https://doi.org/10.35746/jtim.v4i1.186

Wulansari, R. E., Sakti, R. H., Ambiyar, A., Giatman, M., Syah, N., &
Wakhinuddin, W. (2022). Expert System For Career Early Determination
Based On Howard Gardner's Multiple Intelligence. *Journal of Applied
Engineering and Technological Science (JAETS)*, *3*(2), 67--76.
https://doi.org/10.37385/jaets.v3i2.568

[]{#_Toc1167046084 .anchor}**LAMPIRAN**

![Lampiran 1[]{#_Toc891134977 .anchor} Kantor Dinas
Pertanian](media/image60.jpeg){alt="lampiran1"
width="5.733333333333333in" height="4.3in"}

![Lampiran 2[]{#_Toc1602067173 .anchor} Ruang
tunggu](media/image61.jpeg){alt="lampiran2" width="5.733333333333333in"
height="4.3in"}

![Lampiran 3[]{#_Toc641789228 .anchor} Kantor BPP Kec.
Narmada](media/image62.jpeg){alt="lampiran3" width="5.670833333333333in"
height="6.347916666666666in"}

![Lampiran 4[]{#_Toc1862147594 .anchor} Kantor BPP Kec.
Narmada](media/image63.jpeg){alt="lampiran4" width="5.003472222222222in"
height="4.574305555555555in"}
