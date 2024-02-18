<?php

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $language = json_decode(file_get_contents('lang/' . $lang . '_' . strtoupper($lang) . '.json'), true);
    // var_dump($language);
} else {
    $lang = 'en';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D1. Internationalization</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }

        nav {
            height: 7vh;
            background-color: rgb(149, 149, 237);
            display: flex;
            /* color: white; */
            justify-content: space-between;
            align-items: center;
            padding-left: 10px;
            padding-right: 10px;
        }

        .menu {
            width: 45%;
            display: flex;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
        }

        .menu li {
            display: inline-block;
            margin-left: 5px;
        }

        .menu li select {
            background-color: rgb(149, 149, 237);
            border: none;
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .menu li select option {
            background-color: #f2f2f2;
            /* color: #333; */
            padding: 8px;
            width: 100%;
        }

        a {
            /* color: white; */
            text-decoration: none;
        }

        .hero {
            /* width: 100vh; */
            background-image: url('bg.jpg');
            background-size: cover;
            height: 93vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content {
            height: 60%;
            padding: 20px;

        }

        .hero-content h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .hero-content p {
            margin-bottom: 10px;
        }

        .hero-content .cta {
            color: white;
            background-color: rgb(149, 149, 237);
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <h4>LogoBRUH</h4>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#"><?= $language ? $language['home'] : "Home" ?></a></li>
                <li><a href="#"><?= $language ? $language['about'] : "About" ?></a></li>
                <li><a href="#"><?= $language ?  $language['contact'] : "Contact" ?></a></li>
                <li><a href="#"><?= $language ?  $language['login'] : "Login" ?></a></li>
                <li><a href="#"><?= $language ?  $language['register'] : "Register" ?></a></li>
                <li>
                    <form method="get">
                        <select name="lang" id="dropdown" onchange="this.form.submit()">
                            <option value="en" <?= $lang && $lang == "en" ? "selected" : ''?>>English</option>
                            <option value="id" <?= $lang && $lang == "id" ? "selected" : ''?>>Indonesia</option>
                            <option value="nl" <?= $lang && $lang == "nl" ? "selected" : ''?>>Dutch</option>
                        </select>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <section class="hero">
        <div class="hero-content">
            <h1>Heading Text</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias officiis ratione porro nesciunt eaque minima autem expedita nulla molestias inventore.</p>
            <button class="cta">Contact Us</button>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, vitae dicta reprehenderit rerum id asperiores! Sequi nostrum dolorem temporibus debitis quaerat, impedit non ipsa ducimus a deleniti repellat fugit perspiciatis quas magnam laudantium aperiam, et autem tempora ea, officiis facere. Possimus, dolor delectus quia eveniet reiciendis eos saepe tempora? Quisquam autem eum quo eaque, obcaecati inventore rem odio fugiat! Corrupti nostrum inventore quas accusamus non optio beatae vitae illum maxime sunt deleniti obcaecati, incidunt et quisquam consectetur nobis voluptates ut quod doloremque a enim autem explicabo iste animi? Modi pariatur ipsum totam assumenda dolorum, magni sapiente voluptate fugit ea voluptas quibusdam et quas, repellat, eaque neque provident sequi harum minus nemo? Assumenda ex obcaecati quos sint, saepe vero architecto repellendus adipisci distinctio consequuntur illum et repellat minima optio ut at laborum quo asperiores porro sapiente vitae! Ducimus, minima. Excepturi explicabo odit suscipit accusantium tempore! Iusto est repellat odit inventore eaque accusamus corporis quibusdam, perferendis asperiores nam rerum expedita ipsam aperiam eius ad labore necessitatibus at laudantium doloribus in. Quaerat nemo atque quibusdam porro, vero consequatur deserunt dolorem pariatur sapiente explicabo officia, possimus ea error obcaecati non! Odio mollitia animi consequuntur. Dignissimos architecto et ad illum reprehenderit porro aliquam placeat vero.
            <?= $language ? $language['copyright'] : "Copyright @ 2022." ?>
        </p>

    </section>
</body>

</html>