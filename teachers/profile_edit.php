<?php 
session_start();

if (isset($_SESSION['tid']) && isset($_SESSION['tuser_name'])) {

 ?>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>


<html>
    <tital></tital>
    <header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    </header>

    <style>

body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>

    <body>
    <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../teachers/home.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../teachers/profile.php">User Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile Edit</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
            <!-- Profile picture card-->

            

            <form action="upload.php" method="post" enctype="multipart/form-data">
            

            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="/SCHOOL/teachers/image/<?php echo $_SESSION['image']; ?>" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB </div>
                    <!-- Profile picture upload button-->
                    
                    <input type="file"
                    name="my_image"
                    class="btn btn-primary">

                    <input type="submit"
                            name="submit"
                            value="Upload"
                            class="btn btn-primary">
                            
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo $_SESSION['tuser_name']; ?>">
                        </div>
                        
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Full Name</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="<?php echo $_SESSION['name'];?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Address</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="<?php echo $_SESSION['address'];?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?php echo $_SESSION['email'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?php echo $_SESSION['phone'];?>">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Status</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="<?php echo $_SESSION['status'];?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>