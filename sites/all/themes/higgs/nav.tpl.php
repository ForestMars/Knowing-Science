<?php  ?> 

    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.html">
                <img src="assets/img/logo1-default.png" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
 
                <?php /* @FIXME: Friends don't let friends put fa classes on empty i tags. */ ?>             
                <ul class="loginbar pull-right hoverSelector">
                    <i class="fa fa-globe"></i>
                    <li><a href="/about-us">about</a></li></li>
                    <li class="topbar-devider"></li>

                    <i class="fa fa-shopping-cart"></i>
                    <li><a href="/cart">cart</a></li>
                    <li class="topbar-devider"></li>
                    
                    <i class="fa fa-envelope-o"></i>
                    <li><a href="/contact">contact</a></li>
                    <li class="topbar-devider"></li>

<?php global $user; ?>
<?php if ($user->uid): ?>
                    <?php print '<li>' . l('logout', 'user/logout') . '</li>'; ?>&nbsp;|&nbsp;<?php print l('account', 'user'. $user->uid); ?> 

<?php else: ?>
                  <i class="fa fa-user"></i>
                   <li><?php print l('Login', 'user'); ?></li>       
<?php endif; ?>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->






        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="dropdown active">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        Scope & Sequence</a>
                        
                        <ul class="dropdown-menu">
                          
                          <li class="dropdown-submenu">
                          <a href="scope-sequence/pre-k">Pre-K</a></li>

                          <li class="dropdown-submenu">
                            <a href="scope-sequence/kindergarden">Kindergarden</a>
                          </li>
                           
                          <li class="dropdown-submenu">
                            <a href="scope-sequence/grade-one">1st Grade</a>
                          </li>
                            
                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-two">2nd Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-three">3rd Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-four">4th Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-five">5th Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-six">6th Grade</a>
                          </li>





                        </ul>
                        


                    <!-- Pages -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <!-- About Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">About Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_about2.html">About Us </a></li>
                                    <li><a href="page_about3.html">About Us 1</a></li>
                                    <li><a href="page_about1.html">About Us 2</a></li>
                                    <li><a href="page_about.html">About Us 3</a></li>
                                    <li><a href="page_about_me.html">About Me </a></li>
                                    <li><a href="page_about_me1.html">About Me 1</a></li>
                                    <li><a href="page_about_me2.html">About Me 2</a></li>
                                    <li><a href="page_about_our_team.html">About Our Team</a></li>
                                    <li><a href="page_about_our_team1.html">About Our Team 1</a></li>
                                    <li><a href="page_about_our_team2.html">About Our Team 2</a></li>
                                </ul>
                            </li>
                            <!-- End About Pages -->

                            <!-- Service Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Service Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_services.html">Our Services</a></li>
                                    <li><a href="page_services1.html">Our Services 1</a></li>
                                    <li><a href="page_services2.html">Our Services 2</a></li>
                                    <li><a href="page_services3.html">Our Services 3</a></li>
                                </ul>
                            </li>
                            <!-- End Service Pages -->

                            <!-- Contacts -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    Contact Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_contact1.html">Contacts Default</a></li>
                                    <li><a href="page_contact2.html">Contacts Option 1</a></li>
                                    <li><a href="page_contact3.html">Contacts Option 2</a></li>
                                    <li><a href="page_contact4.html">Contacts Option 3</a></li>
                                    <li><a href="page_contact_advanced.php">Contacts Advanced</a></li>
                                </ul>
                            </li>
                            <!-- End Contacts -->

                            <!-- Profile Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Profile Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_profile.html">Profile Main Page</a></li>
                                    <li><a href="page_profile_me.html">Profile Overview</a></li>
                                    <li><a href="page_profile_users.html">Profile Users</a></li>
                                    <li><a href="page_profile_projects.html">Profile Projects</a></li>
                                    <li><a href="page_profile_comments.html">Profile Comments</a></li>
                                    <li><a href="page_profile_history.html">Profile History</a></li>
                                    <li><a href="page_profile_settings.html">Profile Settings</a></li>
                                </ul>
                            </li>
                            <!-- End Profile Pages -->

                            <!-- Job Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Job Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_jobs.html">Jobs Main Page</a></li>
                                    <li><a href="page_jobs1.html">Jobs Main Page 1</a></li>
                                    <li><a href="page_jobs_inner.html">Jobs Description Default</a></li>
                                    <li><a href="page_jobs_inner1.html">Jobs Description Basic</a></li>
                                    <li><a href="page_jobs_inner2.html">Jobs Description Min</a></li>
                                </ul>
                            </li>
                            <!-- End Job Pages -->

                            <!-- Pricing Tables -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Pricing Tables</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_pricing_colorful.html">Colorful Pricing Tables</a></li>
                                    <li><a href="page_pricing_flat.html">Flat Pricing Tables</a></li>
                                    <li><a href="page_pricing_light.html">Light Pricing Tables</a></li>
                                    <li><a href="page_pricing_mega.html">Mega Pricing Tables</a></li>
                                    <li><a href="page_pricing.html">Default Pricing Tables</a></li>
                                </ul>
                            </li>
                            <!-- End Pricing Tables -->

                            <!-- Login and Registration -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Login and Registration</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_registration.html">Registration Page</a></li>
                                    <li><a href="page_login.html">Login Page</a></li>
                                    <li><a href="page_registration1.html">Registration Option</a></li>
                                    <li><a href="page_login1.html">Login Option</a></li>
                                </ul>
                            </li>
                            <!-- End Login and Registration -->

                            <!-- FAQs Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">FAQs Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_faq1.html">FAQs Page</a></li>
                                    <li><a href="page_faq.html">FAQs Basic</a></li>
                                </ul>
                            </li>
                            <!-- End FAQs Pages -->

                            <!-- Email Tempaltes -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Email Templates</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="javascript:void(0);">Email Corporate</a>
                                        <ul class="dropdown-menu">
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_aqua.html">Corporate Aqua Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_blue.html">Corporate Blue Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_brown.html">Corporate Brown Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_dark_blue.html">Corporate Dark Blue Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_green.html">Corporate Green Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_light_green.html">Corporate Light Green Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_grey.html">Corporate Grey Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_orange.html">Corporate Orange Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_purple.html">Corporate Purple Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/corporate/email_corporate_red.html">Corporate Red Color</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="javascript:void(0);">Email Flat</a>
                                        <ul class="dropdown-menu">
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_aqua.html">Flat Aqua Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_blue.html">Flat Blue Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_brown.html">Flat Brown Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_dark_blue.html">Flat Dark Blue Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_green.html">Flat Green Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_light_green.html">Flat Light Green Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_grey.html">Flat Grey Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_orange.html">Flat Orange Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_purple.html">Flat Purple Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/flat/email_flat_red.html">Flat Red Color</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="javascript:void(0);">Email Modern</a>
                                        <ul class="dropdown-menu">
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_aqua.html">Modern Aqua Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_blue.html">Modern Blue Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_brown.html">Modern Brown Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_dark_blue.html">Modern Dark Blue Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_green.html">Modern Green Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_light_green.html">Modern Light Green Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_grey.html">Modern Grey Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_orange.html">Modern Orange Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_purple.html">Modern Purple Color</a></li>
                                            <li><a target="_blank" href="Email-Templates/modern/email_modern_red.html">Modern Red Color</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Email Tempaltes -->

                            <!-- Search Results -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Search Results</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_search_inner_full_width.html">Search Results Full Width</a></li>
                                    <li><a href="page_search_inner_left_sidebar.html">Search Result Left Sidebar</a></li>
                                    <li><a href="page_search_table.html">Search Result Tables</a></li>
                                </ul>
                            </li>
                            <!-- End Search Results -->

                            <!-- Coming Soon -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Coming Soon Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_coming_soon.html">Coming Soon</a></li>
                                    <li><a href="page_coming_soon1.html">Coming Soon 1</a></li>
                                </ul>
                            </li>
                            <!-- End Coming Soon -->

                            <!-- Error Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Error Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_404_error.html">404 Error Default</a></li>
                                    <li><a href="page_404_error1.html">404 Error Option 1</a></li>
                                    <li><a href="page_404_error2.html">404 Error Option 2</a></li>
                                    <li><a href="page_404_error3.html">404 Error Option 3</a></li>
                                </ul>
                            </li>
                            <!-- End Error Pages -->

                            <!-- Invoice Page -->
                            <li><a href="page_invoice.html">Invoice Page</a></li>
                            <!-- End Invoice Page -->

                            <!-- Clients Page -->
                            <li><a href="page_clients.html">Clients Page</a></li>
                            <!-- End Clients Page -->

                            <!-- Column Pages -->
                            <li><a href="page_3_columns.html">Three Columns Page</a></li>
                            <!-- End Column Pages -->

                            <!-- Privacy Policy -->
                            <li><a href="page_privacy.html">Privacy Policy</a></li>
                            <!-- End Privacy Policy -->

                            <!-- Terms of Service -->
                            <li><a href="page_terms.html">Terms of Service</a></li>
                            <!-- End Terms of Service -->

                            <!-- Sub Level Menu -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Sub Level 1</a>
                                <ul class="dropdown-menu no-bottom-space">
                                    <li><a href="index.hmtl">Sub Level 2</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="javascript:void(0);">Sub Level 2</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.hmtl">Sub Level 2</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="javascript:void(0);">Sub Level 2</a>
                                        <ul class="dropdown-menu no-bottom-space">
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                            <li><a href="index.hmtl">Sub Level 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Sub Level Menu -->
                        </ul>
                    </li>
                    <!-- End Pages -->

                    <!-- Blog -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Blog
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Large Image</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_large_right_sidebar1.html">Right Sidebar</a></li>
                                    <li><a href="blog_large_left_sidebar1.html">Left Sidebar</a></li>
                                    <li><a href="blog_large_full_width1.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Medium Image</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_medium_right_sidebar1.html">Right Sidebar</a></li>
                                    <li><a href="blog_medium_left_sidebar1.html">Left Sidebar</a></li>
                                    <li><a href="blog_medium_full_width1.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Item Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_large_right_sidebar_item1.html">Right Sidebar Item</a></li>
                                    <li><a href="blog_large_left_sidebar_item1.html">Left Sidebar Item</a></li>
                                    <li><a href="blog_large_full_width_item1.html">Full Width Item</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Simple Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_large_right_sidebar.html">Right Sidebar Large</a></li>
                                    <li><a href="blog_medium_right_sidebar.html">Right Sidebar Medium</a></li>
                                    <li><a href="blog_large_full_width.html">Full Width</a></li>
                                    <li><a href="blog_large_right_sidebar_item.html">Right Sidebar Item</a></li>
                                    <li><a href="blog_large_full_width_item.html">Full Width Item</a></li>
                                </ul>
                            </li>
                            <li><a href="blog_masonry_3col.html">Masonry Grid Blog</a></li>
                            <li><a href="blog_timeline.html">Blog Timeline</a></li>
                        </ul>
                    </li>
                    <!-- End Blog -->


 


                    <!-- Misc Pages -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Misc
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="page_misc_blank.html">Blank page</a></li>
                            <li><a href="page_misc_boxed.html">Boxed Page</a></li>
                            <li><a href="page_misc_boxed_img.html">Boxed Image Page</a></li>
                            <li><a href="page_misc_boxed_fixed_header.html">Boxed Fixed Menu</a></li>
                            <li><a href="page_misc_dark.html">Dark Page</a></li>
                            <li><a href="page_misc_dark_boxed.html">Dark Boxed Page</a></li>
                            <li><a href="page_misc_dark_other_color.html">Dark Page with Theme Color</a></li>
                            <li><a href="page_misc_sticky_footer.html">Sticky Footer Example</a></li>
                        </ul>
                    </li>
                    <!-- End Misc Pages -->



                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

