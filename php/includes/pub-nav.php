
<nav>
    <div class="nav-side-menu"><!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>-->
        
        <div class="toggle-btn toggle-menu" data-toggle="collapse" data-target="#menu-content" style="">menu <i class="fa fa-angle-down" aria-hidden="true"></i></div>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#products" class="collapsed active"><a href="#">Publishing <span class="arrow"></span></a>
                    <ul <?php if ($section == 'publishing') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="products">
                        <li <?php if ($page_title == 'home') { echo 'class="active"'; } ?>><a href="vfy-pub-home.php">View All Verifications</a></li>
                        <li <?php if ($page_title == 'create-new') { echo 'class="active"'; } ?>><a href="vfy-pub-new-verification.php">Create New Verification</a></li>
                        <li <?php if ($page_title == 'archived') { echo 'class="active"'; } ?>><a href="vfy-pub-archived.php">Archived Verifications</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#service" class="collapsed"><a href="#">Settings <span class="arrow"></span></a>
                    <ul <?php if ($section == 'settings') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="service">
                        <li <?php if ($page_title == 'general-settings') { echo 'class="active"'; } ?>><a href="vfy-pub-settings.php">General</a></li>
                        <li <?php if ($page_title == 'api-accounts') { echo 'class="active"'; } ?>><a href="vfy-pub-api-accounts-home.php">API Accounts </a></li>
                        <li <?php if ($page_title == 'publishers') { echo 'class="active"'; } ?>><a href="vfy-pub-publishers-home.php">Publishers </a></li>
                        <li <?php if ($page_title == 'resetuser') { echo 'class="active"'; } ?>><a href="vfy-pub-resetuser.php"> View/Reset User Verifications </a></li>
                        <li <?php if ($page_title == 'branding') { echo 'class="active"'; } ?>><a href="vfy-pub-branding.php"> Header/Footer Branding</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
