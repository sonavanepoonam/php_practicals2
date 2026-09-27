<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $p_id=$_POST["p_id"];
    $quantity=$_POST["quantity"];
    $price=$_POST["price"];

    $sql = $conn-> prepare("update products set quantity=? ,price=? where p_id=?");
    $sql->bind_param("sdi", $quantity, $price, $p_id);

    if ($sql->execute()) {
        echo "updated successfully";
    }
    else{
        echo "not updated";
    }

}
?>

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
         <h2 class="text-center">Update Products</h2>
        </header>
        <main>
            <div
                class="container border shadow mt-5 p-5"
            >
              <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">p_id</label>
                    <input
                        type="text"
                        class="form-control"
                        name="p_id"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
             
                 <div class="mb-3">
                    <label for="" class="form-label">price</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">quantity</label>
                    <input
                        type="text"
                        class="form-control"
                        name="quantity"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-body-secondary"
                        ></small
                    >
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
