<?php include "db/function.php";

insertion();

?>
<?php include "include/header.php";?>
       <h1 class="text-center">CREATE</h1>
        <div class="col-sm-6 ">
           
            <form method="post" action="create.php">
                <div class="form-group">
                   <label for="username">USERNAME</label>
                    <input class="form-control " type="text" placeholder="USERNAME" id="username" name="username"/>
                </div>
                 <div class="form-group">
                   <label for="username">PASSWORD</label>
                    <input class="form-control " placeholder="password" id="pass" name="password" type="password"/>
                </div>
                 <input class="btn btn-primary" type="submit" name="submit">
            </form>
        <?php include "include/footer.php";?>