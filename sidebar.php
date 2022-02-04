            <section class="l-sidebar c-bg-color--dull-lightbeige">
                <p class="p-nav__title c-text--34 c-text--Roboto c-color--lightbrown u-display--none-to-pc-block">Menu</p>        
                <!-- <img class="p-nav__btn--close c-btn--nav-close u-display--pc-none" src="/images/img_common/menu_close_btn.png" alt="メニューボタン"> -->
                <img class="p-nav__btn--close c-btn--nav-close u-display--pc-none" src="<?php echo get_template_directory_uri(); ?>/images/img_common/menu_close_btn.png" alt="メニュークローズボタン">

                <?php
                    wp_nav_menu(array(
                        'menu'              => 'categorymenu',
                        'container'         => 'nav',
                        'container_class'   => 'p-nav p-nav__category p-nav__item',
                        // 'theme_location'    => 'categorymenu'
                    ));
                ?>









                <!-- <nav class="p-nav">
                    <ul class="p-nav__category">    
                        <li class="p-nav__item"><a href="#">バーガー</a></li>
                        <li class="p-nav__item"><a href="#">ハンバーガー</a></li>
                        <li class="p-nav__item"><a href="#">チーズバーガー</a></li>
                        <li class="p-nav__item"><a href="#">テリヤキバーガー</a></li>
                        <li class="p-nav__item"><a href="#">アボガドバーガー</a></li>
                        <li class="p-nav__item"><a href="#">フィッシュバーガー</a></li>
                        <li class="p-nav__item"><a href="#">ベーコンバーガー</a></li>
                        <li class="p-nav__item"><a href="#">チキンバーガー</a></li>
                    </ul>
                    <ul class="p-nav__category">    
                        <li class="p-nav__item"><a href="#">サイド</a></li>
                        <li class="p-nav__item"><a href="#">ポテト</a></li>
                        <li class="p-nav__item"><a href="#">サラダ</a></li>
                        <li class="p-nav__item"><a href="#">ナゲット</a></li>
                        <li class="p-nav__item"><a href="#">コーン</a></li>
                    </ul>
                    <ul class="p-nav__category">    
                        <li class="p-nav__item"><a href="#">ドリンク</a></li>
                        <li class="p-nav__item"><a href="#">コーラ</a></li>
                        <li class="p-nav__item"><a href="#">ファンタ</a></li>
                        <li class="p-nav__item"><a href="#">オレンジ</a></li>
                        <li class="p-nav__item"><a href="#">アップル</a></li>
                        <li class="p-nav__item"><a href="#">紅茶（Ice/Hot）</a></li>
                        <li class="p-nav__item"><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul> -->
                </nav>        
            </section>