@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col md="8">
            <b-card
                header="{{ __('Register') }}"
                header-tag="header">
                <b-card-text>
                    <b-form method="POST" action="{{ route('register') }}">
                        @csrf

                        <b-form-group 
                            label-cols-md="4" 
                            label-size="sm" 
                            label="{{ __('Name') }}" 
                            label-for="name"
                            label-align-sm="right">

                            <b-col md="10">
                                <b-input id="name" 
                                    type="text" 
                                    @error('name') :state="false" @enderror 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required autocomplete="off">
                                </b-input>

                                @error('name')
                                    <b-form-invalid-feedback id="input-live-feedback">
                                        <strong>{{ $message }}</strong>
                                    </b-form-invalid-feedback>
                                @enderror
                            </b-col>
                        </b-form-group>

                        <b-form-group 
                            label-cols-md="4" 
                            label-size="sm" 
                            label="{{ __('E-Mail Address') }}" 
                            label-for="email"
                            label-align-sm="right">

                            <b-col md="10">
                                <b-input id="email" 
                                    type="text" 
                                    @error('email') :state="false" @enderror 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required autocomplete="off">
                                </b-input>

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
                            label="{{ __('E-Mail Address') }}" 
                            label-for="password"
                            label-align-sm="right">

                            <b-col md="10">
                                <b-input id="password" 
                                    type="password" 
                                    @error('password') :state="false" @enderror 
                                    name="password" 
                                    value="{{ old('password') }}" 
                                    required autocomplete="off">
                                </b-input>

                                @error('password')
                                    <b-form-invalid-feedback id="input-live-feedback">
                                        <strong>{{ $message }}</strong>
                                    </b-form-invalid-feedback>
                                @enderror
                            </b-col>
                        </b-form-group>
                        
                        <b-form-group 
                            label-cols-md="4" 
                            label-size="sm" 
                            label="{{ __('Confirm Password') }}" 
                            label-for="password-confirm"
                            label-align-sm="right">

                            <b-col md="10">
                                <b-input id="password-confirm" 
                                    type="password-confirm" 
                                    name="password_confirmation" 
                                    required autocomplete="off">
                                </b-input>

                                @error('password-confirm')
                                    <b-form-invalid-feedback id="input-live-feedback">
                                        <strong>{{ $message }}</strong>
                                    </b-form-invalid-feedback>
                                @enderror
                            </b-col>
                        </b-form-group>
                        
                        <b-form-group class="mb-0">
                            <b-col md="6" offset-md="4">
                                <b-button type="submit" variant="primary">
                                    {{ __('Register') }}
                                </b-button>
                            </div>
                        </b-form-group>
                    </b-form>
                </b-card-text>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
