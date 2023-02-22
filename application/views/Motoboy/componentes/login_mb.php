<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<div class="mx-auto h-screen max-h-screen-sm max-w-screen-xl px-5 xl:py-16 sm:px-5 py-5 md:px-8 md:py-4">
    <div class="mx-auto max-w-lg">
        <h1 class="text-center text-2xl font-bold text-gray-100 sm:text-3xl">
            Entregue Conosco!
        </h1>

        <p class="mx-auto mt-4 max-w-md text-center text-gray-200">
            A melhor e mais inovadora forma de entregas no Brasil
        </p>

        <form action="" class="mt-6 mb-0 space-y-4  bg-gray-100 rounded-tl-lg rounded-tr-lg p-8 shadow-2xl">
            <p class="text-lg font-medium">Faça login na usa conta</p>

            <div>
                <label for="email" class="text-sm font-medium">E-mail</label>

                <div class="relative mt-1">
                    <input type="email" id="email" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter E-mail" />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="senha" class="text-sm font-medium">Senha</label>

                <div class="relative mt-1">
                    <input type="password" id="senha" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter password" />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <button type="button" onclick="myFunction()"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>

            <button type="submit" class="block w-full rounded-lg bg-[#00968f] px-5 py-3 text-sm font-medium text-white">
                Login
            </button>

            <p class="text-center text-sm text-gray-500">
                Não é cadastrado?
                <a class="underline" href="">Cadastrar-se</a>
            </p>
        </form>
        <?php include("footer_mb.php") ?>
    </div>
</div>