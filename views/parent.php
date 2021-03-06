
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>parents</title>

   <style>
      
    .table tbody tr:hover td, .table tbody tr:hover th {
   background-color: #fd7d1457;
   
}
   </style>
</head>
<body>
 
<hr>
   <div class="container-fluid px-5 pt-3">
    
         <div class="row">
           <div class="table-wrapper">
               <div class="table-title">
                   <div class="row">
                       <div class="col-sm-6">
                           <h2 style="color: #FD7E14;font-weight: bold;">Parents</h2>
                       </div>
                     
                      
                   </div>
               </div>
            <div class="d-flex align-items-baseline  justify-content-between">
               <form class="col-sm-6 input-group mb-3 mt-5" method="POST" style="max-width:500px;">
                            <a href="parent" class="btn "><i class="fa fa-2x fa-home" aria-hidden="true"></i></a>
                            <input type="text" name="search" class="form-control" placeholder="rechercher..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" name="find" type="submit" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                 <a href="#addetud" class="btn btn-outline-warning btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom: 50px;">Ajouter les parents <img src="https://img.icons8.com/emoji/40/000000/family-.png"/></a>
          </div>
               <div class="table-responsive">
               <table class="table table-striped table align-middle" id="myTable">
               <thead>
                
                   <tr style="background-color:#fd7d1487; height: 53px;">
                      
                       <th>Matricule</th>
                       <th>Nom complet</th>
                       <th>Genre</th>
                       <th>job</th>
                       <th>Address</th>
                       <th>Phone</th>
                       <th>Options</th>
                   </tr>
               </thead>
               <tbody  class="fw-bold" >
               <?php $parentcontrol = new AdministrateurController();
                     $parent=$parentcontrol->getAllParent();
                   foreach(    $parent as $x => $rows){
                       
                     
                   ?>
                   <tr >
                      <td hidden data-target="id"> <?= $rows['Matricule']; ?> </td>
                       <td><?=   $x+1;?></td>
                       <td data-target="nomcomplet"><?= $rows['Nom_complet']?></td>
                       <td data-target="genre"><?= $rows['Genre']?></td>
                      
                       <td data-target="job"><?= $rows['Job']?></td>
                       <td data-target="adrs"><?= $rows['Adresse']?></td>
                       <td data-target="phone"><?= $rows['Phone']?></td>
                       <td class="d-flex  align-items-start">
                       <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                       <form action="operation" method="POST" ><button type="submit" name ="deletparent" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $rows['Matricule']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                       </td>
                   </tr>
                      <?php }?>

               </tbody>
               </table>
           </div>
           <div class="col-sm6 mt-3 " style="float: right;">
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Ajouter les parents </h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                   <form class="form-container" action="operation" method="POST" onsubmit="return validation()">  
                                   <div class="mb-3 fw-bold" >
                                       <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                       <input type="text" class="form-control"  name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                       <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                       <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                   </div>
                          
                                   <div class="mb-3  fw-bold"  >
                                       <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                       <select class="form-control" name="genre" >
                                        <option value="Femme">Femme </option>
                                        <option value="Homme" selected>Homme </option>
                                    </select>
                                   </div>
                                  
                          
                                   <div class="mb-3  fw-bold"  >
                                       <label for="exampleFormControlInput1" class="form-label">Job</label>
                                       <input type="text" class="form-control" name="Job" placeholder="Enter le Job">
                                       <p id="img2" style="margin-bottom: -1rem;"></p>
                                       <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                   </div>
                                   <div class="mb-3  fw-bold" >
                                       <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                       <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                       <textarea class="form-control"  name="adres" rows="3"></textarea>
                                       <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                   </div>
                                   <div class="mb-3  fw-bold"  >
                                       <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                       <input type="text" class="form-control"  name="Phone" placeholder="Enter phone">
                                       <p id="img2" style="margin-bottom: -1rem;"></p>
                                       <span id="Phoneid" style="color:red; font-weight: bold;"></span>
                                   </div>
        
                               <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="submit" name="saveparent" class="btn btn-warning mT-3">Save</button>
                               </div>
                           </form>              
                   </div>
                   <div class="modal-footer">
                 
               </div>
           </div>
       </div>
      
           </div>
   </div>



   <div class="col-sm6 mt-3 " style="float: right;">
       <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Update  </h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                   <form class="form-container" action="operation" method="POST" >  
                   <div class="mb-3 fw-bold" >
                                       <input type="text" hidden class="form-control" id="matricule" name="matricule"  style="margin-bottom: 32px;">
                                       <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                       <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                   </div>
                                   <div class="mb-3 fw-bold" >
                                       <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                       <input type="text" class="form-control" id="nom" name="nom"  style="margin-bottom: 32px;">
                                       <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                       <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                   </div>
                          
                                   <div class="mb-3  fw-bold"  >
                                       <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                       <select class="form-control" id="genre"  name="genre" >
                                        <option value="Femme">Femme </option>
                                        <option value="Homme" selected>Homme </option>
                                    </select>
                                   </div>
                                   
                                   <div class="mb-3  fw-bold"  >
                                       <label for="exampleFormControlInput1" class="form-label">Job</label>
                                       <input type="text" class="form-control" id="Job" name="Job" placeholder="Enter le Job">
                                       <p id="img2" style="margin-bottom: -1rem;"></p>
                                       <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                   </div>
                                   <div class="mb-3  fw-bold" >
                                       <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                       <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                       <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
                                       <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                   </div>
                                   <div class="mb-3  fw-bold"  >
                                       <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                       <input type="text" class="form-control" id="phone" name="Phone" placeholder="Enter phone">
                                       <p id="img2" style="margin-bottom: -1rem;"></p>
                                       <span id="Phoneid" style="color:red; font-weight: bold;"></span>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="submit" name="bntupdate" class="btn btn-primary">update</button>
                                   </div>
                                   </div>
                             
                           </form>              
                   </div>
                   <div class="modal-footer">
                 
               </div>
           </div>
       </div>
      
       </div>
   </div>

       <script>
           $(document).ready(function()
           {
               $("#myTable").on('click','.update',function()
               {
                   var currentRow=$(this).closest("tr"); 
                   $('#matricule').val(currentRow.find("td:eq(0)").text());
                   $('#nom').val(currentRow.find("td:eq(2)").text());
                   $('#genre').val(currentRow.find("td:eq(3)").text());
                   $('#Job').val(currentRow.find("td:eq(4)").text());
                   $('#adress').val(currentRow.find("td:eq(5)").text());
                   $('#phone').val(currentRow.find("td:eq(6)").text());

               })
          })
       </script>
</body>
</html>


