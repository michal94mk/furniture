<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakład stolarski</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/images/hammer.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        header {
            background-color: rgba(51, 51, 51, 0.7);
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0%;
            background-color: #ffc107;
            transition: width 0.3s ease-out;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        section {
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
        }

        section:nth-child(even) {
            background-color: rgba(242, 242, 242, 0.8);
        }

        .contact-form {
            width: 50%;
            margin: auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h1>Zakład stolarski</h1>
        <nav>
            <ul>
                <li><a href="#section1">Strona główna</a></li>
                <li><a href="#section2">O nas</a></li>
                <li><a href="#section3">Usługi</a></li>
                <li><a href="#section4">Projekty</a></li>
                <li><a href="#section5">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <section id="section1">
        <h2>Sekcja 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tellus nec libero faucibus, sed aliquet lectus venenatis. Donec et diam non dolor posuere convallis.</p>
    </section>

    <section id="section2">
        <h2>Sekcja 2</h2>
        <p>Integer id volutpat orci. Suspendisse lacinia, arcu id lobortis aliquet, metus leo ultricies ligula, non tincidunt ligula nulla vitae odio. Aliquam erat volutpat.</p>
    </section>

    <section id="section3">
        <h2>Sekcja 3</h2>
        <p>Etiam nec nunc sapien. Mauris vitae interdum elit. Aliquam nec nulla sit amet ex efficitur convallis. Vivamus finibus ex nec est tempor, nec gravida felis commodo.</p>
    </section>

    <section id="section4">
        <h2>Sekcja 4</h2>
        <p>Etiam nec nunc sapien. Mauris vitae interdum elit. Aliquam nec nulla sit amet ex efficitur convallis. Vivamus finibus ex nec est tempor, nec gravida felis commodo.</p>
    </section>

    <section id="section5">
        <h2>Sekcja 5</h2>
        <div class="contact-form">
            <h3>Skontaktuj się z nami</h3>
        </div>
    </section>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                window.scrollTo({
                    top: target.offsetTop,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
