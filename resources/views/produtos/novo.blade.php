@extends('layouts.main')

@section('title', 'Houpa | Teste Janaina')

@section('content')

	<style type="text/css">
		
		.page-content {
			padding: calc(70px + 24px) calc(24px / 2) 60px calc(24px / 2);
		}
		.bt-salvar {
			margin-top: 20px;
		}
		.radio-select {
			margin-top: 20px;
		}
		.button-items a {
			margin-bottom: -9px!important;
			margin-left: 3px!important;
		}

	</style>

	  	<div class="main-content">
			<div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Cadastrar Produto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="/">Produtos</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Novo produto</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="row">
						<div class="col-lg-12">
						   <div class="card">
						   		@if($errors->any())
							        <div class="alert alert-danger alert-dismissible fade show mb-0" id="close">
							            <ul>
							                @foreach ($errors->all() as $error)
							                    <li>{{ $error }}</li>
							                @endforeach
							            </ul>
							            <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true" onclick="fecharAlert();"><strong>&times;</strong></span></button>
							         </div>
							       @endif
						   		<div class="card-body">
				                   <form action="{{ route('produtos.store') }}" method="POST">
										@csrf
                    					{{ method_field('POST') }}

				                        <div class="row">
				                            <div class="col-md-4 mb-3">
				                                <label>Produto</label>
				                                <input type="text" class="form-control" placeholder="nome do produto" name="nome" value="{{ old('nome') }}" />
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label>Categoria</label>
				                               	<select class="form-control" name="categoria" id="categoria-wrapper">
										           <option value="" disabled selected>Selecione</option>
										           @foreach($categorias as $categoria)
										              <option value="{{ $categoria->id }}">{{ ucfirst($categoria->nome) }}
										              </option>
										           @endforeach
										        </select>
				                            </div>
				                            <div class="col-md-4 mb-3">
				                                <label>Preço</label>
				                                <input id="input-currency" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false,  'placeholder': '0'" name="preco" value="{{ old('preco') }}" />
				                            </div>

				                            <div class="col-lg-3 radio-select">
                                                <div class="mt-4 mt-lg-0">
                                                    <h5 class="font-size-14 mb-3">Em estoque</h5>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio1" name="estoque" class="custom-control-input" value="sim" checked />
                                                        <label class="custom-control-label" for="customRadio1">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio2" name="estoque" class="custom-control-input" value="nao" />
                                                        <label class="custom-control-label" for="customRadio2">Não</label>
                                                    </div>
                                                </div>
                                            </div>
				                        </div>
				                        <div class="button-items">					              
					                        <button class="btn btn-primary bt-salvar" type="submit">Cadastrar</button>
					                        <a href="{{ route('produtos.index') }}" class="btn btn-light waves-effect">Cancelar</a>
				                        </div>
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

@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">
        // Funçao para fechar div de msg de alerta
        function fecharAlert() {
            document.getElementById("close").style.display = "none";
        }
    </script>

@stop







