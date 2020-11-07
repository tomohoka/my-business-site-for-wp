<?php wp_body_open(); ?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_html(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                めにゅ〜
            </span>
        </button>

        <?php
        // メニューIDを取得する
        $menu_name = 'global_nav';
        // お決まり文句
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
        }
        ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <!-- $menu_itemsがある場合に以下のforeachを回すようにする。 -->
                <?php if (isset($menu_items)) : ?>
                    <?php foreach ($menu_items as $item) : ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
