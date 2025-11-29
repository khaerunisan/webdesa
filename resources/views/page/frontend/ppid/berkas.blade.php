<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Permohonan Perpanjangan Kerjasama</title>
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* Variabel Warna & Font */
        :root {
            /* Latar belakang body disamakan dengan warna di Figma (#fcebeb) */
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
        
        /* Baris Kop Surat - Dibuat terpisah dari detail surat agar bisa rapi */
        .kop-surat-placeholder {
            text-align: center;
            border-bottom: 3px solid var(--color-header-line);
            padding-bottom: 5px;
            margin-bottom: 20px;
            height: 10px; /* Dibiarkan kosong/minimalis seperti di gambar */
        }
        
        /* Bagian Kepala Surat (Nomor, Perihal, Tanggal) */
        .kepala-surat {
            margin-bottom: 25px;
            font-size: 11pt;
            width: 100%;
            /* Garis di bawah tanggal */
            border-bottom: 1px solid var(--color-header-line);
            padding-bottom: 5px;
            /* Teks Jakarta, 01 Maret 2025 berada di kanan atas */
            text-align: right; 
        }

        .detail-surat {
            font-size: 11pt;
            margin-bottom: 20px;
            padding-left: 50px; /* Indentasi agar sesuai gambar */
        }
        
        .detail-surat table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .detail-surat td {
            padding: 0;
            vertical-align: top;
            line-height: 1.5;
        }
        
        .detail-surat td:nth-child(2) {
            width: 10px; /* Untuk titik dua */
            text-align: center;
        }
        
        .detail-surat .judul-surat {
            font-weight: bold; 
            margin-bottom: 5px; 
            display: block;
        }

        /* Tujuan Surat */
        .tujuan-surat {
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 11pt;
            padding-left: 50px; /* Indentasi agar sesuai gambar */
        }
        
        .tujuan-surat .kepada {
            font-weight: normal; 
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
        
        <div class="kop-surat-placeholder"></div>
        
        <div class="kepala-surat">
            Jakarta, 01 Maret 2025
        </div>
        
        <div class="detail-surat">
            <span class="judul-surat">00A/PP/BA/03/2025</span>
            <p>Perihal: Permohonan Perpanjangan Kerjasama</p>
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