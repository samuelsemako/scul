<div class="first">
    <div class="logo">
        <img src="all-images/images/logo2.png" alt="Gethostel Logo">
    </div>

    <ul class="inner">
        <li class="active-li" onclick="_getPage('dashboard', 'dashboard')" id="dashboard">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>
        </li>

        <li onclick="_getPage('all_staff', 'staff')" id="staff">
            <i class="bi bi-people-fill"></i>
            <span>Staff</span>
            <div class="hidden" id="_staff"><i class="bi-speedometer2"></i> Active Staff</div>
        </li>

        <li onclick="_getPage('all_hostel', 'hostel')" id="hostel">
            <i class="bi bi-bank2"></i>
            <span>Hostel</span>
            <div class="hidden" id="_hostel"><i class="bi-speedometer2"></i> Active Hostel</div>
        </li>

        <li>
            <i class="bi bi-record-circle"></i>
            <span>FAQ</span>
        </li>

        <li>
            <i class="bi bi-book"></i>
            <span>Blog</span>
        </li>
    </ul>
</div>