@extends('layouts.sessao')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2  id="NP">+ Nova Playlist</h2>
            <button class="btn btn-success" id="uploadplaylist">Concluir Upload</button>
        </div>
        <div class="card-body">
            <form method="POST" action="route('criarplaylist')">
                @csrf
                <div class="form-group row">
                    <label for="playlist" class="col-12">
                        <h5 id="h-nome-play">Nome da Playlist</h5>
                    </label>
                </div>
                <div class="form-group row">
                    <div class="col-12" id="div-playlist">
                        <input type="text" id="playlist" name="playlist" placeholder="Escolha um nome para sua playlist" value="" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="capaplaylist" class="col-12">
                        <h5 id="h-capa-playlist">Adicionar Capa</h5>
                    </label>
                </div>
                <div class="form-group row">
                    <div class="col-12" id="div-capa">
                        <input type="file" id="capaplaylist" name="capaplaylist" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addcifra" class="col-12">
                        <h5 id="h-selecionar-cifra">Suas Cifras para Adicionar:</h5>
                    </label>
                </div>
                <div class="form-group row">
                        <div class="col-12" id="div-pesquisar-cifra-add">
                            <input type="text" id="busca-cifra" onkeyup="myFunction()" placeholder="Pesquisar" title="Type in a name">
                        </div>
                </div>
                    <div class="form-group row">
                        <div class="col-12" id="div-table">
                            <table class="table table-borderless  table-hover" id="lista-cifra">
                                <thead class="header">
                                    <tr>
                                        <th style="font-weight: 100px; font-size:large;">Título</th>
                                        <th style="font-weight: 100px; font-size:small; text-align:right;">Selecionar Todas <input type="radio" id="selectall" value="" ></th>
                                        <th colspan="3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr" style="border-top: 2px solid #626262;">
                                        <td  style="font-size: medium;"><input type="radio" id="selectcifra" value="" > Oasis - Wonderwall</td>

                                        <td style="align-items:initial; text-align:left;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("busca-cifra");
        filter = input.value.toUpperCase();
        table = document.getElementById("lista-cifra");
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
