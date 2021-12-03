    <?php include("./topNav.php");?>
  <body class="text-center">
    <main class="form-signin">
      <form>
        <img class="mb-4" src="./images/profile-pic.png" alt="coolPlaceholder" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Inloggen</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email adres</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="loginPassword" placeholder="Password">
          <label for="loginPassword">Wachtwoord</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Inloggen</button>
        <p class="mt-5 mb-3 text-muted">&copy; World Wide importers</p>
      </form>
    </main>
