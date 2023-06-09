@extends('master.layout')

@section('title')
    {{ $detail_produit->name }}
@endsection

@section('contenu')

    <div class="row" style="padding: 30px;margin: 20px">
           
                    <div class="card" style="width: 500px" >
                        <img src="{{ asset('./image/'.$detail_produit->image) }} " alt="...">                    <div class="card-body"  >
                            <p class="card-text">  {{ $detail_produit->name }}</p>
                            <p class="card-text" style="color: green"> {{$detail_produit->prix }} DH <span style="color: red;margin: 10px"> -{{$detail_produit->pourcentage }}%</span></p>
                            <p class="card-text">  {{ $detail_produit->description }}</p>
                            <div class="col-auto">
                                <a  href={{ route('produit.update',$detail_produit->slug) }} class="btn btn-primary mb-3">Modifier</a>
                              </div>
                              <form action="{{ route('delete',$detail_produit->slug)}}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn  mb-3" style="background: red;color:wheat"> Supprimer </button>
                              </form>   
                        </div>   
                                                        
                    </div> 
                  
</div>
@endsection

