<body background="img/Bg.png" style ="
  background-repeat: no-repeat;
  background-attachment: fixed; ">
  <?php if(!isset($_SESSION['Account'])){
      header('location: login.php');
    } ?>
         <!--
          <nav class="navbar navbar-light" style="background-color: #B3EE3A;" width = "100%">
          <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ echo "<a class='navbadr-brand' href='indexAdmin.php'>";} 
                            elseif($row['profile_ID'] == 2){ echo "<a class='navbar-brand' href='index.php'>"; }
                          }
                        }
                          ?>
                    <img src="img/logomini.png" width="80" height="30" alt=""></a>
                    <?php echo $_SESSION['Account']; ?>
            <ul class="nav justify-content-end">
                    <li class="nav-item">
                    <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ echo "<a class='nav-link' href='indexAdmin.php'>home</a>";} 
                            elseif($row['profile_ID'] == 2){ echo "<a class='nav-link' href='index.php'>home</a>"; }
                          }
                        }
                          ?>
                    </li>
                    
                    
                    <li class="nav-item">
                      <div class="nav-item dropdown">
                        <a href="insert.html" class="nav-link dropdown-toggle" data-toggle="dropdown">จัดการบัญชีผู้ใช้</a>
                        <div class="dropdown-menu">
                          <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ echo "<a href='AccountManage.php' class='dropdown-item'>ค้นหาและจัดการผู้ใช้</a>
                            <a href='userinsert.php' class='dropdown-item'>เพิ่มผู้ใช้ใหม่</a>
                            <a href='profile_edit.php' class='dropdown-item'>แก้ไขข้อมูลส่วนตัว</a>";} 
                            elseif($row['profile_ID'] == 2){ echo "<a href='profile_edit.php' class='dropdown-item'>แก้ไขข้อมูลส่วนตัว</a>"; }
                          }
                        }
                          ?>
                          

                        </div>
                    </li>
                    <li class="nav-item">
                      <div class="nav-item dropdown">
                        <a href="insert.html" class="nav-link dropdown-toggle" data-toggle="dropdown">จัดการครุภัณฑ์</a>
                        <div class="dropdown-menu">
                        <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ //echo "<a href='assetinsert.php' class='dropdown-item'>เพิ่มครุภัณฑ์เดี่ยว</a>";
                           echo "<a href='multi_insert_form.php' class='dropdown-item'>เพิ่มครุภัณฑ์</a>
                            <a href='Search.php' class='dropdown-item'>ค้นหาและแก้ไขข้อมูลครุภัณฑ์</a>";
                            echo "<a href='Order_print.php' class='dropdown-item'>พิมพ์รายการครุภัณฑ์</a>";
                            echo "<a href='ImportF.php' class='dropdown-item'>นำเข้าข้อมูลครุภัณฑ์</a>";
                            echo "<a href='Edit_selection.php' class='dropdown-item'>แก้ไขตัวเลือก</a>";
                          } 
                            elseif($row['profile_ID'] == 2){ echo "<a href='Search.php' class='dropdown-item'>ค้นหาและตรวจสอบข้อมูลครุภัณฑ์</a>";
                              echo "<a href='Order_print.php' class='dropdown-item'>พิมพ์รายการครุภัณฑ์</a>"; }
                          }
                        }
                          ?>
                        
                        </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  </ul>
          </nav> -->
<div class="navnav">
	
  <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ echo "<a class='band' href='indexAdmin.php'>";} 
                            elseif($row['profile_ID'] == 2){ echo "<a class='band' href='index.php'>"; }
                          }
                        }
                          ?>
    <img src="img/logomini.png" width="70" height="30" alt=""></a>

  <a class = "a" href="logout.php"><img src="img/loout.png" width="30" height="30" alt=""> ออกจากระบบ</a>
  <a class = "a"href="Asset_prereport.php"><img src="img/pie.png" width="30" height="30" alt=""> ภาพรวมครุภัณฑ์</a>
  <div class="dropdownnav">
    <button class="dropbtnnav"><img src="img/userex.png" width="30" height="30" alt=""> จัดการบัญชีผู้ใช้ 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentnav">
                        <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ echo "<a href='AccountManage.php' class='dropdown-item'>ค้นหาและจัดการผู้ใช้</a>
                            <a href='userinsert.php' class='dropdown-item'>เพิ่มผู้ใช้ใหม่</a>
                            <a href='profile_edit.php?ID=".$row['ID']."' class='dropdown-item'>แก้ไขข้อมูลส่วนตัว</a>";} 
                            elseif($row['profile_ID'] == 2){ echo "<a href='profile_edit.php' class='dropdown-item'>แก้ไขข้อมูลส่วนตัว</a>"; }
                          }
                        }
                          ?>
                          
    </div>
  </div> 
  <div class="dropdownnav">
    <button class="dropbtnnav"><img src="img/computer.png" width="30" height="30" alt=""> จัดการครุภัณฑ์ 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentnav">
    <?php 
                          require 'connect.php';
                          $sql = "SELECT *  FROM userdata WHERE name = '".$_SESSION['Account']."'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                          if($row['profile_ID'] == 1 ){ //echo "<a href='assetinsert.php' class='dropdown-item'>เพิ่มครุภัณฑ์เดี่ยว</a>";
                           echo "<a href='multi_insert_form.php' class='dropdown-item'>เพิ่มครุภัณฑ์</a>
                            <a href='Search.php' class='dropdown-item'>ค้นหาและแก้ไขข้อมูลครุภัณฑ์</a>";
                            echo "<a href='Order_print.php' class='dropdown-item'>พิมพ์รายการครุภัณฑ์</a>";
                            echo "<a href='ImportF.php' class='dropdown-item'>นำเข้าข้อมูลครุภัณฑ์</a>";
                            echo "<a href='Edit_selection.php' class='dropdown-item'>แก้ไขตัวเลือก</a>";
                          } 
                            elseif($row['profile_ID'] == 2){ echo "<a href='Search.php' class='dropdown-item'>ค้นหาและตรวจสอบข้อมูลครุภัณฑ์</a>";
                              echo "<a href='Order_print.php' class='dropdown-item'>พิมพ์รายการครุภัณฑ์</a>"; }
                          }
                        }
                          ?>
    </div>
  </div> 
</div>

         