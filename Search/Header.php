<link rel="stylesheet" href="./css/Header.css">
    <div class="header">
        <div class="left">
            <div class="logo">
                <!-- トップページへの遷移 -->
                <a href="">
                    <img src="./image/IconDesign.svg" alt="サイトロゴ" width="100">
                </a>
            </div>
        </div>
        <div class="center">
            <!-- プロフィールへの遷移 -->
            <div class="icon">
                <?php
                if(!empty($_SESSION)){
                    echo '<a href="../profile/ProFile.php">';
                } else {
                    echo '<a href="../login/Login.php">';
                }
                ?>
                    <div class="circle">
                        <!-- ここの画像はデータベース化取得する-->
                        <?php
                            if(isset($_SESSION['users'])) {
                                echo '<img src="'. $_SESSION['users']['profileIcon'] .'" alt="profileIcon">';
                            } else {
                                echo '<img src="./image/DefaultIcon.svg" alt="profileIcon">';
                            }
                        ?>
                    </div>
                </a>
            </div>
        </div>
        <div class="right">
            <div class="search">
                <!-- 検索フォーム（検索画面が出来次第更新予定） -->
                <form action="検索への遷移" method="post">
                    <input type="text" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-1" class="search-input" placeholder="キーワードを入力" name="HeaderSearch" value="" spellcheck="false" data-ms-editor="true">
                    <button type="submit" class="search-button">
                        <img src="./image/SearchIcon.svg" width="20" height="20" alt="検索">
                    </button>
                </form>
            </div>
        </div>
    </div>
</link>