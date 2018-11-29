
@extends('layouts.parent')

@section('content')


<!-- Top menu -->
<div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
                <a class="w3-center w3-padding-16" href="/getDestinations">HomePage</a>
                <a class="w3-center w3-padding-16" href="/CRUDPage">CRUD</a>
        </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

        <!-- Photo Grid-->
        {{-- <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                <div class="w3-quarter">
                  <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
                  <h3>The Perfect Sandwich, A Real NYC Classic</h3>
                  <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>
        </div> --}}

            

        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                @foreach ($destinations as $destination)
                        <div class="w3-quarter">
                        <a href="/getDestination/{{$destination->id}}"> 
                                <img src="{{$destination->img}}" alt="Sandwich" style="width:100%">
                        </a>
                        <h3>{{$destination->name}}</h3>
                        </div>
                @endforeach
        </div>


<!-- !PAGE CONTENT END! -->
</div>

@endsection