 <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="fa fa-bars"></i>
                  <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <i class="fa fa-user" style=" float: right;padding: 6px; border: none;margin-top: 8px;margin-right: 16px;font-size: 37px;" >{{ Auth::user()->name }}</i>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <input type="text" placeholder="Search.." style=" float: right;padding: 6px; border: none;margin-top: 8px;margin-right: 16px;font-size: 17px;">

                    </li>
                  </ul>
                </div>
              </div>
          </nav>