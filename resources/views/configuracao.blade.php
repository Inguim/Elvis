@extends('layouts.sessao')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 id="h-tela-config"><i class="fa fa-fw fa-cog icon"></i>Configurações da Conta</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="route('config')">
                @csrf
                <div class="form-group row">
                    <div class="col-12" id="div-table">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="tr">
                                    <td  id="h-table-n">Nome</td>
                                    <td><input type="text" id="nome-usuario" name="nome-usuario" placeholder="{{ Auth::user()->name }} {{ Auth::user()->sobrenome }}" readonly></td>
                                    <td><a href="#"> <i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr class="tr">
                                    <td id="h-table-e">Email</td>
                                    <td><input type="text" id="email-usuario" name="email-usuario" placeholder="{{ Auth::user()->email }}" readonly></td>
                                    <td><a href="#"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr class="tr">
                                    <td id="h-table-s">Senha</td>
                                    <td></td>
                                    <td><a href="#"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr class="tr">
                                    <td id="h-table-ec" style="font-size: medium;">Excluir Conta</td>
                                    <td><a href="#" id="a-excluirconta">Excluir minha conta</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
