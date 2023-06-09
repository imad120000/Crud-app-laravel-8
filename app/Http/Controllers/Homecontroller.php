<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function index()
    {
        /* $name="My name is AMJID imad";
        return view('home')->with([
            'name'=>$name
        ]); */

        $produit=produit::latest()->paginate(4);    
        return view('home')->with([
            'produit'=>$produit
        ]);

       
    }
    public function first_element()
    {

       /*  $first_produit=produit::where("id","=","1")->get() */;
       $first_produit=produit::where("id","=","22")->get(); 
        return view('first-produit')->with([
            'first_produit'=>$first_produit
        ]);

    }

    public function detail($slug){
        // find katkhdme m3a l id par defaut bla matmxi tbdle l fynction f model 
       /* $detail_produit=produit::find($id); */

        $detail_produit=produit::where('slug','=',$slug)->first();
        return view ('detail-produit')->with(
            [
                'detail_produit'=>$detail_produit
            ]);
    }


    public function pageAddproduit()
    {
        return view ('addproduit');    
    }

  
    public function add(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
            'prix'=>'required',
            'pourcentage'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048' ,
        ]);
        
        if($request->has('image'))
        {
            $file =$request->image;
            $image=time().'_'.$file->getclientoriginalname();
            $file->move(public_path('image'),$image);
        }
        produit::create([
           'name'=>$request->name,
           'slug'=>Str::slug($request->name),
           'prix'=>$request->prix,
           'pourcentage'=>$request->pourcentage,
           'image'=>$image,
           'description'=>$request->description,
        ]);
        return redirect()->route('home')->with(
            [
                'succes'=>
                'Article Ajouter Avec Succes'
            ]
        );
    }

    public function pageUpdate($slug)
    {
        $info_edit=produit::where('slug','=',$slug)->first();
        
        return view ('update')->with(
            [
               'info_edit'=> $info_edit
            ]
        );    
    }
   
    public function infoupdate(Request $request,$slug)
    {
        $this->validate($request,[
            'name'=>'required|min:
            3',
            'prix'=>'required',
            'pourcentage'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg|max:2048', 

        ]);
        $edit=produit::where('slug','=',$slug)->first();

        if($request->has('image'))
        {
            $file =$request->image;
            $image=time().'_'.$file->getclientoriginalname();
            $file->move(public_path('image'),$image);
            unlink(public_path('image').'/'.$edit->image);
            $edit->image=$image;
        }
        
        $edit->update([
        'name'=>$request->name,
        'slug'=>Str::slug($request->name),
        'prix'=>$request->prix,
        'pourcentage'=>$request->pourcentage,
        'image'=> $edit->image,
        'description'=>$request->description,
    ]);
        return redirect()->route('home')->with(
            [
                'succes'=> 'Article Update Avec Succes'
            ]
        );
    }

    public function delete($slug){
        $delete = produit::where('slug','=',$slug)->first();
        unlink(public_path('./image/').$delete->image);
        $delete->delete();
        return redirect()->route('home')->with(
            [
                'succes'=> 'Article Supprimer Avec Succes'
            ]
        );

    }
}

