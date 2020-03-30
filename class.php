<?php
  
    class CRUD{
        public function Select()
    {
       global $db;
       $slc = $db->prepare("SELECT * FROM qeydiyyat");
       $slc->execute();
       return $slc->fetchAll(PDO::FETCH_ASSOC);
    }
    public  function Insert($post)
       {
           global $db;
           $name = $_FILES["sekil"]["name"];
           $tip = $_FILES["sekil"]["type"];
           $size = $_FILES["sekil"]["size"];
           $tmp = $_FILES["sekil"]["tmp_name"];
           $dir = "img/".rand(100,900)."-".$name;
           if($size==0 || !$tip=="image/png" ){
               return 0;
           }
           $ins = $db->prepare("INSERT into qeydiyyat set
               
               Ad=:a,
               Nomre=:b,
               Email=:c,
               Haqqinda=:d,
               Sekil=:e
           
           ");
           $x=$ins->execute([
              'a'=>$post["fullname"],
              'b'=>$post["phone"],
              'c'=>$post["email"],
              'd'=>$post["message"],
              'e'=>$dir

           ]);

           if($x){
            move_uploaded_file($tmp,$dir);
            return 1;
        }
        else{
            return 0;
        }
       }

     public function Delete($id)
     {
          global $db;
          $dlt=$db->prepare("DELETE from qeydiyyat where id={$id}");
          return $dlt->execute() ?1 :0;
     } 

    }


    

