<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Blogard Community</title>

</head>
<style>
    .scrulbar{
        scrollbar-color: rgb(223, 223, 223);
        scrollbar-width: 2px;
        overflow-x: scroll;
    }

    .scrulbar::-webkit-scrollbar-thumb {
        border-radius: 20px;
        background-color: rgba(218, 218, 218, 0.404);
    }
    .scrulbar::-webkit-scrollbar-track {
        scrollbar-width: 2px;
        background-color: transparent;
    }    

    .scrulbar::-webkit-scrollbar {
        overflow-x: scroll;
    }

</style>

<body class="min-h-screen d-flex flex-col font-sans">
    <x-navbar />
    {{ $slot }}

    <footer class="h-[80px] w-full bg-slate-50 flex items-center justify-center">
        <div class="w-full text-center text-slate-400">
            <p>Copyright &copy; 2023 - All right reserved</p>
        </div>
    </footer>
</body>

<script>
    const containerProfile = document.querySelector('#container-profile');
    const MenuProfile = document.querySelector('#menu-profile');

        containerProfile.addEventListener('click', () => {
            MenuProfile.classList.toggle('hidden');
        });
</script>

</html>