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

    <div class="row" style="padding: 10px">
            <div class="col-md-10">
                @if(session()->has('succes'))
                <div class="alert alert-success">
                    {{ session()->get('succes')}}
                </div>
                @endif
                
                <div class="row">
                @foreach ($produit as $items)
                <div class="col mb-2">
                    <div class="card h-100" >
                         <img src="{{asset('./image/'.$items->image)}}" class="card-img-top" alt="..." >
                        <div class="card-body">
                        <p class="card-text">  {{ $items->name }}</p>
                        <p class="card-text" style="color: green"> {{$items->prix }} DH <span style="color: red;margin: 10px"> -{{$items->pourcentage }}%</span></p>
                        <p class="card-text">  {{ $items->description }}</p>
                        <a href="{{ route('produit.detail',$items->slug)}}" target="_blank" class="btn btn-primary">J'achéte</a>
                        </div>
                    </div>
                </div>
                  
                @endforeach
                </div>
                {{$produit->links() }}
    </div> 
</div>
@endsection

@section('script')
    {{-- <script>
        alert("hello from page Home ");
    </script> --}}
@endsection