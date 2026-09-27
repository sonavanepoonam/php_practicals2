
<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $Uname = $_POST["Uname"];
    $pass = $_POST["Password"];

    $sql = $conn->prepare("SELECT password FROM users WHERE username=?");
    $sql->bind_param("s", $Uname);
    $sql->execute();

    $sql->bind_result($password);
    $sql->fetch();

    if (password_verify($pass, $password)) {
        $_SESSION['name'] = $Uname;
        header("Location: home.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Login</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    />
</head>

<body>

    <header>
        <h2 class="text-center">Login With Us</h2>
    </header>

    <main>
        <div class="container border shadow mt-5 p-5">

            <form action="" method="post">

                <div class="mb-3">
                    <label class="form-label">UName</label>

                    <input
                        type="text"
                        class="form-control"
                        name="Uname"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>

                    <input
                        type="password"
                        class="form-control"
                        name="Password"
                        placeholder=""
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>

            </form>

        </div>
    </main>

    <footer>
    </footer>

  
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
    ></script>

</body>
</html>
```
