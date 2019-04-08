<?php $__env->startSection('content'); ?>
    
   <?php echo $__env->make('admin.includes.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        Add a new word.
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('word.store')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="title">Vocabulary</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Kanji</label>
                                <input type="text" name="kanji" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Hiragana</label>
                                <input type="text" name="hiragana" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Note</label>
                                <textarea name="note" id="note" cols="5" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                        Save Vocab
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>