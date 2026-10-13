<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik FAST</title>

    <style>
        *{margin:0;padding:0;box-sizing:border-box;}

        body{
            font-family:Segoe UI, Arial, sans-serif;
            background:#eef2f6;
        }

        /* HEADER */
        .top-header{
            background:linear-gradient(90deg,#0b4f75,#003e5c);
            color:white;
            padding:18px 30px;
        }

        .top-header h1{
            font-size:34px;
            font-weight:bold;
        }

        .top-header p{
            font-size:14px;
            opacity:.9;
        }

        /* MENU */
        .navbar{
            background:#1398d5;
            padding:12px 30px;
        }

        .navbar a{
            color:white;
            text-decoration:none;
            margin-right:25px;
            font-weight:500;
        }

        /* JUDUL */
        .page-title{
            background:white;
            padding:22px 30px;
            border-bottom:1px solid #ddd;
        }

        .page-title h2{
            color:#3d5f77;
            margin-bottom:4px;
        }

        .page-title small{
            color:#888;
        }

        /* LAYOUT */
        .container{
            display:grid;
            grid-template-columns:3fr 1fr;
            gap:25px;
            padding:25px 30px;
        }

        .card{
            background:white;
            border-radius:6px;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
            overflow:hidden;
        }

        .card-header{
            padding:14px 18px;
            font-weight:bold;
            color:#0f8aa8;
            border-bottom:1px solid #e8e8e8;
        }

        .card-body{
            padding:18px;
        }

        .announcement{
            background:#edf3f7;
            padding:15px;
            border-radius:4px;
            line-height:1.7;
        }

        .announcement ul{
            margin-left:18px;
        }

        .news{
            display:flex;
            gap:18px;
            margin-top:15px;
        }

        .news img{
            width:170px;
            border-radius:6px;
        }

        .btn{
            display:inline-block;
            margin-top:12px;
            background:#1594d4;
            color:white;
            text-decoration:none;
            padding:10px 18px;
            border-radius:4px;
            font-size:14px;
        }

        /* LOGIN */
        .login-title{
            font-size:30px;
            margin-bottom:18px;
            color:#444;
        }

        input{
            width:100%;
            padding:11px;
            margin-bottom:12px;
            border:1px solid #ccc;
            border-radius:4px;
        }

        button{
            width:100%;
            background:#1695d4;
            color:white;
            border:none;
            padding:11px;
            border-radius:4px;
            font-weight:bold;
            cursor:pointer;
        }

        .info-box{
            margin-top:18px;
            background:#1d4058;
            color:white;
            padding:14px;
            border-radius:4px;
        }

        .info-box h4{
            margin-bottom:8px;
        }

        .info-box small{
            color:#d5e6ef;
        }

        @media(max-width:900px){
            .container{
                grid-template-columns:1fr;
            }

            .news{
                flex-direction:column;
            }

            .news img{
                width:100%;
            }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <div class="top-header">
        <h1>🎓 SIAKAD MAHASISWA</h1>
        <p>Fakultas Sains dan Teknologi Terapan - Universitas Ahmad Dahlan</p>
    </div>

    <!-- MENU -->
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Mahasiswa</a>
        <a href="#">Dosen</a>
        <a href="#">KRS</a>
        <a href="#">KHS</a>
    </div>

    <!-- TITLE -->
    <div class="page-title">
        <h2>Sistem Akademik</h2>
        <small>Selamat Datang di Sistem Informasi Akademik FAST UAD</small>
    </div>

    <!-- CONTENT -->
    <div class="container">

        <!-- KIRI -->
        <div>

            <div class="card">
                <div class="card-header">
                    📢 INFO PENGUMUMAN
                </div>

                <div class="card-body">

                    <div class="announcement">
                        <strong>Info Akademik:</strong>

                        <ul>
                            <li>Mahasiswa wajib melakukan pengisian KRS sesuai jadwal.</li>
                            <li>Pembayaran UKT dilakukan sebelum masa KRS berakhir.</li>
                            <li>Pastikan seluruh data mahasiswa sudah tervalidasi.</li>
                        </ul>

                        <br>

                        <strong>Info FAST:</strong>

                        <ul>
                            <li>Praktikum dimulai minggu ke-3 perkuliahan.</li>
                            <li>Portal akademik akan diperbarui setiap semester.</li>
                        </ul>
                    </div>

                </div>
            </div>

            <br>

            <div class="card">

                <div class="card-header">
                    📰 BERITA AKADEMIK
                </div>

                <div class="card-body">

                    <div class="news">

                        <AsyncImage query="University students soft skills seminar poster" aspectRatio="5:6" maxWidth="170px"/>

                        <div>
                            <h3>Pendaftaran Pelatihan Soft Skills FAST 2026</h3>

                            <p style="margin-top:10px;line-height:1.7;color:#555;">
                                Pelatihan Soft Skills bagi mahasiswa FAST resmi dibuka.
                                Kegiatan bertujuan meningkatkan kemampuan komunikasi,
                                kepemimpinan, dan kerja tim mahasiswa.
                            </p>

                            <a href="#" class="btn">READ MORE</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- KANAN -->
        <div>

            <div class="card">

                <div class="card-body">

                    <div class="login-title">
                        Login
                    </div>

                    <input type="text" placeholder="NIM">

                    <input type="password" placeholder="Password">

                    <button>LOGIN</button>

                    <p style="margin-top:15px;font-size:13px;color:#777;">
                        Lupa kata sandi? Hubungi BAA Universitas Ahmad Dahlan.
                    </p>

                </div>

            </div>

            <div class="info-box">
                <h4>📅 MASA KRS</h4>
                <small>03 Sept 2026 - 09 Sept 2026</small>
            </div>

            <div class="info-box">
                <h4>💳 PEMBAYARAN UKT</h4>
                <small>01 Sept 2026 - 15 Sept 2026</small>
            </div>

            <div class="info-box">
                <h4>🎓 STATUS AKADEMIK</h4>
                <small>Semester Ganjil 2026/2027</small>
            </div>

        </div>

    </div>

</body>
</html>