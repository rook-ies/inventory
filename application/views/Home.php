<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br>
  <h2 class="text-center">Menu</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">List Item</h5>
            <a href="<?php echo site_url('item/'); ?>" class="btn btn-primary">Next</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">List Customer</h5>
            <a href="<?php echo site_url('customer/'); ?>" class="btn btn-primary">Next</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">List Sales</h5>
            <a href="<?php echo site_url('sales/'); ?>" class="btn btn-primary">Next</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
