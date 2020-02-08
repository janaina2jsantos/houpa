@extends('layouts.main')

@section('title', 'Asteroide | Teste Janaina')

@section('content')

	<style type="text/css">
		
		.page-content {
			padding-left: 263px;
		}

	</style>

	  	<div id="content">
			<div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Editar Cliente: {{ $cliente->nome }} {{ $cliente->sobrenome }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="/">Clientes</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Editar cliente</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

					<div class="row">
						<div class="col-lg-12">
						   <div class="card">
						   		<div class="card-body">
				                   <form class="needs-validation" action="{{ route('clientes.update', $cliente->id) }}" method="POST">
										
										@csrf
                    					{{method_field('PATCH')}}

				                        <div class="row">
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustom01">Nome</label>
				                                <input type="text" class="form-control" id="validationCustom01" required name="nome" value="{{ $cliente->nome ?? old('nome') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustom02">Sobrenome</label>
				                                <input type="text" class="form-control" id="validationCustom02" required name="sobrenome" value="{{ $cliente->sobrenome ?? old('sobrenome') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label>Data de Nascimento</label>
				                                <input type="date" class="form-control" id="validationCustom05" required name="nascimento" value="{{ $cliente->nascimento ?? old('nascimento') }}"/>
				                            </div>
				                        </div>

				                        <div class="row">
				                            <div class="col-md-6 mb-3">
				                                <label for="validationCustom03">Endereço</label>
				                                <input type="text" class="form-control" id="validationCustom04" required name="endereco" value="{{ $cliente->endereco ?? old('endereco') }}" />
				                            </div>
				                            <div class="col-md-6 mb-3">
				                                <label for="validationCustomUsername">E-mail</label>
				                               	<input type="text" class="form-control" id="validationCustom03" required name="email" value="{{ $cliente->email ?? old('email') }}" />
				                            </div>
				                        </div>

				                         <div class="row">
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustom03">Telefone 1</label>
				                                <input type="tel" class="form-control" id="validationCustom05" name="telefone01" value="{{ $cliente->telefone01 ?? old('telefone01') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustomUsername">Telefone 2</label>
				                               	<input type="tel" class="form-control" id="validationCustom06" name="telefone02" value="{{ $cliente->telefone02 ?? old('telefone02') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustomUsername">Telefone 3</label>
				                               	<input type="tel" class="form-control" id="validationCustom07" name="telefone03" value="{{ $cliente->telefone03 ?? old('telefone03') }}" />
				                            </div>
				                        </div>

				                        <div class="row">
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustom03">Telefone 4</label>
				                                <input type="tel" class="form-control" id="validationCustom08" name="telefone04" value="{{ $cliente->telefone04 ?? old('telefone04') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustomUsername">Telefone 5</label>
				                               	<input type="tel" class="form-control" id="validationCustom09" name="telefone05" value="{{ $cliente->telefone05 ?? old('telefone05') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label for="validationCustomUsername">Telefone 6</label>
				                               	<input type="tel" class="form-control" id="validationCustom10" name="telefone06" value="{{ $cliente->telefone06 ?? old('telefone06') }}" />
				                            </div>
				                        </div>

				                        <button class="btn btn-primary" type="submit">Salvar Alterações</button>
				                   </form>
			                   </div>
		                   </div>
		                </div>
                   </div>
                </div>
                <!-- container-fluid -->
             </div>
             <!-- End Page-content -->
		</div>
		<!-- End content-->
		  
@endsection







