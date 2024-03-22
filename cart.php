<!--------------- header-section --------------->
<?php

include("connection.php");
include("header.php");
if (!isset($_SESSION['userId'])) {
?>
    <script>
        window.location.href = "login.php";
    </script>
<?php
}


?>
<!--------------- header-section-end --------------->

<!--------------- blog-tittle-section---------------->
<section class="blog about-blog">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.php">Home</a></span>
            <span class="devider">/</span>
            <span><a href="#">Cart</a></span>
        </div>
        <div class="blog-heading about-heading">
            <h1 class="heading">Cart</h1>
        </div>
    </div>
</section>
<!--------------- blog-tittle-section-end---------------->

<!--------------- cart-section---------------->
<section class="product-cart product footer-padding">
    <div class="container">
        <div class="cart-section">
            <table>
                <tbody>
                    <tr class="table-row table-top-row">
                        <td class="table-wrapper wrapper-product">

                            <h5 class="table-heading"> <span><input type="checkbox" id="checkbox"></span> PRODUCT </h5>

                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">PRICE</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">QUANTITY</h5>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">TOTAL</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">ACTION</h5>
                            </div>
                        </td>
                    </tr>
                    <?php
                    if (isset($_SESSION['userId'])) {
                        $res = $user->displayCart();
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $data = mysqli_fetch_assoc($user->display($row['productid'])) // id came from dataBase
                    ?>

                                <tr class="table-row ticket-row" id="row<?php echo $row['id']; ?>">
                                    <td class="table-wrapper wrapper-product">
                                        <div class="wrapper">
                                            <input type="checkbox" name="pid[]" class="checkboxBtn" value="<?php echo $data['id']; ?>" checked>
                                            <div class="wrapper-img">
                                                <img src="admin/<?php echo $data['featuredPhoto'];  ?>" alt="img">
                                            </div>
                                            <div class="wrapper-content">
                                                <h5 class="heading"><?php echo $data['productName']; ?></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table-wrapper">
                                        <div class="table-wrapper-center">
                                            <h5 class="heading main-price"> ₹ <?php echo $data['productPrice']; ?></h5>
                                        </div>
                                    </td>
                                    <td class="table-wrapper">
                                        <div class="table-wrapper-center">
                                            <div class="quantity">
                                                <span id="qtyMinus<?php echo $data['id']; ?>">
                                                    -
                                                </span>
                                                <span id="qty<?php echo $data['id']; ?>"><?php echo $row['qty']; ?></span>
                                                <span id="qtyPlus<?php echo $data['id']; ?>">
                                                    +
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table-wrapper wrapper-total">
                                        <div class="table-wrapper-center">
                                            <input type="hidden" id="price<?php echo $row['id']; ?>" value="<?php echo $data['productPrice']; ?>">

                                            <h5 class="heading total-price" id="total<?php echo $data['id']; ?>">
                                                ₹ <?php echo $data['productPrice'] * $row['qty']; ?>
                                            </h5>
                                        </div>
                                    </td>
                                    <td class="table-wrapper">
                                        <div class="table-wrapper-center">
                                            <a class="btn btn-danger" id="deleteItem<?php echo $row['id']; ?>" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a class="btn btn-warning  m-1" href="#" id="updateCart<?php echo $row['id']; ?>"><i class=" fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                
                                <script>
                                    $(function() {
                                        $("#deleteItem<?php echo $row['id'] ?>").click(function() {
                                            if (confirm("Are you sure to delete this item ?")) {
                                                $.ajax({
                                                    url: "function.php",
                                                    method: "POST",
                                                    data: {
                                                        id: '<?php echo $row['id']; ?>',
                                                        cmd: 'deleteCartItem'
                                                    },
                                                    success: function(res) {
                                                        swal({
                                                            title: "",
                                                            text: "Cart Item Deleted",
                                                            icon: "success",
                                                            });
                                                        $("#row<?php echo $row['id']; ?>").fadeOut(1000);
                                                        $(".cart-value").text(res);
                                                    }
                                                })
                                            }
                                        })
                                        let qty = parseInt($('#qty<?php echo $data['id']; ?>').text())
                                        if (qty == 1) {
                                            $('#qtyMinus<?php echo $data['id']; ?>').hide()
                                        } else {
                                            $('#qtyMinus<?php echo $data['id']; ?>').show()
                                        }

                                        $('#qtyPlus<?php echo $data['id']; ?>').click(function() {

                                            qty += 1
                                            $('#qty<?php echo $data['id']; ?>').text(qty)
                                            let price = $("#price<?php echo $row['id']; ?>").val()
                                            $("#total<?php echo $data['id']; ?>").text('₹ ' + price * qty)

                                            if (qty == 1) {
                                                $('#qtyMinus<?php echo $data['id']; ?>').hide()
                                            } else {
                                                $('#qtyMinus<?php echo $data['id']; ?>').show()
                                            }

                                        })

                                        $('#qtyMinus<?php echo $data['id']; ?>').click(function() {

                                            qty -= 1
                                            $('#qty<?php echo $data['id']; ?>').text(qty)
                                            let price = $("#price<?php echo $row['id']; ?>").val()
                                            $("#total<?php echo $data['id']; ?>").text('₹ ' + price * qty)

                                            if (qty == 1) {
                                                $('#qtyMinus<?php echo $data['id']; ?>').hide()
                                            } else {
                                                $('#qtyMinus<?php echo $data['id']; ?>').show()
                                            }

                                        })


                                        $("#updateCart<?php echo $row['id']; ?>").click(function() {

                                            $.ajax({
                                                url: "function.php",
                                                type: "POST",
                                                data: {
                                                    'qty': qty,
                                                    'item': '<?php echo $row['id']; ?>',
                                                    'cmd': 'updateCart'
                                                },
                                                success: function(res) {
                                                    alert(res);

                                                }

                                            })
                                        })




                                    })
                                </script>
                    <?php
                            }
                        }
                    }
                    ?>




                </tbody>
            </table>
        </div>
        <div class="wishlist-btn cart-btn">
            <!-- <a href="empty-cart.php" class="clean-btn">Clear Cart</a> -->
            <a href="index.php" class="shop-btn ">Continue Shopping</a>
            <a href="#" class="shop-btn" id="btnCheckOut">Proceed to Checkout</a>
        </div>
    </div>
</section>

<script>
    $(function() {
        $("#btnCheckOut").click(function() {

            let pid = new Array()
            $("input:checkbox[type=checkbox]:checked").each(function() {
                pid.push($(this).val())
            })
            pidString = pid.toString()
            window.location.href = "checkout.php?pid=" + pidString

        })

            $('#checkbox').change(function() {
                $('.checkboxBtn').prop('checked', $(this).prop('checked'));
            });

            $('.checkboxBtn').change(function() {
                if (!$(this).prop('checked')) {
                    $('#checkbox').prop('checked', false);
                }
            });

    })
</script>
<!--------------- cart-section-end---------------->

<!--------------- footer-section--------------->
<?php include("footer.php"); ?>
<!--------------- footer-section-end--------------->