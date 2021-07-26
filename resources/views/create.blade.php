@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create') }} {{ $options['title'] }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ $options['action'] }}">
                        @csrf

                        @foreach ($fields as $field)
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ $field['label'] }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="{{ $field['type'] }}" class="form-control @error( $field['name'] ) is-invalid @enderror" name="{{ $field['name'] }}" value="{{ old( $field['name'] ) }}" required="{{ $field['required'] }}" autocomplete="{{ $field['name'] }}" autofocus>

                                    @error( $field['name'] )
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}  {{ $options['title'] }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
