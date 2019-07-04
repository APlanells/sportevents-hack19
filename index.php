<?php
$ch = curl_init('https://pub.s10.exacttarget.com/grdiacvr5an?gameId=10&email=aseuba@gmail.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$response = curl_exec($ch);

curl_close($ch);


$return_defaults = array(
                              'version' => $SETUP['SkillVersion'],
                              'sessionAttributes' => array(
                              'countActionList' => array(
                                                                       'read' => true,
                                                                       'category' => true
                                                         )
                                          ) ,
                                          'response' => array(
                                                         'outputSpeech' => array(
                                                                       'type' => "PlainText",
                                                                       'text' => "true"
                                                         ) ,
                                                         'card' => array(
                                                                       'type' => "Simple",
                                                                       'title' => "Lights Home",
                                                                       'content' => "Orden aceptada Albert,acabo de activar las luces"
                                                         ) ,
                                                         'reprompt' => array(
                                                                       'outputSpeech' => array(
                                                                                    'type' => "PlainText",
                                                                                     'text' => "Te ayudo en algo mas?"
                                                                       )
                                                         )
                                          ) ,
                                          'shouldEndSession' => false
                            );

                            $ReturnValue = json_encode($return_defaults);
                            echo $ReturnValue;

?>
