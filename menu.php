 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu" style="height:100%; min-height:1000px;">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel"  style="margin-top:50px;">
	                            <div class="user-panel">
	                                	<div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="<?php echo $hospital->logo;  ?>" class="img-responsive" style="width:150px;"> 
											</div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> <?php echo $hospital->title;  ?></div>
                                            <div class="profile-usertitle-job"><?php echo $hospital->email;  ?> </div>
                                        </div>
                                        <div class="sidebar-userpic-btn">
									        <a class="tooltips" href="index.php?p=profil" data-placement="top" data-original-title="Profil">
									        	<i class="material-icons">person_outline</i>
									        </a>
									        <a class="tooltips" href="login.php?logout" data-placement="top" data-original-title="Logout">
									        	<i class="material-icons">input</i>
									        </a>
									    </div>
	                            </div>
	                        </li>
	                        <li class="menu-heading">
			                </li>
	                        
							<li class="nav-item start">
	                            <a href="index.php?p=consult_domain" class="nav-link nav-toggle">
	                                <i class="material-icons text-success">dashboard</i>
	                                <span class="title">Consult Domain</span>
	                            </a>

	                        </li>	                        
							<li class="nav-item start">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons text-danger">favorite</i>
	                                <span class="title">Favorites</span>
                                	<span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="index.php?p=add_hospital" class="nav-link ">
	                                        <span class="title">Add</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="index.php?p=consult_hospital" class="nav-link ">
	                                        <span class="title">Consult</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
							<li class="nav-item start">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons text-info">help</i>
	                                <span class="title">It support</span>
                                	<span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="index.php?p=ajouter_offre" class="nav-link ">
	                                        <span class="title">Consult candidature</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="index.php?p=consult_candidat" class="nav-link ">
	                                        <span class="title">Consult recruiting</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

						</ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
