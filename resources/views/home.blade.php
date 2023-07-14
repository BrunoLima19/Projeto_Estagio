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

                    <p>
                        Olá <Strong> {{Auth::user()->name}} </Strong>
                    </p>

                    <form action="{{ route('home')}}" method="get">
                        <input type="text" name = "search" placeholder="Pesquisar Usuário">
                        <button>Pesquisar</button>
                    </form>

                    <p></p>

                    <Strong> 
                        USUÁRIOS CADASTRADOS: 
                    </Strong>

                    <p>
                        @foreach ($users as $user)
                            @if ($user->id != Auth::user()->id)
                               {{ $user->name}} 

                               <style>
                                    .form-inline {
                                        display: inline-block;
                                        margin-right: 10px; /* Ajuste o espaçamento entre os formulários conforme necessário */
                                    }
                                </style>
                                
                                <form class="form-inline" action="{{ route('delete', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf 
                                    <button type="submit">
                                        Deletar 
                                    </button>
                                </form>
                                
                                <form class="form-inline" action="{{ route('update', $user->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf 
                                    <!-- Campos do formulário para editar os dados do usuário -->
                                    <input type="email" name="email" value="{{ $user->email }}">
                                    <input type="text" name="name" value="{{ $user->name }}">
                                    <!-- Botão de envio do formulário -->
                                    <button type="submit">
                                        Editar
                                    </button>
                                </form><br>
                            @endif
                        @endforeach
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
