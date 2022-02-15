<?php get_header(); ?>
            <!-- メイン Start-->
            <section class="l-page">

                <!-- トップの画像 Start-->
                <?php if(has_post_thumbnail()): ?>
                    <div class="u-position--relative">
                        <!-- アイキャッチ画像 -->
                        <img class="c-img--wp-post-thumbnail" src="<?php the_post_thumbnail_url('full'); ?>">
                        <!-- タイトル -->
                        <h1 class="c-text--35-to-tb55 c-text-bold c-text--M1m c-color--white u-position--absolute"><?php the_title(); ?></h1>
                    </div>
                <?php endif; ?>

                <!-- ページ　メイン Start-->
                <section class="p-single-roop c-container--single-main">

                    <!-- 本文 -->
                    <?php the_content(); ?>

                </section>

            </section>

            <!-- サイドバー -->
            <?php get_sidebar(); ?>
            
        </div>

<?php get_footer(); ?> 
