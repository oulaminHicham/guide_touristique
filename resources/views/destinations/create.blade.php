<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">

</head>
<body>
    <form style="width: 80%;border-radius: 9px;border: solid 1px #dfdfdf;margin: auto;padding: 39px;" method='post' action="{{route('destinations.store')}}" class="my-5 bg-light-subtle">
        @csrf
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <a class=" nav-link" href="{{route("destinations.index")}}" aria-hidden="true">&times;</a>
        </button>
        <h1>ajouter un distination :</h1>
        <label >Nom </label>
        <input class="form-control" type="text" name="nom" >
        <br>
        <label >photo </label>
        <input class="form-control"  type="file" name="photo" id="heure">
        <br>

        <input  class="btn btn-primary btn-block mb-4" type="submit" value="ajouter">
</form>


</body>
</html>


