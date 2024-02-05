@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in! ok') }}
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt beatae dolorum
                            reprehenderit, qui architecto vitae atque omnis saepe autem, dolor neque magni facilis hic
                            excepturi sapiente voluptates quaerat tempora eius consequuntur iste! Et ex eaque, neque illo
                            iste sit. Sapiente laudantium corrupti quae reprehenderit delectus. Eligendi dolorum incidunt
                            excepturi vitae dignissimos expedita mollitia exercitationem, officia volu
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>ptatum nemo earum
                        odio, at quod suscipit facere natus. Aliquid enim praesentium necessitatibus recusandae nulla
                        nam, reprehenderit dignissimos suscipit aut totam, quisquam provident quia! Quasi sequi qui
                        quam, quia similique, perferendis atque facere hic, quaerat ducimus earum minus tenetur natus
                        corporis quisquam enim aliquid!</p>

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
