<?php
        session_start();
        $id = $_SESSION['id'];

        include('../connection.php');



        $sql = "SELECT `id`, `name`, `email`, `aadharno`, `gender`, `contact`, `qualification`, `myfile` FROM `register`;";
        $res = mysqli_query($conn, $sql);

    ?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

   <!-- <script type="text/javascript">
        function preventBack(){
        window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
       

    </script> -->

    <style>
        

#pdt{
    text-align:center;
    font-size:15px;
    font-weight:bold;
}

#header1
    {
        webkit-
        position: sticky;
        padding-top: 25px;
        padding-bottom: 25px;
        background-color: purple;
        color: white;
        text-align: center;
        font-size: 20px;
        
       
    }

    #font1{
        text-align:center;
        font-size:30px;
        font-weight:bold;
        
    }

    
    </style>
    </head>
    
    <body>
   


    <header id="header1" class="sticky-lg-top">

<div class="fluid-container">
    <div class="row">
        <div class="col-lg-4">
            <div class="" style="">
                <div class="">
                    <h5 class="card-title"><p id="pdt"><?php 
                       echo "Day: " . date("l") . "<br>";
                       echo "<br>";
                       echo "Date: " . date("Y/m/d"); ?>
                      </p>
                    </h5>
             </div>
         </div>
     </div>

     <div class="col-lg-4">
            <div class="" style="">
                <div class="">
                    <h5  id="font1">staff List
                    </h5>
             </div>
         </div>
     </div>

     <div class="col-lg-4">
            <div class="" style="">
                <div class="">
                <div class="input-group mb-3" width=10% style="margin-left:0%;margin-top:15px">
                       <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" style="margin-left:30%" name="" id="search" onkeyup="searchfun()">
                     <button class="btn btn-outline-primary" type="button" id="button-addon2" style="margin-right:3%"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

        </div> 
             </div>
         </div>
     </div>


</div>
</div>
</header>
<div class="table-responsive">

        <table class="table table-border" id="mytable">
<tr>
<th>Sr no.</th>
    <th>name</th>
    <th>email</th>
    <th>aadharno</th>
    <th>Gender</th>
    <th>contact</th>
    <th>qualification</th>
    <th>profile photo</th>
    <th>option</th>
</tr>

<?php 
$cn = 1;
while($row= mysqli_fetch_array($res)){


?>
<tr>
<td><?php echo $cn++; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['aadharno']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['qualification']; ?></td>
    <td><img src="../uploads/<?php echo $row['myfile']; ?>" style="width:100px;height:100px;"></td>

    <td><a href="editstaff.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" style="font-size:30px;color:black;"></i> </a>
    <a href="deletestaff.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash " style="font-size:30px;color:red;"></i></a></td>
    
    
</tr>
    <?php } ?>


<script>
   function searchfun(){
                        let filter = document.getElementById('search').value.toUpperCase();
                        let mytab = document.getElementById('mytable');
                        let tr = mytab.getElementsByTagName('tr');

                        for(var i=0;i<tr.length;i++){


                            
                            let td= tr[i].getElementsByTagName('td')[1];
                            let td2= tr[i].getElementsByTagName('td')[3];
                                    
                                    
                                    // console.log(td);
                                    if(td || td2){
                                        let textvalue = td.textContent || td.innerHTML;
                                        let textvalue2 = td2.textContent || td2.innerHTML;
                                        
                                        
                                        if(textvalue.toUpperCase().indexOf(filter)>-1) {
                                            tr[i].style.display=""; 
                                            
                                        }else if(textvalue2.toUpperCase().indexOf(filter)>-1) {
                                            tr[i].style.display=""; 
                                        
                                        }else{
                                            tr[i].style.display="none"; 

                                        }
                                    }
                                    // elseif(td2){
                                    //     let textvalue2 = td2.textContent || td2.innerHTML;
                                    //     if(textvalue2.toUpperCase().indexOf(filter)>-1){
                                    //         tr[i].style.display=""; 
                                    //     } else {
                                    //         tr[i].style.display="none"; 
                                    //     }
                                    // }

                        }

                    }
                    
            
            
        
    


</script>
</table>
</div>
        
       
    </body>
</html>