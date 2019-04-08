<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.includes.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    You can edit and delete yours words in this section.
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Vocab
                            </th>
                            <th>
                                Hiragana
                            </th>
                            <th>
                                kanji
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                trash
                            </th>
                        </thead>
                        <tbody>
                            <?php if($words->count() > 0): ?>
                                <?php $__currentLoopData = $words; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($word->title); ?></td>
                                        <td><?php echo e($word->hiragana); ?></td>
                                        <td><?php echo e($word->kanji); ?></td>
                                        <td><a href="<?php echo e(route('word.edit', ['id' => $word->id])); ?>" class="btn btn-xs btn-info">Edit</a></td>
                                        <td><a href="#" class="btn btn-xs btn-danger">Trash</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <th colspan = 5 class="text-center">No Words</th>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                </div>    
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>