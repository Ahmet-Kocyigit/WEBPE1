@extends('layouts.master')

@section('content')
    <div class="row" style="align-content: center">
        @foreach($students as $student)
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>{{ $student->Naam }}</p>
                    <p>{{ $student->Voornaam }}</p>
                    <p>{{ $student->Leeftijd }}</p>
                    <p>{{ $student->Beschrijving }}</p>
                    <p><a href="{{ route('overview.edit', ['id' => $student->id]) }}" >Edit</a></p>
                    <p><a href="{{ route('delete', ['id' => $student->id]) }}" >Delete</a></p>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
