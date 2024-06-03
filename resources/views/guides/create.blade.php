<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Guide</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #bc8643;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #6a4224;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Guide</h1>
        <div>
            @isset($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endisset
        </div>

        <form action="{{route('guides.store')}}" method="POST" >
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name"  value="{{old('name')}}">

            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom"  value="{{old('prenom')}}">

            <label for="username">Username</label>
            <input type="text" id="username" name="username"  value="{{old('username')}}">

            <label for="date_naissance">Date de naissance</label>
            <input type="date" id="date_naissance" name="date_naissance"  value="{{old('date_naissance')}}">

            <label for="sertificat">Sertificat</label>
            <input type="file" id="sertificat" name="sertificat"  value="{{old('sertificat')}}">

            <label for="cine">Cine</label>
            <input type="text" id="cine" name="cine"  value="{{old('cine')}}">

            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo"  value="{{old('photo')}}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email"  value="{{old('email')}}">

            <label for="password">Password</label>
            <input type="password" id="password" name="password"  value="{{old('password')}}">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
