
<nav>
    <div class="nav-side-menu">
        <div class="toggle-btn toggle-menu" data-toggle="collapse" data-target="#menu-content" style="">menu <i class="fa fa-angle-down" aria-hidden="true"></i></div>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#nav-publishing" class="collapsed active"><a href="#">Publishing <span class="arrow"></span></a>
                    <ul <?php if ($section == 'publishing') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-publishing">
                        <li <?php if ($page_title == 'home') { echo 'class="active"'; } ?>><a href="vfy-pub-home.php">View All Verifications</a></li>
                        <li <?php if ($page_title == 'create-new') { echo 'class="active"'; } ?>><a href="vfy-pub-new-verification.php">Create New Verification</a></li>
                        <li <?php if ($page_title == 'archived') { echo 'class="active"'; } ?>><a href="vfy-pub-archived.php">Archived Verifications</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#nav-settings" class="collapsed"><a href="#">Settings <span class="arrow"></span></a>
                    <ul <?php if ($section == 'settings') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-settings">
                        <li <?php if ($page_title == 'general-settings') { echo 'class="active"'; } ?>><a href="vfy-pub-settings.php">General Settings</a></li>
                        <li <?php if ($page_title == 'ldap') { echo 'class="active"'; } ?>><a href="vfy-pub-ldap.php">LDAP Configuration</a></li>
                        <li <?php if ($page_title == 'api-accounts') { echo 'class="active"'; } ?>><a href="vfy-pub-api-accounts-home.php">API Accounts </a></li>
                        <li <?php if ($page_title == 'publishers') { echo 'class="active"'; } ?>><a href="vfy-pub-publishers-home.php">Publishers </a></li>
                        <li <?php if ($page_title == 'resetuser') { echo 'class="active"'; } ?>><a href="vfy-pub-resetuser.php">View/Reset User Verifications </a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#nav-branding" class="collapsed"><a href="#">Branding <span class="arrow"></span></a>
                    <ul <?php if ($section == 'branding') {echo 'class="sub-menu"';} else {echo 'class="sub-menu collapse"';} ?> id="nav-branding">
                        <li <?php if ($page_title == 'header-footer') { echo 'class="active"'; } ?>><a href="vfy-pub-branding-headfoot.php">Custom Header &amp; Footer</a></li>
                        <li <?php if ($page_title == 'app-styles') { echo 'class="active"'; } ?>><a href="vfy-pub-branding-appstyles.php">Colors &amp; Layout</a></li>
                        <li <?php if ($page_title == 'custom-fonts') { echo 'class="active"'; } ?>><a href="vfy-pub-branding-customfonts.php">Fonts</a></li>
                        <li <?php if ($page_title == 'app-icon') { echo 'class="active"'; } ?>><a href="vfy-pub-branding-appicon.php">Icons</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
