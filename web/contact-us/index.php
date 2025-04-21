<?php
//include required files here
require '../../require/modules.php';
require '../../require/web-modules.php';

//page varibale
$PageName  = "Contact Us";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PageName; ?> | <?php echo APP_NAME; ?></title>
  <?php include '../../include/web/header_files.php'; ?>
</head>

<body>

  <?php
  include '../../include/web/header.php'; ?>

  <section class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4 class="account-header text-center p-5"><?php echo $PageName; ?><br>
          <span class="fs-12">We welcome every feedback, suggestion or query, so feel free to reach at us at any time.</span>
        </h4>
      </div>
    </div>
  </section>

  <section class="container-fluid mt-3">
    <div class="row">
      <div class="col-md-4">
        <div class="p-2 address-block">
          <h1 class="text-center text-success"><i class="fa fa-map-marker"></i></h1>
          <center> <?php echo SECURE(PRIMARY_ADDRESS, "d"); ?></center>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-2 address-block">
          <h1 class="text-center text-success"><i class="fa fa-phone"></i></h1>
          <center>
            <?php echo PRIMARY_PHONE; ?>
          </center><br>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-2 address-block">
          <h1 class="text-center text-success"><i class="fa fa-envelope"></i></h1>
          <center>
            <?php echo PRIMARY_EMAIL; ?>
          </center><br>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-7">
        <iframe class="p-3" src="<?php echo SECURE(PRIMARY_MAP_LOCATION_LINK, 'd'); ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
      <div class="col-md-5">
        <h4 class="mt-3">Feel free to reach at us</h4>
        <hr>
        <p>Fill all required details, we will contact you as soon as possible.</p>
        <form style="margin: 1% auto;" action="<?php echo CONTROLLER; ?>/enquirycontroller.php" method="POST">
          <?php FormPrimaryInputs(true); ?>
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="FullName" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Email ID</label>
            <input type="email" name="EnquiryPhoto" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="PhoneNumber" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Subject</label>
            <input type="text" name="Subject" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="Message" rows="4" required=""></textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-md btn-success" name="SubmitEnquiry" type="Submit">Send Details</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <br><br>

  <?php include '../../include/web/footer.php'; ?>
  <?php include '../../include/web/footer_files.php'; ?>
</body>

</html>