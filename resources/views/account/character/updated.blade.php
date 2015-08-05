@extends('theme::app')

@title(trans('theme::account.character.updated.title'))
@navigation('/account')
@bodyclass('account-character-updated')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.updated.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.character.updated.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    <p>{!! trans('theme::account.character.updated.content') !!}</p>
                </div>
            </div>

            <br>

            <table class="full-width">
                <tr>
                    <td class="text-center">
                        <a href="{{ url('/account/character', $player->id()) }}" class="blue-button">
                            <span>{{ trans('theme::account.character.updated.back') }}</span>
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop