@extends('site.template')
@section('title', 'Serviços')
@section('content')

<section>
    <div class="index">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Serviços</h1>
                </div>
                <div class="col-md-3 col-sm-3 mt-2 mb-2">
                    <div class="pos-f-t">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-4">
                                <h5 class="text-white h4">Categorias</h5>
                                <span class="text-muted">Selecione por categorias.</span>
                                @foreach($tab as $table)
                                <a class="nav-link text-white h5" href="{{url('services/'.$table->name_service)}}">{{ $table->name_service }}</a>
                                @endforeach
                            </div>
                        </div>
                        <nav class="navbar navbar-dark menu-navegacao">
                            <h3 class="text-white">Selecione</h3>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card-title">
                        @foreach($service as $serv)
                        <h3>{{ $serv->name_service }}</h3>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <p>
                        <strong>O que é selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                        <p>
                        <strong>Indicações da selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                        <p>
                        <strong>Como é feita a selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                        <p>
                        <strong>Cuidados após a selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <h4>Clique nas fotos para ampliar</h4>
                        <hr>
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection