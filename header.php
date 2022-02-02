<!DOCTYPE html>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="レイズテック課題のハンバーガーサイト作成">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>     
    </head>

    <body <?php body_class(); ?>>
        <div class="f-body-wrap">

            <header class="l-header c-text--Roboto c-color--lightbrown c-bg-color--lightbeige c-flex--pc-jc-space-between">
                <h1 class="c-text--header-logo c-text--40-to-pc64-to-pcs55 c-text-align--center-to-pc-initial"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <button class="c-btn--nav-open c-color--lightbrown c-text--20-to-tb30 u-display--pc-none">Menu</button>   
                <div class="p-nav__bg c-bg-color--tp50-black"></div>   
                
                <form class="p-search" action="サイト内のキーワード検索">        
                    <input class="p-search__input" name="s" type="text" />
                    <img src="../images/img_common/mglass_btn.png" class="c-img--search" alt="虫眼鏡">
                    <input class="c-btn--search c-color--lightbrown c-text--M1m-bold-16 c-bg-color--dull-lightbeige c-text-align--center" type="submit" value="検索" />
                </form>    
            </header>
