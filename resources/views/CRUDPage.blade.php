
@extends('layouts.parent')

@section('content')

@php dd($destinations, $arrivalairports, $departureairports, $hotels, $companies, $types) @endphp
<!-- Top menu -->
<div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
          <a class="w3-center w3-padding-16" href="/getDestinations">HomePage</a>
        </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <div class="side">
        <ul> 
                <li>Destination</li>
                <li>Type</li>
                <li>Aeroport de départ</li>
                <li>Aeroport d'arrivé</li>
                <li>Company</li>
                <li>Hotel</li>
        </ul>
        
    <div>

    <div class="infos">
            {{-- @foreach ($destination->type as $type)
                {{$type->content}}
            @endforeach --}}
    <div>

<!-- !PAGE CONTENT END! -->
</div>

@endsection