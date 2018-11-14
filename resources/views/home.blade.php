@extends('layouts.app')

@section('content')

@guest

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <table class="arenas" >
                        <tr>
                          <th>Arena Name</th>
                          <th>Capacity</th> 
                          <th>
                              <p>Localisation</p>
                                <form method="post" action="/orderbylocalisation">
                                    @csrf
                                    <input type="submit" value="Trier">
                                </form>
                          </th>
                          <th>
                                <p>Status</p>
                                  <form method="post" action="/orderbystatus">
                                    @csrf
                                      <input type="submit" value="Trier">
                                  </form>
                            </th>
                          <th>Image</th>
                        </tr>
                    @foreach ($arenas as $arena)    
                        <tr>
                          <td>{{$arena->name}}</td>
                          <td>{{$arena->places}}</td>
                          <td>{{$arena->localisation}}</td>
                          <td>{{$arena->reservation->name}}</td>
                          <td><img src="{{$arena->img}}" class="img"></td>
                        </tr>
                     
                    @endforeach
                    </table>
        </div>
    </div>

                @else 

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
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
    
                        @foreach ($arenas as $arena)
                            <tr>
                                <td>{{$arena->name}}</td>
                                <td>{{$arena->places}}</td>
                                <td>{{$arena->localisation}}</td>
                                <td>{{$arena->reservation->name}}</td>
                                <td><img src="{{$arena->img}}" class="img"></td>
                                <td>
                                        <form method="post" action="/updatearenasviews">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$arena->id}}">
                                            <input type="submit" value="U">
                                        </form>
                                </td>
                                <td>
                                        <form method="post" action="/delete">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$arena->id}}">
                                            <input type="submit" value="X">
                                        </form>
                                </td>
                            </tr>             
                        @endforeach
                        </table></br></br></br>

            <a href="/createarena"><input type="button" value="Create New Arena"></a>

        </div>
    </div>
</div>



@endguest

@endsection
