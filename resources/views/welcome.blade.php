<x-guest-layout>
    <div class="flex flex-col bg-green-800 w-full h-screen">
        <nav class="flex pt-5 justify-between container mx-auto text-green-200">
            <a class="text-2xl font-bold" href="/">
                <x-application-logo class="w-16 h-16 fill-current">
                </x-application-logo>
            </a>
            <div class="flex justify-end">
                @auth

                    <a href="{{ route('dashboard')}}">
                    Dashboard</a>

                @else

                    <a href="{{ route('login')}}">
                    Login</a>

                @endauth
            </div>
        </nav>

        <div class="flex container mx-auto items-center h-full">
            <div class="flex flex-col w-1/3 items-start">

                <h1 class="text-white font-bolds text-5xl leading-tight mb-4">
                   Pagina di iscrizione generica
                </h1>

                <p class="tex-green-200 text-xl mb-10">
                    Stiamo verificando le stack <span class="font-bold underline">TALL</span>. ti interessa iscriverti?
                </p>

                <x-primary-button class="py-3 px-8 bg-red-700 hover:bg-red-600">
                    iscriviti
                </x-primary-button>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-pink-800 w-full h-screen">
        <p class="text-white text-5xl
        font-extrabold text-center">
            Let's do it!
        </p>
        <form class="flex flex-col items-center p-20">
            <x-text-input
            class="px-5 py-3 w-80 
            border-blue-400"
            type="email"
            name="email"
            placeholder="Email"
            ></x-text-input>
            <span class="text-gray-100 text-xs">
                Ti spediremo un email di conferma.
            </span>
            <x-primary-button class="px-5 py-3 mt-5
            w-80 bg-blue-500 justify-center">
                entra
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>