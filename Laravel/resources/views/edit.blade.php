@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('update')}}" method="post">
                <div class="form-group">
                    <label for="Naam">Naam</label>
                    <input type="text" class="form-control" id="Naam" name="Naam" value="{{$student->Naam}}">
                </div>
                <div class="form-group">
                    <label for="Voornaam">Voornaam</label>
                    <input type="text" class="form-control" id="Voornaam" name="Voornaam" value="{{$student->Voornaam}}">
                </div>
                <div class="form-group">
                    <label for="Leeftijd">Leeftijd</label>
                    <input type="number" class="form-control" id="Leeftijd" name="Leeftijd" value="{{$student->Leeftijd}}">
                </div>
                <div class="form-group">
                    <label for="Beschrijving">Beschrijving</label>
                    <input type="text" class="form-control" id="Beschrijving" name="Beschrijving" value="{{$student->Beschrijving}}">
                </div>
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $student->id }}">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection