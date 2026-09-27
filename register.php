<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $Fname=$_POST["Fname"];
      $Lname=$_POST["Lname"];
         $Uname=$_POST["Uname"];
      $Email=$_POST["Email"];
      $Gender=$_POST["Gender"];
        $Phone=$_POST["Phone"];
      $Password=password_hash($_POST["Password"],PASSWORD_DEFAULT);
      $sql= $conn->prepare("insert into users(Fname,Lname,username,Email,Gender,Phone,Password) values(?,?,?,?,?,?,?)");
      $sql->bind_param("sssssss",$Fname,$Lname,$Uname,$Email,$Gender,$Phone,$Password);
      if($sql->execute()){
        header("location:login.php");
      }

}?>




<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
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
         <h2 class="text-center">Register With Us</h2>
        </header>
        <main>
            <div
                class="container border shadow mt-5 p-5"
            >
              <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">FName</label>
                    <input
                        type="text"
                        class="form-control"
                        name="Fname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LName</label>
                    <input
                        type="text"
                        class="form-control"
                        name="Lname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">UName</label>
                    <input
                        type="text"
                        class="form-control"
                        name="Uname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="Email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gender</label>
                    <select
                        class="form-select form-select-lg"
                        name="Gender"
                        id=""
                    >
                        <option selected>Select one</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone</label>
                    <input
                        type="text"
                        class="form-control"
                        name="Phone"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="Password"
                        id=""
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
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>



