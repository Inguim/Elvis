@extends('layouts.sessao')

@section('content')
<div>
    <div id="sideFila" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h3 style="color: #f1f1f1; padding:8px">Fila de Reprodução</h3>
        <a href="#">Wonderall - Oasis </a>
        <a href="#">Cifra 2</a>
        <a href="#">Cifra 3</a>
        <a href="#">Cifra 4</a>
    </div>
        <span style="font-size:30px;cursor:pointer" class="justify-left" onclick="openNav()">
            <i class="fa fa-angle-double-right"></i>
        </span>
    <div id="conteudoCifra">
        <object data="wonderwall.pdf"></object>
    </div>

    <!--Passar pra um arq.js-->
    <script>
        function openNav() {
            document.getElementById("sideFila").style.width = "250px";
            document.getElementById("conteudoCifra").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("sideFila").style.width = "0";
            document.getElementById("conteudoCifra").style.marginLeft = "0";
        }
    </script>
</div>
@endsection