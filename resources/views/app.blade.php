<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="css/app.css" rel="stylesheet">
         </head>
    <body class="font-sans">
        <div id="app">

            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <h1>
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>


                <main class="flex">
                    <aside class="w-1/5">

                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-6" >The brand</h5>
                        
                        <ul class="list-reset">
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact >Logo</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/logoSymbol">Logo Symbol</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link></li>
                    
                        </ul>
                    
                    </section>

                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-6" >The Doodles</h5>
                        
                        <ul class="list-reset">
                            <li class="text-sm leading-loose"><router-link class="text-black"  to="/mascot">Mascot</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black"  to="/illustrations">Illustrations</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black"  to="/loadersAnimations">Loaders & Animtions</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black"  to="/wallpapers">Wallpapers</router-link></li>
                    
                        </ul>
                    
                    </section>

                    </aside>
                    
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
            
            <hr>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
