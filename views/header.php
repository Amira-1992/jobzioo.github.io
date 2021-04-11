        <!-- start header -->
		<div class="header-indigo">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.php">
                    <span class="logo-default" >Administrator</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>            
                <!-- start header menu -->
                <?php $condition="where learn=0"; ?>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-heart"></i>
                                <span class="badge headerBadgeColor1"> <?php echo compteurTable($conn,"favoris",$condition); ?> </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Candidats In Favoris</span></h3>
                                    <span class="notification-label purple-bgcolor">New <?php echo compteurTable($conn,"favoris",$condition); ?></span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                       <?php
                                        $fav=new Favoris();
                                        $cand=new Candidat();
                                        $hospital=new Hospital();
                                        $i=0;
                                        while($i<compteurTable($conn,"favoris",$condition))
                                        {
                                            $fav->consult($conn,$i,$condition);
                                            $cand->consult($conn,0,"where id='".$fav->id_candidat."'");
                                       ?>
                                        <li>
                                            <a href="index.php?p=favoris&id_candidat=<?php echo $cand->id; ?>">
                                                <span class="time"><?php echo $fav->date; ?></span>
                                                <span class="details">
                                                <span class="photo"><img height="40" width="40" src="../<?php echo $cand->picture; ?>" class="img-circle" alt=""> </span>                                                
                                                <?php echo $cand->first_name."&nbsp;".$cand->last_name; ?></span>
                                            </a>
                                        </li>
                                        <?php
                                        $i++;
                                            }
                                        ?>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="index.php?p=favoris"> All favoris </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class=" " src="../assets/img/logo.jpg" />
                                <span class="username username-hide-on-mobile"> Administrator </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="index.php?p=profil">
                                        <i class="icon-user"></i> Profile </a>
                                </li>

                                <li class="divider"> </li>
                                <li>
                                    <a href="login.php?logout"><i class="icon-logout"></i> Déconnecter</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->

                    </ul>
                </div>
            </div>


        </div>
		</div>
        <!-- end header -->
