<?php
    $gallery = json_decode(file_get_contents("gallery.json"), true);

    function insert_gallery($gallery_id, $stop_sliding = false) {
        global $gallery;

        $i = 0;
        while ($i < count($gallery) && $gallery[$i]['id'] != $gallery_id) $i++;

        if ($i == count($gallery)) return;

        $images = $gallery[$i]['items'];

        // indicators
        $indicator_items = '';

        for ($i = 0; $i < count($images); $i++) {
            $active = $i == 0 ? ' class="active"' : '';
            $indicator_items .= '<li data-target="#'.$gallery_id.'" data-slide-to="'.$i.'"'.$active.'></li>';
        }

        $indicators = '<ol class="carousel-indicators">'.$indicator_items.'</ol>';

        // slides
        $slides = '';

        for ($i = 0; $i < count($images); $i++) {
            $active = $i == 0 ? ' active' : '';
            $url = $images[$i]['url'];
            $slides .=
                '<div class="item'.$active.'">'
                    .'<a href="'.$url.'">'
                        .'<div class="carousel-image" style="background-image: url('.$url.')"></div>'
                    .'</a>'
                    .'<div class="carousel-caption-custom">'.$images[$i]['caption'].'</div>'
                .'</div>';
        }

        $wrapper_for_slides = '<div class="carousel-inner" role="listbox">'.$slides.'</div>';

        // controls
        $controls =
            '<a class="left carousel-control" href="#'.$gallery_id.'" role="button" data-slide="prev">'
                .'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>'
                .'<span class="sr-only">Előző</span>'
            .'</a>'
            .'<a class="right carousel-control" href="#'.$gallery_id.'" role="button" data-slide="next">'
                .'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
                .'<span class="sr-only">Következő</span>'
            .'</a>';

        // concatenating the whole gallery
        $interval = $stop_sliding ? ' data-interval="false"' : '';
        $result =
            '<div id="'.$gallery_id.'" class="carousel slide" data-ride="carousel"'.$interval.'>'
            .$indicators
            .$wrapper_for_slides
            .$controls
            .'</div>';
        
        echo $result;
    }
?>