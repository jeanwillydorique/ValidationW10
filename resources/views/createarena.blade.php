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

                        <form method="post" action="/createarenaaction" class="formulaire">
                            @csrf
                                <label>New name</label></br>
                                <input type="texte" name="name"></br>
                                <label>New number of place</label></br>
                                <input type="number" name="place"></br>
                                <label>New localisation</label></br>
                                <input type="texte" name="localisation"></br>
                                <label>Reserved or not ( check to reserved ) </label></br>
                                <input type="checkbox" name="reservation"></br>
                                <label>New Link Image</label></br>
                                <p>"Please Insert New Link Image" or enter "None" if don't have image</p>
                                <input type="texte" name="img"></br>
                                <input type="submit" value="Create Arena"></a></br>
                        </form>     
        </div>
    </div>
</div>

@endsection
