<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 50px;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }
    </style>
</head>
<body>  

    <div class="container">
        <h1 class="my-4">Edit Client</h1>
        <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">First Name</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $client->prenom }}" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $client->username }}" required>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date of Birth</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $client->date_naissance }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cine">CIN</label>
                        <input type="text" class="form-control" id="cine" name="cine" value="{{ $client->cine }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sertificat">Certificate</label>
                        <input type="file" class="form-control" id="sertificat" name="sertificat" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Update Client</button>
        </form>
    </div>

</body>
</html>
