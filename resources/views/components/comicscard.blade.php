<div class="card bg-dark text-light" style="width: 18rem;">
    <img src="/img/{{ $comicImg }}" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">{!! $comicTitle !!}</h5>
        <p class="card-text cardText">Editor: {!! $comicEditor !!}</p>
        <p class="card-text"> Abstract: {!! Str::limit($comicAbstract, 40) !!} </p>
    </div>
</div>