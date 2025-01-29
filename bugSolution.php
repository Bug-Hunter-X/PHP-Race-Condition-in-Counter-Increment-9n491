<?php
$counterFile = 'counter.txt';

function increaseCounter() {
  global $counterFile;

  // Acquire an exclusive lock on the counter file
  $fp = fopen($counterFile, 'c+'); // 'c+' opens for reading and writing, creating if it doesn't exist
  if (flock($fp, LOCK_EX)) {
    $counter = (int) file_get_contents($counterFile);
    $counter++;
    file_put_contents($counterFile, $counter);
    flock($fp, LOCK_UN); // Release the lock
  } else {
    echo "Failed to acquire lock\n";
  }
  fclose($fp);
}

// Example usage:
increaseCounter();
echo "Counter increased.\n";
?>