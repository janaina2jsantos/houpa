@extends('layouts.main')

@section('title', 'Asteroide | Teste Janaina')

@section('content')

	<style type="text/css">
		
		.page-content {
			padding-left: 263px;
		}
        td.action {
            padding: 12px 0;
        }

        @media only screen and (max-width: 990px) {
          .page-content {
            padding-left: 15px!important;
          }
        }

	</style>
        
	  	<div id="content">
			<div class="page-content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Detalhes de {{ $cliente->nome }} {{ $cliente->sobrenome }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="/">Clientes</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Informações</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">                                        
                                    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
                                    <p><strong>Sobrenome:</strong> {{ $cliente->sobrenome }}</p>
                                    <p><strong>Data de nascimento:</strong> {{ $cliente->nascimento }}</p>
                                    <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
                                    <p><strong>E-mail:</strong> {{ $cliente->email }}</p>
                                    <p><strong>Telefone 1:</strong> {{ $cliente->telefone01 ?? 'Não Informado' }}</p>
                                    <p><strong>Telefone 2:</strong> {{ $cliente->telefone02 ?? 'Não Informado' }}</p>
                                    <p><strong>Telefone 3:</strong> {{ $cliente->telefone03 ?? 'Não Informado' }}</p>
                                    <p><strong>Telefone 4:</strong> {{ $cliente->telefone04 ?? 'Não Informado' }}</p>
                                    <p><strong>Telefone 5:</strong> {{ $cliente->telefone05 ?? 'Não Informado' }}</p>
                                    <p><strong>Telefone 6:</strong> {{ $cliente->telefone06 ?? 'Não Informado' }}</p>

                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-success btn-sm com-margin">Editar</a>
                                    <a href="/" class="btn btn-outline-danger btn-sm com-margin">Voltar</a>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
             </div>
             <!-- End Page-content -->
		</div>
		  
@endsection









