@extends('theme::app')

@title(trans('theme::account.create.title'))
@navigation('/account/create')
@bodyclass('account-create')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-createaccount.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')
            
            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.create.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="20%"><strong v-class="error: (typeof errors.account !== 'boolean' || (errors.account !== false && {{ $errors->has('name') ? 'true' : 'false' }}))">{!! trans('theme::account.create.account') !!}</strong></th>
                                        <td>
                                            <input type="text" name="name" size="35" maxlength="30" value="{{ old('name') }}" v-model="account" v-on="change: validateAccount"> &nbsp;
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" v-show="errors.account">
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" v-show="! errors.account">
                                        </td>
                                    </tr>
                                    <tr v-show="typeof errors.account !== 'boolean'">
                                        <th></th>
                                        <td><small class="error">@{{ errors.account }}</small></td>
                                    </tr>
                                    <tr>
                                        <th><strong v-class="error: (typeof errors.email !== 'boolean' || (errors.email !== false && {{ $errors->has('email') ? 'true' : 'false' }}))">{!! trans('theme::account.create.email') !!}</strong></th>
                                        <td>
                                            <input type="email" name="email" size="35" maxlength="50" value="{{ old('email') }}" v-model="email" v-on="change: validateEmail"> &nbsp;
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" v-show="errors.email">
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" v-show="! errors.email">
                                        </td>
                                    </tr>
                                    <tr v-show="typeof errors.email !== 'boolean'">
                                        <th></th>
                                        <td><small class="error">@{{ errors.email }}</small></td>
                                    </tr>
                                    <tr>
                                        <th><strong v-class="error: (typeof errors.password !== 'boolean' || (errors.password !== false && {{ $errors->has('password') ? 'true' : 'false' }}))">{!! trans('theme::account.create.password') !!}</strong></th>
                                        <td>
                                            <input type="password" name="password" size="35" maxlength="29" v-model="password" v-on="change: validatePassword"> &nbsp;
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" v-show="errors.password">
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" v-show="! errors.password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><strong v-class="error: (typeof errors.password !== 'boolean' || (errors.password !== false && {{ $errors->has('password') ? 'true' : 'false' }}))">{!! trans('theme::account.create.confirmation') !!}</strong></th>
                                        <td>
                                            <input type="password" name="password_confirmation" size="35" maxlength="29" v-model="confirmation" v-on="change: validatePassword"> &nbsp;
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" v-show="errors.password">
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" v-show="! errors.password">
                                        </td>
                                    </tr>
                                    <tr v-show="typeof errors.password !== 'boolean'">
                                        <th></th>
                                        <td><small class="error">@{{ errors.password }}</small></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="box">
                            <div class="inner-box">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="20%"><strong v-class="error: (typeof errors.name !== 'boolean' || (errors.name !== false && {{ $errors->has('player') ? 'true' : 'false' }}))">{!! trans('theme::account.create.player') !!}</strong></th>
                                        <td>
                                            <input type="text" name="player" size="35" maxlength="30" id="name-suggestion" value="{{ old('player') }}" v-model="name" v-on="change: validateName"> &nbsp;
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" v-show="errors.name">
                                            <img class="valign" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" v-show="! errors.name">
                                        </td>
                                    </tr>
                                    <tr v-show="typeof errors.name !== 'boolean'">
                                        <th></th>
                                        <td><small class="error">@{{ errors.name }}</small></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><small>[<a href="#" id="suggest-name" v-on="click: suggestName">{!! trans('theme::account.create.suggestname') !!}</a>]</small></td>
                                    </tr>
                                    @if (count($genders = genders()) > 1)
                                        <tr>
                                            <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">{!! trans('theme::account.create.sex') !!}</strong></th>
                                            <td>
                                                @foreach ($genders as $gender)
                                                    <label>
                                                        <input type="radio" name="sex" value="{{ $gender->id() }}" {{ old('sex', 1) == $gender->id() ? 'checked' : null }}> 
                                                        {{ $gender->name() }}
                                                    </label>
                                                    &nbsp;
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>

                        @if (count($vocations = vocations(true)) > 1)
                            <div class="box">
                                <div class="inner-box">
                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <th width="20%" valign="top"><p><strong class="{{ $errors->has('vocation') ? 'error' : null }}">{!! trans('theme::account.create.vocation') !!}</strong></p></th>
                                            <td>
                                                <?php $first = $vocations->first()->id(); ?>
                                                @foreach ($vocations as $vocation)
                                                    <label>
                                                        <input type="radio" name="vocation" value="{{ $vocation->id() }}" {{ old('vocation', $first) == $vocation->id() ? 'checked' : null }}> 
                                                        {{ $vocation->name() }}
                                                    </label>
                                                    &nbsp;
                                                @endforeach
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endif
                        
                        @if ($worlds = worlds() and $worlds->count() > 1)
                            <div class="box">
                                <div class="inner-box">
                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <th width="20%" valign="top"><p><strong class="{{ $errors->has('world') ? 'error' : null }}">{!! trans('theme::account.create.world') !!}</strong></p></th>
                                            <td>
                                                <?php $random = $worlds->random()->id(); ?>
                                                @foreach ($worlds as $key => $world)
                                                    <p>
                                                        <label>
                                                            <input type="radio" name="world" value="{{ $world->id() }}" {{ old('world', $random) == $world->id() ? 'checked' : null }}> 

                                                            @if ($flag = $world->flag())
                                                                <img src="{{ config('pandaac.theme-tibia.paths.flags') }}/{{ $flag }}.gif" alt="{{ strtoupper($flag) }}" title="{{ country($flag) }}" class="flag">
                                                            @endif

                                                            {{ $world->name() }} 
                                                            <small>({{ $world->type() }})</small>
                                                        </label>
                                                    </p>
                                                @endforeach
                                                
                                                <p><small>[<a href="#" id="suggest-world" v-on="click: suggestWorld">{!! trans('theme::account.create.suggestworld') !!}</a>]</small></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endif
                        
                        <div class="box">
                            <div class="inner-box">
                                <p>
                                    <strong>{!! trans('theme::account.create.terms') !!}</strong><br>
                                    <input type="checkbox" name="terms" value="1">

                                    {!! trans('theme::account.create.accept', [
                                        'server'    => $server, 
                                        'terms'     => url('/support/terms'),
                                        'rules'     => url('/support/rules'),
                                        'privacy'   => url('/support/privacy'),
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <button class="blue-button">
                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="{{ trans('theme::account.create.submit') }}">
                </button>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
