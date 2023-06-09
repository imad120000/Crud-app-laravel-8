@extends('master.layout')

@section('title')
  Update Product {{ $info_edit->name }}
@endsection
@section('contenu')

   <div class="row my-4">
    

    <div class="col-md-8 mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" >
                    Update Produit
                </h3>
            </div>
            <div class="card body" >
                <form method="post" enctype="multipart/form-data" action="{{ route('infoupdate',$info_edit->slug)}}" style="margin: 20px">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name Produit : </label>
                        <input type="text" name="name" value="{{$info_edit->name}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prix  : </label>
                        <input type="number" step="0.01" name="prix" value="{{$info_edit->prix}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pourcentage Annuler  : </label>
                        <input type="number" step="0.01" value="{{$info_edit->pourcentage}}" name="pourcentage" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image  </label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control"  rows="3" name="description" placeholder="Description">{{$info_edit->description}}</textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">update</button>
                      </div>
                      
                </form>
                

            </div>
        </div>
    </div>
    
   </div>  
                  

@endsection