<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
    {{-- <div class="sidebar-brand">
      <a href="#"></a>
      <div id="close-sidebar">
        <i class="fa fa-times"></i>
      </div>
    </div> --}}
    <div class="sidebar-header">
      <div class="user-pic">
        <i class="fa fa-user text-dark user-large"></i>
      </div>
      <div class="user-info">
        <span class="user-name">{{auth()->user()->last_name, }}
          <strong>{{ auth()->user()->first_name }}</strong>
        </span>
        <span class="user-role">User</span>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <span>Menu</span>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Complete Registration</span>
          
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="/personal-information">Personal Information</a>
              </li>
              <li>
                <a href="/educational-background">Educational Background</a>
              </li>
              <li>
                <a href="/language">Language</a>
              </li>
              <li>
                <a href="/hobbies">Hobbies</a>
              </li>
              <li>
                <a href="/project-research">Project/Research</a>
              </li>
              <li>
                <a href="work-experince">Work Experience</a>
              </li>
              <li>
                <a href="referees">Referees</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
            <i class="fa fa-certificate"></i>
            <span>CV Templates</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="/template">
                  <i class="fa fa-folder"></i>
                  <span>Select Template from Pre-define Selection</span>
                </a>
              </li>
              <li>
                <a href="/template/create">
                  <i class="fa fa-plus"></i>
                  <span>Create New Template</span>
                </a>
              </li>
              
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
            <i class="fa fa-print"></i>
            <span>Downloads/Print</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="/download-print">
                  <i class="fa fa-file-word-o"></i>
                  <span>Word</span>
                </a>
              </li>
              <li>
                <a href="download-print">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>PDF</span>
                </a>
              </li>
              <li>
                <a href="download-print">
                  <i class="fa fa-print"></i>
                  <span>Print Template</span>
                </a>
              </li>
              
            </ul>
          </div>
        </li>
  </div>
</nav>