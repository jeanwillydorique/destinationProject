
@extends('layouts.parent')

@section('content')


<!-- Top menu -->
<div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
          <div class="w3-right w3-padding-16">Mail</div>
          <a class="w3-center w3-padding-16" href="/getDestinations">HomePage</a>
        </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <div class="side">
            <img src="{{$destination->img}}">
    <div>

    <div class="infos">
        
            {{$destination->name}}
            {{$destination->country}}

            {{-- @foreach ($destination->type as $type)
                {{$type->content}}
            @endforeach --}}
            {{$destination->type->content}}
            {{$destination->departureairport->name}}
            {{$destination->arrivalairport->name}}
            {{$destination->company->name}}
            {{$destination->hotel->name}}
    <div>
    {{-- @php dd($destination) @endphp --}}

<!-- !PAGE CONTENT END! -->
</div>

@endsection