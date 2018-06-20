@extends('layouts.app')
@section('content')

    <div class="container">
    <form method="POST">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name"  >{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="postaladdress1"  >{{ __('Postal Address 1') }}</label>
            <input id="postaladdress1" type="text" class="form-control{{ $errors->has('postaladdress1') ? ' is-invalid' : '' }}" name="postaladdress1" value="{{ old('postaladdress1') }}"/>

            @if ($errors->has('postaladdress1'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postaladdress1') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="postaladdress2"  >{{ __('Postal Address 2') }}</label>
            <input id="postaladdress2" type="text" class="form-control{{ $errors->has('postaladdress2') ? ' is-invalid' : '' }}" name="postaladdress2" value="{{ old('postaladdress2') }}"/>

            @if ($errors->has('postaladdress2'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postaladdress2') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="postaladdress3"  >{{ __('Postal Address 3') }}</label>
            <input id="postaladdress3" type="text" class="form-control{{ $errors->has('postaladdress3') ? ' is-invalid' : '' }}" name="postaladdress3" value="{{ old('postaladdress3') }}"/>

            @if ($errors->has('postaladdress3'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postaladdress3') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="postalcountry"  >{{ __('Postal Country') }}</label>
            <input id="postalcountry" type="text" class="form-control{{ $errors->has('postalcountry') ? ' is-invalid' : '' }}" name="postalcountry" value="{{ old('postalcountry') }}"/>

            @if ($errors->has('postalcountry'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postalcountry') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="address1"  >{{ __('Address 1') }}</label>
            <input id="address1" type="text" class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" name="address1" value="{{ old('address1') }}"/>

            @if ($errors->has('address1'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="address2"  >{{ __('Address 2') }}</label>
            <input id="address2" type="text" class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ old('address2') }}"/>

            @if ($errors->has('address2'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
            @endif
        </div>



        <div class="form-group">
            <label for="address3"  >{{ __('Address 3') }}</label>
            <input id="address3" type="text" class="form-control{{ $errors->has('address3') ? ' is-invalid' : '' }}" name="address3" value="{{ old('address3') }}"/>

            @if ($errors->has('address3'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address3') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="postcode"  >{{ __('Postcode') }}</label>
            <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{ old('postcode') }}"/>

            @if ($errors->has('postcode'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="country"  >{{ __('Country') }}</label>
            <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}"/>

            @if ($errors->has('country'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="telephone1"  >{{ __('Telephone 1') }}</label>
            <input id="telephone1" type="text" class="form-control{{ $errors->has('telephone1') ? ' is-invalid' : '' }}" name="telephone1" value="{{ old('telephone1') }}"/>

            @if ($errors->has('telephone1'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="telephone2"  >{{ __('Telephone 2') }}</label>
            <input id="telephone2" type="text" class="form-control{{ $errors->has('telephone2') ? ' is-invalid' : '' }}" name="telephone2" value="{{ old('telephone2') }}"/>

            @if ($errors->has('telephone2'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telephone2') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="email"  >{{ __('Email Address') }}</label>
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"/>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="primarycontact"  >{{ __('Primary Contact') }}</label>
            <input id="primarycontact" type="text" class="form-control{{ $errors->has('primarycontact') ? ' is-invalid' : '' }}" name="primarycontact" value="{{ old('primarycontact') }}"/>

            @if ($errors->has('primarycontact'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('primarycontact') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="accountscontact"  >{{ __('Accounts Contact') }}</label>
            <input id="accountscontact" type="text" class="form-control{{ $errors->has('accountscontact') ? ' is-invalid' : '' }}" name="accountscontact" value="{{ old('accountscontact') }}"/>

            @if ($errors->has('accountscontact'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('accountscontact') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="subject"  >{{ __('Subject') }}</label>
            <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}"/>

            @if ($errors->has('subject'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
            @endif
        </div>



        <div class="form-group">
            <label for="template"  >{{ __('Template') }}</label>

            <textarea id="template"  class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="template">{{ old('template') }}</textarea>
            @if ($errors->has('template'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('template') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="template"  >{{ __('ACSID') }}</label>

            <input id="acsid" type="text" class="form-control{{ $errors->has('acsid') ? ' is-invalid' : '' }}" name="acsid" value="{{ old('acsid') }}"/>
        @if ($errors->has('acsid'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('acsid') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="shared_secret"  >{{ __('Shared Secret') }}</label>

            <input id="shared_secret" type="text" class="form-control{{ $errors->has('shared_secret') ? ' is-invalid' : '' }}" name="shared_secret" value="{{ old('shared_secret') }}"/>
            @if ($errors->has('shared_secret'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('shared_secret') }}</strong>
                                    </span>
            @endif
        </div>



        <div class="form-group">
            <button class="btn btn-primary">Create Organisation</button>
        </div>

    </form>
    </div>

@endsection