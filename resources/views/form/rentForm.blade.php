@extends('layouts.default')
@section('content')

<form action="/print_rent" method="post" novalidate>
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('text.date') }}</label>
                <input type="text" name="date" id="date" onkeydown="ConvertToKritidev010('date')" value="{{ old('date') }}" class="form-control hindiFont {{ $errors->first('date') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('date') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.firstPartyName') }}</label>
                <input type="text" name="firstPartyName" id="firstPartyName" onkeydown="ConvertToKritidev010('firstPartyName')" value="{{ old('firstPartyName') }}" class="form-control hindiFont {{ $errors->first('firstPartyName') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('firstPartyName') }}
                </div>
            </div>

            <div class="form-group">
                <label>{{ __('text.firstPartyFname') }}</label>
                <input type="text" name="firstPartyFname" id="firstPartyFname" onkeydown="ConvertToKritidev010('firstPartyFname')" value="{{ old('firstPartyFname') }}" class="form-control hindiFont {{ $errors->first('firstPartyFname') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('firstPartyFname') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.firstPartyAddress') }}</label>
                <input type="text" name="firstPartyAddress" id="firstPartyAddress" onkeydown="ConvertToKritidev010('firstPartyAddress')" value="{{ old('firstPartyAddress') }}" class="form-control hindiFont {{ $errors->first('firstPartyAddress') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('firstPartyAddress') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.rentDate') }}</label>
                <input type="text" name="rentDate" id="rentDate" onkeydown="ConvertToKritidev010('rentDate')" value="{{ old('rentDate') }}" class="form-control hindiFont {{ $errors->first('rentDate') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('rentDate') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.rentDuration') }}</label>
                <input type="text" name="rentDuration" id="rentDuration" onkeydown="ConvertToKritidev010('rentDuration')" value="{{ old('rentDuration') }}" class="form-control hindiFont {{ $errors->first('rentDuration') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('rentDuration') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.rentPayDate') }}</label>
                <input type="text" name="rentPayDate" id="rentPayDate" onkeydown="ConvertToKritidev010('rentPayDate')" value="{{ old('rentPayDate') }}" class="form-control hindiFont {{ $errors->first('rentPayDate') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('rentPayDate') }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('text.secondPartyName') }}</label>
                <input type="text" name="secondPartyName" id="secondPartyName" onkeydown="ConvertToKritidev010('secondPartyName')" value="{{ old('secondPartyName') }}" class="form-control hindiFont {{ $errors->first('secondPartyName') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('secondPartyName') }}
                </div>
            </div>

            <div class="form-group">
                <label>{{ __('text.secondPartyFname') }}</label>
                <input type="text" name="secondPartyFname" id="secondPartyFname" onkeydown="ConvertToKritidev010('secondPartyFname')" value="{{ old('secondPartyFname') }}" class="form-control hindiFont {{ $errors->first('secondPartyFname') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('secondPartyFname') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.secondPartyAddress') }}</label>
                <textarea type="textarea" name="secondPartyAddress" id="secondPartyAddress" onkeydown="ConvertToKritidev010('secondPartyAddress')" value="{{ old('secondPartyAddress') }}" class="form-control hindiFont {{ $errors->first('secondPartyAddress') ? 'is-invalid' : '' }}">{{ old('secondPartyAddress') }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('secondPartyAddress') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.rentAddress') }}</label>
                <textarea type="textarea" name="rentAddress" id="rentAddress" onkeydown="ConvertToKritidev010('rentAddress')" value="{{ old('rentAddress') }}" class="form-control hindiFont {{ $errors->first('rentAddress') ? 'is-invalid' : '' }}">{{ old('rentAddress') }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('rentAddress') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.rentNumber') }}</label>
                <input type="text" name="rentNumber" id="rentNumber" onkeydown="ConvertToKritidev010('rentNumber')" value="{{ old('rentNumber') }}" class="form-control hindiFont {{ $errors->first('rentNumber') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('rentNumber') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.rentCharacter') }}</label>
                <input type="text" name="rentCharacter" id="rentCharacter" onkeydown="ConvertToKritidev010('rentCharacter')" value="{{ old('rentCharacter') }}" class="form-control hindiFont {{ $errors->first('rentCharacter') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('rentCharacter') }}
                </div>
            </div>

        </div>
    </div>



    <button type="submit" class="btn btn-primary">{{ __('text.submit') }}</button>
</form>

@stop