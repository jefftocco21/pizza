<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPizza</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="icon" href="images/favicon.ico" />
            <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                crossorigin="anonymous"
                referrerpolicy="no-referrer"
            />
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="mb-48">
            <nav class="flex justify-between items-center mb-4">
                <a href="index.html"
                    ><img class="w-24" src="images/logo.png" alt="" class="logo"
                /></a>
                <ul class="flex space-x-6 mr-6 text-lg">
                    <li>
                        <a href="register.html" class="hover:text-laravel"
                            ><i class=""></i> Register</a
                        >
                    </li>
                    <li>
                        <a href="login.html" class="hover:text-laravel"
                            ><i class=""></i>
                            Login</a
                        >
                    </li>
                </ul>
            </nav>
            <main>
                @yield('content')
            </main>
            <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-orange-100 text-black h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        </footer>
</body>
</html>
