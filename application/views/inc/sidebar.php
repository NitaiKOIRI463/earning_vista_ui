<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <?php 
                if ($_SESSION['role_type'] == 1) 
                {
                    ?>
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="<?php echo base_url('Admin/Dashboard'); ?>" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Master</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url('Admin/Master/FundGenerate'); ?>" key="t-products">Fund Generate</a></li>
                                    <li><a href="javascript::void();" key="t-products">Pakage</a></li>
                                    <li><a href="javascript::void();" key="t-products">Global Setup</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts">Member</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="<?php echo base_url('Member/MemberRegister/addMember'); ?>" key="t-user-grid">Registration</a></li>
                                    <li><a href="<?php echo base_url('Member/MemberRegister/MemberList'); ?>" key="t-user-grid">Member List</a></li>
                                    <li><a href="<?php echo base_url('Admin/ActivationRequest'); ?>" key="t-user-list">Activation</a></li>
                                    <li><a href="<?php echo base_url('Admin/ActivationRequest/ActivatioTreeDetails'); ?>" key="t-user-list">Activation Tree Details</a></li>
                                    <li><a href="<?php echo base_url('Admin/Geonology'); ?>" key="t-profile">Geonology</a></li>
                                    <li><a href="javascript: void(0);" key="t-profile">Team Bussiness</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-bitcoin"></i>
                                    <span key="t-crypto">Wallets</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-exchange">Withdrawal Request</a></li>
                                    <li><a href="javascript: void(0);" key="t-wallet">Income Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-buy">Withdrawal Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-lending">Withdrawal Transfer</a></li>
                                    <li><a href="javascript: void(0);" key="t-orders">Withdrawal History</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-list-ul"></i>
                                    <span key="t-tables">Analytics MIS</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-basic-tables">Activation Effect History</a></li>
                                    <li><a href="javascript: void(0);" key="t-data-tables">Deposite/Pakage History</a></li>
                                    <li><a href="javascript: void(0);" key="t-responsive-table">Cash Out History</a></li>
                                    <li><a href="javascript: void(0);" key="t-editable-table">Invest V/S Return</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php
                }
                else if($_SESSION['role_type'] == 2)
                {
                    ?>
                       <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="<?php echo base_url('Member/Dashboard'); ?>" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Master</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url('Member/MemberRegister/addMember'); ?>" key="t-products">Register</a></li>
                                    <li><a href="<?php echo base_url('Member/ActivatioRequest'); ?>" key="t-products">Activation Request</a></li>
                                    <li><a href="<?php echo base_url('Admin/Geonology'); ?>" key="t-products">Genology</a></li>
                                    <li><a href="<?php echo base_url('Member/TeamBussiness'); ?>" key="t-products">Team Bussiness </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">Opportunity</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="<?php echo base_url('Member/Pakages'); ?>" key="t-p-grid">My Opportunity</a></li>
                                    <li><a href="javascript::void();" key="t-p-list">Buy Opportunity</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                    <i class="bx bx-task"></i>
                                    <span key="t-tasks">My Earning</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="tasks-list.html" key="t-task-list">Earning Wallet</a></li>
                                    <li><a href="tasks-kanban.html" key="t-kanban-board">Activation Wallet</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Top Up</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                    <i class="bx bx-file"></i>
                                    <span key="t-utility">My Bussiness</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false" style="height: 0px;">
                                    <li><a href="#" key="t-starter-page">Direct Refrral</a></li>
                                    <li><a href="#" key="t-maintenance">Group Bussiness</a></li>
                                    <li><a href="#" key="t-coming-soon">Geonology</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                    <i class="bx bx-bitcoin"></i>
                                    <span key="t-crypto">Withdrawal</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="#" key="t-wallet">Make Withdrawal</a></li>
                                    <li><a href="#" key="t-buy">Withdrawal History</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="false">
                                    <i class="bx bx-detail"></i>
                                    <span key="t-blog">Activity</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="false">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Help/Contact Us</span>
                                </a>
                            </li>  
                        </ul> 
                    <?php
                }
            ?>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->