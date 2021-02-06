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
                <a href="/personal-information">
                  <i class="fa fa-users"></i>
                  <span>Personal Information</span>
                </a>
              </li>
              <li>
                <a href="/educational-background">
                  <i class="fa fa-graduation-cap"></i>
                  <span>Educational Background</span>
                </a>
              </li>
              <li>
                <a href="/language">
                  <i class="fa fa-globe"></i>
                  <span>Languages</span>
                </a>
              </li>
              <li>
                <a href="/hobbies">
                  <i class="fa fa-smile-o"></i>
                  <span>Hobbies</span>
                </a>
              </li>
              <li>
                <a href="/project-research">
                  <i class="fa fa-rocket"></i>
                  <span>Project/Research</span>
                </a>
              </li>
              <li>
                <a href="work-experince">
                  <i class="fa fa-suitcase"></i>
                  <span>Work Experience</span>
                </a>
              </li>
              <li>
                <a href="referees">
                  <i class="fa fa-gavel"></i>
                  <span>Referees</span>
                </a>
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
                  <span>Download as Word</span>
                </a>
              </li>
              <li>
                <a href="download-print">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>Download as PDF</span>
                </a>
              </li>
              <li>
                <a href="download-print">
                  <i class="fa fa-print"></i>
                  <span>Print CV</span>
                </a>
              </li>
              
            </ul>
          </div>
        </li>
  </div>
</nav>