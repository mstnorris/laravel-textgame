@extends('layouts.master')

@section('header')

<style>
    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }
    .content {
        text-align: center;
        display: inline-block;
    }
    .title {
        font-size: 96px;
    }

    .btn-outline {
        background-color: #eceff1;
        border-bottom-left-radius: 2em;
        border-bottom-right-radius: 2em;
        border-top-left-radius: 2em;
        border-top-right-radius: 2em;
        border: 1px solid #607d8b;
        box-sizing: border-box;
        color: #607d8b;
        cursor: pointer;
        display: inline-block;
        font-family: 'Open Sans', sans-serif;
        font-size: 1.2em;
        font-weight: 300;
        height: 4em;
        letter-spacing: normal;
        line-height: 2em;
        margin: 1em 0;
        padding: 1em 3em;
        text-align: center;
        text-indent: 0px;
        text-shadow: none;
        vertical-align: middle;
    }

    .btn-outline:hover {
        color: #607d8b;
        background-color: #CFD8DC;
    }
</style>

@endsection

@section('content')

    <div class="container">
        <div class="content">
            <div class="title">Laravel Text Game</div>

            <a href="{{ route('game_path') }}" class="btn btn-outline btn-lg">Start Game</a>
        </div>
    </div>

@endsection

@section('footer')

    <script>
    var bgcolorlist = new Array("#FFCDD2", "#F8BBD0", "#F8BBD0", "#D1C4E9", "#C5CAE9", "#BBDEFB", "#B3E5FC", "#B2EBF2", "#B2DFDB", "#C8E6C9", "#DCEDC8", "#F0F4C3", "#FFF9C4", "#FFECB3", "#FFE0B2", "#FFCCBC", "#D7CCC8", "#F5F5F5", "#CFD8DC");
    //document.body.style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)];
    </script>

@endsection