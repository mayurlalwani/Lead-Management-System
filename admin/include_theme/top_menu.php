
<div class="headwrap">

    <div class="container_12 header">

        <div class="grid_8 logo">

            <h1>Lead Management System</h1>



        </div><!--/logo-->

        <div class="grid_4 last h-details">

            <div class="logged-in">

                <a href="logout.php" class="logout">Logout</a>
                Logged in as <a href="#"><?php echo $_SESSION["uname"]; ?></a>

            </div><!--/logged-in-->

        </div><!--/hdetails-->

        <div class="container_12 nav">

            <div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Leads</a>
                        <ul>
                            <li><a href="import-leads.php">Upload</a></li>
                            <li><a href="leads_display.php">Display Leads</a></li>
                            <li><a href="edit-price.php">Edit Price</a></li>
                            <li><a href="list_all_fields.php">List All Fields USA</a></li>
                            <li><a href="leads_file_display.php">List All leads File</a></li>




                        </ul>
                    </li>

                    <li><a href="#">Users</a>
                        <ul>

                            <li><a href="users.php">User</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Master</a>
                        <ul>
                            <li><a href="country.php">Country</a></li>

                            <li><a href="country_display.php">Country Display</a></li>
                            <li><a href="city.php">City</a></li>
                            <li><a href="country_display.php">City Display</a></li>
                            <li><a href="state.php">State</a></li>
                            <li><a href="state_display.php">State Display</a></li>


                        </ul>
                    </li>

                    <li><a href="#">Reports</a>
                        <ul>
                            <li><a href="rpt_users.php" target="_blank ">User</a></li>
                            <li><a href="rpt_sold_leads.php" target="_blank ">Sold Lead</a></li>
                            <li><a href="rpt_usertype.php" target="_blank ">User</a></li>
                            <li><a href="rpt_sold_lead_buyer.php" target="_blank ">Sold Lead User</a></li>
							<li><a href="rpt_datesold.php">Sold Files By Date</a></li>
							<li><a href="rpt_amountsold.php">Sold Files By Amount</a></li>

  <li><a href="rpt_usertype.php" target="_blank ">User Type</a></li>


                        </ul>
                    </li>
                    <!-- 
                     <li><a href="#">Folder 2</a>
                       <ul>
                       <li><a href="#">Sub Item 2.1</a></li>
                       <li><a href="#">Folder 2.1</a>
                         <ul>
                         <li><a href="#">Sub Item 2.1.1</a></li>
                         <li><a href="#">Sub Item 2.1.2</a></li>
                         <li><a href="#">Folder 3.1.1</a>
                             <ul>
                                 <li><a href="#">Sub Item 3.1.1.1</a></li>
                                 <li><a href="#">Sub Item 3.1.1.2</a></li>
                                 <li><a href="#">Sub Item 3.1.1.3</a></li>
                                 <li><a href="#">Sub Item 3.1.1.4</a></li>
                                 <li><a href="#">Sub Item 3.1.1.5</a></li>
                             </ul>
                         </li>
                         <li><a href="#">Sub Item 2.1.4</a></li>
                         </ul>
                       </li>
                           </ul>
                     </li>
                    -->


                    <li><a href="#">Setting</a>
                        <ul>
                            <li><a href="mail.php">Mail</a></li>
                            <li><a href="changepassword.php">Change Password</a></li>
                            <li><a href="news_edit.php">News</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </li>
                </ul>
                <br style="clear: left" />
            </div>

        </div><!--/nav-->

    </div><!--/header-->

</div><!--/headwrap-->