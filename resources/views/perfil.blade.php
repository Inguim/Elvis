@extends('layouts.sessao')

@section('content')

<div class="container">
    <div class="row">
        <h1 class="mr-auto">Visto Recentemente</h1>
    </div>
    <div id="listarcifras">
        <table class="table table-borderless  table-hover" id="listar_cifras">
            <tbody>
                <tr class="tr" style="border-bottom: 2px solid #626262;">
                    <td  style="font-size: medium;">Oasis - Wonderwall</td>
                    <td>
                    <div class="dropdown dropright">
                        <a href="#" id="ops" class="dropdown-toggle" data-toggle="dropdown" >. . .</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/vercifra')}}">Auto Scroll</a>
                            <div class="dropdown-item">
                                <a href="#" class="ml-auto" id="btaddplaylist" data-toggle="modal" data-target="#addplay">Add Playlist</a>
                            </div>
                            <a class="dropdown-item" href="#">Renomear</a>
                            <a id="excluircifra" class="dropdown-item" href="#">Excluir</a>
                        </div>
                    </div>
                    </td>
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
</div>

@endsection
