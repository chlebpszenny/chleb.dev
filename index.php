<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>chleb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        chleb.dev
    </header>
    <div class="container">
        <aside>
            <ul>
                <li><a href="index.php?id=a">a</a></li>
                <li><a href="index.php?id=b">Tb</a></li>
                <li><a href="index.php?id=c">c</a></li>
                <li><a href="index.php?id=d">d</a></li>
                <li><a href="index.php?id=e">e</a></li>
                <li><a href="index.php?id=f">f</a></li><br>
                <li><a href="index.php?id=g">g</a></li>
            </ul>
        </aside>
        <main>
            <?php
                $id = isset($_GET['id']) ? $_GET['id'] : "";

                switch ($id)
                {
                    case 'a': require("a.php"); break;
                    case 'b': require("b.php"); break;
                    case 'c': require("c.php"); break;
                    case 'd': require("d.php"); break;
                    case 'e': require("e.php"); break;
                    case 'f': require("f.php"); break;
                    case 'g': require("g.php"); break;
                    default: require("home.html");
                }
            ?>
        </main>
    </div>
    <footer>
        Copyright &copy; me ig
    </footer>
</body>
