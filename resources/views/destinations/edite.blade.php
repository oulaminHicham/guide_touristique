<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    <form style="width: 80%;border-radius: 9px;border: solid 1px #dfdfdf;margin: auto;padding: 39px;" method='post' action="{{route('distinations.update',$destination->id)}}" class="my-5 bg-light-subtle">
        @csrf
        @method("put")
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <a class=" nav-link" href="{{route("distinations.index")}}" aria-hidden="true">&times;</a>
        </button>

        <h1>Modifier un distination :</h1>
        <label > Nom</label>
        <input class="form-control" type="text" name="nom" value="{{$destination->nom}}" >
        <br>
        <label >Photo </label>
        <input class="form-control"  type="file" name="photo" id="heure" value="{{$destination->photo}}">

        <br>


        <input  class="btn btn-primary btn-block mb-4" type="submit" value="modifier">
</form>


</body>
</html>


