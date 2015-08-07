@extends('theme::app')

@title(trans('theme::account/player/sex/form.title'))
@navigation('/account')
@bodyclass('account-character-sex')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account/player/sex/form.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <form method="POST" action="{{ url('/account/character', [$player->id(), 'sex']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/player/sex/form.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! trans('theme::account/player/sex/form.content', ['name' => $player->name()]) !!}
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <button class="green-button">
                                <span>{{ trans('theme::account/player/sex/form.yes') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
                                <span>{{ trans('theme::account/player/sex/form.back') }}</span>
                            </a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
