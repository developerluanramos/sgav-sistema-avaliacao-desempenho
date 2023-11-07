<!doctype html>
<html lang="en" id="htmlMainPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            darkMode: ['class', '[data-mode="dark"]'],
            theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
            },
            corePlugins: {
            preflight: false,
            },
        };
    </script>
    <title>Atenticação - {{config('app.name')}}</title>
</head>
<script>
    function lighMode() {
        console.log('executou');
        document.getElementById('htmlMainPage').classList.add('dark')
    }
</script>
<body class="antialiased">

{{-- @include('components.alerts.form-errors')
<form action="{{route('auth.login')}}" method="POST">
    @csrf
    <input type="email" name="email" required><br>
    <input type="password" name="password" required><br>
    <input type="submit" value="login">
</form> --}}

<!-- This is an example component -->
<div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
          <div class="leading-loose">
            <form action="{{route('auth.login')}}" method="POST" class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
                @csrf
                <p class="text-white font-medium text-center text-lg font-bold">LOGIN</p>
                @include('components.alerts.form-errors')
                <div class="">
                    <label class="block text-sm text-white" for="email">E-mail</label>
                    <input name="email" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email"  placeholder="Digite o e-mail" aria-label="email" required>
                </div>
                <div class="mt-2">
                    <label class="block  text-sm text-white">Senha</label>
                    <input name="password" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                    type="password" id="password" placeholder="Digite a sua senha" arial-label="password" required>
                </div>
                <div class="mt-4 items-center flex justify-between">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                    type="submit">Entrar</button>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                    href="#">Esqueceu a senha ?</a>
                </div>
                <div class="text-center">
                    <a class="inline-block right-0 align-baseline font-light text-sm text-500 hover:text-red-400">
                        Criar uma conta
                    </a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
    <style>
      .login{

        background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');

      /* background: url('http://bit.ly/2gPLxZ4'); */
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
