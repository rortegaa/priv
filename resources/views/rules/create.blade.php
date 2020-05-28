@extends('layouts.app')

@section('title', 'Reglamento')

@section('content')

<div class="row">

    @include('rules.menu-comp')

    <div class="col-md-10">
        <div class="row justify-content-md-center">

            <div class="col-md-8">

                @include('components.alert')
                
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@isset($rule) Actualizar @else Agregar @endisset Regla</h5>
                        <form method="POST" action="@isset($rule){{ route('rules.update', ['district' => auth()->user()->district_id, 'rule' => $rule->id]) }}@else{{ route('rules.store') }}@endisset">
                            @csrf

                            @isset($rule) @method('PUT') @endisset

                            <div class="form-group">
                                <label for="rule">Regla:</label>
                                <input type="text" class="form-control @error('rule') is-invalid @enderror" id=" rule"
                                    name="rule" value="@isset($rule){{$rule->rule}}@else{{ old('rule')}}@endisset">

                                @error('rule')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="role_id">Regla para:</label>
                                <select class="custom-select  @error('role_id') is-invalid @enderror" id="role_id" name="role_id">
                                    <option value="" selected>Seleccione tipo</option>
                                    <option value="6" @isset($rule) @if($rule->role_id == 6){{ __('selected') }}@endif @endisset>Residente</option>
                                    <option value="7" @isset($rule) @if($rule->role_id == 7){{ __('selected') }}@endif @endisset>Visitante</option>
                                </select>

                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary">@isset($rule) Actualizar @else Insertar @endisset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection