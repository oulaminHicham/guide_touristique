{{-- @extends('layout')
@section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>  
    <div class="container mt-5">
        <h1 class="my-4 text-center text-primary">Add New Client</h1>
        <div class="card bg-light border-primary">
            <div class="card-body">
                <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label"><i class="fas fa-user"></i> Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="prenom" class="form-label"><i class="fas fa-user"></i> First Name</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label"><i class="fas fa-user-tag"></i> Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_naissance" class="form-label"><i class="fas fa-calendar-alt"></i> Date of Birth</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="sertificat" class="form-label"><i class="fas fa-file-alt"></i> Certificate</label>
                        <input type="file" class="form-control" id="sertificat" name="sertificat" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="cine" class="form-label"><i class="fas fa-id-card"></i> CIN</label>
                        <input type="text" class="form-control" id="cine" name="cine" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="photo" class="form-label"><i class="fas fa-camera"></i> Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add Client</button>
                </form>
            </div>
        </div>
    </div>
{{-- @endsection --}}
</body>