<?php
    if($_GET['id']){
        $arr = array(
            "id" => $_GET['id'],
            "banner" => array(
                "https://p.qyer.com/fugc/edeb836e1e2834291f9e54b1f01319b1?imageView2/2/w/1080/format/jpg",
                "https://p.qyer.com/fugc/4d479479de74c32a0684920c264d7e8d?imageView2/2/w/1080/format/jpg"
            ),
            "desc" => "札幌冰雪节冬季北海道旅行最值得期待的事情之一。1950年，几个学生在大通公园建造了6座雪雕，随后演变成了一年一度的冰雪节盛事，建造的雪雕也更大更精巧了。大通公园是札幌冰雪节的主会场。会场里最引人注目的是5座15米高的不同主题的大雪雕，包括「星球大战」、「初音未来」、「赫尔辛基大教堂」等。除此之外，公园内还汇集了大大小小共110座雪雕。白天，阳光照耀着雪雕，日落后灯光点亮，更让人沉醉其中。"
        );
        echo json_encode($arr);

    }
    