<?php include '../template/base_admin.php'; ?>
<?php include 'session_barang.php'; ?>



<div class="col">
    <div class="container">
        <div class="card mt-4 row">
            <div class="card-body">
                <?php
                include '../../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from item where id_item='$id'");
                while ($editbarang = mysqli_fetch_array($data)) {
                ?>

                    <form action="edit_barang_proses.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="idbardit" aria-describedby="emailHelp" value="<?php echo $editbarang['id_item'] ?>" required>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="namabardit" aria-describedby="emailHelp" value="<?php echo $editbarang['item_name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Picture:</label>
                            <input type="file" name="gambarbardit" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInpunama1">Description:</label>
                            <input type="text" class="form-control" id="exampleInputnama1" name="deskbardit" aria-describedby="emailHelp" value="<?php echo $editbarang['description'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputalamat1">Price:</label>
                            <input type="text" class="form-control" id="exampleInputalamat1" name="hargabardit" aria-describedby="emailHelp" value="<?php echo $editbarang['price'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputalamat1">Date:</label>
                            <input type="text" class="form-control" id="exampleInputalamat1" name="tanggalbardit" aria-describedby="emailHelp" value="<?php echo $editbarang['date'] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Product</button>
                    </form>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>