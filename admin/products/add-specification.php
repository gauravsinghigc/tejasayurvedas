<?php

//required files
require '../../require/modules.php';
require '../../require/admin/access-control.php';
require '../../require/admin/sessionvariables.php';

//page variables
$PageName = "ADD Product Specifications";

if (isset($_GET['id'])) {
  $ViewProductId = SECURE($_GET['id'], "d");
  $_SESSION['ViewProductId'] = $ViewProductId;
} else {
  $ViewProductId = $_SESSION['ViewProductId'];
}

//product details
$PageSqls = "SELECT * FROM products where ProductId='$ViewProductId'";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PageName; ?> | <?php echo APP_NAME; ?></title>
  <?php include '../../include/admin/header_files.php'; ?>
</head>

<body>
  <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
    <?php include '../../include/admin/header.php'; ?>

    <div class="boxed">
      <!--CONTENT CONTAINER-->
      <!--===================================================-->
      <div id="content-container">
        <div id="page-content">
          <!--====start content===============================================-->

          <div class="panel">
            <div class="panel-body">

              <div class="row">
                <div class="col-md-12">
                  <h3 class="app-heading"><?php echo $PageName; ?> : <?php echo FETCH("SELECT * FROM products where ProductId='$ViewProductId'", "ProductName"); ?></h3>
                </div>
                <br><br>
              </div>
              <div class="row m-t-10">
                <div class="col-md-4 col-lg-4 col-sm-4 col-12 text-center">
                  <div class="product-image">
                    <img src="<?php echo STORAGE_URL; ?>/products/pro-img/<?php echo GET_DATA('ProductImage'); ?>" id="ImgPreview">
                  </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-8 col-12">
                  <table class="table table-striped">
                    <tr>
                      <th>Reference Code/HSN/ProductCode</th>
                      <td class="text-info"><i class="fa fa-hashtag"></i> <?php echo GET_DATA("ProductRefernceCode"); ?></td>
                    </tr>
                    <tr>
                      <th>Product Name</th>
                      <td><?php echo GET_DATA("ProductName"); ?></td>
                    </tr>
                    <tr>
                      <th>Product Category</th>
                      <td><?php echo FETCH("SELECT * FROM pro_categories where ProCategoriesId='" . GET_DATA("ProductCategoryId") . "'", "ProCategoryName"); ?></td>
                    </tr>
                    <tr>
                      <th>Product Sub Category</th>
                      <td><?php echo FETCH("SELECT * FROM pro_sub_categories where ProSubCategoriesId='" . GET_DATA("ProductSubCategoryId") . "'", "ProSubCategoryName"); ?></td>
                    </tr>
                    <tr>
                      <th>Product Brand</th>
                      <td><?php echo FETCH("SELECT * FROM pro_brands where ProBrandId='" . GET_DATA("ProductBrandId") . "'", "ProBrandName"); ?></td>
                    </tr>
                    <tr>
                      <th>Product Price</th>
                      <td><?php echo Price(GET_DATA("ProductSellPrice")); ?> / <strike class="text-danger"><span class="text-primary"><?php echo Price(GET_DATA("ProductMrpPrice")); ?></span></strike></td>
                    </tr>
                    <tr>
                      <th>Product Quantity</th>
                      <td><?php echo GET_DATA("ProductWeight"); ?></td>
                    </tr>
                    <tr>
                      <th>Product Description</th>
                      <td><?php echo html_entity_decode(SECURE(GET_DATA("ProductDescriptions"), "d")); ?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <br>
              <div class="row">
                <form class="data-form" action="../../controller/productscontroller.php" method="POST" enctype="multipart/form-data">
                  <?php FormPrimaryInputs(true); ?>
                  <div class="row p-2">
                    <div class="col-md-4 col-lg-4 text-right">
                      <label>Specification Name</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="ProSpecificationName" value="" class="form-control-2" required="">
                    </div>
                  </div>
                  <div class="row p-2">
                    <div class="col-md-4 col-lg-4 text-right">
                      <label>Specification Descriptions</label>
                    </div>
                    <div class="col-md-8">
                      <textarea class="form-control-2" name="ProSpecificationValue" rows="5" id="editor"></textarea>
                    </div>
                  </div>
                  <div class="row p-2">
                    <div class="col-md-12 text-center">
                      <button class="app-btn" value="<?php echo SECURE($_SESSION['ViewProductId'], "e"); ?>" name="createproductspecifications" type="submit">Save Details</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--End page content-->
        </div>

        <?php include '../../include/admin/sidebar.php'; ?>
      </div>
      <?php include '../../include/admin/footer.php'; ?>
    </div>

    <?php include '../../include/admin/footer_files.php'; ?>
</body>

</html>