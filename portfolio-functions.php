<?php
function get_portfolio_items($previewDir, $special_classes = []) {
    $portfolio_items = "";
    $previewImages = glob($previewDir . '*.jpg');
    $special_classes_str = implode(' ', $special_classes);

    foreach ($previewImages as $previewImage) {
        $size = getimagesize($previewImage, $info);
        $title = "";
        $caption = "";
        $keywords = [];

        if (isset($info['APP13'])) {
            $iptc = iptcparse($info['APP13']);
            if (isset($iptc["2#105"])) {
                $title = $iptc["2#105"][0];
            }
            if (isset($iptc["2#120"])) {
                $caption = $iptc["2#120"][0];
            }
            if (isset($iptc["2#025"])) {
                $keywords = $iptc["2#025"];
            }
        }
        $keywords_str = implode('", "', $keywords);

        if (in_array('after-image', $special_classes)) {
            $beforeImage = $previewDir . 'before/' . basename($previewImage, '.jpg') . '-before.jpg';
            $hiResImage = $previewDir . 'hi-res/' . basename($previewImage, '.jpg') . '-hi-res.jpg';
            $img_html = "
                <img class='example-image img-responsive after-image' src='{$previewImage}' alt=''>
                <img class='example-image img-responsive' src='{$beforeImage}' alt=''>
            ";
            $lightbox_href = $hiResImage;
        } else {
            $img_html = "
                <img class='example-image img-responsive {$special_classes_str}' src='{$previewImage}' alt=''>
            ";
            $lightbox_href = $previewImage;
        }

        $portfolio_items .= "
            <li class='col-md-4 col-sm-4 col-xs-6' data-groups='[\"" . $keywords_str . "\"]'>
                <figure class='portfolio-item'>
                    <a
                        class='example-image-link'
                        href='{$lightbox_href}'
                        data-lightbox='example-set'
                        data-title='{$title} - {$caption}'
                    >
                        {$img_html}
                    </a>
                </figure>
            </li>
        ";
    }
    return $portfolio_items;
}
?>
