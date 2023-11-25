<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Relztore </title>
    <link rel="stylesheet" href="style2.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <span class="logo_name">Relz</span>
      <span class="logo_name2">Store</span>
    </div>
    <ul class="nav-links">
      <li>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-envelope'></i>
            <span class="link_name">Feedback</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Feedback</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">

        </div>
      </li>
      <li>
      <li>
        <div class="iocn-link">
  
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="link_name">Logout</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Logout</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
     <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Date</th>
                <th>Tindakan</th>
            </tr>
        </thead>
    <tbody>
<?php
 $sql = "SELECT * FROM tb_feedback";
 $query = mysqli_query($db, $sql);
 while($siswa = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$siswa['id']."</td>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['Email']."</td>";
    echo "<td>";
    echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
    }
       
    ?>
     </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
  </section>
  <script>
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
</body>
</html>