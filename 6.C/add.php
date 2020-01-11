<?php 
  include('koneksi.php');
  include('header.php');

  if(isset($_POST['save'])){
    // if(mysqli_affected_rows($koneksi) > 0){
    //     echo "Berhasil";
    // }else{
    //     die("Error : Gagal Disimpan");
    // }
    if(tambah($_POST) > 0){
      echo "
      <script>
          alert('Data successfully added!');
          document.location.href = 'index.php';
      </script>
      ";  
    }else{
      echo "
      <script>
          alert('Data failed to added!');
          document.location.href = 'index.php';
      </script>";
    }
  }else if(isset($_POST['back'])){
    header("location:index.php");
  }
?>

    
<div class="container">
  <div class="row my-5">
    <div class="col-md-6 card">
      <form class="my-5" method="post" action="">
        <div class="form-group">
          <label for="name">Name Product</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Input Name Product">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select name="category" class="form-control" name="category">
            <option value="-">Choose Category</option>
            <?php 
              $cshr = query("SELECT*FROM category");
              foreach ($cshr as $cshr) :
            ?>
            <option value="<?= $cshr['id_category']; ?>"><?= $cshr['name']; ?></option>
            <?php
              endforeach;
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text">Rp</div>
            </div>
            <input type="number" min="0" class="form-control" id="price" name="price" placeholder="100000">
          </div>
        </div>
        <div class="form-group">
          <label for="cashier">Cashier</label>
          <select name="cashier" class="form-control" name="cashier">
            <option value="-">Choose Cashier</option>
            <?php 
              $cshr = query("SELECT*FROM cashier");
              foreach ($cshr as $cshr) :
            ?>
            <option value="<?= $cshr['id_cashier']; ?>"><?= $cshr['name']; ?></option>
            <?php
              endforeach;
            ?>
          </select>
        </div>
        <button type="submit" name="save" class="btn pink">Save</button>
        <button type="submit" name="back" class="btn btn-danger">Back</button>
      </form>
    </div>
  </div>
</div>
<?php 
  include('footer.php');
?>