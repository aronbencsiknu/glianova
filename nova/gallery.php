
<?php	include "header.php"; //--header content  

?>

      <!-- gallery section start -->
<?php
    $imageSources = [
        "img-1.png",
        "img-2.png",
        "img-3.png",
        "img-4.png",
        "img-5.png",
        "img-6.png",
        "img-7.png",
        "img-8.png",
        "img-9.png"
    ];

    $imageCount = count($imageSources);
?>

<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="gallery_taital">A galériánk</h1>
                <p class="gallery_text">Lorem 11111 Ipsum is simply dummy text of printing typesetting ststry lorem Ipsum the industry'ndard dummy text ever since of the 1500s, when an unknown printer took a galley of type and scra make a type specimen book. It has</p>
            </div>
        </div>

        <div class="row">
        <?php for ($i = 0; $i < $imageCount; ): ?>
            <div class="gallery_section_2">
                 
                <div class="row">
            
                <?php for ($ii = 0; $ii < 3 ; $ii++, $i++): ?> 
                   
                    <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/<?php echo $imageSources[$i] ?>" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
              
                <?php endfor; ?>
                
                </div>
            </div>
        <?php endfor; ?>
        </div>

        <div class="seemore_bt"><a href="#">See More</a></div>
    </div>
</div>

      <!-- gallery section end -->
     

  <?php	include "footer.php"; //--footer content  

?>