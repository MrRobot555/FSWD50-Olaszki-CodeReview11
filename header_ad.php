
<style>
  .navbar a { padding: 0; }

  .navbar-collapse { border: 0; }

  #navbarText { border: 0; }

  .myside {
    display: flex;
    flex-direction: row;
  }
  .myside div {
    margin-right: 20px;
  }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Travel-O-Matic  -   Welcome admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <div class="myside">
        <div><a class="nav-link" href="index.php">Favorite places</a></div>
        <div><a class="nav-link" href="add.php">Add new elements</a></div>
        </div>
      </li>
    </ul>
    <span class="navbar-text myside">
        <div><a class="nav-link" href="logout.php">Log out</a></div>
        <div><a class="nav-link" href="index.php">Admin panel</a></div>
    </span>
  </div>
</nav>