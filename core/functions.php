<?php
    function link_parse($json_content, $type){
        if($json_content != null){
            $json_prase = json_decode($json_content,true);
            foreach ($json_prase as $key => $value){
                if($type == 1){
                    echo '<a href="' . $value["link"] . '"><li class="gd-h gd-rc">' . $value["name"] . '</li></a>';
                }
                else{
                    echo '<a href="' . $value["link"] . '"><div class="gd-box gd-suit gd-h gd-rc">';
                    if($value["img"] != null){
                        echo '<img alt="' . $value["name"] . '" src="' . $value["img"] . '" style="width:50px;height:50px;margin-bottom:10px">';
                    }
                    echo '<h3>' . $value["name"] . '</h3><br><p>点击进入</p></div></a>';
                }
            }
        }
    }
?>