  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="{{ route('home') }}">Eventbrote</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="nav navbar-nav navbar-right">
    <ul class="nav-item nav navbar-nav">
      <li class="nav-item mr-auto">
        <a class="nav-link" href="{{ route('events.create') }}"><li class="fa fa-plus"></li>Creer un evenement</a>
      </li>
    </ul>
  </div>
</nav>