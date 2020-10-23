@extends('layouts.sessao')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column align-items-center">
                <div class="col-6" id="capa-da-playlist">
                    <img class="img-fluid" id="button-img-card" src="https://upload.wikimedia.org/wikipedia/pt/thumb/a/ad/Blizzard_of_Ozz.jpg/220px-Blizzard_of_Ozz.jpg">
                </div>
                <div class="col-6">
                    <p id="nome-da-playlist">Nome Playlist</p>
                    <button class="btn btn-success" id="btn-reproducao">Reproduzir</button>
                    <button class="btn dropdown" type="button" data-toggle="dropdown" id="btn-editar-excluir-playlist"><i class="fas fa-cogs  hover-efect-icon" style="color: #626262;"> </i></button>
                    <ul class="dropdown-menu" id="menu-edt-ex">
                        <li><a href="#" id="btn-editar">Editar</a></li>
                        <li><a href="#" id="btn-excluir">Excluir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-12">
            <input type="text" id="busca-de-nome-input" onkeyup="myFunction()" placeholder="Pesquisar" title="Type in a name">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="py-3">
                <table class="table table-borderless  table-hover" id="lista-de-musica-playlist">
                    <thead class="header">
                        <tr>
                            <th style="font-weight: 100px; font-size:large;">Título</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr" style="border-top: 2px solid #626262;">
                            <td style="font-size: medium;">Oasis - Wonderwall</td>
                            <td style="text-align: right;">
                                <button class="btn dropdown" type="button" data-toggle="dropdown" id="btn-op-playlist"><i class="fas fa-ellipsis-h  hover-efect-icon" style="color: #626262;"> </i></button>
                                <ul class="dropdown-menu" id="menu-op-playlist">
                                    <li><a href="#" id="AS">Auto Scroll</a></li>
                                    <li><a href="#" id="AT">Add Time</a></li>
                                    <li><a href="#" id="trash">Remover</a></li>
                                </ul>

                                <button type="button" id="btn-mover"><i class="fas fa-list hover-efect-icon" style="color: #626262;"> </i></button>
                            </td>
                        </tr>
                        <tr class="tr">
                            <td style="font-size: medium;">Nirvana - Smell like teen spirit</td>
                            <td style="text-align: right;">
                                <button class="btn dropdown" type="button" data-toggle="dropdown" id="btn-op-playlist"><i class="fas fa-ellipsis-h  hover-efect-icon" style="color: #626262;"> </i></button>
                                <ul class="dropdown-menu" id="menu-op-playlist">
                                    <li><a href="#" id="AS">Auto Scroll</a></li>
                                    <li><a href="#" id="AT">Add Time</a></li>
                                    <li><a href="#" id="trash">Remover</a></li>
                                </ul>

                                <button type="button" id="btn-mover"><i class="fas fa-list hover-efect-icon" style="color: #626262;"> </i></button>
                            </td>
                        </tr>
                        <tr class="tr">
                            <td style="font-size: medium;">Simple Minds - Don't you forget about me</td>
                            <td style="text-align: right;">
                                <button class="btn dropdown" type="button" data-toggle="dropdown" id="btn-op-playlist"><i class="fas fa-ellipsis-h  hover-efect-icon" style="color: #626262;"> </i></button>
                                <ul class="dropdown-menu" id="menu-op-playlist">
                                    <li><a href="#" id="AS">Auto Scroll</a></li>
                                    <li><a href="#" id="AT">Add Time</a></li>
                                    <li><a href="#" id="trash">Remover</a></li>
                                </ul>

                                <button type="button" id="btn-mover"><i class="fas fa-list hover-efect-icon" style="color: #626262;"> </i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("busca-de-nome-input");
        filter = input.value.toUpperCase();
        table = document.getElementById("lista-de-musica-playlist");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection
