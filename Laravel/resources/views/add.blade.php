@extends('layouts.master')

@section('content')
    @if(count($errors->all()))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('addStudent')}}" method="post">
                <div class="form-group">
                    <label for="Naam">Naam</label>
                    <input type="text" class="form-control" id="Naam" name="Naam">
                </div>
                <div class="form-group">
                    <label for="Voornaam">Voornaam</label>
                    <input type="text" class="form-control" id="Voornaam" name="Voornaam">
                </div>
                <div class="form-group">
                    <label for="Leeftijd">Leeftijd</label>
                    <input type="number" class="form-control" id="Leeftijd" name="Leeftijd">
                </div>
                <div class="form-group">
                    <label for="Beschrijving">Beschrijving</label>
                    <input type="text" class="form-control" id="Beschrijving" name="Beschrijving">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection