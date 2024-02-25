<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="#">Oppi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active  ">
          <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Fiverr</a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-1" type="submit">Search</button>
        <ul class="navbar-nav mr-auto">
          <li>
          <a class="btn btn-outline-success my-2 my-sm-0 mr-1" href="{{route('login')}}" >Login</a>
          </li>
          <li>
          <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('register')}}" >Sign-In</a>
          </li>
        </ul>
      </form>
    </div>
  </nav>