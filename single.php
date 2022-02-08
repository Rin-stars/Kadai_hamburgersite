<?php get_header(); ?>
            <!-- メイン Start-->
            <section class="l-single">

                <!-- トップの画像 Start-->
                <?php if(has_post_thumbnail()): ?>
                    <div class="u-position--relative">
                        <!-- アイキャッチ画像 -->
                        <img class="c-img--wp-post-thumbnail" src="<?php the_post_thumbnail_url('full'); ?>">
                        <!-- タイトル -->
                        <h1 class="c-text--35-to-tb55 c-text-bold c-text--M1m c-color--white u-position--absolute"><?php the_title(); ?></h1>
                    </div>
                <?php endif; ?>



                <!-- <section class="c-image--single-top  c-bgp--center-cover-no-repeat">
                    <h1 class="c-text--35-to-tb55 c-text-bold c-text--M1m c-color--white"><?php the_title(); ?></h1>
                </section> -->


                <!-- シングルページ　メイン Start-->
                <section class="p-single-roop c-container--single-main">

                    <!-- 本文 -->
                    <?php the_content(); ?>

                    <!-- 見出し Start -->
                    <!-- <h2 class="c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--30-to-tb60">見出しh2</h2>
                    <p class="c-text--16 c-text--M1m c-text--lh23 c-color--darkbrown u-pd-bottom--30-to-tb60">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3 class="c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--30-to-tb60">見出しh3</h3>
                    <h4 class="c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--30-to-tb60">見出しh4</h4>
                    <h5 class="c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--30-to-tb60">見出しh5</h5>
                    <h6 class="c-text--M1m c-text--bold c-color--darkbrown u-pd-bottom--30-to-tb60">見出しh6</h6>
 -->
                    <!-- 引用タグ Start-->
                    <!-- <div class="c-text--M1m c-text--16 c-text--lh23 c-color--darkbrown c-bg-color--dull-lightgray u-padding--30-20-to-tb50 u-mg-bottom--30-to-tb60">
                        <div>
                            <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                        </div>
                        <div class="c-inline-flex u-mg-top--30-to-tb50">
                            <span>出典元 :</span>
                            <a class="c-color--dull-blue c-text-deco--underline" href="#">○○○○○○○○○○○○</a>
                        </div>
                    </div> -->





                    
                    <!-- 中央上の大きい画像 Start-->
                    <figure class="c-bgp--center-contain-no-repeat c-image--single-middle u-mg-bottom--30-to-tb60"></figure>
                 
                    <!-- 記事と画像　左右交互 Start-->
                    <!-- 左画像　右記事 Start-->
                    <div class="c-flex--jc-space-between u-mg-bottom--30-to-tb60">
                        <figure class="c-image--property-for-article-with-galarry c-bgp--top-contain-no-repeat c-image--single-galarry u-width--50per"></figure>
                        <p class="c-text--M1m c-text--16 c-text--lh23 c-color--darkbrown u-width--60per u-mg-left--10-20-40"> テキストが入ります</p>
                    </div>
                    <!-- 左記事　右画像 Start-->
                    <div class="c-flex--jc-space-between c-flex--fd-row-reverse u-mg-bottom--30-to-tb60">
                        <figure class="c-image--property-for-article-with-galarry c-bgp--top-contain-no-repeat c-image--single-galarry u-width--50per"></figure>
                        <p class="c-text--M1m c-text--16 c-text--lh23 c-color--darkbrown u-width--60per u-mg-right--10-20-40"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </p>
                    </div>

                    <!-- ギャラリー上の大きい画像 Start-->
                    <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-above-galarry u-mg-bottom--30-to-tb60"></figure>
    
                    <!-- ギャラリーの小さい画像　Start-->
                    <div class="c-flex--fd-column-to-row c-flex--tb-fw-wrap-and-jc-sb u-mg-bottom--30-to-tb60">
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                        <figure class="c-bgp--center-contain-no-repeat c-image--single-galarry c-image--property-for-galarry"></figure>
                    </div>

                    <!-- リスト上段　Start-->
                    <ul class="c-text--M1m-lh23-16 c-color--darkbrown">
                        <li>1.リストリストリスト</li>
                        <li>2.リストリストリスト</li>
                    </ul>
                    <ul class="c-text--M1m-lh23-16 c-color--darkbrown u-mg-left--3per">
                        <li>1.リスト2リスト2リスト2</li>
                        <li>2.リスト2リスト2リスト2</li>
                    </ul>
                    <ul class="c-text--M1m-lh23-16 c-color--darkbrown u-mg-bottom--60">
                        <li>1.リストリストリスト</li>
                        <li>2.リストリストリスト</li>
                    </ul>

                    <!-- リスト下段　Start-->
                    <ul class="c-text--M1m-lh23-16 c-color--darkbrown">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <ul class="c-text--M1m-lh23-16 c-color--darkbrown u-mg-left--3per">
                        <li>リスト2リスト2リスト2</li>
                        <li>リスト2リスト2リスト2</li>
                    </ul>
                    <ul class="c-text--M1m-lh23-16 c-color--darkbrown u-mg-bottom--30-to-tb60">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>

<!-- ソースコード　Start-->
<pre class="c-text--M1m-lh23-16 c-color--darkbrown c-bg-color--dull-lightgray u-padding--30-0 u-mg-bottom--30-to-tb60">
    <code>
        &lt;html&gt;
            &lt;head&gt;
            &lt;/head&gt;
            &lt;body&gt;
            &lt;/body&gt;
        &lt;/html&gt;
    </code>
</pre>

                    <!-- テーブル　Start-->
                    <div class="u-mg-bottom--30-to-tb60">
                        <table class="p-table c-text--M1m-lh23-16 c-color--darkbrown">
                            <tbody>
                                <tr>
                                    <td class="p-table__cell-1">テーブル</td>
                                    <td class="p-table__cell-2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="p-table__cell-1">テーブル</td>
                                    <td class="p-table__cell-2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="p-table__cell-1">テーブル</td>
                                    <td class="p-table__cell-2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="p-table__cell-1">テーブル</td>
                                    <td class="p-table__cell-2">テーブル</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 大きいボタン　Start-->
                    <button class="c-btn--big c-text--M1m-bold-16 c-color--darkbrown c-text-align--center c-bg-color--dull-lightbeige u-mg-bottom--30-to-tb60">ボタン</button>

                    <!-- 太字テキスト　Start-->
                    <p class="c-text--M1m-bold-16 c-color--darkbrown u-mg-bottom--180-230-350">boldboldboldboldboldboldbold</p>

                </section>

            </section>

            <?php get_sidebar(); ?>
            
        </div>

<?php get_footer(); ?> 
