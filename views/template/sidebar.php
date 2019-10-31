<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="<?php echo URL; ?>images/faces/face8.jpg" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Allen Moreno</p>
          <p class="designation">Administrator</p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger"></div>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">part1</span>
    </li>
    <li class="nav-item "id = 'staff'>
      <a class="nav-link" href="<?php echo URL;?>League/index">
        <span class="menu-title">Tables</span>
        <i class="icon-grid menu-icon"></i>
      </a>
    </li>
    <li class="nav-item" id = 'page'>
      <a class="nav-link"  href="<?php echo URL;?>page/page">
        <span class="menu-title">Dashboard</span>
        <i class="icon-screen-desktop menu-icon"></i>
      </a>
    </li>
  
   
  </ul>
</nav>
<?php
  if(isset($this->sidebar)){
    $sidebar = $this->sidebar;
    echo "<script>
    let element = document.getElementById('$sidebar');
    element.classList.add('active');
    
    
    
    </script>
    ";
  }
  else{
  
  }
  // print_r( $arr)
?>