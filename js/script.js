jQuery(function(){ 

//   ヘッダーのMenuボタンクリック時にサイドバーを開く。
  jQuery('.c-btn--nav-open').click(function() {
    jQuery('.l-sidebar').toggleClass('is-open');
    jQuery('.p-nav__bg').css( 'height' , '100%' );
  });

//   サイドバーの×ボタンクリック時にサイドバーを閉じる。
  jQuery('.c-btn--nav-close').click(function() {
    jQuery('.l-sidebar').toggleClass('is-open');
    jQuery('.p-nav__bg').css( 'height' , '0' );
  });

//   ウィンドウ幅を変更時の処理。サイドバーを閉じる。
  jQuery(window).resize(function(event){
    jQuery('.l-sidebar').removeClass('is-open'); 
    jQuery('.p-nav__bg').css( 'height' , '0' ); 
  });

});

