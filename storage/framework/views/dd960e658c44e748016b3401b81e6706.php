<?php $__env->startSection('content'); ?>

<section>
    <form action="<?php echo e(route('index2')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name">お名前</label>
            <p><?php echo e(old('name')); ?></p>
            <input  type="hidden" name="name" value="<?php echo e($contact['name']); ?>">
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <p><?php echo e(old('email')); ?></p>
            <input  type="hidden" name="email" value="<?php echo e($contact['email']); ?>">
        </div>

        <div>
            <label for="phone">電話番号</label>
            <p><?php echo e(old('phone')); ?></p>
            <input  type="hidden" name="phone" value="<?php echo e($contact['phone']); ?>">
        </div>

        <div>
            <label for="body">お問い合わせ内容</label>
            <p><?php echo e(old('body')); ?></p>
            <input  type="hidden" name="body" value="<?php echo e($contact['body']); ?>">
        </div>

        <div>
            <button type="submit" name="submitBtnVal" value="back"><a href="http://localhost/index.php/">戻る</a></button>
            <button type="submit" name="submitBtnVal" value="complete">送信</button>
        </div>
    </form>
</section>
<?php /**PATH /Applications/MAMP/htdocs/all-atami/ikura/resources/views/contacts/confirm.blade.php ENDPATH**/ ?>