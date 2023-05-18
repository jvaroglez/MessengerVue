@extends('layouts.app')

@section('content')
    <b-container>
        <b-row align-h="center">
            <b-col cols="8">
                <b-card title="Inicio de Sesión" class="my-5">

                    @if($errors->any())
                        <b-alert show variant="danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </b-alert>
                    @else
                        <b-alert show>
                            Enter your data
                        </b-alert>
                    @endif

                    <b-form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <b-form-group
                                label="Email:"
                                label-for="email">
                            <b-form-input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}" required autofocus
                                    placeholder="hola@email.com">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group
                                label="Password:"
                                label-for="password">
                            <b-form-input
                                    type="password"
                                    id="password"
                                    name="password"
                                    required autofocus>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group>
                            <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                                Remember
                            </b-form-checkbox>
                        </b-form-group>

                        <b-button type="submit" variant="primary">
                            Login
                        </b-button>

                        <b-button href="{{ route('password.request') }}" variant="link">
                            Forgot Your Password?
                        </b-button>
                    </b-form>
                </b-card>

            </b-col>
        </b-row>
    </b-container>
@endsection
