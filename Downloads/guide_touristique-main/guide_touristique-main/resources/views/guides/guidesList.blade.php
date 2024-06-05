@extends('layout')
@section('content')
                <link rel="stylesheet" href="guidesList.css">
                <div class="guides--list">
                    <div class="list--guid">
                        <h4>Tous les guides</h4>
                     {{-- //design button ajouter --}}
                     <a href="{{ route('guides.create') }}" style="color: #bc8643"><i class="fas fa-plus-square"></i></a>
                    </div>
                    <div class="guid--content">

                        @foreach($users as $user)
                            <div class='list'>
                                <div class="guides--detait">
                                    <img src="{{ asset('images/' . $user['photo']) }}" alt="{{ $user['name'] }}" />
                                    <h4>{{ $user['name'] }} {{ $user['prenom'] }}</h4>
                                </div>
                                <div class="dropdown" style="display: flex">
                                        <a href="{{ route('guides.edit', $user['id']) }}"><i class="fas fa-pencil-alt"></i></a>

                                        <form action="{{ route('guides.destroy', $user['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        {{-- botton accepter if accepter = 0 --}}
                                        @if($user['accepter'] == 0)
                                        <form action="{{ route('guides.acceptGuide', $user['id']) }}" method="POST">
                                            @csrf
                                            <button type="submit">Accepter</button>
                                        </form>
                                    @endif

                               </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
    </div>
    </div>

    @endsection
