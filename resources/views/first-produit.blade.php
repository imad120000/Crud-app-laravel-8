@extends('master.layout')


{{-- @section('style')
    <style>
        body{

            background-color:red;
            color: black;
        }
    </style>
@endsection --}}


@section('title')
    Page Home   
@endsection

@section('contenu')

    <div class="row" style="padding: 20px;margin: 20px">
            <div class="col-md-10">
                <div class="row">
                @foreach ($first_produit as $items)
                <div class="col mb-2">
                    <div class="card h-100" style="width: 10rem">
                       {{--  <img src="{{ asset($items->image) }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                        <p class="card-text">  {{ $items->name }}</p>
                        <p class="card-text" style="color: red"> {{$items->prix }} <span style="color: green;margin: 10px"> {{$items->pourcentage }}</span></p>
                        <p class="card-text">  {{ $items->description }}</p>
                        <a href="#" class="btn btn-primary">J'achéte</a>
                        </div>
                    </div>
                </div>
                  
                @endforeach
            </div>
    </div> 
</div>
@endsection

@section('script')
    {{-- <script>
        alert("hello from page Home ");
    </script> --}}
@endsection