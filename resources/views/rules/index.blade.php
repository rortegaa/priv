@extends('layouts.app')

@section('title', 'Reglamento')

@section('content')
<div id="appDelete">

    <div class="row">

        @include('rules.menu-comp')

        <div class="col-md-10">

            <div class="row justify-content-md-center">
                <div class="col-md-10">

                    @include('components.alert')

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Reglamento Residente</h5>
                                    <table class="table table-hover table-bordered table-sm">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($rules_resident as $rule_resident)
                                            <tr>
                                                <td style="width: 75%">{{ $rule_resident->rule }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('rules.edit', ['district' => auth()->user()->district_id, 'rule' => $rule_resident->id]) }}">Update</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        v-on:click="setDeleteForm('{{ route('rules.destroy', ['id' => $rule_resident->id]) }}')">delete</button>
                                                </td>
                                            </tr>
                                            @empty

                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Reglamento Visitante</h5>
                                    <table class="table table-hover table-bordered table-sm">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($rules_visitor as $rule_visitor)
                                            <tr>
                                                <td style="width: 75%">{{ $rule_visitor->rule }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('rules.edit', ['district' => auth()->user()->district_id, 'rule' => $rule_visitor->id]) }}">Update</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        v-on:click="setDeleteForm('{{ route('rules.destroy', ['id' => $rule_visitor->id]) }}')">delete</button>
                                                </td>
                                            </tr>
                                            @empty

                                            <tr>
                                                <td class="text-center" colspan="3">No se encontraron registros</td>
                                            </tr>

                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    @include('components.form-delete')

</div>
@endsection

@section('scripts')

<script src="{{ mix('js/delete.js') }}"></script>

@endsection