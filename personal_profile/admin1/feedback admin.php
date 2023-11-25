<?php include("../config.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
<div class="sidebar close">
    <div class="logo-details">
      <span class="logo_name">Relz</span>
      <span class="logo_name2">profile</span>
    </div>
    <ul class="nav-links">
      <li>
        <div class="icon-link">
          <a href="feedback admin.php">
          <i class='bx bx-envelope'></i>
            <span class="link_name">Feedback</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a href="feedback admin.php">Feedback</a></li>
        </ul>
      </li>
      <li>
      <li>

      <div class="iocn-link">

       <li>
        <a href="login.php">
        <i class='bx bx-user'></i>
          <span class="link_name">Logout</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="login.php">Logout</a></li>
        </ul>
       </li>
      </div>
      <li>
    <div class="profile-details">
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <header>
        <h1 align="center">FEEDBACK</h1>
      </header>
     <table class="table table-striped">
       <thead>
         <tr>
            <th>No</th>
            <th>Name</th>
            <th>Date</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
         </tr>
       </thead>
    <tbody>
    <?php
   $sql = "SELECT * FROM tb_feedback ";
   $query = mysqli_query($db, $sql);
   while($tb_feedback = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$tb_feedback['ID']."</td>";
    echo "<td>".$tb_feedback['name']."</td>";
    echo "<td>".$tb_feedback['date']."</td>";
    echo "<td>".$tb_feedback['email']."</td>";
    echo "<td>".$tb_feedback['message']."</td>";
    echo "<td>";
    echo "<a href='hapus.php?ID=".$tb_feedback['ID']."' class='btn btn-danger' onclick='return confirmDelete();'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
    }
       
    ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus?");
    }
    let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
    </script>
  </section>
    </body>
</html>