<?php
if ( in_category('jobsearch-relation') ) {
  include(TEMPLATEPATH . '/single-jobsearch.php');
} elseif(in_category('jobsearch')) {
      include(TEMPLATEPATH.'/single-job.php');
  } else {
  include(TEMPLATEPATH . '/single-default.php');
  }
?>
