<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="{{asset('jualin/images/favicon.ico')}}" type="image/x-icon" />


  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-container {
            display: flex;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            height: 90%; /* Sesuaikan tinggi container sesuai kebutuhan */
        }

        .profile-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%; /* Membuat gambar bundar */
            margin: 150px; /* Memberi jarak dari tepi container */
        }

        .profile-info {
            flex: 1;
            padding: 100px;
            text-align: left;
        }

        .profile-info h2 {
            margin: 2px 0;
            color: #333;
        }

        .profile-info p {
            margin: 5px 0;
            color: #777;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <img src="{{asset('jualin/alex.png')}}" alt="User Profile" class="profile-image">
    <div class="profile-info">
        <h2>Nama Pengguna</h2>
		<br>
        <p>Email: user@example.com</p>
		<br>
        <p>Alamat: Jl. Contoh No. 123, Kota Contoh</p>
    </div>
</div>

</body>
</html>
