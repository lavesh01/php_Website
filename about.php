<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- GOOGLE FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,700&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'menu.php' ?>

    <div class="jumbotron">
        <h1> Welcome to about us section</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni eum commodi ea laboriosam
            quisquam ullam necessitatibus quis perferendis praesentium amet adipisci sunt, eaque dolore repellat ducimus
            iure distinctio consequatur!</p>
    </div>

    <!-- ABOUT US  -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid about-css">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1935&q=80"
                        class="img-fluid aboutimg" />
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2>This is a Travel website</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque magni voluptate
                        quae
                        aperiam
                        minus, ex cumque nostrum blanditiis earum temporibus quia fugit odio excepturi vitae dolores
                        deserunt repudiandae eaque nesciunt!</p>
                    <a href="about.php" class="btn btn-success"> Check more </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER  -->
    <footer>
        <p class="p-3 bg-dark text-white text-center">Created by Lavesh</p>
    </footer>


</body>

</html>