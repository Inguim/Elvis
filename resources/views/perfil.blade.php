@extends('layouts.sessao')

@section('content')

<div class="container">
    <div class="row">
        <h1 class="mr-auto">Visto Recentemente</h1>
    </div>
    <div id="listarcifras">
        <table class="table table-borderless  table-hover" id="listar_cifras">
            <tbody>
                <tr href="{{url('/vercifra')}}" class="tr" style="border-bottom: 2px solid #626262;">
                    <td  style="font-size: medium;">Oasis - Wonderwall</td>
                    <td style="align-items:initial; text-align:left;"></td>
                </tr>
                <tr class="tr" style="border-bottom: 2px solid #626262;">
                    <td  style="font-size: medium;">Nirvana - Smells like teen spirit</td>  
                    <td style="align-items:initial; text-align:left;"></td>
                </tr>
                <tr class="tr" style="border-bottom: 2px solid #626262;">
                    <td  style="font-size: medium;">Trabalho Escravo</td>

                    <td style="align-items:initial; text-align:left;"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row" style="padding-top = 100px;">
        <h1 class="mr-auto" >Últimas Playlists Acessadas</h1>
    </div>
    <div class="d-flex row flex-wrap mt-2" id="playlists-cards">
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <a href="{{url('/playlistesp')}}"><i class="fas fa-play-circle"></i> </a>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <a href="{{url('/playlistesp')}}"><i class="fas fa-play-circle"></i> </a>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <a href="{{url('/playlistesp')}}"><i class="fas fa-play-circle"></i> </a>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <a href="{{url('/playlistesp')}}"><i class="fas fa-play-circle"></i> </a>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <a href="{{url('/playlistesp')}}"><i class="fas fa-play-circle"></i> </a>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
        <div>
            <div class="d-flex flex-column align-items-center justify-content-center" id="item-card" style="background-image: url(capa.jpg)">
                <a href="{{url('/playlistesp')}}"><i class="fas fa-play-circle"></i> </a>
            </div>
            <p class="text-center" id="nome-playlist">Nome Playlist</p>
        </div>
</div>

@endsection
