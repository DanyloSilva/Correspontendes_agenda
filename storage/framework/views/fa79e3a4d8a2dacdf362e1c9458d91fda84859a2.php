<?php $__env->startSection("titulo", "Cadastrar contato"); ?>

<?php $__env->startSection("conteudo"); ?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fas fa-user-plus"></i> Cadastrar Contato</h3>
            </div>
            <div class="panel-body">
                <?php if(session('msg') || session('msgError')): ?>
                    <div class="alert alert-<?php echo e(session('msg') ? "success" : "danger"); ?> alert-dismissible fade in"
                         role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php echo e(session('msg') ? session('msg') : session('msgError')); ?>

                    </div>
                <?php endif; ?>
                <form action="/contato" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group <?php echo e($errors->has('nome') ? 'has-error' : ''); ?>">
                        <label class="control-label">Nome <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nome" value="<?php echo e(old('nome')); ?>">
                        <span class="help-block"><?php echo e($errors->first('nome')); ?></span>
                    </div>



                    <div class="form-group <?php echo e($errors->has('fantasia') ? 'has-error' : ''); ?>">
                        <label class="control-label">Fantasia<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="fantasia" value="<?php echo e(old('fantasia')); ?>">
                        <span class="help-block"><?php echo e($errors->first('fantasia')); ?></span>
                    </div>

                    <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                        <label class="control-label">Telefone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                        <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                    </div>


                    <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                        <label class="control-label">E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                        <span class="help-block"><?php echo e($errors->first('email')); ?></span>
                    </div>
                    <div id="div-cep" class="form-group div-endereco <?php echo e($errors->has('cep') ? 'has-error' : ''); ?>">
                        <label class="control-label">Cep <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cep" name="cep" value="<?php echo e(old('cep')); ?>">
                        <span class="help-block msg-endereco" id="msg-cep"><?php echo e($errors->first('cep')); ?></span>
                    </div>
                    <div class="form-group div-endereco <?php echo e($errors->has('logradouro') ? 'has-error' : ''); ?>">
                        <label class="control-label">
                            Rua
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="rua" name="logradouro"
                        value="<?php echo e(old('logradouro')); ?>">
                        <span class="help-block msg-endereco"><?php echo e($errors->first('logradouro')); ?></span>
                    </div>

                    <div class="form-group div-endereco">
                        <label class="control-label">Complemento<span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="complemento" name="complemento"
                               value="<?php echo e(old('complemento')); ?>">
                        <span class="help-block msg-endereco"><?php echo e($errors->first('complemento')); ?></span>
                    </div>

                    <div class="form-group div-endereco <?php echo e($errors->has('bairro') ? 'has-error' : ''); ?>">
                        <label class="control-label">
                            Bairro
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo e(old('bairro')); ?>">
                        <span class="help-block msg-endereco"><?php echo e($errors->first('bairro')); ?></span>
                    </div>
                    <div class="form-group div-endereco <?php echo e($errors->has('localidade') ? 'has-error' : ''); ?>">
                        <label class="control-label">
                            Cidade
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="cidade" name="localidade"
                        value="<?php echo e(old('localidade')); ?>">
                        <span class="help-block msg-endereco"><?php echo e($errors->first('localidade')); ?></span>
                    </div>
                    <div class="form-group div-endereco <?php echo e($errors->has('uf') ? 'has-error' : ''); ?>">
                        <label class="control-label">
                            Estado
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="uf" name="uf" value="<?php echo e(old('uf')); ?>">
                        <span class="help-block msg-endereco"><?php echo e($errors->first('uf')); ?></span>
                    </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 1  <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 2 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 3 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 4 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 5 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 6  <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 7 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 8 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('telefone') ? 'has-error' : ''); ?>">
                                            <label class="control-label">Telefone - 9 <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">
                                            <span class="help-block"><?php echo e($errors->first('telefone')); ?></span>
                                        </div>

                    <button type="submit" class="btn btn-success btn-lg" id="btn-submit">     <i class="fas fa-plus"></i> Cadastrar
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="<?php echo e(asset('js/App/ViaCep.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agenda\laravel-agenda\resources\views/create.blade.php ENDPATH**/ ?>