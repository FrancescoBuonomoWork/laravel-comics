@extends('layouts/layout')

@section('content')

    <main>
       <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="card">
                    {{-- @foreach ($movies as $movie)

                      <p>$movie['title'];</p>  
                    @endforeach --}}
                    {{-- <img src="" class="card-img-top" alt="..."> --}}

                    {{ $data }}
                </div>
            </div>
        </div>
       </div>
    </main>
@endsection