<?php
echo "Begin: Pull code from BitBucket<br/>";
exec('git pull https://jitendra-yadav@bitbucket.org:paygotech/paygo.git', $output);
foreach ($output as $o) {
    echo $o . '<br/>';
}
echo "End: Pull code from BitBucket<br/>";
