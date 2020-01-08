<?php
$lessons   = array("verify","debugging","domNavigation","forms","formGame","gallery","objects","timing","LivingWebpage");
$lessonNum= array_search("$pageValue" , $lessons);
$backNum =     $lessonNum-1;
$nextNum =     $lessonNum+1;
$lessonBack =  $lessons[$backNum];
$lessonNext =  $lessons[$nextNum];
if($lessonNum<1)
{
echo "<p class = 'left' >Back</p>";
echo "<div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse'>分享/Share</a></div>";
echo "<a class='right' href='index.php?page=$lessonNext'>Next </a>";
}
else if(!$lessons[$lessonNum+1])
{
echo "<a class='left' href='index.php?page=$lessonBack'>Back</a>";
echo "<div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse'>分享/Share</a></div>";
echo "<p class = 'right' >Next </p>";
}
else
{
echo "<a class='left' href='index.php?page=$lessonBack'>Back</a>";
echo "<div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse'>分享/Share</a></div>";
echo "<a class='right' href='index.php?page=$lessonNext'>Next </a>";
}

?>
