<!-- ヘッダー -->
<?php get_header(); ?>

        <section class="l-search">

            <div class="p-search-result">

                <!-- タイトル -->
                <h2 class="p-search-result__title">検索結果</h2>
                
                <!-- 検索ヒット件数 -->
                <p class="p-search-result__count"> 『 <?php echo esc_html( get_search_query( false ) ); ?> 』の検索結果は、<?php echo $wp_query->found_posts; ?>件です。以下が結果です。</p>

                <!-- 検索結果ループ -->
                <?php if(have_posts()): while(have_posts()): the_post(); ?>

                    <div class="p-search-result__item">
                        <!-- ヒットしたページのタイトル -->
                        <h3 class="p-search-result__item-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <!-- ヒットしたページの本文抜粋 -->
                        <?php the_excerpt(); ?>

                        <!-- ヒットしたページへの画面遷移ボタン -->
                        <button class="p-search-result__link c-text--M1m-bold-16 c-bg-color--white"><a class="c-color--lightbrown" href="<?php the_permalink(); ?>">詳しく見る</a></button>

                        <!-- ヒットしたページへのリンク表示 -->
                        <!-- <p class="p-search-result__link">
                            詳しく見る⇨ <a href="<?php the_permalink(); ?>"><?php echo the_permalink(); ?>
                        </p> -->

                    </div>

                <?php endwhile; else: ?>
                <?php endif; ?>

                <!-- ホームへ戻る -->
                <p class="u-mg-top--40"><a class="c-color--lightbrown c-text--bold c-text--16-to-pc18" href="<?php echo esc_url( home_url('/') ); ?>">ホームへ戻る</a></P>

            </div>

        </section>

        <!-- サイドバー -->
        <?php get_sidebar(); ?>
            
    </div>


<!-- フッター -->
<?php get_footer(); ?>