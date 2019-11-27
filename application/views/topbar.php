<div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button" style="padding-left:10px;">
                               
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        
                                                    <?php
                                                        if($this->session->userdata("logged_in")){?>
                                                        <span>
                                                        <?php
                                                                if($this->session->userdata("jenis_kelamin") == "p"){?>
                                                                    <?php
                                                                    echo "<img src='".base_url()."asset/images/icon/female.png' />";
                                                                }               
                                                                else{
                                                                    ?>
                                                                    <?php
                                                                    echo "<img src='".base_url()."asset/images/icon/male.png' />";
                                                                }
                                                            }
                                                        ?>
                                                       
                                                        <span>
                                                        
                                                        
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php 
                                                            if($this->session->userdata("logged_in")){?><span>
                                                                <?php
                                                                echo $this->session->userdata("nama_pengguna");
                                                            }
                                                            else{
                                                                ?><span>
                                                                <?php	
                                                                echo "Username";
                                                            } 
					                                    ?></a>
                                        </div>
                                        
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <?php
                                                        if($this->session->userdata("logged_in")){?>
                                                        <span>
                                                        <?php
                                                                if($this->session->userdata("jenis_kelamin") == "p"){?>
                                                                    <?php
                                                                    echo "<img src='".base_url()."asset/images/icon/female.png' />";
                                                                }               
                                                                else{
                                                                    ?>
                                                                    <?php
                                                                    echo "<img src='".base_url()."asset/images/icon/male.png' />";
                                                                }
                                                            }
                                                        ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
                                                        
                                                        <?php 
                                                            if($this->session->userdata("logged_in")){?><span>
                                                                <?php
                                                                echo $this->session->userdata("nama_pengguna");
                                                            }
                                                            else{
                                                                ?><span>
                                                                <?php	
                                                                echo "Username";
                                                            } 
					                                    ?></a>
                                                        
                                                    <?php 
                                                            if($this->session->userdata("logged_in")){?><span>
                                                            <?php echo "-"?>
                                                                <?php
                                                                echo $this->session->userdata("status_pengguna");
                                                            }
                                                            else{
                                                                ?><span>
                                                                <?php	
                                                                echo "Status";
                                                            } 
					                                    ?>
                                                        
                                                    </h5>
                                                    
                                                    <span class="email"><?php 
                                                            if($this->session->userdata("logged_in")){?><span>
                                                                <?php
                                                                echo $this->session->userdata("email_pengguna");
                                                            }
                                                            else{
                                                                ?><span>
                                                                <?php	
                                                                echo "Email";
                                                            } 
                                                            
					                                    ?>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                <?php $id_pengguna= $this->session->userdata("id_pengguna"); ?>
                                                  
                                                <a href="<?php echo base_url().'Account/TampilData/'.$id_pengguna;?> ">
                                                        <i class="zmdi zmdi-account"></i>My Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                <?php $id_pengguna= $this->session->userdata("id_pengguna"); ?>
                                                    <a href="<?php echo base_url().'Account/EditData/'.$id_pengguna;?>">
                                                        <i class="zmdi zmdi-settings"></i>Edit Profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                <?php $id_pengguna= $this->session->userdata("id_pengguna"); ?>
                                                    <a href="<?php echo base_url().'Account/EditPass/'.$id_pengguna;?>">
                                                        <i class="zmdi zmdi-key"></i>Edit Password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?=base_url('Login/logout')?>">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>