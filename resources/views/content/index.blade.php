@extends('auth.passwords.email')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6>Section 1</h6>

                <div class="row">

                    @foreach( $contents['section_1'] as $content )
                        @include('include.section1', ['loop' => $loop, 'content' => $content])
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <h6>Section 2</h6>

                <div class="row">

                    @foreach( $contents['section_2'] as $content )
                        @include('include.section2', ['loop' => $loop, 'content' => $content])
{{--                        {{ $loop->iteration.' remaining :' .$loop->remaining. ' mod: '. $loop->index%3 }} <br>--}}
                    @endforeach

                </div>





            </div>
        </div>
    </div>
@endsection