<!-- 検索フォーム -->
<form class="p-search" method="get" action="<?php echo esc_url( home_url('/') ); ?>">
    <input class="p-search__input c-color--lightbrown c-text--M1m"  type="text" placeholder="キーワード" name="s" value="" />
    <img class="c-img--search" src="<?php echo get_template_directory_uri(); ?>/images/img_common/mglass_btn.png" alt="虫眼鏡">
    <input class="c-btn--search c-color--lightbrown c-text--M1m-bold-16 c-bg-color--dull-lightbeige c-text-align--center" type="submit" value="検索" alt="検索" title="検索">
</form>