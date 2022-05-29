@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Membros</h1>
                    </div>
                    {{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Cultos</a></li>
                            <li class="breadcrumb-item active">Widgets</li>
                        </ol>
                    </div> --}}
                </div>
            </div>
        </section>

        <table class="table">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membros as $membro)
                <tr>
                    {{-- <th scope="row">{{$membro->id}}</th> --}}
                    <td id="nome-{{$membro->id}}"
                        style="{{$membro->ativo == 0 ? 'text-decoration:line-through' : ''}}">
                            {{$membro->nome}}
                        </td>
                    <td>
                        <span class="badge rounded-pill bg-{{$membro->sexo == 'M'?'success':'danger'}}">
                            {{$membro->sexo == 'M'?'masculino':'feminino'}}
                         </span>
                    <td>
                        <span class="badge rounded-pill bg-{{$membro->ativo == 1?'success':'danger'}}"
                              id="ativo-{{$membro->id}}">
                            {{$membro->ativo == 1?'membro':'saiu da igreja'}}
                        </span>
                    </td>
                    <td>
                        <button type="button"
                                class="btn btn-outline-{{$membro->ativo == 1 ? 'danger' : 'success'}} btn-sm"
                                onclick="alteraStatus({{$membro->id}})"
                                id="acao-{{$membro->id}}">
                                    {{$membro->ativo == 1 ? 'Desativar' : 'Ativar'}} membro
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        function alteraStatus(id){
            const url = "{!! URL::to('/membro/alterastatus/') !!}"+'/'+id;

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data){
                    if(data == 1){
                        $('#acao-'+id).html('Desativar membro');
                        $('#acao-'+id).removeClass('btn-outline-success');
                        $('#acao-'+id).addClass('btn-outline-danger');

                        $('#ativo-'+id).html('membro');
                        $('#ativo-'+id).removeClass('bg-danger');
                        $('#ativo-'+id).addClass('bg-success');

                        $('#nome-'+id).css('text-decoration','none');
                    }else{
                        $('#acao-'+id).html('Ativar membro');
                        $('#acao-'+id).removeClass('btn-outline-danger');
                        $('#acao-'+id).addClass('btn-outline-success');

                        $('#ativo-'+id).html('saiu da igreja');
                        $('#ativo-'+id).removeClass('bg-success');
                        $('#ativo-'+id).addClass('bg-danger');

                        $('#nome-'+id).css('text-decoration','line-through');

                    }
                },
                error: function(){
                    alert('Erro no Ajax !');
                }
            });
        }
    </script>
@endsection
