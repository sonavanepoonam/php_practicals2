<?php
include 'db.php';
session_start();
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
           <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
           >
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="insert.php">Add</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="update.php">Update</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="delete.php">Delete</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="logout.php">Logout</a>
                        </li>
                    </ul>
                <form action="csv.php" method="POST" class="d-flex my-2 my-lg-0">
                      
                        <button
                            class="btn btn-outline-success my-2 my-sm-0"
                            type="submit"
                        >
                            Generate csv
                        </button>
                    </form>
                </div>
            </div>
           </nav>
           
        </header>
        <main>
            <h2 class="text-center">Hello <?php echo $_SESSION["name"] ?></h2>
            <h3 class="mt-4 text-center" >Product Details</h3>
             <table class="table table-bordered table-striped mt-3">
                 <thead>
                     <tr> 
                        <th>Product ID</th> 
                        <th>Product Name</th> 
                        <th>Category</th>
                         <th>Price</th> 
                         <th>Quantity</th>
                          <th>Brand</th> 
                          <th>Description</th>
                         </tr>
                         </thead> 
                         <tbody> 
                            <?php $sql = "SELECT * FROM products";
                             $result = mysqli_query($conn, $sql); 
                             while ($row = mysqli_fetch_assoc($result)) { 
                                ?> <tr> <td><?php echo $row["p_id"];
                                 ?></td> <td><?php echo $row["p_name"]; 
                                 ?>
                                 </td>
                                  <td>
                                    <?php echo $row["category"];
                                     ?>
                                </td> 
                                <td>
                                    <?php echo $row["price"]; ?>
                                </td> 
                                <td>
                                    <?php echo $row["quantity"]; 
                                    ?>
                                    </td>
                                     <td>
                                        <?php echo $row["brand"]; ?>
                                    </td>
                                     <td>
                                        <?php echo $row["description"]; 
                                        ?>
                                        </td>
                                     </tr>
                                      <?php }
                                       ?>
                                        </tbody>
                                     </table>
           
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
