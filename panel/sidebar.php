<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/poprilogo.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/poprilogo.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-speedometer"></i><span data-key="t-dashboards">Dashboards</span>
                            </a>
                           <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="home.php" class="nav-link" data-key="t-analytics"> HOME</a>
                                    </li>
                             
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                               <i class="ri-chat-1-fill"></i><span data-key="t-apps">MESSAGES</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                  
                                    <li class="nav-item">
                                        <a href="enquiry.php" class="nav-link" data-key="t-chat">ENQUIRY</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class=" ri-account-circle-line"></i> <span >CATEGORY</span> 
                               
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="category.php" class="nav-link">MASTER CATEGORY</a>
                                        
                                    </li>
                                    
                                </ul>
                            </div>

                        </li> <!-- end Dashboard Menu -->

                       

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                <i class="ri-git-repository-private-line"></i> <span>Product</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAuth">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="product_listing.php" class="nav-link">Product_listing</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarBack" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBack">
                               <i class="ri-screenshot-2-line"></i><span>Background</span>
                              
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarBack">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="background.php" class="nav-link">ADMIN</a>
                                        
                                    </li>
                                    
                                </ul>
                           </div> 
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="logout.php"  role="button" aria-expanded="false" aria-controls="logout">
                               <i class=" ri-arrow-left-circle-line"></i>  <span>Logout</span>
                              
                            </a>
                            
                            
                        </li>

                           <!-- 
                                    
                             -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->