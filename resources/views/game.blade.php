@extends('layouts.master')

@section('header')

<style>
    body {
        margin-top: 4em;
    }

    .btn-game {
        vertical-align: middle;
        height: 200px;
        line-height: 200px;
        width: 46px;
        text-align: center;
        padding: 0;
    }

    .btn-left {
        float: right;
    }

    .btn-right {
        float:left;
    }

    .split {
        height: 1em;
    }

    .outerContainer
    {
        display: table;
        height: 200px;
        overflow: hidden;
        width: 100%;
        background-color: #80D8FF;
        border-color: #81D4FA;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .outerContainer .innerContainer
    {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .element {
        color: white;
        font-size: 2em;
    }
</style>

@endsection

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">

                <div class="row">

                    <a href="#" class="btn btn-info btn-lg col-xs-12"><i class="fa fa-fw fa-arrow-up"></i></a>

                </div>

            </div>

        </div>

        <div class="split"></div>

        <div class="row">

            <div class="col-sm-4 col-xs-1">

                <a href="#" class="btn btn-info btn-lg btn-game btn-left"><i class="fa fa-fw fa-arrow-left"></i></a>

            </div>

            <div class="col-sm-4 col-xs-10">

                <div class="row">

                    <div class="outerContainer">
                        <div class="innerContainer">
                            <div class="element">
                                {{ $player->questions()->latest()->first()->question }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-sm-4 col-xs-1">

                <a href="#" class="btn btn-info btn-lg btn-game btn-right"><i class="fa fa-fw fa-arrow-right"></i></a>

            </div>

        </div>

        <div class="split"></div>

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">

                <div class="row">

                    <a href="#" class="btn btn-info btn-lg col-xs-12"><i class="fa fa-fw fa-arrow-down"></i></a>

                </div>

            </div>

        </div>

    </div>

@endsection