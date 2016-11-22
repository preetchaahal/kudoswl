<ul class="nav navbar-nav side-nav" id="navigation">
              <li class="collapsed-content">
                <!-- Collapsed content pasting here at 768px -->
              </li>
              <li class="user-status status-online hide" id="user-status">
                <div class="profile-photo">
                  <img src="images/profile-photo.jpg" alt />
                </div>
                <div class="user">
                  <strong><?php // //echo $_SESSION['username']; ?></strong>
                  <span class="role">Administrator</span>
                  
                </div>
              </li>
              <li class=" <?php // if($page == 'dashboard'){ echo 'active';}?>">
                <a href="dashboard.php" class="dropdown-toggle"  title="Dashboard">
                  <i class="fa fa-dashboard">
                    <span class="overlay-label red"></span>
                  </i> 
                  Dashboard 
                </a>
               
              </li>
              <li class="dropdown <?php // if( in_array($page, array('Page', 'news', 'newscategory', 'add-post', 'admin-view-posts', 'blogcategory', 'site-videos', 'add-site-video', 'team' , 'blog-cat-edit', 'gallery')) ) echo 'open'; //if( $page == 'admin_calendar' || $page == "events_meta" ) { echo 'open';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    title="Events">
                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                    Site Pages<b class="fa fa-angle-left dropdown-arrow"></b>
                    </a>
                      <ul class="dropdown-menu animated fadeInDown">
                            
                            <?php // $linkright = $login_obj->fun_check_rights("p1"); if($linkright == '1'){?>
                                 <li class="<?php // if($page == 'Page'){ echo 'active';}?>">
                                  <a href="page.php?s=false" title="Pages">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                  Pages
                                  </a>
                                </li>
                            <?php // } ?>

                            <?php // $linkright = $login_obj->fun_check_rights("n1"); if($linkright == '1'){?>
                                   <li class="dropdown-submenu <?php // if( $page == 'news' || $page == "newscategory" ) { echo 'open';}?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    title="News">
                                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                    News <b class="fa fa-angle-left dropdown-arrow"></b>
                                    </a>
                                      <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                        <li class="<?php // if($page == 'news'){ echo 'active';}?>">
                                          <a href="news.php?s=false" title="Site News">
                                          <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>Site news</a>
                                        </li>
                                        <?php // $linkright = $login_obj->fun_check_rights("nc1"); if($linkright == '1'){?>
                                        <li class="<?php // if($page == 'newscategory'){ echo 'active';}?>">
                                          <a href="newscategory.php?s=false" title="Manage News Categories">
                                          <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>Manage news categories</a>
                                        </li><?php // } ?>
                                    </ul>
                                  </li>
                            <?php // } ?>

                            <?php // $linkright = $login_obj->fun_check_rights("te1"); if($linkright == '1'){?>
                                     <li class="dropdown-submenu <?php // if($page == 'add-post' || $page == 'admin-view-posts' || $page == 'blogcategory' || $page == 'blog-cat-edit'){ echo 'open';}?>" >
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu"
                                      title="Blog">
                                        <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                      Blog<b class="fa fa-angle-left dropdown-arrow"></b>
                                      </a>
                                      <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                        <li class="<?php // if($page == 'blogcategory') echo 'active'; ?>"><a href="blog-cat.php">Manage Categories</a></li>
                                        <li class="<?php // if($page == 'add-post') echo 'active'; ?>"><a href="add-post.php">New Post</a></li>
                                        <li class="<?php // if($page == 'admin-view-posts') echo 'active'; ?>"><a href="view-posts.php">View all posts</a></li>
                                      </ul>
                                    </li>
                            <?php // } ?>

                            <?php // if($_SESSION["u_t"] == '1'){?>
                                    <li class="<?php // if($page == 'site-videos' || $page == 'add-site-video'){ echo 'active';}?>">
                                      <a href="site-videos.php" title="Site Videos">
                                        <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                      Site Videos
                                      </a>
                                    </li>
                            <?php // } ?>

                            <?php // $linkright = $login_obj->fun_check_rights("t1"); if($linkright == '1'){?>
                                  <li class="<?php // if($page == 'team'){ echo 'active';}?>">
                                    <a href="team.php?s=false" title="Team">
                                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                    Team
                                    </a>
                                  </li>
                            <?php // } ?>

                            <?php // $linkright = $login_obj->fun_check_rights("g1"); if($linkright == '1'){?>
                                 <li class="<?php // if($page == 'gallery'){ echo 'active';}?>">
                                    <a href="gallery.php?s=false" title="Gallery">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>Gallery
                                    </a>
                                  </li>
                            <?php // } ?>

                      </ul>
              </li>


              <li class="dropdown <?php // if( in_array($page, array('site', 'lotto-update', 'lotto-stats', 'admin_calendar', 'events_meta', 'events_meta_form', 'values', 'admin-quotes', 'admin-quotes-view' ,'!admin-quotes-view', 'userads', 'ads-cat', 'ads-cat-add')) ) echo 'open'; //if( $page == 'admin_calendar' || $page == "events_meta" ) { echo 'open';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    title="Site Services">
                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                    Site Services<b class="fa fa-angle-left dropdown-arrow"></b>
                    </a>
                      <ul class="dropdown-menu animated fadeInDown">
                            
                            <?php // $linkright = $login_obj->fun_check_rights("n1"); if($linkright == '1'){?>
                                   <li class="dropdown-submenu <?php // if( $page == 'lotto-stats' || $page == "lotto-update" ) { echo 'open';}?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    title="Lotto">
                                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                    Lotto <b class="fa fa-angle-left dropdown-arrow"></b>
                                    </a>

                                    <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                      
                                        <li class="<?php // if($page == 'lotto-stats'){ echo 'active';}?>"><a href="lottery-stats.php">Lotto Stats</a></li>
                                        <li class="<?php // if($page == 'lotto-update'){ echo 'active';}?>"><a href="lottery-update.php">Update Stats</a></li>

                                    </ul>
                                  </li>
                            <?php // } ?>

                            <?php // $linkright = $login_obj->fun_check_rights("u1"); if($linkright == '1'){?>
                             <li class="dropdown-submenu <?php // if( $page == 'admin_calendar' || $page == "events_meta" || $page == 'events_meta_form' ) { echo 'open';}?>">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                              title="Events">
                                <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                              Events<b class="fa fa-angle-left dropdown-arrow"></b>
                              </a>
                                <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                  <li class="<?php // if($page == 'admin_calendar'){ echo 'active';}?>">
                                    <a href="calendar.php" title="Site Calendar">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>Calendar</a>
                                  </li>
                                  <li class="<?php // if($page == 'events_meta' || $page == 'events_meta_form'){ echo 'active';}?>">
                                    <a href="events-meta.php" title="Site Quotes">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>Events Meta</a>
                                  </li>
                              </ul>
                            </li>
                            <?php // } ?>

                            <?php // if($_SESSION["u_t"] == '1'){?>
                              <li class="<?php // if($page == 'site'){ echo 'active';}?>">
                                <a href="site.php" title="Sites">
                                  <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                Sites
                                </a>
                              </li>
                            <?php // } ?>

                            <?php // if($_SESSION["u_t"] == '1'){?>
                                <li class="<?php // if($page == 'values'){ echo 'active';}?>">
                                  <a href="values.php" title="Values">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                  Values
                                  </a>
                                </li>
                            <?php // } ?>


                            <?php // $linkright = $login_obj->fun_check_rights("p1"); if($linkright == '1'){?>
                                 <li class="dropdown-submenu <?php // if($page == 'admin-quotes' || $page == '!admin-quotes-view' || $page == 'admin-quotes-view'){ echo 'open';}?>">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                  title="Quotes">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                  Quotes<b class="fa fa-angle-left dropdown-arrow"></b>
                                  </a>
                                  <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                    <li class="<?php // if($page == 'admin-quotes'){ echo 'active';}?>">
                                      <a href="admin-quotes.php" title="Site Quotes">
                                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>View Site Quotes</a>
                                    <li class="<?php // if($page == '!admin-quotes-view'){ echo 'active';}?>"><a href="!admin-quotes-view.php"><i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>View Quotes Stats(admin)</a></li>
                                  </ul>
                                </li>
                            <?php // } ?>                            

                            <?php // $linkright = $login_obj->fun_check_rights("ua1"); if($linkright == '1'){?>
                               <li class="dropdown-submenu <?php // if($page == 'userads' || $page == 'ads-cat' || $page == 'ads-cat-add' ){ echo 'open';}?>">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                title="Site Ads">
                                  <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                Site Ads<b class="fa fa-angle-left dropdown-arrow"></b>
                                </a>
                                <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                  <li class="<?php // if($page == 'userads'){ echo 'active';}?>">
                                    <a href="userads.php" title="User Ads">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>User Ads</a>
                                  </li>
                                  <li class="<?php // if($page == 'ads-cat' || $page =='ads-cat-add'){ echo 'active';}?>">
                                    <a href="ads-cat.php" title="User Ads">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>Manage Ads Categories</a>
                                  </li>
                                </ul>
                              </li>
                            <?php // } ?>

                      </ul>
              </li>

              <li class="dropdown <?php // if( in_array($page, array('staff', 'reporter', 'language', 'languagecov')) ) echo 'open'; //if( $page == 'admin_calendar' || $page == "events_meta" ) { echo 'open';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    title="Site Services">
                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                    Site Staff<b class="fa fa-angle-left dropdown-arrow"></b>
                    </a>
                      <ul class="dropdown-menu animated fadeInDown">
                            


                            <?php // $linkright = $login_obj->fun_check_rights("s1"); if($linkright == '1'){?>
                                <li class="<?php // if($page == 'staff'){ echo 'active';}?>">
                                    <a href="staff.php?s=false" title="Staff">
                                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                     Staffs
                                    </a>
                                </li>
                            <?php // } ?>
                            <?php // $linkright = $login_obj->fun_check_rights("r1"); if($linkright == '1'){?>
                               <li class="<?php // if($page == 'reporter'){ echo 'active';}?>">
                                <a href="reporter.php?s=false" title="Reporter">
                                  <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                Reporters
                                </a>
                              </li>
                            <?php // } ?>
                            <?php // $linkright = $login_obj->fun_check_rights("l1"); if($linkright == '1'){?>
                                <li class="<?php // if($page == 'language'){ echo 'active';}?>">
                                  <a href="language.php?s=false" title="Language">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                   Language
                                  </a>
                                </li>
                            <?php // } ?>
                            <?php // $linkright = $login_obj->fun_check_rights("lc1"); if($linkright == '1'){?>
                                <li class="<?php // if($page == 'languagecov'){ echo 'active';}?>">
                                  <a href="language_convert.php?s=false" title="Language Converter">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                   Language Converter
                                  </a>
                                </li>
                            <?php // } ?>
                            
                      </ul>
              </li>

              <li class="dropdown <?php // if( in_array($page, array('user', 'site_subs_plans', 'site_subscribers_config', 'testimonial', 'message')) ) echo 'open'; //if( $page == 'admin_calendar' || $page == "events_meta" ) { echo 'open';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    title="Site Services">
                      <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                    Site Users<b class="fa fa-angle-left dropdown-arrow"></b>
                    </a>
                      <ul class="dropdown-menu animated fadeInDown">
                            
                          <?php // $linkright = $login_obj->fun_check_rights("u1"); if($linkright == '1'){?>
                             <li class="<?php // if($page == 'user'){ echo 'active';}?>">
                              <a href="user.php?s=false" title="Registered User">
                                <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                               Registered User
                              </a>
                            </li>
                          <?php // } ?>

                          <?php // $linkright = $login_obj->fun_check_rights("te1"); if($linkright == '1'){?>
                                 <li class="dropdown-submenu <?php // if($page == 'site_subscribers_config'){ echo 'open';}?>">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                  title="Site Subscription">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                  Site Subscription<b class="fa fa-angle-left dropdown-arrow"></b>
                                  </a>
                                  <ul class="dropdown-menu animated fadeInDown" data-toggle="dropdown-submenu">
                                    <li class="<?php // if($page == 'site_subs_plans'){ echo 'active';}?>"><a href="site-subs-plans.php">Site Subscription Plans</a></li>
                                    <li class="<?php // if($page == 'site_subscribers_config'){ echo 'active';}?>"><a href="site-subscribers-config.php">Site Subscribers</a></li>
                                  </ul>
                                </li>
                          <?php // } ?>
                          
                          <?php // $linkright = $login_obj->fun_check_rights("m1"); if($linkright == '1'){?>
                              <li class="<?php // if($page == 'message'){ echo 'active';}?>">
                                  <a href="message.php" title="Message">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                  Message <strong id="incounter"><?php // require_once("inbox_counter.php");?></strong>
                                  </a>
                              </li>
                          <?php // } ?>
                          <?php // $linkright = $login_obj->fun_check_rights("te1"); if($linkright == '1'){?>
                                 <li class="<?php // if($page == 'testimonial'){ echo 'active';}?>">
                                  <a href="testimonial.php?s=false" title="Testimonial">
                                    <i class="fa fa-puzzle-piece"><span class="overlay-label greensea80"></span></i>
                                  Testimonial
                                  </a>
                                </li>
                          <?php // } ?>
                            
                      </ul>
              </li>
            </ul>