@extends('master.layout')

@section('title')
   addProduit
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
                    Add Produit
                </h3>
            </div>
            <div class="card body" >
                <form method="POST" action="{{ route('add')}}" style="margin: 20px" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name Produit : </label>
                        <input type="text" name="name" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prix  : </label>
                        <input type="number" step="0.01" name="prix" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pourcentage Annuler  : </label>
                        <input type="number" step="0.01" name="pourcentage" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image  </label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control"  rows="3" name="description" placeholder="Description"></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Add</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
    
   </div>  
                  

@endsection