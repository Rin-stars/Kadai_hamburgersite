    <!-- ヘッダー -->
    <?php get_header(); ?>

            <section class="l-search">

                <div class="c-flex--fd-column-to-row c-image--archive-top c-bgp-left-to-tb-center c-bgp--left-cover-no-repeat c-bg-color--black">
                    <h2 class="c-text--32-to-tb45 c-text--Roboto c-color--white">Search:</h2>
                    <!-- カテゴリ名を取得して表示 -->
                    <h5 class="c-text--M1m c-text--bold c-text--20-to-tb26 c-color--white u-padding--5-0-0-10 u-pd-top--tb15"><?php echo esc_html( get_search_query( false ) ); ?></h5>
                </div>

                <div class="c-container--top-title">
                    <h2 class="c-text--26-to-tb30 c-text--M1m c-text--bold u-pd-bottom--30 c-color--darkbrown">小見出しが入ります</h2>
                    <p class="c-text--16 c-text--M1m c-text--lh23 c-color--darkbrown">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>



                <!-- 投稿アーカイブ一覧を表示　カテゴリー別 start -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="c-flex--fd-column">

                        <div class="c-flex--fd-column-to-row c-container--card">
                            <!-- アイキャッチ -->
                            <div class="c-flex-1">
                                <?php if(has_post_thumbnail()): ?>
                                    <img class="c-img--wp-post-thumbnail" src="<?php the_post_thumbnail_url('full'); ?>">
                                <?php endif; ?>
                            </div>

                            <section class="p-archive-roop c-bg-color--darkbrown c-flex-1">
                                
                                <!-- タイトル -->
                                <h1 class="c-color--white c-text--22-to-pc28 c-text--M1m c-text--lh29 c-text--bold u-pd-bottom--25 u-pd-top--5per u-pd-right-left--5per"><?php the_title(); ?></h1>
                                <!-- 本文 -->
                                <p class="c-color--white c-text--M1m c-text--lh29 u-pd-right-left--5per">
                                    <!-- 本文の取得 -->
                                    <?php the_content(); ?>
                                </p>
                                
                                <!-- 詳しく見るボタン　クリックすると投稿シングルページのURLを取得し画面遷移 -->
                                <div class="c-flex--jc-center c-text-align--center u-pd-bottom--5per">
                                    <a href="<?php the_permalink(); ?>">
                                        <button class="c-btn--read-more c-color--lightbrown c-text--M1m-bold-16 c-bg-color--white">詳しく見る</button>
                                    </a>
                                </div> 

                            </section>
                            
                        </div>
                        
                    </article>
                    
                <?php endwhile; endif; ?>
                <!-- 投稿一覧を表示　end -->
                

                <!-- SP向けページネーション -->
                <div class="u-display--tb-none">
                    <div class="c-container--page c-flex--jc-space-between c-text-align--center">
                        <div class="c-container--btn">
                            <a class="c-btn--pe-prev" href="#"></a>
                            <a class="c-color--lightbrown c-text--16 c-text--M1m c-text--lh23" href="#">前へ</a>
                        </div>
                        <div class="c-container--btn">
                            <a  class="c-color--lightbrown c-text--16 c-text--M1m c-text--lh23" href="#">次へ</a>
                            <a class="c-btn--pe-next" href="#"></a>
                        </div>
                    </div>
                </div>
                
                <!-- TB＆PC向けページネーション -->
                <div class="c-container--page-nav u-display--none-to-tb-block c-text-align--center">
                    <ul class="c-btn--page-nav c-text--16 c-text--Roboto c-color--lightbrown u-padding--0">
                        <li class="c-text--16 c-text--Roboto c-color--lightbrown u-border--none">page 1/10</li>
                        <a class="c-btn--pe-prev" href="#"></a>
                        <li class="c-bg-color--darkbrown c-color--white">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <a class="c-btn--pe-next" href="#"></a>
                    </ul>
                </div>  

            </section>

            <!-- サイドバー -->
            <?php get_sidebar(); ?>
            
        </div>

    <!-- フッター -->
    <?php get_footer(); ?> 