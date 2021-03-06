    <!-- ヘッダー -->
    <?php get_header(); ?>


            <section class="l-front">

                <div class="c-image--front-top c-bgp-left-to-tb-center c-bgp--left-cover-no-repeat">
                    <h2 class="c-text--36-to-pc40 c-text--M1m c-text--bold c-color--white">ダミーサイト</h2>
                </div>

                <article class="c-flex--fd-column-to-row">

                    <section class="c-image--front-left-center c-bgp--center-cover-no-repeat c-flex--ai-flex-end c-text--40-to-tb45-to-pc50 c-text--Roboto c-color--white">

                        <h3>Take Out</h3>

                        <div class="c-container--front-inner">

                            <!-- カテゴリー名からカテゴリーIDの取得 -->
                            <?php $cat_takeout_id = get_cat_ID('テイクアウト');?>
                            
                            <!-- カテゴリーIDからカテゴリー一覧へのURL取得 -->
                            <a href="<?php echo get_category_link($cat_takeout_id); ?>">
                                <div class="c-container--front-items c-bg-color--tp80-white">
                                    <h4 class="c-text--23 c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--20">Take OUT</h4>
                                    <p class="c-text--16 c-text--M1m c-text--lh23 c-color--darkbrown">当店のテイクアウトで利用できる商品を掲載しています。ハンバーガーハンバーガー</p>
                                </div>
                            </a>
                            <a href="<?php echo get_category_link($cat_takeout_id); ?>">
                                <div class="c-container--front-items c-bg-color--tp80-white">
                                    <h4 class="c-text--23 c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--20">Take OUT</h4>
                                    <p class="c-text--16 c-text--M1m c-text--lh23 c-color--darkbrown">当店のテイクアウトで利用できる商品を掲載しています。ハンバーガーハンバーガー</p>
                                </div>
                            </a>

                        </div>
                        
                    </section> 


                    <section class="c-image--front-right-center c-bgp--center-cover-no-repeat c-flex--ai-flex-end c-text--40-to-tb45-to-pc50 c-text--Roboto c-color--white">

                        <h3>Eat In</h3>

                        <div class="c-container--front-inner">

                            <!-- カテゴリー名からカテゴリーIDの取得 -->
                            <?php $cat_eatin_id = get_cat_ID('イートイン');?>

                            <!-- カテゴリーIDからカテゴリー一覧へのURL取得 -->
                            <a href="<?php echo get_category_link($cat_eatin_id); ?>">
                                <div class="c-container--front-items c-bg-color--tp80-white">
                                    <h4 class="c-text--23 c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--20">Eat IN</h4>
                                    <p class="c-text--16 c-text--M1m c-text--lh23 c-color--darkbrown">当店のイートインで利用できる商品を掲載しています。アボガドバーガーアボガドバーガーアボガドバーガー</p>
                                </div>
                            </a>
                            <a href="<?php echo get_category_link($cat_eatin_id); ?>">
                                <div class="c-container--front-items c-bg-color--tp80-white">
                                    <h4 class="c-text--23 c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--20">Eat IN</h4>
                                    <p class="c-text--16 c-text--M1m c-text--lh23 c-color--darkbrown">当店のイートインで利用できる商品を掲載しています。アボガドバーガーアボガドバーガーアボガドバーガー</p>
                                </div>
                            </a>

                        </div>

                    </section> 
                    
                </article>  

                <section class="c-image--map c-bg-color--tp60-black c-bgp--center-cover-no-repeat">
                    <div class="c-container--map-text c-bg-color--tp30-black">
                        <h4 class="c-text--30-to-pc36 c-text--M1m c-text--bold u-pd-bottom--15-to-pc40 c-color--white">見出しが入ります</h4>
                        <p class="c-text--30-to-pc36 c-text--M1m c-text--bold u-pd-bottom--15-to-pc40 c-color--white">——————</p>
                        <p class="c-text--14-to-pc16 c-text--M1m c-text--bold c-text--lh33 c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </section>

            </section>

            <!-- サイドバー -->
            <?php get_sidebar(); ?>
            
        </div>

<!-- フッター -->
<?php get_footer(); ?> 