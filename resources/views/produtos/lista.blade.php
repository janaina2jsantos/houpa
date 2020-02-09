@extends('layouts.main')

@section('title', 'Houpa | Teste Janaina')

@section('content')

	<style type="text/css">
		
		.page-content {
			padding: calc(70px + 24px) calc(24px / 2) 60px calc(24px / 2);
        }
        td.action {
          display: flex;
          justify-content: center;
          padding: 12px 0;

        }
        .com-margin {
          margin-right: 4px;
        }
        span.flag {
            min-width: 70px;
            padding: 7px;
        }
        a.bt-novo {
            float: right;
        }
        div.clear {
            clear: both;
        }

        @media only screen and (max-width: 990px) {
          .page-content {
            padding-left: 15px!important;
          }
        }

	</style>
        
	  	<div class="main-content">
			<div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Lista de Produtos</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('produtos.index') }}">Produtos</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('produtos.create') }}" class="btn btn-success btn-sm bt-novo">+ Novo</a>
                    <div class="clear"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                @if(Session::has('success'))
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 alert alert-success alert-dismissible fade show" role="alert" id="close">
                                            <strong>
                                                <i class="fas fa-check-circle "></i>
                                            </strong>{{ Session::get('success') }}
                                            <button type="button" class="close" data-dimiss="alert" aria-label="Close" onclick="fecharAlert();"><span aria-hidden="true" ><strong>&times;</strong></span></button>
                                        </div>
                                    </div>
                                @endif
                                <div class="card-body">                                        
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Produto</th>
                                                    <th>Categoria</th>
                                                    <th>Preço</th>
                                                    <th>Status</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if(isset($count) && $count == 0)
                                                    <tr>
                                                        <td colspan="5">
                                                          <h5>Não foi encontrado nenhum registo.</h5>
                                                        </td>
                                                      </tr>
                                                @else
                                                    @foreach($produtos as $prod)
                                                        <tr>
                                                            <td>{{ $prod->id }}</td>
                                                            <td>{{substr(strip_tags(ucfirst($prod->nome)), 0, 60) . '...' }}</td>
                                                            <td>{{ ucfirst($prod->categoria->nome) }}</td>
                                                            <td>R$ {{ number_format($prod->preco, 2, ',', '.') }}</td>
                                                            <td>
                                                                @if($prod->estoque === 'sim')
                                                                    <span class="flag badge badge-success">Em estoque</span>
                                                                @else
                                                                    <span class="flag badge badge-danger">Em falta</span>
                                                                @endif
                                                            </td>
                                                            
                                                            <td class="action">
                                                                <a href="{{ route('produtos.edit', $prod->id) }}" class="btn btn-outline-success btn-sm com-margin">Editar</a>
                                                                <form action="{{route('produtos.destroy', ['id' => $prod->id])}}" method="POST" id="form-delete-posts">
                                                                  @csrf
                                                                  @method('DELETE') 
                                                                  <input type="submit" class="btn btn-outline-danger btn-sm com-margin" name="" value="Deletar" onclick="return confirmDelete();"/>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
             </div>
             <!-- End page-content -->
		</div>
        <!-- End main-content -->

@endsection

@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">

        // Funçao para confirmar deletar 
        function confirmDelete() {

            if (confirm("Deseja realmente deletar esse Produto?")) {
                return true;
            } else {
                return false;
            }
        }

        // Funçao para fechar div de msg de alerta
        function fecharAlert() {
            document.getElementById("close").style.display = "none";
        }

    </script>

@stop







