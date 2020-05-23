@extends('layouts.app')

@section('content')
    @auth()
        <div>
            <i class="fas fa-air-freshener"></i>
            ====content====
        </div>
    @else
        <div>
            ====no login====
        </div>
    @endauth
    
@endsection