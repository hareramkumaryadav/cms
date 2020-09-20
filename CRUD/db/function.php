<?php include "db/db.php";?>
<?php 
function result($con,$qr){
    $result=mysqli_query($con,$qr);
    if($result){
        echo "<script>alert('Great !!!!!!!!!!!!');</script>";
     
    }
    else
    {
        die("something went wrong".mysqli_error($connection));
    }
}






// insertion only one user at a time
function insertion()
{
    global $connection;
    
    
if(isset($_POST['submit']))
{
   $username= $_POST["username"];
    $password=$_POST["password"];
    $username=mysqli_real_escape_string($connection, $username);
      $password=mysqli_real_escape_string($connection, $password);
    $hash_formate="$2y$10$";
    $salt="iusesomecrazystrings22";
    $hash_salt= $hash_formate . $salt;
    $password=crypt(  $password,$hash_salt);
    $query="insert into user(username,password) ";
    $query.="values(' $username',' $password')";
    
    result($connection,$query);
    
  
}
  
    
}
// saw all user data
function sawalldata(){
    global $connection;
     $query="select * from user";
    $result=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($result)){
          echo "<pre>";
         print_r($row);
        echo "</pre>";
        
        
        
    }
    
}

//select all user id 
function selectalluser()
{
     global $connection;
     $query="select * from user";
                         $result=mysqli_query($connection,$query);
                         while($row=mysqli_fetch_assoc($result)){
                             $id=$row['id'];
                             echo "<option value='$id'>$id</option>";
                         }
                         
}

//update user data one by one
function updateuser()
{
  global $connection;  
if(isset($_POST['update']))
{
   $username= $_POST["username"];
    $password=$_POST["password"];
    $username=mysqli_real_escape_string($connection, $username);
    $password=mysqli_real_escape_string($connection, $password);
    $hash_formate="$2y$10$";
    $salt="iusesomecrazystrings22";
    $hash_salt= $hash_formate . $salt;
    $password=crypt(  $password,$hash_salt);
    $id=$_POST['id'];
    $query="update user set username=' $username',password=' $password' where id=$id ";
    result($connection,$query);

}
}
//delete user data one by one
function delete()
{
    global $connection; 
    if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $query="delete from user where id=$id ";
    result($connection,$query);
    
}
}
?>