// *************************************
// Function to call additional utilities
// *************************************
function callUtils($textPart,$username){
  if ($textPart[1] == 'md5'){
    $enc = md5($textPart[2]);
    echo "MD5 Hash: " . $enc . PHP_EOL;
  }else{
    $reply = ":interrobang: *Help* \n";
    $reply .= "Usage: /opsbot utils [action] [parameter] \n";
    $reply .= "*/opsbot utils md5 [value]*  - Displays md5 hash of value \n";
    echo $reply;
  }
}
