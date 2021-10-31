@extends('front')

@section('content')
    <section id="user-contact" class="contact-form">
        <div class="row m-0">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <h3 class="card-header text-center">Contact</h3>
                    <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <form action="{{ route('contact.save') }}" method="POST">
                            @csrf
                            @include('blocks.contact') 
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
