<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> admin </title>
    <link rel="stylesheet" href="style1.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <span class="logo_name">Relz</span>
      <span class="logo_name2">Profile</span>
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
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
      <li>
    <div class="profile-details">
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">WELCOME</span>
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