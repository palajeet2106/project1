<?php
include("connection.php");

if(isset($_POST['submit'])){
    $res = $user ->createUser();
    $msg = " signup successfully";
    echo $msg;
}

if(isset($_POST['updateUser'])){
    if($res = $user ->updateUser($_POST['userId'])){
        ?>
        <script>
            alert("Record Updated");  
            window.location.href = "user-profile.php" 
        </script>
        <?php
    }

}

if(isset($_POST['btnorder'])){
    

}

if(isset($_POST['loginBtn'])){
    ;
    if($id = $user ->userLogin()){
            ?>
            <script>
                window.location.href = "index.php";
            </script>
            <?php
    }else{
        ?>
        <script>
            alert("invalid username or password ");
            window.location.href = 'login.php';
        </script>
        <?php
    }

}
 if(isset($_POST['cartBtn'])){
       if($res = $user ->addCart()){
           echo $user->countcartitems($_SESSION['userId']); 
       }
  }

  if(isset($_REQUEST['id']) && isset($_REQUEST['cmd']) && $_REQUEST['cmd'] == 'deleteCartItem'){
    $id = $_REQUEST['id'];
    $userid=$_SESSION['userId'];
    if($res = $user ->deleteCartItem($id)){
        echo $user->countcartitems($userid);
    }
  
}

if(isset($_POST['item']) && isset($_POST['qty']) && isset($_POST['cmd']) && $_POST['cmd']=="updateCart"){
    if($user->updateCart($_POST['item'], $_POST['qty'])){
        echo $msg= "Cart Updated";
    }
        

}

if(isset($_POST['cid']) && isset($_POST['cmd']) && $_POST['cmd'] == 'getState'){
    $res =  $user -> state ($_POST['cid'] , 0);
    
 }
 if(isset($_POST['sid']) && isset($_POST['cmd']) && $_POST['cmd'] == 'getCity'){
    $res =  $user -> city ($_POST['sid'] , 0);
    
 }


?>