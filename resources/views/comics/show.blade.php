<h1>
    {{ $pasta->title }}
</h1>

<div class="row">
    <div class="col">
        <div class="mb-4">
            <a href="{{ route('pastas.index') }}" class="btn btn-primary">
                Torna all'index delle paste
            </a>
        </div>

        <div class="card">
            <img src="{{ $pasta->src }}" alt="{{ $pasta->title }}" class="card-img-top">

            <div class="card-body">
                <ul>
                    <li>
                        Tipo: {{ $pasta->type }}
                    </li>
                   
                    <li>
                        Tempo di{{ $pasta->cooking_time }}
                    </li>
                  
                    <li>
                        Peso: {{ $pasta->weight }}
                    </li>
                </ul>

                <p>
                    {{ $pasta->description }}
                </p>
            </div>
        </div>
    </div>
</div>
