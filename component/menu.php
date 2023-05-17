<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="header-menu" class="flex h-20 justify-between sticky top-0 px-5 mx-[-1.25rem] mt-5 py-12"
     style="background-color: rgb(255 255 255 / 90%);">
    <ul class="nav flex items-center gap-x-3">
        <li>
            <a title="首页" href="<?php $this->options->siteUrl(); ?>"
               class="<?php if ($this->is('index')) echo 'active' ?> rounded-full px-4 py-1">首页</a>
        </li>
        <?php $this->widget('Jasmine_Meta_Row')->to($categorys); ?>
        <?php if ($categorys->have()): ?>
            <?php while ($categorys->next()): ?>
                <li>
                    <a href="<?php $categorys->permalink(); ?>"
                       title="<?php $categorys->name(); ?>"
                       class="<?php echo isActiveMenu($this, $categorys->slug); ?> rounded-full px-4 py-1 hover:bg-black hover:text-white hover:shadow-lg">
                        <?php $categorys->name(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php else: ?>
            <p>点击设置菜单“<a style="color: orange"
                               href="<?php echo $this->options->siteUrl(); ?>admin/options-theme.php">设置外观 ->
                    中间头部菜单</a>”</p>
        <?php endif; ?>
    </ul>
    <ul class="nav flex items-center gap-x-3">
        <li>
            <button>
                <iconify-icon icon="tabler:search"
                              class="rounded px-3 py-2 text-lg hover:bg-black hover:text-white hover:shadow-lg"></iconify-icon>
            </button>
        </li>
    </ul>
</div>
