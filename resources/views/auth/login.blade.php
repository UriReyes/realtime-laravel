@extends('layouts.app')

@section('content')

<b-container>
    <b-row align-h="center">
        <b-col col md="8">
            <b-card
                header="{{ __('Login') }}"
                header-tag="header">
                <b-card-text>
                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf
                        <b-form-group 
                            label-cols-md="4" 
                            label-size="sm" 
                            label="{{ __('E-Mail Address') }}" 
                            label-for="email"
                            label-align-sm="right">
                            <b-col col md="10">
                                <b-form-input 
                                    id="email" 
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="example@example.com"
                                    @error('email')
                                        :state="false"
                                    @enderror
                                    autocomplete="off"
                                    required>
                                </b-form-input>
                                @error('email')
                                    <b-form-invalid-feedback id="input-live-feedback">
                                        <strong>{{ $message }}</strong>
                                    </b-form-invalid-feedback>
                                @enderror
                            </b-col>
                        </b-form-group>

                        <b-form-group 
                            label-cols-md="4" 
                            label-size="sm" 
                            label="{{ __('Password') }}" 
                            label-for="password"
                            label-align-sm="right">
                            <b-col col md="10">
                                <b-form-input 
                                    id="password" 
                                    type="password"
                                    name="password"
                                    value="{{ old('password') }}"
                                    @error('password')
                                        :state="false"
                                    @enderror
                                    autocomplete="current-password"
                                    required>
                                </b-form-input>
                                @error('password')
                                    <b-form-invalid-feedback id="input-live-feedback">
                                        <strong>{{ $message }}</strong>
                                    </b-form-invalid-feedback>
                                @enderror
                            </b-col>
                        </b-form-group>
                        <b-form-group>
                            <b-col md="6" offset-md="4">
                                <b-form-checkbox
                                    id="remember"
                                    type="checkbox" 
                                    name="remember"
                                    {{ old('remember') ? 'checked="true"' : '' }}>
                                    {{ __('Remember Me') }}
                                </b-form-checkbox>
                            </b-col>
                        </b-form-group>

                        <b-form-group class="mb-0">
                            <b-col md="8" offset-md="4">
                                <b-button type="submit" variant="primary">
                                    {{ __('Login') }}
                                </b-button>

                                @if (Route::has('password.request'))
                                    <b-button  href="{{ route('password.request') }}" variant="link">
                                        {{ __('Forgot Your Password?') }}
                                    </b-button>
                                @endif
                            </b-col>
                        </b-form-group>
                    </b-form>
                </b-card-text>
            </b-card>
        </b-col>
    </b-row>
</b-container>
   

@endsection
