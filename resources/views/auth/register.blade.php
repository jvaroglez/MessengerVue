@extends('layouts.app')

@section('content')
    <b-container>
        <b-row align-h="center">
            <b-col cols="8">
                <b-card title="Register" class="my-5">
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

                    <b-form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <b-form-group
                                label="Name:"
                                label-for="name">
                            <b-form-input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Enter your name" required autofocus>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group
                                label="Email:"
                                label-for="email"
                                description="We'll never share your email with anyone else.">
                            <b-form-input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="hola@email.com" required autofocus>
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

                        <b-form-group
                                label="Confirm Password:"
                                label-for="password_confirmation">
                            <b-form-input
                                    type="password"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    required autofocus>
                            </b-form-input>
                        </b-form-group>

                        <b-button type="submit" variant="primary">
                            Registrar
                        </b-button>

                        <b-button href="{{ route('login') }}" variant="link">
                            Already registered?
                        </b-button>
                    </b-form>
                </b-card>

            </b-col>
        </b-row>
    </b-container>
@endsection
