<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3 mt-2">
          <a  href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
session_start();
$role =$_SESSION['role'];
if(isset($_SESSION['role'])){
if($role==1){
  ?>
  <div class="container mt-5">
    <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
      <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="true">Messages</button>
      <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="true">Settings</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
        <h1>Wellcome to Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptates possimus labore, iste similique ipsum sequi aliquam, magnam eligendi quis doloremque, repudiandae itaque excepturi assumenda corporis ut autem tenetur.</p>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
        <h1>Wellcome to profile</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, libero! Fuga corporis in ad, cumque, mollitia aperiam quos nostrum praesentium officiis nobis assumenda incidunt, similique quasi excepturi! Aspernatur, velit libero!</p>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
        <h1>Wellcome to Massages</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit ipsa sed dolore corporis reprehenderit repellendus iure ipsam, debitis perspiciatis unde veniam voluptas in expedita neque quis! Iusto veniam impedit ea!</p>
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
        <h1>Wellcome to setting</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim corrupti quaerat similique, mollitia culpa voluptatum placeat repellendus reiciendis provident minima eaque asperiores adipisci neque inventore, obcaecati nobis odit incidunt rem!</p>
      </div>
    </div>
  </div>
</div>
<?php
}else{
  ?>
   <div class="container mt-5">
    <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
        <h1>Wellcome to Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptates possimus labore, iste similique ipsum sequi aliquam, magnam eligendi quis doloremque, repudiandae itaque excepturi assumenda corporis ut autem tenetur.</p>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
        <h1>Wellcome to profile</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, libero! Fuga corporis in ad, cumque, mollitia aperiam quos nostrum praesentium officiis nobis assumenda incidunt, similique quasi excepturi! Aspernatur, velit libero!</p>
      </div>
    </div>
  </div>
</div>
  <?php
}
}else{
  header("location: login.php");
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>