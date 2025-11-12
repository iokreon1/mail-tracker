<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= BASEURL ?>DashboardController/">Mail Tracker</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= BASEURL ?>DashboardController/">MT</a>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="nav-link" href="<?= BASEURL ?>MailsController/incomingMail">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Incoming Mail</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= BASEURL ?>MailsController/outgoingMail">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Outgoing Mail</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= BASEURL ?>MailsController/listUsers">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>List Users</span>
                </a>
            </li>
        </ul>
    </aside>
</div>