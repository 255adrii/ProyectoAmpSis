<?php
/*
Template Name: Pagina Principal
*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebFusion Digital S.L.</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.1rem;
            color: #ccc;
        }

        main {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #222;
        }

        .card p {
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .btn {
            display: inline-block;
            background-color: #222;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #444;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {

            header h1 {
                font-size: 2rem;
            }

            .card {
                padding: 25px;
            }

        }

    </style>
</head>

<body>

    <header>
        <h1>WebFusion Digital S.L.</h1>
        <p>Soluciones web modernas para empresas</p>
    </header>

    <main>

        <div class="card">

            <h2>Bienvenido a nuestra web corporativa</h2>

            <p>
                Somos una empresa especializada en el desarrollo de páginas web
                corporativas utilizando tecnologías modernas, automatización de
                despliegues y entornos virtualizados.
            </p>

            <a href="#" class="btn">Contactar</a>

        </div>

    </main>

    <footer>
        <p>
            © <?php echo date('Y'); ?>
            WebFusion Digital S.L.
            Todos los derechos reservados.
        </p>
    </footer>

</body>
</html>
