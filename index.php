<?php require_once "code.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
   <style>
   @import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i&display=swap');
   body{
    background-color: #e1e1ea;
}
   .text-center{
    text-align: center;
    font-family: 'Playfair Display', serif;
}
.main{
    background: linear-gradient(rgba(0,0,0, .7),rgba(0,0,0, .7)),
                url('../testelaqe/bg.jfif') ;
    background-attachment: fixed;
	background-size: cover;
	background-position: center;
}
.material-icons{
    color: white;
}
.table {
    background-color: grey;
}
.button{
  float:right;
}
#input{
   color:white;
}
   </style>
</head>
<body>
    <h4 class="text-center">Registration List</h4>
    <div class="container main">
    <div class="row">
      <form method="POST" action="#" enctype="multipart/form-data" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="input" id="icon_prefix" name="fullname" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="input" id="icon_telephone" type="tel" name="phone" class="validate">
          <label for="icon_telephone">Telephone</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="input" id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="input" id="icon_prefix2" class="materialize-textarea" name="message"></textarea>
          <label for="icon_prefix2">Message</label>
        </div>
      </div>
      <div class="file-field input-field cols4">
      <div class="btn">
        <span>File</span>
        <input type="file" name="sekil">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" >
      </div>
      <button style="float:right" class="button btn waves-effect waves-light " type="submit" name="registrion">Submit
           <i class="material-icons right">send</i>
     </button>
      </div>
       </form>
    </div>
 </div>
<!-- <button id="btn" onclick="Show()" >Show</button> -->
 <a style="position:fixed" class="btn-floating btn-large waves-effect waves-light red"  onclick="Show()" ><i id="btni" class="material-icons">add</i></a>

<div class="container ">
 <div style="display:none" id="tbl"  class="table">
        <table class="striped table">
            <thead>
              <tr>
                <th>№</th>
                <th>Name,Surname</th>
                <th>Number</th>
                <th>E-mail</th>
                <th>Message</th>
                <th>File</th>
                <th>Operations</th>

                
             </tr>
           </thead> 
        
           <tbody>
              <?php for($i =0; $i <count($data);$i++){?>
                <tr>
                
                  <td><?php echo $i+1?></td>
                  <td><?= $data[$i]["Ad"]?></td>
                  <td><?= $data[$i]["Nomre"]?></td>
                  <td><?= $data[$i]["Email"]?></td>
                  <td><?= $data[$i]["Haqqinda"]?></td>
                  <td><img style="height: 50px;" src="<?= $data[$i]["Sekil"] ?>" title="<?= $data[$i]["Sekil"] ?>" /></td>
                  <td>
                    <i style=" cursor:pointer; color:black;" onclick="Duzenle()" class="material-icons">edit<i>
                    <i style=" cursor:pointer; color:black;" onclick="Sil(<?= $data[$i]['id']?>)" class="material-icons">delete<i>
                  </td>
               </tr>
              <?php }?>
          </tbody>
        </table>
    </div>
</div>    
<script>
    function Show()
    {
      let x= document.getElementById("btni").innerHTML;
      console.log(x);
      if( x=="add")
      {
          document.getElementById("tbl").style.display="block";
          document.getElementById("btni").innerHTML="remove";
      }
  else{
       document.getElementById("tbl").style.display="none";
          document.getElementById("btni").innerHTML="add";
  }



    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="script.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
</body>
</html>
