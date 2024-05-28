
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .btn-edit {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-edit:hover {
            background-color: #ffcd39;
            border-color: #ffcd39;
        }
    </style>
</head>
<body>  

    <div class="container mt-5">
        <h1 class="my-4">Client Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $client->name }} {{ $client->prenom }}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Username:</strong> {{ $client->username }}</p>
                        <p><strong>Date of Birth:</strong> {{ $client->date_naissance }}</p>
                        <p><strong>CIN:</strong> {{ $client->cine }}</p>
                        <p><strong>Email:</strong> {{ $client->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <!-- عرض الصورة -->
                        <p><strong>Sertificat:</strong></p>
                        <img src="{{ asset('storage/' . $client->sertificat) }}" alt="Sertificat" class="img-fluid rounded">
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('client.aficherClient') }}" class="btn btn-edit">Router</a>
                </div>
            </div>
        </div>
    </div>

</body>  
</html>