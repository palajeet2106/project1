<?php

class connection{
   function __construct(){
      $this -> conn = mysqli_connect("localhost" , "root" , "" , "project_01");
      session_start();
  }


  function display($id){
    $sql = "SELECT * FROM `product` WHERE id = '$id'";
    return  $res = mysqli_query($this -> conn , $sql);
  }
  function productDetails(){
    $sql = "SELECT * FROM `product` LIMIT 8";
    $res = mysqli_query($this -> conn , $sql);
    return $res;

  }
  function popularSales(){
    $sql = "SELECT * FROM `product` LIMIT 9";
    $res = mysqli_query($this -> conn , $sql);
    return $res;

  }
  
  function displayCategory(){
    $sql = "SELECT * FROM category ";
    $res = mysqli_query($this ->conn , $sql);
    return $res;

  } 
  function editCategory($id){
    $sql = "SELECT * FROM category WHERE id = '$id'";
    $res  = mysqli_query($this ->conn , $sql);
    $row = mysqli_fetch_assoc($res);
    return $row;
  }

  
  function displaySubcategory(){
    $sql = "SELECT * FROM subcategory";
    $res = mysqli_query($this -> conn , $sql);
    return $res;

  }
  
  // function for update subcategory table
  function displaySubcategoryList($id){
    $sql = "SELECT * FROM subcategory WHERE category_id = '$id'";
    return mysqli_query($this -> conn , $sql);
  }


// function for update product table

  function displayCategoryName($categoryId){
    $selected = '';
    $sql = "SELECT * FROM category ";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res)){
      while($row = mysqli_fetch_assoc($res)){
        if($categoryId != 0 && $row['id'] == $categoryId){
          $selected = 'selected';
        }else{
          $selected = '';
        }
        ?>
        <option value="<?php echo $row['id'] ?>"<?php echo $selected; ?>><?php echo $row['categoryName']; ?></option>
        <?php

      }
    }

  }

  function displaySubcategoryName($subcategoryId){
    $selected = '';
    $sql = "SELECT * FROM subcategory WHERE id = '$subcategoryId'";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res)>0){
      while($row = mysqli_fetch_assoc($res)){
        if($row['id'] == $subcategoryId){
          $selected = 'selected';
        }else{
          $selected = '';
        }
        ?>
        <option value="<?php echo $row['id'] ?>"<?php echo $selected; ?>><?php echo $row['subcategoryName']; ?></option>
        <?php

      }
    }

  }

  // get subcategory according to category
  function changeSubcategory($cid){
    $sql = "SELECT * FROM subcategory WHERE category_id = '$cid'";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res)>0){
      while($row = mysqli_fetch_assoc($res)){

        ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['subcategoryName']; ?></option>
        <?php

      }
    }
  }

  function productDetailsByCategory($categoryName){
    $product= array();
    $sql = "SELECT * FROM category WHERE categoryName LIKE '%$categoryName%'";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res) > 0){
      while($row = mysqli_fetch_assoc($res)){
        $productResult = $this ->getProductByCategory($row['id']);
        if(mysqli_num_rows($productResult) > 0){
          while($data = mysqli_fetch_assoc($productResult)){
            $product[] = $data;
          }
        }

      }
    }
    return $product; 

  }

  function getProductByCategory($cid){
    $sql = "SELECT * FROM product WHERE category = '$cid' LIMIT 8";
    $res = mysqli_query($this ->conn , $sql);
    return $res;
  }

  

  function createUser(){
    // $file = $_FILES['pic']['name'];
    // $folder = "media/";
    // $path = $folder.basename($file);
    // move_uploaded_file($_FILES['pic']['tmp_name'] , $path);
  
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = mysqli_real_escape_string($this ->conn , stripcslashes($_POST['email']));
    $contact = $_POST['contact'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $pinCode = $_POST['pinCode'];
    $customerId = $_POST['customerId'];
    $password = mysqli_real_escape_string($this ->conn , stripcslashes(md5($_POST['password'])));
    
    $sql = "INSERT INTO `user`(`customerid`,`username`, `firstName`, `lastName`, `email`, `contact`,  `country`, `state`, `city`, `address`, `pincode`,  `password`) VALUES ('$customerId','$username' ,'$firstName' ,'$lastName' , '$email' , '$contact'  , '$country' ,'$state' , '$city' , '$address' ,'$pinCode', '$password')";
    $res = mysqli_query($this ->conn , $sql);
    return $res;
  }

  function displayUser(){
    $userId =  $_SESSION['userId'];
    $sql = "SELECT * FROM user WHERE id = '$userId'";
    $res = mysqli_query($this ->conn , $sql);
    return $res;
  }

  function editUser($id){
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $res = mysqli_query($this ->conn , $sql);
    $row = mysqli_fetch_assoc($res);
    return $res;
    
  }
  function updateUser($id){
    // $file = $_FILES['pic']['name'];
    // if(!empty(basename($file))){
    //   $folder = "media/";
    //   $path = $folder.basename($file); 
    // }else{
    //   $path = $_POST['picDb'];
    // }
    // move_uploaded_file($_FILES['pic']['tmp_name'] , $path);

    $sql = " UPDATE `user` SET `username` = '".$_POST['username']."',`firstName`='".$_POST['firstName']."',`lastName`='".$_POST['lastName']."',`email`='".mysqli_real_escape_string($this ->conn , stripcslashes($_POST['email']))."' ,`contact`='".$_POST['contact']."',`country`='".$_POST['country']."',`state`='".$_POST['state']."',`city`='".$_POST['city']."',`address`='".$_POST['address']."',`pincode`='".$_POST['pinCode']."' WHERE  id = '$id'";
    $res = mysqli_query($this ->conn , $sql);
    return $res;
  

  }
  function deleteUser($id){
    $sql = "DELETE FROM user WHERE id = '$id'";
    $res = mysqli_query($this ->conn , $sql);
    return $res;

  }

  function country($cid){
    $selected = '';
    $sql = "SELECT * FROM countries";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res) > 0){
      ?>
      <option value="">--Select Country--</option>
      <?php
      while( $row = mysqli_fetch_assoc($res)){
        if($cid != 0 && $row['id'] == $cid){
          $selected = 'selected';
        }else{
          $selected = '';
        }
      ?>
      <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php
      }
  }
    return $res;
  
  }

  function state($cid , $sid){
    $sql = "SELECT * FROM states WHERE country_id = '$cid'";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res) > 0){
      ?>
      <option selected disabled>--Select state--</option>
      <?php
      while( $row = mysqli_fetch_assoc($res)){
        if($sid != 0 && $row['id'] == $sid){
          $selected = 'selected';
        }else{
          $selected = '';
        }
      ?>
      <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php
      }
  }
    return $res;
  
  }
  function city($sid , $cid){
    $sql = "SELECT * FROM cities WHERE state_id = '$sid'";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res) > 0){
      ?>
      <option selected disabled>--Select City--</option>
      <?php
      while( $row = mysqli_fetch_assoc($res)){
        if($cid != 0 && $row['id'] == $cid){
          $selected = 'selected';
        }else{
          $selected = '';
        }
      ?>
      <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php
      }
  }
    return $res;
  
  }

  function displayCountry($id){
    $sql = "SELECT * FROM countries WHERE id = '$id'";
    $res = mysqli_query($this ->conn , $sql);
    $row = mysqli_fetch_assoc($res);
    return $row;
    
  }
  function displayState($id){
    $sql = "SELECT * FROM states WHERE id = '$id'";
    $res = mysqli_query($this ->conn , $sql);
    $row = mysqli_fetch_assoc($res);
    return $row;
    
  }
  function displayCity($id){
    $sql = "SELECT * FROM cities WHERE id = '$id'";
    $res = mysqli_query($this ->conn , $sql);
    $row = mysqli_fetch_assoc($res);
    return $row;
    
  }



  function userLogin(){
    $email = mysqli_real_escape_string($this ->conn , stripcslashes($_POST['email']));
    $password = mysqli_real_escape_string($this ->conn , stripcslashes(md5($_POST['password'])));
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($this ->conn , $sql);
    if(mysqli_num_rows($res) == 1){
      while($row = mysqli_fetch_assoc($res)){
        $_SESSION['userId'] = $row['id'];
        $_SESSION['username'] = $row['firstName'];
    }
    return $res;  
  }
}

function addCart(){
  if(isset($_SESSION['userId'])){
  $userid= $_SESSION['userId'];
  $qty=1;
  $pid= $_POST['pid'];
  if($this->getCart($userid)){
     $sql= "SELECT id FROM cart WHERE userid='$userid'";
     $res= mysqli_query($this->conn, $sql);
     $row= mysqli_fetch_assoc($res);
     $cartid= $row['id'];
  }else{
    $sql= "INSERT INTO cart(userid) VALUES ('$userid')";
     if(mysqli_query($this->conn, $sql)){
        $cartid= $this->conn->insert_id;
     }
  }
  }else{
    ?>
    <script>
      window.location.href = "login.php";
    </script>
    <?php
  }
  
    
    
    return $this->cartItems($cartid, $userid, $qty, $pid);

  
}

function getCart($userid){
  $sql= "SELECT * FROM cart WHERE userid='$userid'";
  $res= mysqli_query($this->conn, $sql);
  if(mysqli_num_rows($res)==1){
    return true;
  }else{
    return false;
  }
}


function cartItems($cartid, $userid, $qty, $pid){

  $sql= "SELECT * FROM cart_items WHERE productid='$pid' and cartid='$cartid'";
  $res= mysqli_query($this->conn, $sql);

  if(mysqli_num_rows($res)==1){
    $row= mysqli_fetch_assoc($res);
    $qty= $row['qty'];
    $qty+=1;
    $sql= "UPDATE cart_items SET qty='$qty' WHERE productid='$pid' and cartid='$cartid'";
    return mysqli_query($this->conn, $sql);
  }
  else{

  $sql= "INSERT INTO `cart_items`(`cartid`, `userid`, `productid`, `qty`) VALUES ('$cartid', '$userid', '$pid', '$qty')";
  return mysqli_query($this->conn, $sql);
  }

}


function displayCart(){
  $userid= $_SESSION['userId'];
  $sql= "SELECT * FROM cart_items WHERE userid='$userid'";
  $res= mysqli_query($this->conn, $sql);
  return $res;

}
function deleteCartItem($id){
  $sql = "DELETE FROM cart_items WHERE id = '$id'";
  $res = mysqli_query($this ->conn , $sql);
  return $res;

}

function updateCart($item, $qty){
  $sql= "UPDATE cart_items SET qty='$qty' WHERE id= '$item'";
  $res = mysqli_query($this ->conn , $sql);
  return $res;
}

function orderSummary($pid){
  $userid = $_SESSION['userId'];
  $sql= "SELECT * FROM cart_items WHERE userid='$userid' AND productid IN($pid)";
  $res= mysqli_query($this->conn, $sql);
  return $res;

}

function sendOrder(){
  $userid= $_SESSION['userId'];
  $cartid= $_POST['cartid'];
  $orderid= $_POST['orderid'];
  $netamount= $_POST['netamount'];
  $paymentmode= $_POST['paymentmode'];
  $pid= $_POST['pid'];
  $pidString = implode("," , $pid);
  $customerId = $_POST['customerId'];
 
  $sql="INSERT INTO `bill_details`(`customerid`,`userid`, `cartid`, `productid`, `payment_mode`,  `orderid`, `totalamount`) values('$customerId','$userid' , '$cartid' ,'$pidString' ,'$paymentmode','$orderid' ,'$netamount')";
  if(mysqli_query($this->conn, $sql)){
    return $this->deletecartafterorder($userid , $pidString);
  }
}
function deletecartafterorder($userid , $pid){
  $sql= "DELETE FROM cart_items WHERE userid='$userid' AND productid IN ($pid)";
  return mysqli_query($this->conn, $sql);
}

function displayAdmin(){
  $sql = "SELECT * FROM admin";
  $res = mysqli_query($this ->conn , $sql);
  return $res;
}

function countcartitems($user){
  $sql= "SELECT count('id') AS Total FROM cart_items WHERE userid='$user'";
  $res= mysqli_query($this->conn, $sql);
  $row= mysqli_fetch_assoc($res);
  return $row['Total'];
}



}
$user = new connection();




?>
