@extends('layouts.master_layout')

@section('main-heading')
    <h1
        class="p-4  text-center text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
        Create A Gate Pass
    </h1>
@endsection





@section('content')
@livewire('gate-pass.gate-pass')
    <!--
        <div class="flex flex-col md:flex-row p-2 md:space-x-3 w-full">
            <div class="flex-auto">
                <x-forms.input label="Serial" placeholder="Serial" name="serial" model="{!! $pass ?? null !!}" />
            </div>
            <div class="flex-auto">
                <x-forms.input label="Date" placeholder="Date" name="gate_pass_date" model="{!! $pass ?? null !!}" />
            </div>
        </div>
    -->








@endsection

@section('secondary-content')


@endsection
@section('jquery')

@endsection
