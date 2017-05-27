<?php
if (empty($_POST) === false) {
    $errors = array();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) === true || empty($email) === true || empty($message) === true) {
        $errors[] = 'Please, fill the name, e-mail and message';
    } else {
        if (ctype_alpha($name) === false) {
            $errors[] = 'Name must only contain letters';
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'That\'s not valid email adress';
        }
    }

    if (empty($errors) === true) {
        mail('maciejkabsch@gmail.com', 'Contact Form', $message, 'From: ' . $email);
        header('Location: index.php?sent');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width"/>
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css" media="screen"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
</head>

<body>
<?php
if (isset($_GET['sent']) === true) {
    echo '<div class="thanks">
		<p id="thank-for">Thanks for contacting us!</p>
		<p id="close">Close</p>
		</div>';
}

if (empty($errors) === false) {
    echo '<div class="thanks"><ul>';
    foreach ($errors as $error) {
        echo '<li>', $error, '</li>';
    }
    echo '</ul><p id="close">Close</p></div>';
}

# TO BE CONTINUED...

?>

<header>

    <div class="testa">
    </div>
    <a href="#start-top" title="Main Page">
        <img src="img/Pepperoni_Lovers_Pizza.png" id="pizza"/>
    </a>

    <nav class="top-nav">

        <ul class="navig">
            <li class="nav-p"><a href="#a-five" title="">Ferrara</a></li>
            <li class="nav-p"><a href="#a-three" title="">Contact form</a></li>
            <li class="nav-p"><a href="#a-two" title="">Pizza</a></li>
            <li class="nav-p"><a href="#a-one" title="">Antipasti</a></li>
        </ul>


        <button type="button" title="otwórz menu" class="hamburger-nav">

            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 width="32.833px" height="32.833px" viewBox="0 0 92.833 92.833"
                 style="enable-background:new 0 0 92.833 92.833;"
                 xml:space="preserve" class="hamburger">
		<path d="M89.834,1.75H3c-1.654,0-3,1.346-3,3v13.334c0,1.654,1.346,3,3,3h86.833c1.653,0,3-1.346,3-3V4.75
			C92.834,3.096,91.488,1.75,89.834,1.75z"/>
                <path d="M89.834,36.75H3c-1.654,0-3,1.346-3,3v13.334c0,1.654,1.346,3,3,3h86.833c1.653,0,3-1.346,3-3V39.75
			C92.834,38.096,91.488,36.75,89.834,36.75z"/>
                <path d="M89.834,71.75H3c-1.654,0-3,1.346-3,3v13.334c0,1.654,1.346,3,3,3h86.833c1.653,0,3-1.346,3-3V74.75
			C92.834,73.095,91.488,71.75,89.834,71.75z"/>
</svg>

<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
     y="0px" width="32.833px" height="32.833px"
     viewBox="0 0 174.239 174.239" style="enable-background:new 0 0 174.239 174.239;" xml:space="preserve"
     class="close">
<path d="M146.537,1.047c-1.396-1.396-3.681-1.396-5.077,0L89.658,52.849c-1.396,1.396-3.681,1.396-5.077,0L32.78,1.047
	c-1.396-1.396-3.681-1.396-5.077,0L1.047,27.702c-1.396,1.396-1.396,3.681,0,5.077l51.802,51.802c1.396,1.396,1.396,3.681,0,5.077
	L1.047,141.46c-1.396,1.396-1.396,3.681,0,5.077l26.655,26.655c1.396,1.396,3.681,1.396,5.077,0l51.802-51.802
	c1.396-1.396,3.681-1.396,5.077,0l51.801,51.801c1.396,1.396,3.681,1.396,5.077,0l26.655-26.655c1.396-1.396,1.396-3.681,0-5.077
	l-51.801-51.801c-1.396-1.396-1.396-3.681,0-5.077l51.801-51.801c1.396-1.396,1.396-3.681,0-5.077L146.537,1.047z"/>
</svg>

        </button>

    </nav>
</header>

<main>
    <article class="article-header" id="start-top">
        <div id="welcome">

            <h1 id="ferrara">Ferrara</h1>

            <h3 id="ristorante">Pizzeria &amp; Ristorante</h3>

    </article>

    <div class="articles-wrapper">

        <section class="articles" id="a-one">

            <article class="art">
                <h3>Lorem ipsum dolor sit amet</h3>
                <img src="img/krakow-1.jpg" class="artimage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </article>

            <article class="art">
                <h3>Lorem ipsum dolor sit amet</h3>
                <img src="img/krakow-1.jpg" class="artimage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </article>

        </section>

        <section class="articles" id="a-two">

            <article class="art">
                <h3>Lorem ipsum dolor sit amet</h3>
                <img src="img/krakow-1.jpg" class="artimage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </article>

            <article class="art">
                <h3>Lorem ipsum dolor sit amet</h3>
                <img src="img/krakow-1.jpg" class="artimage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </article>

        </section>


        <section class="articles" id="a-three">

            <div class="form-wrap shadow">
                <form id="contact-form" action="" method="post">
                    <div class="form-block">
                        <div class="label">Name:</div>
                        <input type="text" name="name" id="name" <?php
                        if (isset($_POST['name']) === true) {
                            echo 'value="', strip_tags($_POST['name']), '"';
                        } ?>>
                    </div>
                    <div class="form-block">
                        <div class="label">E-mail:</div>
                        <input type="email" name="email" id="email" <?php
                        if (isset($_POST['email']) === true) {
                            echo 'value="', strip_tags($_POST['email']), '"';
                        } ?>>
                    </div>
                    <div class="textarea-block">
                        <div class="label">Message:</div>
                        <textarea name="message" id="message"><?php
                            if (isset($_POST['message']) === true) {
                                echo strip_tags($_POST['message']);
                            } ?></textarea>
                    </div class="form-block">
                    <div class="submit-block">
                        <input type="submit" value="Submit" id="sumbmit">
                    </div>
                </form>
            </div>

        </section>


        <section class="articles" id="a-five">

            <article class="art">
                <h3>Lorem ipsum dolor sit amet</h3>
                <img src="img/krakow-1.jpg" class="artimage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </article>

            <article class="art">
                <h3>Lorem ipsum dolor sit amet</h3>
                <img src="img/krakow-1.jpg" class="artimage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </article>

        </section>

    </div>

</main>

<footer>
</footer>
<script src="jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.min.js"></script>
<script src="main.js"></script>
</body>

</html>
