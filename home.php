<?php
    $dir_path = "test/";
    $options = "";

    if(is_dir($dir_path))
    {
        $files = opendir($dir_path);
        if($files)
        {
            while(($file_name = readdir($files)) !== FALSE)
            {
                if(($file_name != ".") && ($file_name != ".."))
                {
                    $options = $options."<option value=$file_name>$file_name</option>";
                    // echo $file_name."<br>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
    <title>3D Pose Estimation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background:url(images/wallpaper.jpg);">

<section class="header">
    <a href="home.php" class="logo">3D Human Pose Estimation</a>
</section>

<section style="padding-top: 1%; padding-left: 5%; padding-right: 5%;">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:url(images/ar.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Augmented Reality</h3>
                    <a href="https://ieeexplore.ieee.org/document/7368948" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/Robotics.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Robotics</h3>
                    <a href="https://arxiv.org/ftp/arxiv/papers/1809/1809.10699.pdf" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/Fitness.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Wellness and Fitness</h3>
                    <a href="https://medium.com/swlh/3d-human-pose-estimation-in-ai-fitness-apps-670d93d453a9" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/Yoga.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Yoga Training</h3>
                    <a href="https://www.hindawi.com/journals/cin/2022/4311350/" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/Interaction.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Human-Computer Interaction</h3>
                    <a href="https://www.researchgate.net/publication/281449059_Fast_Head_Pose_Estimation_for_Human-Computer_Interaction" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/Motion.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Motion Capture</h3>
                    <a href="https://paperswithcode.com/task/pose-tracking" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/Sports.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Sports Analytics</h3>
                    <a href="https://www.hindawi.com/journals/cin/2021/4367875/" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/vr.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, innovate</span>
                    <h3>Virtual Reality</h3>
                    <a href="https://ieeexplore.ieee.org/document/9952586" class="btn">discover more</a>  
                </div>
            </div>
        </div>

        <div class="swiper-pagination" style="--swiper-pagination-color: var(--violet);"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>

<div class="selection_title">
        <h3>How well can you mimic this pose ? Try it out with our pose estimation model !</h3>
</div>

<section class="section2">
    <div class="predict">
            <div class="selection">
                <div class="selection1">
                    <h4 style="text-transform: none;">Video File :</h4>
                    <div class="select">
                        <select name="dropdown" id="dropdown" style="text-transform: none;">
                            <option value="choose_file" selected disabled style="text-transform: none;">Choose a file</option>
                            <?php echo $options; ?>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="button" onclick="getSelectedValue()"> Submit</button>
                    <p id="demo" style="text-transform: none;"></p>
                </div>
            </div>

            <div class="result">
                <h4>Prediction Output :</h4>
                <div class="displayArea">
                    <p id="output" name="output" style="text-transform: none;"></p>
                </div>
            </div>
    </div>

</section>

<section class="footer">
    <div class="credit">
    Created by - <span>Sreelakshmi, Navya, Nidhi and Rohit</span> | All rights reserved!
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>

</html>
