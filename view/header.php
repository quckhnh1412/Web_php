<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid justify-content-center">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style = "margin-left : 377px ; font-size:21px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Thể loại
              </a>
              <ul
                class="dropdown-menu bg-dark"
                aria-labelledby="navbarDropdown"
              >
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=hành động">Hành động</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=hài">Hài</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=tình cảm">Tình cảm</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=gia đình">Gia đình</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=ly kì">Ly kì</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=giả tưởng">Giả tưởng</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href="../view/selected.php?genre=phiêu lưu">Phiêu lưu</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="logo-container" style="text-align: center; margin-right : 208px">
            <h1 class="logo">NETFILM</h1>
          </div>
          <form class="d-flex" action = "../view/search-result.php" method = "get" style= "margin-bottom:0;">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
              name = "search"
            />
            <button class="btn" type="submit">
              <i class="fa-regular fa-magnifying-glass"></i>
              <svg
                width="30"
                height="30"
                viewBox="0 0 69 63"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M49.2989 48.1358C44.0843 52.1004 37.3624 54.4871 30.0264 54.4871C13.4433 54.4871 0 42.2899 0 27.2436C0 12.1973 13.4432 3.8147e-06 30.0264 3.8147e-06C46.6096 3.8147e-06 60.0528 12.1973 60.0528 27.2436C60.0528 34.1014 57.6099 39.7117 53 44.5L69 59L65.6829 63L49.2989 48.1358ZM54.5 27.244C54.5 39.939 44.019 49.5 30.0264 49.5C16.0346 49.5 5.5 39.9387 5.5 27.2436C5.5 14.5484 15.5 5 30.0264 5C44.0188 5 54.5 14.5489 54.5 27.244Z"
                  fill="white"
                />
              </svg>
            </button>
          </form>
          <?php
            //session_start();
            //echo $_SESSION['id'];
            if(!isset($_SESSION['id'])){
              ?>
            
     
          <!-- nút sign up và nút login -->
         
          <a class="log" href = "../controller/login/login.php"> Login </a>
          <a class="reg" href = "../controller/login/signup.php"> Signup </a>
          <?php
            }else{
             echo '
          
          <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle username"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style = "padding:0;margin-right: 0;margin-left: 0;"
              >
                Welcome '.$_SESSION['user'].'
              </a>
              <ul
                class="dropdown-menu bg-dark"
                aria-labelledby="navbarDropdown"
                
              >
                <li>
                <i class="bi bi-box-arrow-right"></i>
                  <a class="dropdown-item text-light" href="../controller/login/change-password.php">Change password</a> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style = "margin-left:10px" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" margin= "20px">
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                  </a>
                </li>
                <li>
                <i class="bi bi-box-arrow-right"></i>
                  <a class="dropdown-item text-light" href="../controller/login/logout.php">Thoát 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style = "margin-left:10px" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" margin= "20px">
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                  </a>
                </li>';
                
                }
                ?>
    
              </ul>
            </li>
        </div>
      </div>
    </nav>