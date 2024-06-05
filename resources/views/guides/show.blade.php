
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .user-info {
            margin-top: 30px;
        }
        .user-info p {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .user-info label {
            font-weight: bold;
        }
        .user-info img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Guide Information</h1>
    <div class="user-info">
        <p><label>Name:</label> {{ $user->name }}</p>
        <p><label>Last Name:</label> {{ $user->prenom }}</p>
        <p><label>Username:</label> {{ $user->username }}</p>
        <p><label>Date of Birth:</label> {{ $user->date_naissance }}</p>
        <p><label>Certificate:</label> {{ $user->sertificat }}</p>
        <p><label>CINE:</label> {{ $user->cine }}</p>
        <p><label>Email:</label> {{ $user->email }}</p>
        <p><label>Photo:</label></p>
        <img src="{{ asset('images/' . $user->photo) }}" alt="User Photo">
    </div>
</div>

</body>
</html>
