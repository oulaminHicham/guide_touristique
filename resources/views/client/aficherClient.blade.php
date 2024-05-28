<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
</head>
<body>  


    <h1 class="my-4">Clients List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>prenom</th>
                <th>Username</th>
                <th>Email</th>
                <th>date_naissance</th>
                <th>sertificat</th>
                <th>cine</th>
                <th>Actions</th>
            </tr>
        </thead>
            @foreach($client as $c)
                <tr>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->prenom }}</td>
                    <td>{{ $c->username }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->date_naissance }}</td>
                    <td>
                        <img src="{{ $c->sertificat }}" alt="Sertificat" style="max-width: 100px;">
                    </td>
                    <td>{{ $c->cine }}</td>
                
                    <td>
                        <a href="{{ route('client.detail', $c->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('client.edit', $c->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('client.delete', $c->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                       
                    </td>
                </tr>
            @endforeach
    </table>
    <a href="{{ route('client.add') }}" class="btn btn-primary mb-3">Add New Client</a>

</body>
</html>