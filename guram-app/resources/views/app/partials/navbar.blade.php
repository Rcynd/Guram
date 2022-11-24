<nav class="navbar navbar-expand-lg navbar-dark bg-none  p-0 m-0 rounded" style="">
  <div class="container-fluid d-flex justify-content-center">
    <a class="navbar-brand p-1" style="border-radius: 50%;" href="/"><b>GURAM</b><em> Lyrics</em></a>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-none p-0 mb-2 me-2 ms-2 rounded " style="background-color:rgba(255, 255, 255,.1);">
  <div class="container-fluid justify-content-center">
    <button class="navbar-toggler btn btn-none border border-none m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav text-center">
        <li class="nav-item" style="{{ Request::is('/') ? 'background-color:rgba(255, 255, 255,.2);' : '' }}">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item" style="{{ Request::is('artist') ? 'background-color:rgba(255, 255, 255,.2);' : '' }}">
          <a class="nav-link {{ Request::is('artist') ? 'active' : '' }}" href="/posts">Artist</a>
        </li>
        <li class="nav-item" style="{{ Request::is('music') ? 'background-color:rgba(255, 255, 255,.2);' : '' }}">
          <a class="nav-link {{ Request::is('music') ? 'active' : '' }}" href="/posts">Music</a>
        </li>
        <li class="nav-item" style="{{ Request::is('gendre') ? 'background-color:rgba(255, 255, 255,.2);' : '' }}">
          <a class="nav-link {{ Request::is('gendre') ? 'active' : '' }}" href="/categories">Gendre</a>
        </li>
        <li class="nav-item" style="{{ Request::is('about') ? 'background-color:rgba(255, 255, 255,.2);' : '' }}">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>