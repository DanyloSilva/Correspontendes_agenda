@extends("app")
<!-- Desenvolvido por Danylo silva  -->

@section("titulo", "Editar contato")
<!-- Desenvolvido por Danylo silva  -->

@section("conteudo")

    <div class="row my-row">
        <form style="float: right;" action="/contato/delete" method="POST" onsubmit="return confirm('Realmente deseja excluir ?');">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{$contato->id}}">
            <button type="submit" class="btn btn-lg btn-danger" id="btn-submit"><i class="fas fa-trash-alt"></i>
                Excluir Contato
            </button>
        </form>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fas fa-user-edit"></i> Editar Contato</h3>
            </div>
            <div class="panel-body">
                @if(session('msg') || session('msgError'))
                    <div class="alert alert-{{ session('msg') ? "success" : "danger" }} alert-dismissible fade in"
                         role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ session('msg') ? session('msg') : session('msgError') }}
                    </div>
                @endif

                <form action="/contato/update" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{$contato->id}}">

                    <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                        <label class="control-label">Nome <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nome"
                               value="{{ old('nome') ? old('nome') : $contato->nome }}">
                        <span class="help-block">{{ $errors->first('nome') }}</span>
                    </div>




                    <div class="form-group {{ $errors->has('fantasia') ? 'has-error' : ''}}">
                        <label class="control-label">Fantasia<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="fantasia"
                               value="{{ old('fantasia') ? old('fantasia') : $contato->fantasia }}">
                        <span class="help-block">{{ $errors->first('fantasia') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="telefone"
                               value="{{ old('telefone') ? old('telefone') : $contato->telefone }}">
                        <span class="help-block">{{ $errors->first('telefone') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label class="control-label">E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email"
                               value="{{ old('email') ? old('email') : $contato->email }}">
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    </div>
                    <div id="div-cep" class="form-group div-endereco {{ $errors->has('cep') ? 'has-error' : ''}}">
                        <label class="control-label">Cep <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cep" name="cep"
                               value="{{ old('cep') ? old('cep') : $contato->cep }}">
                        <span class="help-block msg-endereco" id="msg-cep">{{ $errors->first('cep') }}</span>
                    </div>
                    <div class="form-group div-endereco {{ $errors->has('logradouro') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Rua
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="rua" name="logradouro"
                               value="{{ old('logradouro') ? old('logradouro') : $contato->logradouro }}">
                        <span class="help-block msg-endereco">{{ $errors->first('logradouro') }}</span>
                    </div>
                    <div class="form-group div-endereco">
                        <label class="control-label">
                            Complemento
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="complemento" name="complemento"
                               value="{{ old('complemento') ? old('complemento') : $contato->complemento }}">
                        <span class="help-block msg-endereco">{{ $errors->first('complemento') }}</span>
                    </div>
                    <div class="form-group div-endereco {{ $errors->has('bairro') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Bairro
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="bairro" name="bairro"
                               value="{{ old('bairro') ? old('bairro') : $contato->bairro }}">
                        <span class="help-block msg-endereco">{{ $errors->first('bairro') }}</span>
                    </div>
                    <div class="form-group div-endereco {{ $errors->has('localidade') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Cidade
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="cidade" name="localidade"
                               value="{{ old('localidade') ? old('localidade') : $contato->localidade }}">
                        <span class="help-block msg-endereco">{{ $errors->first('localidade') }}</span>
                    </div>
                    <div class="form-group div-endereco {{ $errors->has('uf') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Estado
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="uf" name="uf"
                               value="{{ old('uf') ? old('uf') : $contato->uf }}">
                        <span class="help-block msg-endereco">{{ $errors->first('uf') }}</span>
                    </div>




                    <div class="form-group {{ $errors->has('telefone1') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 1 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone1"
                               value="{{ old('telefone1') ? old('telefone1') : $contato->telefone1 }}">
                        <span class="help-block">{{ $errors->first('telefone1') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone2') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 2 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone2"
                               value="{{ old('telefone2') ? old('telefone2') : $contato->telefone2 }}">
                        <span class="help-block">{{ $errors->first('telefone2') }}</span>
                    </div>


                    <div class="form-group {{ $errors->has('telefone3') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 3 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone3"
                               value="{{ old('telefone3') ? old('telefone3') : $contato->telefone3 }}">
                        <span class="help-block">{{ $errors->first('telefone1') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone4') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 4 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone4"
                               value="{{ old('telefone4') ? old('telefone4') : $contato->telefone4 }}">
                        <span class="help-block">{{ $errors->first('telefone4') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone5') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 5 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone5"
                               value="{{ old('telefone5') ? old('telefone5') : $contato->telefone5 }}">
                        <span class="help-block">{{ $errors->first('telefone1') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone6') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 6 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone6"
                               value="{{ old('telefone6') ? old('telefone6') : $contato->telefone6 }}">
                        <span class="help-block">{{ $errors->first('telefone6') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone7') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 7 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone7"
                               value="{{ old('telefone7') ? old('telefone7') : $contato->telefone7 }}">
                        <span class="help-block">{{ $errors->first('telefone7') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone8') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 8 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone8"
                               value="{{ old('telefone8') ? old('telefone8') : $contato->telefone8 }}">
                        <span class="help-block">{{ $errors->first('telefone8') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('telefone9') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone - 9 <span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="telefone9"
                               value="{{ old('telefone9') ? old('telefone9') : $contato->telefone9 }}">
                        <span class="help-block">{{ $errors->first('telefone9') }}</span>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success" id="btn-submit"><i class="fas fa-edit"></i> Editar
                    </button>



                </form>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script src="{{asset('js/App/ViaCep.js')}}" type="text/javascript"></script>
@endsection
<!-- Desenvolvido por Danylo silva  -->
