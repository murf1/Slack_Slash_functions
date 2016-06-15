// *************************************
// Function to test password complexity
// Input: string
// Output: boolean
// regex: 8-20 chars, lower, upper, number, symbol
// *************************************
function validPass($passTest){
  if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $passTest)){
    //echo 'Your password is strong.' . PHP_EOL;
    $val = true;
  } else {
    //echo 'Your password is not safe.' . PHP_EOL;
    $val = false;
  }
  return($val);
}
