@extends('layouts.sessao')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="mr-auto">Tocadas Recentemente</h1>
        <button type="submit" class="ml-auto" id="button-new">
            {{ __('Nova Playlist') }}
        </button>
    </div>
    <div class="d-flex row flex-wrap mt-2" id="playlists-cards">
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
    </div>
    <div class="row">
        <h1>Todas</h1>
    </div>
    <div class="d-flex row flex-wrap mt-2" id="playlists-cards">
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <i class="fas fa-play-circle"></i>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
    </div>
</div>
@endsection
