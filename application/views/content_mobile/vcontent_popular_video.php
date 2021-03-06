<?php echo $this->config->item('adv_box') ?>
<div class="content thumb clearfix">  
  <div class="content-left">
    <div class="content-title clearfix">
      <span>POPULAR VIDEO</span>
    </div>
    <div class="content">
      <ul class="popular-video clearfix">
        <?php foreach ($popular_videos as $video) : ?>
          <li>
            <a href="<?php echo $video['url'] ?>">
              <div class="content">
                <div class="content popular-cover" style="background-image: url('<?php echo $video['image'] ?>');">
                  <div class="pop-over">
                    <div class="pop-play"></div>
                  </div>
                </div>
                <div class="content popular-title">
                  <p><?php echo $video['title'] ?></p>
                  <span><?php echo date('d', strtotime($video['date_created'])) . ' ' . getIndMonth(date('N', strtotime($video['date_created']))) . ' ' . date('Y', strtotime($video['date_created'])) ?></span>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
      <div class="loadmorecomment">
        <a href="http://video.okezone.com">View All</a>
      </div>
    </div>
  </div>
</div>
