<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Garage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            background:
            radial-gradient(circle at top left,#7c3aed,transparent 25%),
            radial-gradient(circle at bottom right,#06b6d4,transparent 25%),
            #050816;

            overflow-x:hidden;
            color:white;
        }

        .blur1{
            position:fixed;
            width:400px;
            height:400px;
            background:#7c3aed;
            filter:blur(150px);
            top:-100px;
            left:-100px;
            opacity:0.4;
            z-index:-1;
        }

        .blur2{
            position:fixed;
            width:400px;
            height:400px;
            background:#06b6d4;
            filter:blur(150px);
            bottom:-100px;
            right:-100px;
            opacity:0.4;
            z-index:-1;
        }

        .navbar-custom{
            width:92%;
            margin:25px auto;
            padding:18px 35px;

            background:rgba(255,255,255,0.08);

            border:1px solid rgba(255,255,255,0.1);

            backdrop-filter:blur(18px);

            border-radius:22px;

            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            font-size:28px;
            font-weight:700;
            letter-spacing:1px;
            color:#fff;
        }

        .menu a{
            text-decoration:none;
            color:#d1d5db;
            margin-left:20px;
            transition:0.3s;
            font-weight:500;
        }

        .menu a:hover{
            color:#22d3ee;
        }

        .hero{
            width:92%;
            margin:40px auto;

            padding:60px;

            background:rgba(255,255,255,0.06);

            border:1px solid rgba(255,255,255,0.1);

            backdrop-filter:blur(18px);

            border-radius:35px;

            box-shadow:0 10px 40px rgba(0,0,0,0.3);
        }

        .hero h1{
            font-size:60px;
            font-weight:700;
            line-height:1.1;
        }

        .hero span{
            color:#22d3ee;
        }

        .hero p{
            margin-top:18px;
            color:#cbd5e1;
            width:60%;
            line-height:1.8;
        }

        .content-box{
            width:92%;
            margin:auto;
            margin-bottom:40px;

            background:rgba(255,255,255,0.05);

            border:1px solid rgba(255,255,255,0.08);

            backdrop-filter:blur(18px);

            border-radius:35px;

            padding:35px;
        }

        .table{
            color:white;
        }

        .table thead{
            background:rgba(255,255,255,0.08);
        }

        .table td,
        .table th{
            border-color:rgba(255,255,255,0.08);
            padding:20px;
        }

        .plate{
            background:linear-gradient(135deg,#06b6d4,#7c3aed);
            padding:10px 18px;
            border-radius:14px;
            font-weight:600;
            display:inline-block;
        }

        .btn-neon{
            background:linear-gradient(135deg,#06b6d4,#7c3aed);
            border:none;
            color:white;
            padding:13px 24px;
            border-radius:14px;
            font-weight:600;
            transition:0.3s;
        }

        .btn-neon:hover{
            transform:scale(1.05);
            box-shadow:0 0 25px #06b6d4;
        }

        .btn-edit{
            background:#facc15;
            border:none;
            padding:10px 16px;
            border-radius:12px;
            font-weight:600;
        }

        .btn-delete{
            background:#ef4444;
            border:none;
            color:white;
            padding:10px 16px;
            border-radius:12px;
            font-weight:600;
        }

    </style>

</head>
<body>

<div class="blur1"></div>
<div class="blur2"></div>

<div class="navbar-custom">

    <div class="logo">
        ⚡ CYBER GARAGE
    </div>

    <div class="menu">
        <a href="/kendaraan">Dashboard</a>
        <a href="/kendaraan/create">Tambah</a>
    </div>

</div>

<div class="hero">

    <h1>
        Future <span>E-Bengkel</span><br>
        Management System
    </h1>

    <p>
        Sistem servis kendaraan modern dengan tampilan futuristic,
        glassmorphism, dan neon cyber interface.
    </p>

</div>

<div class="content-box">

    @yield('content')

</div>

</body>
</html>