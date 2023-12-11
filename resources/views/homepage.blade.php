@extends('layouts/layout')

@section('title','homepage')
@section('content')

    @include('partials.jumbo')
    <main>
       <div class="container">
        <div class="row row-gap-3">
            @foreach ($data as $element)
            <div class="col-2">
                <div class="card">
                    
                    <img src="{{$element['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            {{$element['title']}}
                        </p>
                      </div>

                      {{-- @dd($data); --}}
                    </div>
                </div>
            @endforeach 
        </div>
       </div>
    </main>
@endsection