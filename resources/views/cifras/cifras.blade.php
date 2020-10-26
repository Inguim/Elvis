@extends('layouts.sessao')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="mr-auto">
            <i class="fas music-alt icon" style="width: 30px; margin-right: 0"><img src="notacifra.png" style="width: inherit"></img></i>
            Cifras
        </h1>
        <button class="ml-auto" type="button" id="btsubircifra" data-toggle="modal" data-target="#addcifra">{{ __('Upload de cifra') }}</button>
        </button>
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
<!-- Modal Upload de cifras -->
<div class="modal fade" id="addcifra">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title">+ Adicionar Cifra</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="/action_page.php" class="needs-validation">
                    @csrf
                    <div class="form-group">
                        <label for="capa">Selecionar Arquivo</label>
                        <input type="file" class="form-control-file border" name="arqcifra" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="row justify-content-center">
                    <button type="submit" data-dismiss="modal" id="enviar_cifra">Concluir Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Add PLaylist -->
<div class="modal fade" id="addplay">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="modaladd_Play" class="nav-link" href=" {{ url('/criarplaylist') }}">+ Nova Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a id="modaladd_Play" class="nav-link" href="#">Playlist 1</a>
                    </li>
                    <li class="nav-item">
                        <a id="modaladd_Play" class="nav-link" href="#">Playlist 2</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
