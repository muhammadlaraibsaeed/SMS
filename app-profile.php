<?php include 'includes/header.php';?>

<body>
<?php include 'includes/sidebar.php';?>
  <!-- /# sidebar -->

<?php include 'includes/topheader.php';?>



  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello,
                  <span>Welcome Here</span>
                </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">App-Profile</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img  src="https://picsum.photos/300" alt="" />
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name"><?php echo $_GET['name']; ?></div>
                        <div class="user-Location">
                          <i class="ti-location-pin"></i><?php echo $_GET['city']; ?></div>
                        <div class="user-job-title"><?php echo  strtoupper($_GET['type']);  ?></div>
                        <div class="ratings">
                          <h4>Ratings</h4>
                          <div class="rating-star">
                            <span>8.9</span>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star"></i>
                          </div>
                        </div>
                        <div class="user-send-message">
                          <button class="btn btn-primary btn-addon" type="button">
                            <i class="ti-email"></i>Send Message</button>
                        </div>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Contact information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Phone:</span>
                                  <span class="phone-number"><?php echo $_GET['phone'] ?></span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Address:</span>
                                  <span class="mail-address"><?php echo $_GET['city'] ?></span>
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Email:</span>
                                  <span class="contact-email"><?php echo $_GET['email'] ?></span>
                                </div>
                              </div>
                              <div class="basic-information">
                                <h4>Basic information</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Birthday:</span>
                                  <span class="birth-date">January 31, 1990 </span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Gender:</span>
                                  <span class="gender"><?php echo $_GET['gender'] ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Recent Project </h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover ">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kolor Tea Shirt For Man</td>
                          <td>
                            <span class="badge badge-primary">Ongoing</span>
                          </td>
                          <td>January 22</td>
                          <td class="color-primary">$21.56</td>
                        </tr>
                        <tr>
                          <td>Kolor Tea Shirt For Women</td>
                          <td>
                            <span class="badge badge-success">Complete</span>
                          </td>
                          <td>January 30</td>
                          <td class="color-success">$55.32</td>
                        </tr>
                        <tr>
                          <td>Blue Backpack For Baby</td>
                          <td>
                            <span class="badge badge-danger">Rejected</span>
                          </td>
                          <td>January 25</td>
                          <td class="color-danger">$14.85</td>
                        </tr>
                        <tr>
                          <td>Kolor Tea Shirt For Man</td>
                          <td>
                            <span class="badge badge-primary">Ongoing</span>
                          </td>
                          <td>January 22</td>
                          <td class="color-primary">$21.56</td>
                        </tr>
                        <tr>
                          <td>Kolor Tea Shirt For Women</td>
                          <td>
                            <span class="badge badge-success">Complete</span>
                          </td>
                          <td>January 30</td>
                          <td class="color-success">$55.32</td>
                        </tr>
                        <tr>
                          <td>Blue Backpack For Baby</td>
                          <td>
                            <span class="badge badge-danger">Rejected</span>
                          </td>
                          <td>January 25</td>
                          <td class="color-danger">$14.85</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Recent Comments </h4>

                </div>
                <div class="recent-comment">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="images/avatar/1.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">john doe</h4>
                      <p>Cras sit amet nibh libero, in gravida nulla. </p>
                      <div class="comment-action">
                        <div class="badge badge-success">Approved</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <p class="comment-date">October 21, 2017</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="images/avatar/2.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Mr. John</h4>
                      <p>Cras sit amet nibh libero, in gravida nulla. </p>
                      <div class="comment-action">
                        <div class="badge badge-warning">Pending</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <p class="comment-date">October 21, 2017</p>
                    </div>
                  </div>
                  <div class="media no-border">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="images/avatar/3.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Mr. John</h4>
                      <p>Cras sit amet nibh libero, in gravida nulla. </p>
                      <div class="comment-action">
                        <div class="badge badge-danger">Rejected</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <div class="comment-date">October 21, 2017</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 ?? Admin Board. -
                  <a href="#">example.com</a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>


  <?php include 'includes/footer.php';?>
</body>

</html>