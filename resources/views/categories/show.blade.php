@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ $categorie->name }}  <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('categories.show_fields')
                    <h2 class="display-3 w-100 text-center">Courses</h2>
                    @include('courses.table')

                </div>
            </div>

        </div>
    </div>
@endsection
