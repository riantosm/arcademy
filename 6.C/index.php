<?php 
  include('koneksi.php');
  include('header.php');
?>
  <div class="container my-5">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead style="background-color: #a6a6a6; color: white;">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Cashier</th>
              <th scope="col">Product</th>
              <th scope="col">Category</th>
              <th scope="col">Price</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $product = query("SELECT*FROM product");
              $no=1;
              foreach ($product as $prd) :
            ?>
            <tr>
              <th scope="row"><?= $no; ?></th>
              <td>
                <?php
                  $id = $prd['id_cashier'];
                  $cshr = query("SELECT*FROM cashier where id_cashier = '$id'");
                  foreach ($cshr as $cshr) :
                    echo $cshr['name'];
                  endforeach;
                ?>
              </td>
              <td><?= $prd['name']; ?></td>
              <td>
                <?php
                  $id = $prd['id_category'];
                  $cshr = query("SELECT*FROM category where id_category = '$id'");
                  foreach ($cshr as $cshr) :
                    echo $cshr['name'];
                  endforeach;
                ?>
              </td>
              <td>Rp <?= number_format($prd['price'], 2, ",", "."); ?></td>
              <td>
                <a href="edit.php?id=<?= $prd['id_product']; ?>" class="text-success">
                  Edit
                </a>|
                <a href="delete.php?id=<?= $prd['id_product']; ?>" class="text-danger" onclick="return confirm('Yakin?');">
                  Delete
                </a>
              </td>
            </tr>
            <?php
              $no++;
              endforeach;
            ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
<?php 
  include('footer.php');
?>