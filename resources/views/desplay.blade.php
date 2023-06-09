{{-- <select name="produit" id="produit">
    @foreach($info as $p)
    <option value="{{$p->slug}}">{{$p->name}}</option>
    @endforeach
</select>

<select name="slug" id="slug">
    @foreach($info as $p)
    <option selected disabled>---</option>
    <option value="{{$p->slug}}">{{$p->slug}}</option>
    @endforeach
</select>

<script>
    // Get references to the two dropdowns
    const produitDropdown = document.getElementById('produit');
    const slugDropdown = document.getElementById('slug');
    
    // Listen for changes in the produit dropdown
    produitDropdown.addEventListener('change', () => {
        // Get the selected value from the produit dropdown
        const selectedValue = produitDropdown.value;
        
        // Loop through the options in the slug dropdown
        for (let i = 0; i < slugDropdown.options.length; i++) {
            const option = slugDropdown.options[i];
            
            // If the option's value matches the selectedValue, set it as the selected option
            if (option.value === selectedValue) {
                option.selected = true;
            }
        }
    });
</script>
 --}}

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 @foreach($info as $c)
 <table>
 <tr>
   <td></td>
   <td>{{$c->name}} - {{$c->prenom}}</td>
   <td>
     <!--  document  -->
     <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none">
       <i class=" material-icons" style="font-size: 30px;font-weight: bolder"  title="Document">insert_drive_file</i>
     </button>
   </td>
   <td>{{$c->created_at}}</td>
   <td>
     <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" style="font-size: 30px;font-weight: bolder" data-toggle="tooltip" title="Active">check</i></a>
     <a href="#desactiverEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" style="font-size: 30px;font-weight: bolder" data-toggle="tooltip" title="Desactiver">close</i></a>
     <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" style="font-size: 30px;font-weight: bolder" data-toggle="tooltip" title="Delete">delete_forever</i></a>
   </td>
   <td></td>
 </tr>
 </table>
@endforeach

<div class="modal-dialog modal-xl">
       <div class="modal-content">
           <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Document</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <table class="table table-bordered border-main m-0">
               <tr>
                 <td>Services</td>
                 <td>Traiteur - Pause Café - Salle des fêtes</td>
               </tr>
               <tr>
                 <td>Ville</td>
                 <td>Imzouren</td>
               </tr>
               <tr>
                 <td>Photos</td>
                 <td>
                   <img class="modal-thumb" src="https://placehold.jp/50x50.png" alt="">
                   <img class="modal-thumb" src="https://placehold.jp/50x50.png" alt="">
                 </td>
               </tr>
               <tr>
                 <td>Lien de vidéo</td>
                 <td>Traiteur - Pause Café - Salle des fêtes</td>
               </tr>
               <tr>
                 <td>Description</td>
                 <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero est blanditiis fugiat dicta quisquam placeat, fugit deleniti tempore delectus.</td>
               </tr>
               <tr>
                 <td>Nom et Prénom</td>
                 <td>Mohammed Adam</td>
               </tr>
               <tr>
                 <td>CIN</td>
                 <td>
                   <img class="modal-thumb" src="https://placehold.jp/50x50.png" alt="">
                 </td>
               </tr>
               <tr>
                 <td>Profile</td>
                 <td>Gérant</td>
               </tr>
               <tr>
                 <td>Statut juridique</td>
                 <td>SARL</td>
               </tr>
               <tr>
                 <td>Justificatif status</td>
                 <td>
                   <img class="modal-thumb" src="https://placehold.jp/50x50.png" alt="">
                 </td>
               </tr>
               <tr>
                 <td>Justificatif profile</td>
                 <td>
                   <img class="modal-thumb" src="https://placehold.jp/50x50.png" alt="">
                 </td>
               </tr>
             </table>
           </div>
       </div>
     </div>
 </div>