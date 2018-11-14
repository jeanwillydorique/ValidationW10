@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="col-md-8">
                        <table class="arenas" >
                            <tr>
                                <th>Arena Name</th>
                                <th>Capacity</th> 
                                <th>Localisation</th>
                                <th>Status</th>
                                <th>IMG</th>
                            </tr>
                            <tr>
                                <td>{{$arena->name}}</td>
                                <td>{{$arena->places}}</td>
                                <td>{{$arena->localisation}}</td>
                                <td>{{$arena->reservation->name}}</td>
                                <td><img src="{{$arena->img}}" class="img"></td>
                            </tr>    
                        </table></br></br></br>
                        <form method="post" action="/updatearenasaction" class="formulaire">
                            @csrf
                                <input type="hidden" name="id" value="{{$arena->id}}">
                                <label>New name</label></br></br>
                                <input type="texte" name="name" value="{{$arena->name}}"></br></br>
                                <label>New number of place</label></br></br>
                                <input type="texte" name="place" value="{{$arena->places}}"></br></br>
                                <label>New localisation</label></br></br>
                                <input type="texte" name="localisation" value="{{$arena->localisation}}"></br></br>
                                <label>Reserved or not ( check to reserved ) </label></br></br>
                                <input type="checkbox" name="reservation"
                                    @if ($arena->reservation->id === 1)
                                        checked
                                    @endif
                                ></br>
                                <label>New Link Image</label></br>
                                <p>"Please Insert New Link Image" or enter "None" if don't have image</p>
                                <input type="texte" name="img" value="{{$arena->img}}"></br>
                                <input type="submit" value="Update Arena"></a></br>
                        </form>     
        </div>
    </div>
</div>

@endsection
