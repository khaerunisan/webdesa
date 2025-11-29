<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Surat Resmi</title>
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* Variabel Warna & Font */
        :root {
            /* Warna latar belakang body di Figma terlihat seperti pink/beige muda (#fcebeb) */
            --color-background-main: #fcebeb; 
            --color-paper: #ffffff; /* Warna kertas surat */
            --color-header-line: #000000;
            --text-color: #000000;
            --font-family-body: 'Times New Roman', Times, serif;
        }

        /* Gaya Body & Container */
        body {
            background-color: var(--color-background-main); 
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Mulai dari atas */
            padding: 40px 20px;
            color: var(--text-color);
            font-family: var(--font-family-body);
        }

        /* Kertas Surat (A4-like) */
        .paper {
            width: 100%;
            max-width: 794px; /* Lebar mendekati A4 */
            min-height: 1123px; /* Tinggi mendekati A4 */
            background-color: var(--color-paper);
            padding: 50px 70px; /* Margin kertas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            line-height: 1.6;
            font-size: 12pt;
        }
        
        /* Baris Kop Surat */
        .kop-surat {
            text-align: center;
            border-bottom: 3px solid var(--color-header-line);
            padding-bottom: 5px;
            margin-bottom: 20px;
        }
        
        .kop-surat p {
            font-size: 12pt; /* Lebih kecil agar tidak terlalu tebal */
            font-weight: bold;
            margin: 0;
            line-height: 1.2;
        }

        /* Bagian Kepala Surat (Nomor, Perihal, Tanggal) */
        .kepala-surat {
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            font-size: 11pt;
            /* Garis bawah dari tanggal */
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            width: 90%; /* Hanya selebar teks di kanan */
            margin-left: auto;
        }
        
        .kepala-surat .col-kiri {
            text-align: left;
            flex-basis: 70%; /* Ruang lebih besar untuk detail surat */
        }
        
        /* Table digunakan untuk perataan titik dua yang rapi */
        .kepala-surat table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .kepala-surat table td {
            padding: 0;
        }
        
        .kepala-surat table td:nth-child(2) {
            width: 10px; /* Lebar kecil untuk titik dua */
        }

        .kepala-surat .col-kanan {
            text-align: right;
            line-height: 1.5;
            flex-basis: 30%;
        }

        /* Tujuan Surat */
        .tujuan-surat {
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 11pt;
            padding-left: 50px; /* Indentasi agar sesuai gambar */
        }
        
        .tujuan-surat .label {
            margin-bottom: 5px;
        }
        
        .tujuan-surat .kepada {
            font-weight: normal; 
            margin-left: 0;
        }

        /* Isi Surat */
        .isi-surat {
            text-align: justify;
            text-indent: 50px; /* Paragraf menjorok ke dalam */
            margin-bottom: 25px;
            font-size: 11pt;
        }
        
        /* Penutup (Paragraf terakhir) */
        .penutup {
            text-indent: 50px;
            margin-bottom: 50px;
            font-size: 11pt;
        }

        /* Tanda Tangan */
        .tanda-tangan {
            display: flex;
            justify-content: flex-end;
            text-align: center;
            font-size: 11pt;
        }
        
        .ttd-box {
            width: 250px;
        }
        
        .ttd-box .nama {
            margin-top: 60px; /* Ruang untuk tanda tangan */
            text-decoration: underline;
            font-weight: bold;
        }
        
        .ttd-box .jabatan {
            margin-top: 5px;
        }
        
        .ttd-box p {
            margin: 0;
            line-height: 1.5;
        }

    </style>
</head>
<body>
    <div class="paper">
        
        <div class="kepala-surat">
            <div class="col-kiri">
                </div>
            <div class="col-kanan">
                Jakarta,
                <div style="font-size: 10pt; margin-top: 5px;">01 Maret 2025</div>
            </div>
        </div>
        
        <div style="font-size: 11pt; margin-bottom: 20px;">
            <div style="padding-left: 50px;">
                <p style="font-weight: bold; margin: 0;">00A/PP/BA/03/2025</p>
                <p style="font-size: 10pt; margin: 0;">Perihal: Permohonan Perpanjangan Kerjasama</p>
            </div>
        </div>

        <div class="tujuan-surat">
            <div class="label">Kepada Yth,</div>
            <div class="kepada">
                Bapak Pimpinan/Direktur (KRK)<br>
                Pelaksana Pemeliharaan Kebersihan Kawasan di Kota Baru Bandar Kemayoran<br>
                Di tempat
            </div>
        </div>
        
        <div class="isi-surat">
            <p>
                Dengan hormat, berdasarkan Surat Perjanjian Kerja Sama (Kerjasama) Nomor KRK-Layananinfor/03/2025 tanggal 03 Maret 2025 tentang Pekerjaan Pemeliharaan Kebersihan Kawasan di Kota Baru Bandar Kemayoran.
            </p>
            <p>
                Dengan ini kami mohon Bapak/Ibu Direktur/Pimpinan (KRK) Pelaksana Pemeliharaan Kawasan di Kota Baru Bandar Kemayoran untuk melaksanakan pekerjaan tersebut, dimana saat ini pekerjaan telah mencapai bobot 100% dan harus selesai pada akhir Maret 2025.
            </p>
        </div>
        
        <div class="penutup">
            <p>
                Demikian surat permohonan ini kami sampaikan atas perhatian dan kerjasamanya kami ucapkan terima kasih.
            </p>
        </div>

        <div class="tanda-tangan">
            <div class="ttd-box">
                <p>Hormat Kami,</p>
                <p>PT. Sumber Bakti</p>
                <p class="nama">Salsila Suwarni/S.Kom</p>
                <p class="jabatan">Direktur</p>
            </div>
        </div>
        
    </div>
</body>
</html>