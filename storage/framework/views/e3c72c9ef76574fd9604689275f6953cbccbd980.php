<?php $__env->startSection('content'); ?>
    
   <?php echo $__env->make('admin.includes.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="card">
        <div class="card-header">
            Edit Word: <?php echo e(($word->title)); ?>

        </div>
        <div class="card-body">
            <form action="<?php echo e(route('word.update', ['id' => $word->id])); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="title">Vocabulary</label>
                    <input type="text" name="title" class="form-control" value="<?php echo e($word->title); ?>">
                </div>
                <div class="form-group">
                    <label for="title">Kanji</label>
                    <input type="text" name="kanji" class="form-control" value="<?php echo e($word->kanji); ?>">
                </div>
                <div class="form-group">
                    <label for="title">Hiragana</label>
                    <input type="text" name="hiragana" class="form-control" value="<?php echo e($word->hiragana); ?>">
                </div>
                <div class="form-group">
                    <label for="title">Note</label>
                    <textarea name="note" id="note" cols="5" rows="5" class="form-control"><?php echo e($word->note); ?></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Vocab
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>