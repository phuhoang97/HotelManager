<style>
            body{
                font-family: arial;
            }
            .container{
                width: 1200px;
                margin: 0 auto;
            }
            h1{
                text-align: center;
            }

            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .room-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                line-height: 26px;
            }
            .room-item label{
                font-weight: bold;
            }
            .room-item{
                width: 200px;
                height: 290px;
            }
            .room-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
                
            }
            .room-price{
                color: red;
                font-weight: bold;
            }
            .room-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .room-item img{
                max-width: 100%;
            }
            .room-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .room-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
</style>            
<?php
    include 'header.php';
    if (!empty($_SESSION['current_user'])) {
            $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 5;
            $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $item_per_page;
            $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
            $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
            mysqli_close($con);
            ?>
            
            <div class="main-content">
                <h1>List of Room</h1>
                <div class="product-items">
                    <div class="buttons">
                        <a href="./product_editing.php">Add Room</a>
                    </div>
                    <ul id="room-container">
                    <?php
                        while ($row = mysqli_fetch_array($products)) {
                            ?>
                            <div class="room-item" id="<?= $row['id'] ?>">
                                <div class="room-img"><img src="../<?= $row['image'] ?>" alt="<?= $row['name'] ?>" title="<?= $row['name'] ?>" /></div>
                                <strong><?= $row['name'] ?></strong><br/>
                                <p><?= $row['content'] ?></p>
                                <div class="status" >Phòng trống</div>
                                <button class="btn btn-success status-button">Status</button>
                                <button class="btn btn-success" style="background: #6d90d0"><a href="./detail_room.php" style="color:black">Detail</a></button>     
                            </div>
                        <?php } ?>
                        <div class="clear-both"></div>
                        <?php
                        include './pagination.php';
                    ?>
            <div class="clear-both"></div>
        </div>
    </div>
    <?php }
            include './footer.php';
    ?>