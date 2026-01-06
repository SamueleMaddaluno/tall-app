<div class="flex flex-col bg-green-800 w-full h-screen"
    x-data="{
    showSubscribe: @entangle('showSubscribe'),
    showSuccess: @entangle('showSuccess'),
    }" >

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

                <x-primary-button type="button" class="py-3 px-8 bg-red-700 hover:bg-red-600"
                x-on:click="showSubscribe = true"
                x-on:keydown.escape.window="showSubscribe = false">
                    iscriviti
                </x-primary-button>



            </div>
        </div> 
        <x-modal class="bg-pink-500" trigger="showSubscribe">
            <p class="text-white text-5xl
                font-extrabold text-center">
                    Let's do it!
                </p> 

                <form class="flex flex-col items-center p-20"
                      wire:submit.prevent="subscribe">

                    <x-text-input
                    class="px-5 py-3 w-80 
                    border-blue-400"
                    type="email"
                    name="email"
                    autocomplete="email"
                    placeholder="Email"
                    wire:model="email"
                    ></x-text-input>

                    <span class="text-gray-100 text-xs">
                        {{ 
                        $errors->has('email')
                        ? $errors->first('email') : 'Ti spediremo un email di conferma.'
                        }}
                    </span>

                    <x-primary-button
                    type="submit" 
                    class="px-5 py-3 mt-5
                    w-80 bg-blue-500 justify-center">
                        conferma
                    </x-primary-button>
              
                </form>
        </x-modal>

        <x-modal class="bg-red-200" trigger="showSuccess">

                <p class="text-white text-9xl
                font-extrabold text-center
                animate-pulse">
                    &check;
                </p> 

                <p class="text-white text-5xl
                font-extrabold text-center
                mt-16">
                    Ottimo!
                </p>

                <p class="text-white text-3xl
                text-center">

                    Controlla la tua email.

                </p>
        </x-modal>


        
</div>



