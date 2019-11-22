<?php 
/**
 * 
 * NEWSLETTER FORM
 */

  // Init mailerlite
include_once( __DIR__ . '/vendor/autoload.php' );

$groupsApi = (new MailerLiteApi\MailerLite("1772e26fae0c3dadab64ba329bd5f19b"))->groups();

// Bouda U Kostela (GroupID - 72904554)
// Horská recepce (GroupID - 70706220)
// Lysečinská Bouda (GroupID - 72904544)
// Temný důl Union (GroupID - 72904558)
// U paní Berty (GroupID - 72904530)

$groupID = '';
$currentUrl = $_SERVER['SERVER_NAME']; 

switch ($currentUrl) {
    case 'boudaukostela.cz':
        $groupID = '72904554';
        break;
    case 'upaniberty.cz':
        $groupID = '72904530';
        break;
    case 'lysecinskabouda.eu':
        $groupID = '72904544';
        break;
    case 'penziontemnydul.cz':
        $groupID = '72904558';
        break;
}

 if (isset($_POST['email'])){
       $subscriber = [
            'email' => $_POST['email'],
        ];
        $response = $groupsApi->addSubscriber($groupID, $subscriber);
   }