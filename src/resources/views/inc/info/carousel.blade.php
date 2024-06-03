<div class="d-flex justify-content-center w-100 m-4">
    <div class="col-md-6">
        <div class="rounded shadow">
            <div id="{{$id}}-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0; $i<count($images); $i++)
                    <li data-target="#{{$id}}-carousel" data-slide-to="{{$i}}" class="{{ !$i ? 'active' : '' }}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @foreach($images as $i => $img)
                        <div class="carousel-item {{ !$i ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{ asset($img['img']) }}" alt="{{ $img['alt'] }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#{{$id}}-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#{{$id}}-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>