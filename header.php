<?php
// カテゴリーデータの取得
$categoryData = getCategoryData();
// ブランドデータの取得
$brandData = getBrandData();
?>

<header>
    <div class="site-width">    
        <div class="header-top">
            <div class="logo">
                <a href="index.php"><img src="img/IMG_6635.JPG" alt="" class="logo-img"></a>
            </div>
            <form method="get" action="productList.php" class="header-right">
                <i class="fas fa-search"></i>
                <input type="search" class="search_keyword" name="keyword" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" placeholder="キーワードで検索" autocomplete="off">
            </form>
        </div>
    </div>
    <div class="header-bottom">
        <div class="site-width">
            <nav class="top-nav">
                <div class="nav-left">
                    <ul class="js-slidedown-menu">
                        <li><a href="index.php"><i class="fas fa-home" style=""></i> HOME</a></li>
                        <li><a href="productList.php"><i class="fas fa-tags"></i> 商品一覧</a></li>
                        <li><a href="productList.php">カテゴリー別一覧 ▼</a>
                            <ul class="js-slidedown-sub">
                            <?php foreach ($categoryData as $key => $val) : ?>
                                <li><a href="productList.php?c_id=<?php echo $val['id']; ?>"><?php echo $val['name']; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="productList.php">ブランド別一覧 ▼</a>
                            <ul class="js-slidedown-sub">
                            <?php foreach ($brandData as $key => $val) : ?>
                                <li><a href="productList.php?b_id=<?php echo $val['id']; ?>"><?php echo $val['name']; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-right">
                    <ul>
                        <?php if (empty($_SESSION['user_id'])) { ?>
                            <li><a href="signup.php">会員登録</a></li>
                            <li><a href="login.php">ログイン</a></li>
                        <?php } else { ?>
                            <li><a href="mypage.php">マイページ</a></li>
                            <li><a href="logout.php">ログアウト</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <nav id="header-nav-right">
                
            </nav>
        </div>
    </div>
</header>