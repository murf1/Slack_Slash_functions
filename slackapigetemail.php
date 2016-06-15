// *************************************
// Function to get registered email address for a given slack username via Slack API Call
// Input: Slack Username
// Output: Associated Email address
// *************************************
function slackapigetemail($username){
  $apiurl = 'https://slack.com/api/users.list?token='.$GLOBALS['slackapitoken'].'&presence=1&pretty=1';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL,$apiurl);

  $result=curl_exec($ch);
  curl_close($ch);

  $slackusersarray = json_decode($result);
  //var_dump($slackusersarray);
  //echo $slackusersarray->members[0]->name;
  //echo $slackusersarray->members[0]->profile->email;

  for($i = 0; $i < count($slackusersarray->members); $i++) {
    if ($slackusersarray->members[$i]->name == $username){
      $useremail = $slackusersarray->members[$i]->profile->email;
    }
  }
  return($useremail);
}
