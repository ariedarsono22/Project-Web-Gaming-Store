<?php include 'template/base_admin.php'; ?>
<?php include 'template/header_admin.php'; ?>


<div class="container">
    <?php
    include '../koneksi.php';
    $no = 1;
    $dataconfirm = mysqli_query($koneksi, "select * from cart");
    while ($listconfirm = mysqli_fetch_array($dataconfirm)) {
    ?>
        <div class="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title"><?php echo $listconfirm['item_name_cart']; ?></h5>
                <h6 class="card-title">Rp <?php echo $listconfirm['price_cart']; ?></h6>
                <p class="card-text">Dibeli oleh: <?php echo $listconfirm['user_name']; ?></p>
                <p class="card-text"><?php echo $listconfirm['address_cart']; ?></p>
                <p class="card-text">jumlah: <?php echo $listconfirm['total_item']; ?></p>
                <h5 class="card-title">Status: <?php echo $listconfirm['status_cart']; ?></h5>
                <?php
                if ($listconfirm['status_cart'] == 'On Process') {
                ?>
                    <a href="ubah_status.php?id=<?php echo $listconfirm['id_cart']; ?>" class="btn btn-primary">Change Status</a>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

</div>