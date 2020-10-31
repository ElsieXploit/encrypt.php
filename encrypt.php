<?php

    //buat program encrypt

    //mau ngapain bang? mau recode?

    //njir kang recode

    

    $yt = "ElsieXploit";

    $ig = "@ferdi29._";

    

    echo "username :";

    $user = trim(fgets(STDIN));

    echo "password :";

    $pass = trim(fgets(STDIN));

    

    

    if($user == "dpt" && $pass == "dpt"){

        echo "berhasil login\n";

        //system ('clear');

        

        echo "TOOLS BY : $yt\n";

        echo "INSTAGRAM : $ig\n\n";

        

        echo "[1] encrypt dengan bcrypt\n";

        echo "[2] encrypt dengan md5\n";

        echo "[3] encrypt dengan base64\n";

        echo "masukan pilihan 1/2/3:\n";

        

        $menu = trim(fgets(STDIN));

        

        

        if($menu == 1){

          echo "masukan huruf yg ingin di encrypt dengan bcrypt:\n";

          $bcrypt = password_hash(trim(fgets(STDIN)),PASSWORD_DEFAULT);

          echo "hasil encrypt: $bcrypt\n";

          

          $menu2 = trim(fgets(STDIN));

        }if ($menu == 2){

          echo "masukan huruf yg ingin di encrypt dengan md5:\n";

          $md5 = md5(trim(fgets(STDIN)));

          echo "hasil encrypt: $md5\n";

          

          $menu3 = trim(fgets(STDIN));

        }if($menu == 3){

          echo "masukan huruf yg ingin di encrypt dengan base64:\n";

          $base64 = base64_encode(trim(fgets(STDIN)));

          echo "hasil encrypt: $base64";

        };

        

        

        

        

        

    }else{

        echo "gagal login! ga tau pass nya? dm ig @ferdi29._\n";

    };

?>
