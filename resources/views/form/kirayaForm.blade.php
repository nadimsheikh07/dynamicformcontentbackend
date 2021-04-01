@extends('layouts.default')
@section('content')

<form action="/print_kiraya" method="post" novalidate>
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('text.date') }}</label>
                <input type="text" name="date" value="{{ old('date') }}" class="form-control hindiFont {{ $errors->first('date') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('date') }}
                </div>
            </div>
            <div class="form-group">
                <label><label>{{ __('text.firstPartyName') }}</label>
                    <input type="text" name="firstPartyName" value="{{ old('firstPartyName') }}" class="form-control hindiFont {{ $errors->first('firstPartyName') ? 'is-invalid' : '' }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('firstPartyName') }}
                    </div>
            </div>

            <div class="form-group">
                <label>{{ __('text.firstPartyFname') }}</label>
                <input type="text" name="firstPartyFname" value="{{ old('firstPartyFname') }}" class="form-control hindiFont {{ $errors->first('firstPartyFname') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('firstPartyFname') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.firstPartyAddress') }}</label>
                <input type="text" name="firstPartyAddress" value="{{ old('firstPartyAddress') }}" class="form-control hindiFont {{ $errors->first('firstPartyAddress') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('firstPartyAddress') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.kirayaDate') }}</label>
                <input type="text" name="kirayaDate" value="{{ old('kirayaDate') }}" class="form-control hindiFont {{ $errors->first('kirayaDate') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('kirayaDate') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.kirayaDuration') }}</label>
                <input type="text" name="kirayaDuration" value="{{ old('kirayaDuration') }}" class="form-control hindiFont {{ $errors->first('kirayaDuration') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('kirayaDuration') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.kirayaPayDate') }}</label>
                <input type="text" name="kirayaPayDate" value="{{ old('kirayaPayDate') }}" class="form-control hindiFont {{ $errors->first('kirayaPayDate') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('kirayaPayDate') }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('text.secondPartyName') }}</label>
                <input type="text" name="secondPartyName" value="{{ old('secondPartyName') }}" class="form-control hindiFont {{ $errors->first('secondPartyName') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('secondPartyName') }}
                </div>
            </div>

            <div class="form-group">
                <label>{{ __('text.secondPartyFname') }}</label>
                <input type="text" name="secondPartyFname" value="{{ old('secondPartyFname') }}" class="form-control hindiFont {{ $errors->first('secondPartyFname') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('secondPartyFname') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.secondPartyAddress') }}</label>
                <textarea type="textarea" name="secondPartyAddress" value="{{ old('secondPartyAddress') }}" class="form-control hindiFont {{ $errors->first('secondPartyAddress') ? 'is-invalid' : '' }}">{{ old('secondPartyAddress') }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('secondPartyAddress') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.kirayaAddress') }}</label>
                <textarea type="textarea" name="kirayaAddress" value="{{ old('kirayaAddress') }}" class="form-control hindiFont {{ $errors->first('kirayaAddress') ? 'is-invalid' : '' }}">{{ old('kirayaAddress') }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('kirayaAddress') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.kirayaNumber') }}</label>
                <input type="text" name="kirayaNumber" value="{{ old('kirayaNumber') }}" class="form-control hindiFont {{ $errors->first('kirayaNumber') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('kirayaNumber') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.kirayaCharacter') }}</label>
                <input type="text" name="kirayaCharacter" value="{{ old('kirayaCharacter') }}" class="form-control hindiFont {{ $errors->first('kirayaCharacter') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('kirayaCharacter') }}
                </div>
            </div>

        </div>
    </div>



    <button type="submit" class="btn btn-primary">{{ __('text.submit') }}</button>
</form>

@stop