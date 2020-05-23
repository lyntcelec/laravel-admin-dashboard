<style>
    .navitop {
      display: flex;
      flex-direction: column;
      margin: 0 auto;
    }

    .navibot {
      display: flex;
      flex-direction: column;
      margin-top: auto;
    }

    .iconblock {
      width: 50px;
      height: 50px;
      display: flex;
      margin: 5px auto;
      justify-content: center;
      align-items: center;
    }

    .dropdownicon {
      margin: 5px 0px;
      display: flex;
      flex-direction: row;
      align-items: center;
    }
</style>
<!-- <nav class="nav flex-column">
  <a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav> -->

<div class="navitop">
    <div class="iconblock">
        <!-- <img src={require('../../assets/img/olli-logo.svg')} width="50" height="50"/> -->
        <a href="{{ route('home')  }}">
          <i class="fas fa-chart-pie fa-2x" style="color: white;"></i>
        </a>
    </div>
</div>
<div class="navibot">
    <div class="iconblock">
        <div class="dropdown show">
            <a class="fas fa-user-circle fa-3x" style="color: white;" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item dropdownicon" href="{{ route('pages.profile')  }}">
                <i class="fas fa-user fa-lg" style="color: rgb(2, 117, 216);"></i>
                <div>User Profile</div>
              </a>
              <a class="dropdown-item dropdownicon" href="#">
                <i class="fas fa-cogs fa-lg" style="color: rgb(2, 117, 216);"></i>
                <div>Settings</div>
              </a>
              <a class="dropdown-item dropdownicon" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-lg" style="color: rgb(2, 117, 216);"></i>
                  <div>Logout</div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
                <!-- <a class="dropdown-item dropdownicon fas fa-cogs fa-lg" href="#">  User Profile</a> -->
                <!-- <a class="dropdown-item dropdownicon fas fa-cogs fa-lg" href="#">  Settings</a>
                <a class="dropdown-item dropdownicon fas fa-sign-out-alt fa-lg" href="#">  Logout</a> -->
            </div>
        </div>
    </div>
</div>


<!-- <div className={style.navigation}>
          <div className={style.navitop}>
            <div className={style.iconblock}>
              <img src={require('../../assets/img/olli-logo.svg')} width="50" height="50"/>
            </div>
          </div>
          <div className={style.navibot}>
            <div className={style.iconblock}>
              <Dropdown >
                <Dropdown.Toggle as={this.CustomToggle} id="dropdown-custom-components"></Dropdown.Toggle>
                <Dropdown.Menu>
                  <Dropdown.Item eventKey="1" onSelect={this.handleUserclick}><i className={cx(style.bootstrapcolor, 'far fa-id-card')}></i> User Profile</Dropdown.Item>
                  <Dropdown.Item eventKey="2" onSelect={this.handleUserclick}><i className={cx(style.bootstrapcolor, 'fas fa-cogs')}></i> Settings</Dropdown.Item>
                  <Dropdown.Divider />
                  <Dropdown.Item eventKey="3" onSelect={this.handleUserclick}><i className={cx(style.bootstrapcolor, 'fas fa-sign-out-alt')}></i> Logout</Dropdown.Item>
                </Dropdown.Menu>
              </Dropdown>
            </div>
          </div>
        </div> -->