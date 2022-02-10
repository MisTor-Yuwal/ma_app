
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('/logo/welecommey.png') }}" alt="" width="30" height="24">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
            @foreach ($categories as $item)
            <li class="nav-item">
              <a class="nav-link"  href="/detail/{{ $item->id }}">{{ $item->name }}</a>
            </li>
            @endforeach
            <li>
              <a href="/momentous" class="nav-link">Events</a>
            </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>