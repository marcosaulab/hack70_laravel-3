<x-layout>

    <x-slot name="title">
        Home page
    </x-slot>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>
                    Comics Hack70 
                </h1>
            </div>
        </div>
    </div>

<div class="container">
        <div class="row my-5">

            @foreach ($comics as $element)
                <div class="col-12 col-md-3 my-2">
                    <x-comicscard

                    comicId="{{ $element['id'] }}"
                    comicTitle="{{ $element['title'] }}"
                    comicEditor="{{ $element['editor'] }}"
                    comicGenre="{{ $element['genre'] }}"
                    comicImg="{{ $element['img'] }}"
                    comicAbstract="{{ $element['abstract'] }}"
                    comicRelease="{{ $element['release'] }}"

                    />                 
                </div>   
            @endforeach
        
        </div>
    </div>

</x-layout>