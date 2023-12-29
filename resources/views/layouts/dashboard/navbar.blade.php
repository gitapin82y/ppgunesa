<nav
class="navbar navbar-expand-lg navbar-light pt-3 absolute bg-transparent"
>
<div class="container-fluid container">
  <a class="navbar-brand fw-bold text-white" href="/"
    >PPG UNESA</a
  >
    <ul class="navbar-nav">
      <li class="nav-item mx-1">
        <div class="d-flex">
          <img src="{{asset('assets/icon/avatar1.svg')}}" class="avatar" alt="" />
          <p class="align-self-center titleAvatar ms-3 my-0 text-white">{{Auth::user()->name}}</p>
        </div>
      </li>
    </ul>
  </div>
</nav>