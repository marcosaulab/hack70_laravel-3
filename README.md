# Components

I componenti in Blade sono dei blocchi di codice riutilizzabili che possono essere inclusi all'interno delle viste

Come creo un component?
1. creare la cartella "components" (nome obbligatorio) all'interno di resources/views
2. creo un file blade all'interno della cartella "components": ad esempio navbar.blade.php 
   (oppupre usando il comando artisan: php artisan make:component moviecard --view)
3. richiamare il file creato all'interno della vista con un tag <x-nome /> nel nostro esempio <x-navbar />

## Layout

Il layout è la cornice per le nostre viste blade: 
1. creiamo un file layout.blade.php all'interno della cartella components
2. creiamo la parte top (header, title, apertura tag body e navbar) e la parte down (footer, script, chiusura /html)
3. in mezzo inseriamo un buco all'interno del quale inseriamo poi i contenuti delle nostre viste: deve chiamarsi obbligatoriamente {{ $slot }}
4. Inglobare i contenuti delle nostre viste all'interno del tag <x-layout>[...contenuto vista...]</x-layout>


($pageIs == 'homepage') ? 'text-center' : ''


@if($pageIs == 'homepage')

    text-center

@else 

@endif


# Building degli asset

1. Prenderemo tutte le risorse css e le assembleremo in unico file app.css
2. Prenderemo tutte le risorse js e le assembleremo in unico file app.js
3. Prenderemo questi file e li renderemo disponibili all'interno di /public


Il componente che si occupa di gestire gli asset si chiama Vite


Dependency Manager di PHP -> Composer -> composer.json
Dependency Manager di JS -> npm -> libreria di node.js -> libreria di javascript


## Installiamo npm all'interno del nostro progetto

1. npm install
2. npm i bootstrap
3. includere i file che verranno generati: @vite(['resources/css/app.css', 'resources/js/app.js'])
4. Rendere disponibili i file al nostro browser: lanciare il comando "npm run dev"



# Esercizio: nuovo progetto

1. mi occupo dei componenti e del layout -> vado a creare questi file all'interno della cartella /components
2. facciamo il building degli asset
    - installiamo npm -> npm install
    - installo bootstrap -> npm i bootstrap
    - includo bootstrap in resources/css/app.css e resources/css/app.js
    - richiamo gli asset all'interno del mio layout -> @vite([...])
    - avvio il building degli asset -> npm run dev

