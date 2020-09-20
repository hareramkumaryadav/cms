<?php include "db/function.php";
delete();
?>
<?php include "include/header.php";?>
       <h1 class="text-center">DELETE</h1>
        <div class="col-sm-6 ">
           
            <form method="post" action="delete.php">
                <div class="form-group">
                   <label for="username">USERNAME</label>
                    <input class="form-control " type="text" placeholder="USERNAME" id="username" name="username"/>
                </div>
                 <div class="form-group">
                   <label for="username">PASSWORD</label>
                    <input class="form-control " placeholder="password" id="pass" name="password" type="password"/>
                </div>
                 <div class="form-group">
                     
                     <select class="custom-select" id="id" name="id">
                         <?php
                       selectalluser();
                         
                         
                         ?>
                        
                     </select>
                </div>
                 <input class="btn btn-primary" type="submit" name="delete" value="delete">
            </form>
    <?php include "include/footer.php";?>